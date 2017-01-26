<center>
<span style="font-family:Arial, Helvetica, sans-serif; color: #999; font-size:12px;">To view this email as a web page, click <a href="%%view_email_url%%">here</a>.</span>
</center>
        <table bgcolor="#f8f6e7" class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
      <tbody>
                <tr>
                    <td class="table-cell-block" width="700" valign="top" style="border-collapse: collapse;">
                    <table class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <!--main rows-->
                        <tbody>
                            <tr>
                                <td class="table-cell-block" bgcolor="#2f363a" width="700" valign="center" style="border-collapse: collapse;" height="50">
                                  <table class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#2f363a" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td class="item-1" width="135" style="border-collapse: collapse;"><a name="thefreehand_com_reserve_" href="http://thefreehand.com/miami/" target="_blank" style="text-decoration: none !important;" > <img class="image_fix" name="http://freehand.s3.amazonaws.com/assets/check_availability.gif" src="http://freehand.s3.amazonaws.com/assets/miami-item.jpg" alt="Reserve Now" width="135" height="auto" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                            <td class="item-2" width="200" style="border-collapse: collapse;"><a name="thefreehand_com_reserve_" href="http://thefreehand.com/chicago/" target="_blank" style="text-decoration: none !important;" > <img class="image_fix" name="http://freehand.s3.amazonaws.com/assets/check_availability.gif" src="http://freehand.s3.amazonaws.com/assets/chicago-item.jpg" alt="Reserve Now" width="200" height="auto" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                            <td class="item-3" width="229" style="border-collapse: collapse;"><a name="thefreehand_com_reserve_" href="http://thefreehand.com/losangeles/" target="_blank" style="text-decoration: none !important;" > <img class="image_fix" name="http://freehand.s3.amazonaws.com/assets/check_availability.gif" src="http://freehand.s3.amazonaws.com/assets/la-item.jpg" alt="Reserve Now" width="229" height="auto" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                            <td class="item-4" height="50" bgcolor="#b82927" width="146" style="border-collapse: collapse;"><a name="thefreehand_com_reserve_" href="http://freehandhotels.com/miami/specials/keep-shining-2017/" target="_blank" style="text-decoration: none !important;" > <img class="image_fix" name="http://freehand.s3.amazonaws.com/assets/check_availability.gif" src="http://freehand.s3.amazonaws.com/assets/book-now-item.jpg" alt="Reserve Now" width="146" height="auto" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>

                                        </tr>
                                    </tbody>
                                  </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="700" valign="top" style="border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: middle;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" height="20" style="border-collapse: collapse;"></td>
                                        </tr>
                                        <tr>

                                            <td width="674" style="border-collapse: collapse; text-align:center"><a name="thefreehand_com_" href="http://thefreehand.com/" target="_blank" style="text-decoration: none !important;" ><img class="logo"  src="http://freehand.s3.amazonaws.com/assets/freehand-header-n.jpg" alt="FREEHAND" width="231" height="113" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; margin: 0 auto; border: none;" contentid="316a4eeb-14b5adf9ff5-df4cba773885eb54dfcebd294a039c37"   /></a></td>

                                        </tr>
                                        <tr>
                                            <td width="100%" height="20" style="border-collapse: collapse;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-cell-block" width="700" valign="top" style="border-collapse: collapse;">
                                  <?php if(!empty($fields['hero_content'])){ ?>

                                  <?php foreach ($fields['hero_content'] as $key => $hero) { ?>

                                  <?php if(!empty($hero['image'])){ ?>
                                    <table class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                        <tbody>
                                            <tr>
                                                <td class="block-item" width="13" style="border-collapse: collapse;"></td>
                                                <td class="table-cell-block" width="674" style="border-collapse: collapse;">
                                                    <?php if(!empty($hero['url'])){ ?>
                                                    <a style="color: blue !important; text-decoration: none !important;" href="<?php echo $hero['url']; ?>" target="_blank">
                                                    <?php } ?>
                                                      <img src="<?php echo $hero['image']['url']; ?>" alt="" width="674" height="453" border="0" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" />
                                                    <?php if(!empty($hero['url'])){ ?>
                                                    </a>
                                                    <?php } ?>
                                                  </td>
                                                <td class="block-item" width="13" style="border-collapse: collapse;"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                  <?php } ?>
                                  <?php if( !empty($hero['description']) || !empty($hero['title']) ){ ?>
                                  <table class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                        <tbody>
                                            <tr>
                                                <td width="13" style="border-collapse: collapse;"></td>
                                                <td class="table-cell-width" width="674" style="border-collapse: collapse;">
                                                    <table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="<?php echo $hero['background_color']; ?>" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="border-collapse: collapse;">
                                                                <table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="<?php echo $hero['background_color']; ?>" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                            <td width="674" style="border-collapse: collapse;"><img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                        <?php if(!empty($hero['title'])){ ?>
                                                                        <tr>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                            <td width="639" height="21" style="border-collapse: collapse;">
                                                                            <h1 style="font-family: 'arial', sans-serif; color: #2f363a; font-size: 34px; text-transform: uppercase; font-weight: bold; line-height: 34px; margin: 0;">
                                                                            <?php if(!empty($hero['url'])){ ?>
                                                                            <a  style="color: blue !important; text-decoration: none !important;"  href="<?php echo $hero['url']; ?>" target="_blank">
                                                                            <?php } ?>
                                                                            <span style="color: #2f363a;font-size:23px;"><?php echo $hero['title']; ?></span>
                                                                            <?php if(!empty($hero['url'])){ ?>
                                                                            </a>
                                                                            <?php } ?>
                                                                            </h1>
                                                                            </td>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                        <?php } ?>
                                                                        <?php if(!empty($hero['description'])){ ?>
                                                                         <tr>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                            <td width="639" height="21" style="border-collapse: collapse;font-family: 'Arial', sans-serif; font-weight: normal; color: #2f363a; font-size: 14px; line-height: 22px; margin: 0;">
                                                                               <?php echo str_replace(['<p>','</p>'],['',''],$hero['description']); ?>

                                                                            </td>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                        <?php } ?>
                                                                        <tr>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                            <td width="674" style="border-collapse: collapse;"><img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                        <?php if(!empty($hero['cta'])){ ?>
                                                                        <tr>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                            <td width="639" height="21" style="border-collapse: collapse;">
                                                                              <table cellpadding="0" cellspacing="0" border="0" align="left"  style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                        <h2 style="font-family: Arial, sans-serif; color:#2f363a; font-size: 18px; line-height: 26px; font-weight: bold; text-transform: uppercase; margin: 0;"><a href="<?php echo $hero['url'] ?>" target="_blank" style=" text-decoration: none !important;" ><span style="color: #2f363a;"><?php echo $hero['cta']; ?></span></a></h2>
                                                                                        </td>

                                                                                         <td style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="6" height="auto" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>

                                                                                         <td width="28" style="border-collapse: collapse;"><a href="<?php echo $hero['url'] ?>" target="_blank" style="text-decoration: none !important;" ><img class="image_fix" src="http://freehand.s3.amazonaws.com/assets/arrow-trans-dark.png" width="22" height="22" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  alt="Read More"></a></td>


                                                                                    </tr>
                                                                                     <tr>
                                                                                        <td colspan="3" bgcolor="<?php echo $hero['background_color'] ?>" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                    </tr>
                                                                                </tbody>

                                                                            </table>
                                                                            </td>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                        <?php } ?>
                                                                        <tr>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                            <td width="674" style="border-collapse: collapse;"><img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                            <td width="21" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td width="13" style="border-collapse: collapse;"></td>
                                            </tr>
                                            <tr>
                                                <td width="13" style="border-collapse: collapse;"></td>
                                                <td width="674" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                <td width="13" style="border-collapse: collapse;"></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <?php } // end if ?>
                                <?php } // end foreach?>
                                <?php } // end if ?>


                                </td>
                            </tr>
                            <tr>
                                <td class="table-cell-block" width="700" valign="top" style="border-collapse: collapse;">

                                </td>
                            </tr>
                            <tr>
                                <td class="table-cell-block" width="700" valign="top" style="border-collapse: collapse; vertical-align: top;">
                                    <table class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                        <tbody>
                                            <tr class="table-block">
                                                <td width="13" style="border-collapse: collapse;"></td>
                                                <td class="column-left" width="266" style="border-collapse: collapse;" valign="top">
                                                    <table class="table-block" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-cell-block height-auto" width="266" height="116" style="border-collapse: collapse;" bgcolor="#f8f6e7" valign="top" align="center">
                                                                    <?php if(!empty($fields['left_content'])) { ?>
                                                                    <!-- begin left col !-->
                                                                    <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-collapse: collapse;">

                                                                                    <?php foreach ($fields['left_content'] as $key => $field) { ?>
                                                                                     <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" bgcolor="<?php echo $field['background_color'] ?>">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td  style="border-collapse: collapse;">
                                                                                                <?php if(!empty($field['url'])) { ?>
                                                                                                <a href="<?php echo $field['url']; ?>" target="_blank"  style="text-decoration: none !important;">
                                                                                                <?php } ?>
                                                                                                <?php if(!empty($field['image']) ){ ?>
                                                                                                    <img  src="<?php echo $field['image']['url'] ?>" alt="Special Offer" width="266" height="auto" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;"  />
                                                                                                <?php } ?>
                                                                                                <?php if(!empty($field['url'])) { ?>
                                                                                                </a>
                                                                                                <?php } ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php if(!empty($field['title'])) { ?>
                                                                                            <tr>
                                                                                                <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                            </tr>
                                                                                                <tr>
                                                                                                    <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse; padding-left: 8px; padding-right: 8px;">
                                                                                                         <h1 style="font-family: 'arial', sans-serif; color: #f8f6e7; font-size: 34px; text-transform: uppercase; font-weight: bold; line-height: 34px; margin: 0;">
                                                                                                            <?php if(!empty($field['url'])){ ?>
                                                                                                            <a  style="color: blue !important; text-decoration: none !important;"  href="<?php echo $field['url']; ?>" target="_blank">
                                                                                                            <?php } ?>
                                                                                                            <span style="color:#f8f6e7;font-size:20px;"><?php echo $field['title']; ?></span>
                                                                                                            <?php if(!empty($field['url'])){ ?>
                                                                                                            </a>
                                                                                                            <?php } ?>
                                                                                                        </h1>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                             <?php if(!empty($field['description'])) { ?>
                                                                                                <tr>
                                                                                                    <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse; padding-left: 8px; padding-right: 8px;">
                                                                                                         <h6 style="font-family: 'arial', sans-serif; font-weight: normal; color:#f8f6e7; font-size: 14px; line-height: 22px; margin: 4px 0;"><?php echo str_replace(['<p>','</p>'],['',''],$field['description']); ?></h6>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                            <tr>
                                                                                                <td bgcolor="#f8f6e7" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                </table>
                                                                            <?php } ?>

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <!-- end left col !-->
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td class="middle-divided" width="8" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="8" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border:none;" alt="" /></td>
                                                <td class="column-right" width="400" valign="top" style="border-collapse: collapse;">
                                                    <!-- begin right col !-->
                                                        <?php if(!empty($fields['right_content'])) { ?>
                                                                    <!-- begin right col !-->
                                                                    <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-collapse: collapse;">

                                                                                    <?php foreach ($fields['right_content'] as $key => $field) { ?>
                                                                                     <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" bgcolor="<?php echo $field['background_color'] ?>">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td  style="border-collapse: collapse;">
                                                                                                <?php if(!empty($field['url'])) { ?>
                                                                                                <a href="<?php echo $field['url']; ?>" target="_blank"  style="text-decoration: none !important;">
                                                                                                <?php } ?>
                                                                                                <?php if(!empty($field['image']) ){ ?>
                                                                                                    <img  src="<?php echo $field['image']['url'] ?>" alt="Special Offer"  height="auto" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;"  />
                                                                                                <?php } ?>
                                                                                                <?php if(!empty($field['url'])) { ?>
                                                                                                </a>
                                                                                                <?php } ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php if(!empty($field['title'])) { ?>
                                                                                            <tr>
                                                                                                <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="6" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                            </tr>
                                                                                                <tr>
                                                                                                    <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse; padding-left: 8px; padding-right: 8px;">
                                                                                                         <h1 style="font-family: 'arial', sans-serif; color: #f8f6e7; font-size: 34px; text-transform: uppercase; font-weight: bold; line-height: 34px; margin: 0;">
                                                                                                            <?php if(!empty($field['url'])){ ?>
                                                                                                            <a  style="color: blue !important; text-decoration: none !important;"  href="<?php echo $field['url']; ?>" target="_blank">
                                                                                                            <?php } ?>
                                                                                                            <span style="color:#f8f6e7;font-size:20px;"><?php echo $field['title']; ?></span>
                                                                                                            <?php if(!empty($field['url'])){ ?>
                                                                                                            </a>
                                                                                                            <?php } ?>
                                                                                                        </h1>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                             <?php if(!empty($field['description'])) { ?>
                                                                                                <tr>
                                                                                                    <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse; padding-left: 8px; padding-right: 8px;">
                                                                                                         <h6 style="font-family: 'arial', sans-serif; font-weight: normal; color:#f8f6e7; font-size: 14px; line-height: 22px; margin: 4px 0;"><?php echo str_replace(['<p>','</p>'],['',''],$field['description']); ?></h6>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                                </tr>
                                                                                            <?php } ?>

                                                                                            <?php if(!empty($field['cta'])){ ?>
                                                                                            <tr>
                                                                                                <td bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse; padding-left: 8px; padding-right: 8px;" bgcolor="<?php echo $field['background_color'] ?>" >


                                                                                                 <table cellpadding="0" cellspacing="0" border="0" align="left"  style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                                                     <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                            <h2 style="font-family: Arial, sans-serif; color: #f9f7e9; font-size: 18px; line-height: 26px; font-weight: bold; text-transform: uppercase; margin: 0;"><a href="<?php echo $field['url'] ?>" target="_blank" style=" text-decoration: none !important;" ><span style="color: #f8f6e7;"><?php echo $field['cta']; ?></span></a></h2>
                                                                                                            </td>

                                                                                                             <td style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="6" height="auto" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>

                                                                                                             <td width="28" style="border-collapse: collapse;"><a href="<?php echo $field['url'] ?>" target="_blank" style="text-decoration: none !important;" ><img class="image_fix" src="http://freehand.s3.amazonaws.com/assets/arrow-trans.png" width="22" height="22" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  alt="Read More"></a></td>


                                                                                                        </tr>
                                                                                                         <tr>
                                                                                                            <td colspan="3" bgcolor="<?php echo $field['background_color'] ?>" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>


                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php } ?>

                                                                                            <tr>
                                                                                                <td bgcolor="#f8f6e7" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="9" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                </table>
                                                                            <?php } ?>

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <?php } ?>
                                                    <!-- end right col !-->
                                                </td>
                                                <td width="13" style="border-collapse: collapse;"><img class="image_fix fix-height-rows" name="spacer.gif" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="13" height="1" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border:none;"  spname="spacer.gif" alt="" /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="border-collapse: collapse;"><img class="image_fix footer-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="53" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                               <td class="social-icons" width="700" valign="top" style="border-collapse: collapse;">
                                    <table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#f8f6e7" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                        <tbody>
                                           <tr>
                                                <td class="social-inner-item" style="border-collapse: collapse;">
                                                    <table cellpadding="0" cellspacing="0" border="0" align="right" bgcolor="#f8f6e7" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;"><img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="18" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" style="border-collapse: collapse;">
                                                                    <img src="http://freehand.s3.amazonaws.com/assets/freehand-miami.jpg" alt="" width="140" height="auto" border="0" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  />
                                                                </td>
                                                                <td style="border-collapse: collapse;">
                                                                    <img class="image_fix spacer-social" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="8" height="53" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;"><img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="19" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="34" style="border-collapse: collapse;"><a href="https://www.facebook.com/freehandmiami" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-facebook.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-facebook.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" /></a></td>
                                                                <td align="left" width="34" style="border-collapse: collapse;"><a href="https://twitter.com/freehandmiami" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-twitter.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-twitter.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                                                <td width="34" style="border-collapse: collapse;"><a href="http://instagram.com/freehandmiami" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-instagram.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-instagram.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="18" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td class="social-inner-item" style="border-collapse: collapse; border-left: 1px solid #34383c;">
                                                    <table cellpadding="0" cellspacing="0" border="0" align="left" bgcolor="#f8f6e7" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="18" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border-collapse: collapse;">
                                                                    <img class="image_fix spacer-social-chicago" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="21" height="53" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                                <td colspan="3" style="border-collapse: collapse;">
                                                                    <img name="http://freehand.s3.amazonaws.com/assets/a.jpg" src="http://freehand.s3.amazonaws.com/assets/freehand-chicago.jpg" alt="" width="139" height="auto" border="0" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="19" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border-collapse: collapse;"><img class="image_fix" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="21" height="1" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                <td width="34" style="border-collapse: collapse;"><a href="http://www.facebook.com/freehandchicago" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-facebook.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-facebook.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" /></a></td>
                                                                <td align="left" width="34" style="border-collapse: collapse;"><a href="http://www.twitter.com/freehandchicago" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-twitter.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-twitter.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                                                <td width="34" style="border-collapse: collapse;"><a href="http://www.instagram.com/freehandchicago" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-instagram.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-instagram.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="18" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td class="social-inner-item" style="border-collapse: collapse; border-left: 1px solid #34383c;">
                                                    <table cellpadding="0" cellspacing="0" border="0" align="left" bgcolor="#f8f6e7" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="18" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border-collapse: collapse;">
                                                                    <img class="image_fix spacer-social-chicago" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="21" height="53" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                                <td colspan="3" style="border-collapse: collapse;">
                                                                    <img name="http://freehand.s3.amazonaws.com/assets/a.jpg" src="http://freehand.s3.amazonaws.com/assets/freehand-la-footer.png" alt="" width="139" height="auto" border="0" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="19" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border-collapse: collapse;"><img class="image_fix" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="21" height="1" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" /></td>
                                                                <td width="34" style="border-collapse: collapse;"><a href="https://www.facebook.com/freehanddtla" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-facebook.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-facebook.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;" /></a></td>
                                                                <td align="left" width="34" style="border-collapse: collapse;"><a href="https://twitter.com/freehanddtla/" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-twitter.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-twitter.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                                                <td width="34" style="border-collapse: collapse;"><a href="https://www.instagram.com/freehanddtla/" target="_blank" style="text-decoration: none !important;" ><img name="http://freehand.s3.amazonaws.com/assets/fh-instagram.jpg" src="http://freehand.s3.amazonaws.com/assets/fh-instagram.jpg" alt="" width="34" height="auto" class="image_fix social-mobile" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; border: none;"  /></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" style="border-collapse: collapse;">
                                                                    <img class="image_fix fix-height" src="http://freehand.s3.amazonaws.com/assets/spacer.gif" width="100%" height="18" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" alt="" />
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
                                <td colspan="5" style="border-collapse: collapse; text-align:center; padding-top:20px;">
                                     <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                       <tr>
                                            <td><img src="http://freehand.s3.amazonaws.com/assets/sglogo.gif" alt="" width="100" height="74" class="logo" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block; margin:0 auto"  /></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#f8f6e7" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr border="0" bordercolor="#f8f6e7">
                                            <td colspan="7" align="center" style="color: #2f363a; width: 100%; border-collapse: collapse; background-color: #f8f6e7;" bgcolor="#f8f6e7"><font style="font-family: Arial,helevetica,sans-serif; font-size: 10px; color: #2f363a;"> <br />
                                                <font face="Arial,helevetica,sans-serif" color="#2f363a" style="font-family: Arial,helevetica,sans-serif; font-size: 10px;line-height:16px; color: #2f363a;">sent by Freehand 30 W 26th St #12, New York, NY 10010<br />
                                                To unsubscribe from this email, please click</font>
                                                <a name="optout" style="font-family: Arial,helevetica,sans-serif; font-size: 10px; color: #2f363a; text-decoration: underline;" target="_blank" xt="SPEMAILOPTOUT" href="%%profile_center_url%%"><font face="Arial,helevetica,sans-serif" color="#2f363a" style="font-family: Arial,helevetica,sans-serif; font-size: 10px; color: #2f363a; text-decoration: underline;">here</font></a><br />
                                                <br />
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                            <!--end main rows-->
                        </tbody>
                    </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of wrapper table -->
