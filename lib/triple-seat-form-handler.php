<?php
defined( 'ABSPATH' ) or die();

/**
 * Event Inquiry System
 *
 * This handles the Event Inquiry form submissions. This is the modal/popup that
 * appears when clicking the "Submit an Event Inquiry" link. The submitted form
 * data is validated and passed to the Triple Seat Lead Form API, which is
 * documented here:
 * https://tripleseat.zendesk.com/hc/en-us/articles/205161948-Lead-Form-API-endpoint
 *
 */
class Triple_Seat_Form_Handler {

    /**
     * Instance of this class.
     *
     * @var      object
     */
    protected static $instance = null;

    /**
     * Triple Seat Public Key
     *
     * @var      string
     */
    private static $public_key = 'bb69d8980de28fbc639ffa71aef1c88f1bc11615';

    /**
     * Start Times
     *
     * These are the possible Start Times for an event
     */
    public static $start_times = array('8:00am','9:00am','10:00am','11:00am', '12:00pm','1:00pm',
        '2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm',
        '11:00pm','12:00am');

    /**
     * Return an instance of this class.
     *
     * @return object A single instance of this class.
     */
    public static function get_instance() {
        // If the single instance hasn't been set, set it now.
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }


    /**
     * Setup the actions we will be using in the constructor
     */
    private function __construct() {
        add_action( 'wp_ajax_submit_event_inquiry_modal_form', array( $this, 'submit_event_inquiry_modal_form' ) );
        add_action( 'wp_ajax_nopriv_submit_event_inquiry_modal_form', array( $this, 'submit_event_inquiry_modal_form' ) );
    }


    /**
     * Process the AJAX submitted form
     *
     * Sanitize/Validate all fields and then send to Triple Seat Lead Form API
     */
    public function submit_event_inquiry_modal_form() {

        // check nonce
        $nonce = $_REQUEST['data']['_wpnonce'];

        if ( ! wp_verify_nonce( $nonce, 'submit_event_inquiry_modal_form' ) )
            die ( 'Invalid nonce.' );

        $errors = array();

        $lead = array(); // array sent to Triple Seat

        $data = $_REQUEST['data'];

        // First Name * REQUIRED
        $data['first_name'] = sanitize_text_field( $data['first_name'] );
        if ( empty($data['first_name']) ) {
            $error['field'] = 'first_name';
            $error['message'] = 'First name is a required field';
            $errors[] = $error;
        }

        // Last Name * REQUIRED
        $data['last_name'] = sanitize_text_field( $data['last_name'] );
        if ( empty($data['last_name']) ) {
            $error['field'] = 'last_name';
            $error['message'] = 'Last name is a required field';
            $errors[] = $error;
        }

        // Email * REQUIRED
        $data['email_address'] = sanitize_email( $data['email_address'] );
        if ( empty($data['email_address']) ) {
            $error['field'] = 'email_address';
            $error['message'] = 'Email address is a required field';
            $errors[] = $error;
        } elseif ( !filter_var($data['email_address'], FILTER_VALIDATE_EMAIL) ) {
            $error['field'] = 'email_address';
            $error['message'] = 'Invalid email address';
            $errors[] = $error;
        }

        // Form id / Location id * REQUIRED
        $data['lead_form_id'] = sanitize_text_field( $data['lead_form_id'] );
        if ( empty($data['lead_form_id']) ) {
            $error['field'] = 'lead_form_id';
            $error['message'] = 'Lead form ID is a required field';
            $errors[] = $error;
        }

        // Checkbox example
        //    if ( isset($data['ei-event-newsletter']) ) {
        //      $ei_event_newsletter = $data['ei-event-newsletter'];
        //    } else {
        //      $ei_event_newsletter = "off";
        //    }
        //    $lead['lead[email_opt_in]'] = ( $ei_event_newsletter == "on" ) ? true : false;

        // transform from 'name' to 'lead[name]' format
        foreach ($data as $key => $value) {
            $lead['lead['. $key .']'] = $value;
        }

        // If we have errors, return those now and exit
        if ( !empty($errors) ) {
            $output = array(
                'status' => 400,
                'errors' => $errors
            );

            header( "Content-Type: application/json" );
            if(!empty($output)){
                echo json_encode( $output );
            }
            exit;
        }

        // We have good form data here, now send to Triple Seat API
        $url = 'http://api.tripleseat.com/v1/leads/create.js?lead_form_id='.$data['lead_form_id'].'&public_key='.self::$public_key;

        $params = array(
            'method' => 'POST',
            'timeout' => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'blocking' => true,
            'headers' => array(),
            'body' => $lead,
            'cookies' => array()
        );

        $response = wp_remote_post( $url, $params );

        // check whether lead was submitted successfully
        $body = json_decode( $response['body'] );
        if ( isset($body->success_message) && !empty($body->success_message )) {
            // Success
            $output = array(
                'status' => 200,
            );
        } elseif ( isset($body->errors) && !empty($body->errors) ) {
            // something went wrong during API communication
            // log this event
            error_log( addslashes("Triple Seat API Error Occurred on Event Inquiry Form: ".$response['body']) );

            $output = array(
                'status' => 'api_error',
            );
        }

        header( "Content-Type: application/json" );
        if(!empty($output)){
            echo json_encode( $output );
        }
        exit;
    }

}

add_action( 'init', array( 'Triple_Seat_Form_Handler', 'get_instance' ) );
