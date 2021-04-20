<?php

// pass all emails list in array
//$arr = ['webdesigner@gopalanenterprises.com', 'seo@gopalanenterprises.com', 'cw@gopalanenterprises.com'];
if (isset($_POST['submit'])) {
    // from 
    $from_name      = "rohit";
    $from_email     = "webdesigner@gopalanenterprise.com";

    // server where stored images
    $base_url       = "https://www.gopalanenterprises.com/bulk_email/sanskriti/";

    // landing page urls for redirect
    $aqua           = "https://www.gopalanenterprises.com/index.html";
    $lakefront      = "https://www.gopalanenterprises.com/index.html";
    $florenza       = "https://www.gopalanenterprises.com/index.html";
    $olympia        = "https://www.gopalanenterprises.com/index.html";
    $sanskriti      = "https://www.gopalanenterprises.com/index.html";

    /*
        convert exel to json url 
            https://beautifytools.com/excel-to-json-converter.php 
    */ 

    // fetch data from json file
    $filename = 'data.json';
    $data = file_get_contents($filename);
    $clients_detail = json_decode($data);

    // foreach($clients_detail as $clients){
    //     "<ul>
    //         <li>" . $clients->name . "</li>
    //         <li>" . $clients->email . "</li>
    //         <li>" . $clients->phone . "</li>
    //     </ul>"
    // }

    foreach($clients_detail as $clients){
        $ref_name = $clients->name;
        $ref_phone = $clients->phone;

        $to         = $clients->email;
        $subject    = "Refer and Earn up to 1 lac | Gopalan Enterprises";
        $message    = '
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f7f7f7">
                            <tr>
                                <td align="center" valign="top" style="padding-top: 40px">
                                    <!-- Main -->
                                    <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                                        <tr>
                                            <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                                <!-- Header -->
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    
                                                    <!-- Logo -->
                                                    <tr>
                                                        <td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 10px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="' . $base_url . 'images/logo/logo-sm.png" width="60px" mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
                                                    </tr>
                                                    <!-- END Logo -->
                                                </table>
                                                <!-- END Header -->
                                                    
                                                
                                                <!-- Section 1 -->
                                                <div mc:repeatable="Select" mc:variant="Section 1">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
                                                        <tr>
                                                            <td class="fluid-img"style="font-size:0pt; line-height:0pt; text-align:left;"><img src="' . $base_url . 'images/banner/banner.jpg" width="650" height="358" mc:edit="image_7" style="max-width:650px;" border="0" alt="" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
                                                            
                                                            <!-- start update content -->
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td class="h5-center"style="color:#a1a1a1; font-family:\'Raleway\', Arial,sans-serif; font-size:16px; line-height:22px; text-align:left; padding-bottom:5px;"><div mc:edit="text_3" style="color: #000000">Dear ' . $ref_name . ',</div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center"style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-top:5px;"><div mc:edit="text_5">
                                                                            <h5 style="font-size:30px; color:#000000">
                                                                                Refer and Earn
                                                                            </h5>
                                                                            <div style="list-style: none; margin: 0; padding:5px 0; ">
                                                                                <p style="font-size:17px; color:#222222">

                                                                                    Located in Mylasandra, Off Mysore Road, Gopalan Sanskriti offers 2 & 3 BHK homes that are a perfect combination of luxury and comfort. With a well-equipped clubhouse and vast open spaces, these stunning homes take care of your needs and give you the comfort you deserve.
                                                                                
                                                                                </p>
                                                                                <h6 style="padding-top:5px; color:#222222;font-weight:500; font-size: 24px;">
                                                                                    
                                                                                    Homes starting at 73.79 Lacs

                                                                                </h6>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="center">
                                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                                <tr>
                                                                                    <td class="text-button-orange"style="color:#ffffff; font-family:\'Kreon\', \'Times New Roman\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; ">
                                                                                        <div mc:edit="text_6">
                                                                                            <a class="link-white"style="background:#e85711; padding:10px 30px; border-radius:20px; color:#ffffff; text-decoration:none; display:block" href="'.  $sanskriti  . '?id=' . $to . "&name=" . $ref_name . "&phone=" . $ref_phone . '" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;">
                                                                                                
                                                                                                    View More
                                                                                                
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            <!-- end update content -->

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- END Section 1 -->
                                                
                                                <!-- Footer -->
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 30px 30px 0px 30px;">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
                                                                        <table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
                                                                            <tr>
                                                                                <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.facebook.com/GopalanEnterprises?_rdc=1&_rdr" target="_blank"><img src="' . $base_url . 'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                                <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://twitter.com/gopalangroup" target="_blank"><img src="' . $base_url . 'images/ico4_twitter.png" width="26" height="26" mc:edit="image_28" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                                <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.youtube.com/channel/UC7As5n5xPiw7ttYzyvw-zNA" target="_blank"><img src="' . $base_url . 'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                                <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.instagram.com/gopalanenterprises/" target="_blank"><img src="' . $base_url . 'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
                                                                                <td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.linkedin.com/company/gopalanenterprises" target="_blank"><img src="' . $base_url . 'images/ico4_linkedin.png" width="26" height="26" mc:edit="image_33" style="max-width:26px;" border="0" alt="" /></a></td>
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
                                                                                                    <a href="mailto:info@gopalanenterprises.com" target="_blank" class="link-grey"style="color:#e85711; text-decoration:none;"><span class="link-grey"style="color:#e85711; text-decoration:none;">info@gopalanenterprises.com</span></a> <br />
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

        header("location: index.html?message=success");
    }

}

?>