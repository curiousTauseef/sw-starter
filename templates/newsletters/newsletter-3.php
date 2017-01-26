<center>
<p style="padding:5px 0; margin:0; background-color:#FFFFFF">
  <font size="1" face="ARIAL">If you are still having problems viewing this message, please <a href="http://recp.rm02.net/ui/static/ReceptionIssues.html">click here</a></font>
</p>
</center>
<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" width="100%" style="line-height: 100% !important; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin: 0; padding: 0;">
    <tbody>
        <tr>
            <td valign="top" bgcolor="#f9f7e9" align="center" style="border-collapse: collapse;">
                <!-- start !-->
                <table class="flexible" cellpadding="0" cellspacing="0" border="0" align="center" width="700" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                    <tbody>
                        <tr>
                            <td class="responsive-block" width="227" valign="top" style="border-collapse: collapse;">
                                <a href="http://freehandhotels.com/chicago/" style="text-decoration: none;" target="_blank" class="logo">
                                  <img class="tocenter" src="http://freehand.s3.amazonaws.com/chidec2015/images_freehand-logo.jpg" alt="Freehand Chicago" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" >
                                </a>
                            </td>
                            <td width="288" class="responsive-block"  valign="top" style="border-collapse: collapse;"><img src="http://freehand.s3.amazonaws.com/chidec2015/images_spacer.gif" class="image_fix" height="1" width="288" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; height: 1px!important" alt="">
                            </td>
                            <td class="responsive-block"  width="185" valign="middle" style="border-collapse: collapse;">
                                <table width="185" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td width="43" style="border-collapse: collapse;">
                                                <a name="www_facebook_com_freehandmiami" href="https://www.facebook.com/FreehandChicago/" style="text-decoration: none;" target="_blank"><img src="http://freehand.s3.amazonaws.com/chidec2015/images_facebook.gif" width="43" height="53" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" alt="">
                                                </a>
                                            </td>
                                            <td width="45" style="border-collapse: collapse;">
                                                <a name="twitter_com_freehandmiami" href="https://twitter.com/freehandchicago" style="text-decoration: none;" target="_blank"><img src="http://freehand.s3.amazonaws.com/chidec2015/images_twitter.gif" width="45" height="53" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" alt="">
                                                </a>
                                            </td>
                                            <td width="52" style="border-collapse: collapse;">
                                                <a name="www_tripadvisor_com_Hotel_Revi" href="http://www.tripadvisor.com/Hotel_Review-g35805-d7375440-Reviews-Freehand_Chicago-Chicago_Illinois.html" style="text-decoration: none;" target="_blank"><img src="http://freehand.s3.amazonaws.com/chidec2015/images_trip-advisor.gif" width="52" height="53" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" alt="">
                                                </a>
                                            </td>
                                            <td width="45" style="border-collapse: collapse;">
                                                <a name="instagram_com_freehandmiami" href="https://www.instagram.com/freehandchicago/" style="text-decoration: none;" target="_blank"><img src="http://freehand.s3.amazonaws.com/chidec2015/images_instagram.gif" width="45" height="53" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="top" style="border-collapse: collapse; background-color: #f9f7e9;" align="center" >

              <table class="flexible" cellpadding="0" cellspacing="0" border="0" align="center" width="700"  style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                    <tbody>

                        <tr>
                            <td align="left" bgcolor="" style="border-collapse: collapse;">
                              <?php if(!empty($fields)){  ?>
                                <?php foreach ($fields['content'] as $key => $field) { extract($field); $font_color_used = ($font_color == 'light' ? '#f8f6e7' : '#2f363a'); ?>
                                <!-- start!-->
                                <table cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo $background_color; ?>" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <?php if(!empty($image)) {  ?>
                                        <tr>
                                            <td class="img-flex" colspan="3" style="border-collapse: collapse;">
                                                <?php if(!empty($url)) { ?>
                                                <a href="<?php echo $url; ?>" target="_blank" style="text-decoration: none;">
                                                <?php } ?>
                                                    <img src="<?php echo $image['sizes']['large'] ?>" alt="" width="700" border="0" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; margin: 0 auto; border: none;">
                                                <?php if(!empty($url)) { ?>
                                                </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td style="border-collapse: collapse;"><img class="image_fix" src="http://freehand.s3.amazonaws.com/chidec2015/images_spacer.gif" alt="" title="" width="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" />
                                            </td>
                                            <td height="21" style="border-collapse: collapse;">&nbsp;</td>
                                            <td style="border-collapse: collapse;"><img class="image_fix" src="http://freehand.s3.amazonaws.com/chidec2015/images_spacer.gif" alt="" title="" width="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-collapse: collapse;"></td>
                                            <td height="21" style="border-collapse: collapse;">
                                               <?php if(!empty($title)) { ?>
                                                <table cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                <h2 style="color:<?php echo $font_color_used; ?>; font-family: Arial, Helvetica, sans-serif; font-size: 27px; line-height: 34px; margin:0;">
                                                                <?php if(!empty($url)) { ?>
                                                                  <a href="<?php echo $url; ?>" style="text-decoration:none" target="_blank">
                                                                <?php } ?>
                                                                <span style="color:<?php echo $font_color_used; ?>;font-size: 32px; line-height: 36px; font-weight: bold;font-family: Arial, Helvetica, sans-serif; margin: 5px 0; padding: 0;">
                                                                  <?php echo $title; ?>
                                                                </span>
                                                                <?php if(!empty($url)) { ?>
                                                                  </a>
                                                                <?php } ?>
                                                                  </h2>
                                                            </td>
                                                            <td style="border-collapse: collapse;">&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php  }  ?>
                                            </td>
                                            <td style="border-collapse: collapse;"></td>
                                        </tr>
                                        <tr>
                                            <td style="border-collapse: collapse;"></td>
                                            <td height="18" style="border-collapse: collapse;">&nbsp;</td>
                                            <td style="border-collapse: collapse;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border-collapse: collapse;"></td>
                                            <td height="21" style="color:<?php echo $font_color_used; ?>;border-collapse: collapse; font-family: 'arial', sans-serif; font-weight: normal; color:#f8f6e7; font-size: 16px; line-height: 22px; margin: 4px 0; " align="left">
                                              <?php if(!empty($description)) { ?>
                                                <?php echo str_replace('<p','<p style="padding:0; margin:0; color:'.$font_color_used.'"', $description); ?>
                                              <?php } ?>
                                            </td>
                                            <td style="border-collapse: collapse;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border-collapse: collapse;"></td>
                                            <td height="21" style="border-collapse: collapse; font-family: 'arial', sans-serif; font-weight: normal; color:#f8f6e7; font-size: 16px; line-height: 22px; margin: 4px 0; color:#f8f6e7" align="left">

                                                <p>&nbsp;</p>
                                                <?php if(!empty($cta)) { ?>
                                                <table border="0" align="center" cellpadding="4" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                <h2 style="font-family: Arial, sans-serif; font-size: 18px; line-height: 26px; font-weight: bold; text-transform: uppercase; margin: 0;">
                                                                  <?php if(!empty($url)) { ?>
                                                                  <a href="<?php echo $url ?>" target="_blank" style="color:#f8f6e7 !important; text-decoration: none !important;" xt="SPCLICK">
                                                                  <?php } ?>
                                                                    <span style="color: <?php echo $font_color_used; ?>;"><?php echo $cta; ?></span>
                                                                  <?php if(!empty($url)) { ?>
                                                                  </a>
                                                                  <?php } ?>
                                                                </h2>
                                                            </td>
                                                            <td valign="top" style="border-collapse: collapse;">
                                                              <?php if(!empty($url)) { ?>
                                                                <a href="<?php echo $url; ?>" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                                                              <?php } ?>
                                                                    <img src="http://freehand.s3.amazonaws.com/assets/arrow-trans<?php echo $font_color=='light' ? '' : '-dark'; ?>.png" alt="Read More" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" xt="SPIMAGE" />
                                                              <?php if(!empty($url)) { ?>
                                                                </a>
                                                              <?php } ?>
                                                                <p>&nbsp;</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php } ?>
                                            </td>
                                            <td style="border-collapse: collapse;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- end !-->
                                <?php } ?>
                              <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-collapse: collapse;">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top" style="border-collapse: collapse;">



              <table  border="0" cellpadding="0" cellspacing="0" class="flexible">
                <tr>
                  <td class="img-flex" style="border-collapse: collapse;"  colspan="3">
                    <a  href="http://freehandhotels.com/miami" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_01.jpg" alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;"  colspan="3">
                    <a  href="http://freehandhotels.com/chicago" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_02.jpg"  alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;"  colspan="3">
                    <a  href="http://freehandhotels.com/los-angeles" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_03.jpg"  alt="">
                    </a>
                    </td>
                </tr>
                <tr>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://facebook.com/freehandmiami" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_04.jpg" alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://twitter.com/freehandmiami" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_05.jpg" alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://instagram.com/freehandmiami" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_06.jpg" alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://facebook.com/freehandchicago" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_07.jpg"  alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://twitter.com/freehandchicago" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_08.jpg"  alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://instagram.com/freehandchicago" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_09.jpg"  alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://facebook.com/freehanddtla" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_10.jpg" alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://twitter.com/freehanddtla" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_11.jpg"  alt="">
                    </a>
                    </td>
                  <td class="img-flex" style="border-collapse: collapse;" >
                    <a  href="http://instagram.com/freehanddtla" target="_blank" style="text-decoration: none !important;" xt="SPCLICK">
                    <img class="image_fix" src="https://freehand.s3.amazonaws.com/assets/fh-social_12.jpg"  alt="">
                    </a>
                    </td>
                </tr>
              </table>


            </td>
        </tr>
        <tr>
          <td style="text-align:center;">
            <table  class="flexible" width="700" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin:0 auto;">
              <tbody>
                <tr>
                <td style="text-align: center"><img src="http://freehand.s3.amazonaws.com/assets/sglogo.gif" alt="" width="100" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; margin:0 auto" contentid="316a4eeb-14b5adf9f5f-df4cba773885eb54dfcebd294a039c37" xt="SPIMAGE"></td>
              </tr>
              <tr>
                <td style="text-align:center">
                  <font face="Arial,helevetica,sans-serif" color="#2f363a" style="font-family: Arial,helevetica,sans-serif; font-size: 10px;line-height:16px; color: #2f363a;">sent by Freehand 30 W 26th St #12, New York, NY 10010<br>
To unsubscribe from this email, please click</font>
<br/><br/>
                </td>
              </tr>
            </tbody>
          </table>
         </td>
        </tr>
    </tbody>
</table>
<custom name="opencounter" type="tracking">
