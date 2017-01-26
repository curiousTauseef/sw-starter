<?php
defined( 'ABSPATH' ) or die();

class Sessions_Form_Handler {

    /**
     * Instance of this class.
     *
     * @var      object
     */
    protected static $instance = null;


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
     * Email recipient
     */
    private static $email_recipient = 'FreehandLA@thefreehand.com';


    /**
     * Email subject
     */
    private static $email_subject = 'Freehand Sessions Form Submission';


    /**
     * Setup the actions we will be using in the constructor
     */
    private function __construct() {
        add_action( 'wp_ajax_submit_sessions_form', array( $this, 'submit_sessions_form' ) );
        add_action( 'wp_ajax_nopriv_submit_sessions_form', array( $this, 'submit_sessions_form' ) );
    }


    /**
     * Process the AJAX submitted form
     *
     * Sanitize/Validate all fields and then send to Triple Seat Lead Form API
     */
    public function submit_sessions_form() {

        // check nonce
        $nonce = $_REQUEST['data']['_wpnonce'];

        if ( ! wp_verify_nonce( $nonce, 'submit_sessions_form' ) )
            die ( 'Invalid nonce.' );

        $errors = array();

        $data = $_REQUEST['data'];

        // Email * REQUIRED
        $data['email'] = sanitize_email( $data['email'] );
        if ( empty($data['email']) ) {
            $error['field'] = 'email';
            $error['message'] = 'Email address is a required field';
            $errors[] = $error;
        } elseif ( !filter_var($data['email'], FILTER_VALIDATE_EMAIL) ) {
            $error['field'] = 'email';
            $error['message'] = 'Invalid email address';
            $errors[] = $error;
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

        // We have good form data here, now send the email

        $to = self::$email_recipient;
        // $to = 'chris.johnson@wearesideways.com'; // testing

        $message .= 'Name: ' . $data['name'] . PHP_EOL . PHP_EOL;
        $message .= 'Email: ' . $data['email'] . PHP_EOL . PHP_EOL;
        $message .= 'Phone: ' . $data['phone'] . PHP_EOL . PHP_EOL;
        $message .= 'Address: ' . PHP_EOL . $data['address'] . PHP_EOL;
        $message .= $data['city'] . ', ' . $data['state'] . ' ' . $data['zip'] . PHP_EOL . PHP_EOL;
        $message .= 'Essay: ' . PHP_EOL . $data['essay'];

        $email_sent = wp_mail($to, self::$email_subject, $message);

        // check whether lead was submitted successfully
        if ($email_sent) {
            // Success
            $output = array(
                'status' => 200,
            );
        } else {
            // something went wrong during the email send
            // log this event
            error_log( addslashes("Email sending error occurred on Sessions Form") );

            $output = array(
                'status' => 'email_sending_error',
            );
        }

        header( "Content-Type: application/json" );
        if(!empty($output)){
            echo json_encode( $output );
        }
        exit;
    }

}

add_action( 'init', array( 'Sessions_Form_Handler', 'get_instance' ) );
