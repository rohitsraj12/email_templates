<?php

// pass all emails list in array
$arr = ['webdesigner@gopalanenterprises.com', 'seo@gopalanenterprises.com', 'cw@gopalanenterprises.com'];

// from 
$from_name      = "rohit";
$from_email     = "webdesigner@gopalanenterprise.com";

// server where stored images
$base_url       = "https://www.gopalanenterprises.com/";

// landing page urls for redirect
$aqua           = "https://www.gopalanenterprises.com/aqua";
$lakefront      = "https://www.gopalanenterprises.com/lakefront";
$florenza       = "https://www.gopalanenterprises.com/florenza";
$olympia        = "https://www.gopalanenterprises.com/olympia";
$sanskriti      = "https://www.gopalanenterprises.com/sanskriti";

foreach($arr as $value){
    $to         = $value;
    $subject    = "email testing";
    $message    = "<p>testing</p></br>";
    $message    .= "<p>Thank you,</p>";
    $message    .= '
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f7f7f7">
                        <tr>
                            <td align="center" valign="top">
                                <!-- Main -->
                                <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                                    <tr>
                                        <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                            <!-- Header -->
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                
                                                <!-- Logo -->
                                                <tr>
                                                    <td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 10px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="' . $base_url . 'images/email_template/logo-sm.png" width="60px" mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
                                                </tr>
                                                <!-- END Logo -->
                                                
                                                <!-- Nav -->
                                                <tr>
                                                    <td class="text-nav-white" bgcolor="#e85711"style="color:#ffffff; font-family:\'Roboto\', Arial, sans-serif; font-size:12px; line-height:22px; text-align:center; text-transform:uppercase; padding:12px 0px;">
                                                        <div mc:edit="text_2">
                                                            <a href="'.  $aqua  .'" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">Aqua</span></a>
                                                            &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
                                                            <a href="'. $lakefront .'" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">Lakefront</span></a>
                                                            &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
                                                            <a href="'. $florenza .'" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">Florenza</span></a>
                                                            <span class="m-block"><span class="m-hide">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></span>
                                                            <a href="'. $olympia .'" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">Olympia</span></a>
                                                            &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
                                                            <a href="'. $sanskriti .'" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">sanskriti</span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Nav -->
                                            </table>
                                            <!-- END Header -->
                                                
                                            <!-- Section 1 -->
                                            <div mc:repeatable="Select" mc:variant="Section 1">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
                                                    <tr>
                                                        <td class="fluid-img"style="font-size:0pt; line-height:0pt; text-align:left;"><img src="' . $base_url . 'images/email_template/banner.jpg" width="650" height="358" mc:edit="image_7" style="max-width:650px;" border="0" alt="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td class="h5-center"style="color:#a1a1a1; font-family:\'Raleway\', Arial,sans-serif; font-size:16px; line-height:22px; text-align:center; padding-bottom:5px;"><div mc:edit="text_3">Ut enim minim Veniam Quis</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="h2-center"style="color:#000000; font-family:\'Playfair Display\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><div mc:edit="text_4">Darure Reprehenderit Velit!</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center"style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;"><div mc:edit="text_5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse.</div></td>
                                                                </tr>
                                                                
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Section 1 -->

                                            <!-- Section 2 -->
                                            <div mc:repeatable="Select" mc:variant="Section 2">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#dde8fd">
                                                                <tr>
                                                                    <td class="fluid-img"style="font-size:0pt; line-height:0pt; text-align:left;"><img src="' . $base_url . 'images/email_template/free_white_blue.jpg" width="650" height="162" mc:edit="image_8" style="max-width:650px;" border="0" alt="" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p0-15" style="padding: 0px 30px;">
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                            <tr>
                                                                                <td class="h2-center"style="color:#000000; font-family:\'Playfair Display\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><div mc:edit="text_7">Our Projects</div></td>
                                                                            </tr>

                                                                            <!-- aqua -->
                                                                            <tr>
                                                                                <td class="pb40"style="padding-bottom:40px;">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                            <td class="event-separator"style="padding-bottom:40px;">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tr>
                                                                                                        <th class="column-top" width="60"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td class="date"style="color:#000000; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; text-align:left;"><div mc:edit="text_8">
                                                                                                                        <img width="300px" src="' . $base_url . 'images/email_template/aqua.jpg" alt="">
                                                                                                                    </div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                                                        <th class="column-top"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;"><div mc:edit="text_10">Gopalan Aqua</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text black"style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000; padding-bottom: 20px;"><div mc:edit="text_11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#e85711; border:1px solid #e85711; display: inline-block;"><div mc:edit="text_12"><a href="#" target="_blank" class="link-blue"style="color:#e85711; text-decoration:none;"><span class="link-blue"style="color:#e85711; text-decoration:none;">read more</span></a></div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="10"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                        
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- lakefront -->
                                                                            <tr>
                                                                                <td class="pb40"style="padding-bottom:40px;">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                            <td class="event-separator"style="padding-bottom:40px;">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tr> 
                                                                                                        <th class="column-top"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;"><div mc:edit="text_10">Gopalan Lakefront</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text black"style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000; padding-bottom: 20px;"><div mc:edit="text_11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#e85711; border:1px solid #e85711; display: inline-block;"><div mc:edit="text_12"><a href="#" target="_blank" class="link-blue"style="color:#e85711; text-decoration:none;"><span class="link-blue"style="color:#e85711; text-decoration:none;">read more</span></a></div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                                                    
                                                                                                        <th class="column-top" width="60"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td class="date"style="color:#000000; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; text-align:left;"><div mc:edit="text_8">
                                                                                                                        <img width="300px" src="' . $base_url . 'images/email_template/lakefront.jpg" alt="">
                                                                                                                    </div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="10"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                        
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- flerenza -->
                                                                            <tr>
                                                                                <td class="pb40"style="padding-bottom:40px;">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                            <td class="event-separator"style="padding-bottom:40px;">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tr>
                                                                                                        <th class="column-top" width="60"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td class="date"style="color:#000000; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; text-align:left;"><div mc:edit="text_8">
                                                                                                                        <img width="300px" src="' . $base_url . 'images/email_template/florenza.jpg" alt="">
                                                                                                                    </div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                                                        <th class="column-top"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;"><div mc:edit="text_10">Gopalan Florenza</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text black"style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000; padding-bottom: 20px;"><div mc:edit="text_11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#e85711; border:1px solid #e85711; display: inline-block;"><div mc:edit="text_12"><a href="#" target="_blank" class="link-blue"style="color:#e85711; text-decoration:none;"><span class="link-blue"style="color:#e85711; text-decoration:none;">read more</span></a></div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="10"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                        
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- Olympia -->
                                                                            <tr>
                                                                                <td class="pb40"style="padding-bottom:40px;">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                            <td class="event-separator"style="padding-bottom:40px;">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tr> 
                                                                                                        <th class="column-top"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;"><div mc:edit="text_10">Gopalan Olympia</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text black"style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000; padding-bottom: 20px;"><div mc:edit="text_11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#e85711; border:1px solid #e85711; display: inline-block;"><div mc:edit="text_12"><a href="#" target="_blank" class="link-blue"style="color:#e85711; text-decoration:none;"><span class="link-blue"style="color:#e85711; text-decoration:none;">read more</span></a></div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                                                    
                                                                                                        <th class="column-top" width="60"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td class="date"style="color:#000000; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; text-align:left;"><div mc:edit="text_8">
                                                                                                                        <img width="300px" src="' . $base_url . 'images/email_template/olympia.jpg" alt="">
                                                                                                                    </div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="10"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                        
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- Sanskriti -->
                                                                            <tr>
                                                                                <td class="pb40"style="padding-bottom:40px;">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                            <td class="event-separator"style="padding-bottom:40px;">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tr>
                                                                                                        <th class="column-top" width="60"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td class="date"style="color:#000000; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; text-align:left;"><div mc:edit="text_8">
                                                                                                                        <img width="300px" src="' . $base_url . 'images/email_template/sanskriti.jpg" alt="">
                                                                                                                    </div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                                                        <th class="column-top"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;"><div mc:edit="text_10">Gopalan Sanskriti</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text black"style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000; padding-bottom: 20px;"><div mc:edit="text_11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</div></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#e85711; border:1px solid #e85711; display: inline-block;"><div mc:edit="text_12"><a href="#" target="_blank" class="link-blue"style="color:#e85711; text-decoration:none;"><span class="link-blue"style="color:#e85711; text-decoration:none;">read more</span></a></div></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </th>
                                                                                                        <th class="column-empty" width="10"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                        
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fluid-img"style="font-size:0pt; line-height:0pt; text-align:left;"><img src="' . $base_url . 'images/email_template/free_blue_white.jpg" width="650" height="160" mc:edit="image_9" style="max-width:650px;" border="0" alt="" /></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Section 2 -->
                                            
                                            <!-- Footer -->
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 30px 30px 0px 30px;">
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
                                                                    <table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
                                                                        <tr>
                                                                            <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.facebook.com/GopalanEnterprises?_rdc=1&_rdr" target="_blank"><img src="' . $base_url . 'images/email_template/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                            <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://twitter.com/gopalangroup" target="_blank"><img src="' . $base_url . 'images/email_template/ico4_twitter.png" width="26" height="26" mc:edit="image_28" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                            <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.youtube.com/channel/UC7As5n5xPiw7ttYzyvw-zNA" target="_blank"><img src="' . $base_url . 'images/email_template/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                            <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.instagram.com/gopalanenterprises/" target="_blank"><img src="' . $base_url . 'images/email_template/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                            <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.linkedin.com/company/gopalanenterprises" target="_blank"><img src="' . $base_url . 'images/email_template/ico4_linkedin.png" width="26" height="26" mc:edit="image_33" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
                                                                    <table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
                                                                        <tr>
                                                                            <th class="column-top" width="180"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                    <tr>
                                                                                        <td class="text-footer"style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;">
                                                                                            <div mc:edit="text_55">
                                                                                                <strong>About Us</strong><br />
                                                                                                <a href="https://www.gopalanenterprises.com/blog.html" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">Blogs</span></a> <br />
                                                                                                <a href="https://www.gopalanenterprises.com/awards-recognitions.html" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">Awards & Recognitions</span></a> <br />
                                                                                                <a href="https://www.gopalanenterprises.com/testimonial.html" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">Testimonial</span></a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </th>
                                                                            <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                            <th class="column-top" width="180"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                    <tr>
                                                                                        <td class="text-footer"style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;">
                                                                                            <div mc:edit="text_56">
                                                                                                <strong>OUR VENTURE</strong><br />
                                                                                                <a href="https://gopalancoworks.com/" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">Coworks</span></a><br />
                                                                                                <a href="http://www.gopalanmall.com/" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">Malls</span></a><br />
                                                                                                <a href="https://www.gopalanschool.com/" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">Foundation</span></a><br />
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </th>
                                                                            <th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                            <th class="column-top" width="180"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                    <tr>
                                                                                        <td class="text-footer"style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;">
                                                                                            <div mc:edit="text_57">
                                                                                                <strong>Contacts Us</strong><br />
                                                                                                <a href="tel:08049314931" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">080 - 4931 4931</span></a> <br />
                                                                                                <a href="emailto:info@gopalanenterprises.com" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">info@gopalanenterprises.com</span></a> <br />
                                                                                                <address target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">#5/1 Rich Homes, Richmond Road, Bangalore 560025</span></address> <br />
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </th>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
                                                        <div mc:edit="text_58">Copyright © All Rights Reserved<br /> <a class="link-white" target="_blank" href="https://www.gopalanenterprises.com/"style="color:#e85711; text-decoration:none;">gopalanenterprises.com</a></div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- END Footer -->
                                        </td>
                                    </tr>
                                </table>
                                <!-- END Main -->

                            </td>
                        </tr>
                    </table>';
    
    $headers    = "From:" . $from_name . " <" . $from_email . ">\r\n";
    $headers    .= "Reply-To: " . $from_email . "\r\n";
    $headers    .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
}

?>