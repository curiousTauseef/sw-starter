  <?php /* Thank you shortcode */ 
  use Roots\Sage\Assets;
  extract($atts);
  ?>

<div class="thankyou">
  <div class="social-form">
    <img src="<?php echo Assets\asset_path('images/gator.png') ?>" class="confirmation img-responsive" id="thankyou_gator">
    <form id="thankyouform"><?php
      $tf_placeholder = 'Twitter Handle (Optional)';
      $ef_placeholder = 'Email Address (Optional)';
      ?>
      <h3>Make your stay even better</h3>
      <div class="input-group col-md-5 col-xs-12">
        <label for="email_address" class="visuallyhidden"><span><?= $ef_placeholder; ?></span>
        <?php include get_template_directory() . '/assets/images/svg/email.svg' ?></label>
        
        <input id="thankyou_email_address" name="email_address" type="text" placeholder="<?= $ef_placeholder; ?>" value="" >
      </div>
      <div class="input-group col-md-5 col-xs-12">
        <label for="twitter_handle" class="visuallyhidden"><span><?= $tf_placeholder; ?></span>
        <?php include get_template_directory() . '/assets/images/svg/twitter.svg' ?></label>
        </label>
        <input id="thankyou_twitter_handle" name="twitter_handle" type="text" placeholder="<?= $tf_placeholder; ?>" value="" >
      </div>
      <div class="input-group col-md-2 col-xs-12">
        <button id="thankyou_submit" name="submit_thankyou"  type="submit">Submit</button> <?php //I just noticed these. Inline styles should probably be removed. ?>
      </div>
      <p class="alert">Please enter a valid email address.</p>
    </form>
  </div>
  

   <div id="share"></div>
      
     
      <div class="social_invite">
      
        <div class="container">
          <ul class="social-links">
          <li>
            <img src="<?php echo Assets\asset_path('images/inv_01arrow.png') ?>" alt="Invite your friends" class="img-responsive">
          </li>
          <li>
            <a href="https://facebook.com/sharer.php?u=<?php echo $share_url; ?>" target="_blank">
              <img src="<?php echo Assets\asset_path('images/inv_02fb.png') ?>" alt="Share via Facebook" class="img-responsive" >
            </a>
          </li>
        
  <?php
        if( !empty( $_GET[ "arrival" ] ) && !empty( $_GET[ "departure" ]) ) : // spam protect, don't show without arrival date.
          
          $arrival_date = date( 'F jS' ,  $_GET[ "arrival" ][ 0 ]  );
          $departure_date = date( 'F jS' , $_GET[ "departure" ][ 0 ] );
          $guests = strtolower( $_GET[ "guests" ][ 0 ] );
          
          $pairs = array(
            'guests' => $guests,
            'departure_date' => $departure_date,
            'arrival_date' => $arrival_date,
            'share_url' => $share_url 
        );        
          $body = parse_email_string($email_body, $pairs );  
    ?>
        <li>
          <a href="mailto:?Subject=<?php echo $email_subject ?>&Body=<?php echo rawurlencode( $body ) ?>" class="share">
             <img src="<?php echo Assets\asset_path('images/inv_03mail.png') ?>" alt="Invite via Email" class="img-responsive" >
          </a>
        </li>
    <?php endif; ?>
          
          <li>
            <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url ?>&text=<?php echo $share_message ?>&via=<?php echo $twitter_handle ?>" target="_blank">
              <img src="<?php echo Assets\asset_path('images/inv_04twit.png') ?>" alt="Share via Twitter" class="img-responsive" >
            </a>
          </li>
      
      
        </ul>
      </div>

        <div class="clear"></div>
  </div>
</div>