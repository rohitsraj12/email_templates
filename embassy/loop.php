<?php

if (isset($_POST['submit'])) {
    // from 
    $from_name      = "Prashant Tank";
    $from_email     = "Marketing@housesites.in";

    // server where stored images
    $base_url       = "http://housesites.in/ready-to-move-property-in-north-bangalore-embassy-lakerterrace/bulk_email/";

    // landing page urls for redirect
    $landing_page   = "https://housesites.in/ready-to-move-property-in-north-bangalore-embassy-lakerterrace/";

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
        $subject    = "Embassy Lake terrace ready to move a luxury project in Hebbal North Bangalore";
        $message    = '
        <style type="text/css">
        body, p, div {
          font-family: arial,helvetica,sans-serif;
          font-size: 14px;
        }
        body {
          color: #000000;
        }
        body a {
          color: #487995;
          text-decoration: none;
        }
        p { margin: 0; padding: 0; }
        table.wrapper {
          width:100% !important;
          table-layout: fixed;
          -webkit-font-smoothing: antialiased;
          -webkit-text-size-adjust: 100%;
          -moz-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }
        img.max-width {
          max-width: 100% !important;
        }
        .column.of-2 {
          width: 50%;
        }
        .column.of-3 {
          width: 33.333%;
        }
        .column.of-4 {
          width: 25%;
        }
        ul ul ul ul  {
          list-style-type: disc !important;
        }
        ol ol {
          list-style-type: lower-roman !important;
        }
        ol ol ol {
          list-style-type: lower-latin !important;
        }
        ol ol ol ol {
          list-style-type: decimal !important;
        }
        @media screen and (max-width:480px) {
          .preheader .rightColumnContent,
          .footer .rightColumnContent {
            text-align: left !important;
          }
          .preheader .rightColumnContent div,
          .preheader .rightColumnContent span,
          .footer .rightColumnContent div,
          .footer .rightColumnContent span {
            text-align: left !important;
          }
          .preheader .rightColumnContent,
          .preheader .leftColumnContent {
            font-size: 80% !important;
            padding: 5px 0;
          }
          table.wrapper-mobile {
            width: 100% !important;
            table-layout: fixed;
          }
          img.max-width {
            height: auto !important;
            max-width: 100% !important;
          }
          a.bulletproof-button {
            display: block !important;
            width: auto !important;
            font-size: 80%;
            padding-left: 0 !important;
            padding-right: 0 !important;
          }
          .columns {
            width: 100% !important;
          }
          .column {
            display: block !important;
            width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
          }
          .social-icon-column {
            display: inline-block !important;
          }
        }
      </style>
          <!--user entered Head Start--><!--End Head user entered-->
        </head>
        <body>
          <center class="wrapper" data-link-color="#487995" data-body-style="font-size:14px; font-family:arial,helvetica,sans-serif; color:#000000; background-color:#edf1f3;">
            <div class="webkit">
              <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#edf1f3">
                <tr>
                  <td valign="top" bgcolor="#edf1f3" width="100%">
                    <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td width="100%">
                          <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                              <td>
                                <!--[if mso]>
        <center>
        <table><tr><td width="800">
      <![endif]-->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:800px;" align="center">
                                          <tr>
                                            <td role="modules-container" style="padding:0px 0px 0px 0px; color:#000000; text-align:left;" bgcolor="#EDF1F3" width="100%" align="left"><table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
        <tr>
          <td role="module-content">
            <p></p>
          </td>
        </tr>
      </table>
      <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="7d396aee-5888-4f7d-a788-6ff13a7ac450" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <!-- <td style="padding:15px 0px 15px 100px; line-height:14px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: right"><span style="font-family: verdana, geneva, sans-serif; color: #84b0ca; font-size: 10px">Email not displaying correctly? </span><span style="font-family: verdana, geneva, sans-serif; color: #0a3752; font-size: 10px"><strong>VIEW IT</strong></span><span style="font-family: verdana, geneva, sans-serif; color: #84b0ca; font-size: 10px"> in your browser.</span></div><div></div></div></td> -->
          </tr>
        </tbody>
      </table>
      <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="b7993751-904f-45c7-a777-4b216693fc6d">
        <tbody>
          <tr>
            <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
              <a href="' . $landing_page . '">
                <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="800" alt="" data-proportionally-constrained="true" data-responsive="true" src="' . $base_url . 'images/main-banner.jpg">
            </a>
            </td>
          </tr>
        </tbody>
      </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 0px 0px;" bgcolor="#0A3752" data-distribution="1,3">
        <tbody>
          <tr role="module-content">
            <td height="100%" valign="top"><table width="200" style="width:200px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="65da1b10-ac95-4c58-8705-320f7fbc84ff">
        <tbody>
          <tr>
            <td style="font-size:6px; line-height:10px; padding:35px 0px 35px 0px;" valign="top" align="center">
              <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:70% !important; width:70%; height:auto !important;" width="140" alt="" data-proportionally-constrained="true" data-responsive="true" src="' . $base_url . 'images/logo.png">
            </td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table><table width="600" style="width:600px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="13845f09-d902-4cd1-9399-98b9b232b28e" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:30px 0px 0px 50px; line-height:30px; text-align:inherit; background-color:#84B0CA;" height="100%" valign="top" bgcolor="#84B0CA" role="module-content"><div><div style="font-family: inherit; text-align: left"><span style="color: #ffffff; font-family: verdana, geneva, sans-serif; font-size: 20px">Welcome to</span></div>
    <div style="font-family: inherit; text-align: left"><span style="color: #ffffff; font-family: verdana, geneva, sans-serif; font-size: 30px"><strong>Embassy Group</strong></span></div><div></div></div></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="b6dd84b3-f628-481f-9cde-68540200866a">
        <tbody>
          <tr>
            <td style="padding:10px 400px 10px 50px;" role="module-content" height="100%" valign="top" bgcolor="#84B0CA">
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="1px" style="line-height:1px; font-size:1px;">
                <tbody>
                  <tr>
                    <td style="padding:0px 0px 1px 0px;" bgcolor="#0A3752"></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="13845f09-d902-4cd1-9399-98b9b232b28e.1" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:10px 50px 20px 50px; line-height:24px; text-align:inherit; background-color:#84B0CA;" height="100%" valign="top" bgcolor="#84B0CA" role="module-content"><div><div style="font-family: inherit; text-align: left"><br style="font-family: verdana, geneva, sans-serif; font-size: 16px; color: #0a3752">Embassy Lake Terraces welcomes you to a realm &#39;Beyond the Infinite&#39;, where every horizon is just a beginning. Embark on a journey into futuristic magnificence and indulge in a lifestyle brimming with infinite experiences.<br/><br/>Located at the epicentre of growth in Hebbal, North Bengaluru, the stunning architectural
                marvel stands as a testament to visionary design.</br></br> Limited Period Offer </span></div><div></div></div></td>
          </tr>
        </tbody>
      </table><table border="0" cellpadding="0" cellspacing="0" class="module" data-role="module-button" data-type="button" role="module" style="table-layout:fixed;" width="100%" data-muid="fbdc9861-d9a1-45ad-96f3-63a274aa47dd">
          <tbody>
            <tr>
              <td align="left" bgcolor="#84B0CA" class="outer-td" style="padding:0px 0px 0px 50px; background-color:#84B0CA;">
                <table border="0" cellpadding="0" cellspacing="0" class="wrapper-mobile" style="text-align:center;">
                  <tbody>
                    <tr>
                    <td align="center" bgcolor="#0A3752" class="inner-td" style="border-radius:6px; font-size:16px; text-align:left; background-color:inherit;">
                      <a href="https://housesites.in/ready-to-move-property-in-north-bangalore-embassy-lakerterrace/" style="background-color:#0A3752; border:0px solid #ffffff; border-color:#ffffff; border-radius:0px; border-width:0px; color:#ffffff; display:inline-block; font-size:14px; font-weight:normal; letter-spacing:0px; line-height:normal; padding:12px 30px 12px 30px; text-align:center; text-decoration:none; border-style:solid; font-family:verdana,geneva,sans-serif;" target="_blank">Learn more</a>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table><table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="37af17d2-b76e-4fdc-9a53-79fe9b269633">
        <tbody>
          <tr>
            <td style="padding:0px 0px 50px 0px;" role="module-content" bgcolor="#84B0CA">
            </td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ed7c2e1f-ef68-49cc-afb1-23a045b430e9">
        <tbody>
          <tr>
            <td style="padding:0px 0px 50px 0px;" role="module-content" bgcolor="">
            </td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="1d851adc-6a65-456d-9ccb-e210013807d7" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:0px 0px 0px 50px; line-height:20px; text-align:inherit; background-color:#edf1f3;" height="100%" valign="top" bgcolor="#edf1f3" role="module-content"><div><div style="font-family: inherit; text-align: left"><span style="font-family: verdana, geneva, sans-serif; font-size: 16px; color: #84b0ca"><strong>TRENDING THIS WEEK</strong></span></div><div></div></div></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="01b58dd9-a5f9-447c-b64d-fca44d976dce">
        <tbody>
          <tr>
            <td style="padding:5px 50px 20px 50px;" role="module-content" height="100%" valign="top" bgcolor="">
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="5px" style="line-height:5px; font-size:5px;">
                <tbody>
                  <tr>
                    <td style="padding:0px 0px 5px 0px;" bgcolor="#84B0CA"></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- #ready to move in -->
      <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 50px 20px 50px;" bgcolor="#EDF1F3" data-distribution="1,2">
        <tbody>
          <tr role="module-content">
            <td height="100%" valign="top"><table width="220" style="width:220px; border-spacing:0; border-collapse:collapse; margin:0px 20px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="cBiyKgSAf3sHzEQtGwL8gU">
            <tbody>
            <tr>
                <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
                <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="220" alt="" data-proportionally-constrained="true" data-responsive="true" src="'. $base_url .'images/ready-to-move.jpg">
                </td>
            </tr>
            </tbody>
        </table>
        </td>
            </tr>
          </tbody>
        </table>
        <table width="440" style="width:440px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 20px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="nab3S7wZerNme5cK7ZVFZW" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:15px 0px 5px 0px; line-height:20px; text-align:inherit; background-color:#edf1f3;" height="100%" valign="top" bgcolor="#edf1f3" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: verdana, geneva, sans-serif; color: #0a3752; font-size: 20px"><strong>Ready to Move</strong></span></div><div></div></div></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="nab3S7wZerNme5cK7ZVFZW.1" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:0px 0px 18px 0px; line-height:20px; text-align:inherit; background-color:#edf1f3;" height="100%" valign="top" bgcolor="#edf1f3" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: verdana, geneva, sans-serif; color: #0a3752">Embassy Lake terrace is ready to move Property, with OC Received, With World Class Amenities, and
                30 min drive from the International Airport of Bangalore.</span></div><div></div></div></td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table></td>
          </tr>
        </tbody>
      </table>
      
      <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="01b58dd9-a5f9-447c-b64d-fca44d976dce.2">
        <tbody>
          <tr>
            <td style="padding:0px 50px 0px 50px;" role="module-content" height="100%" valign="top" bgcolor="">
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="5px" style="line-height:5px; font-size:5px;">
                <tbody>
                  <tr>
                    <td style="padding:0px 0px 5px 0px;" bgcolor="#84B0CA"></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      
      <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:20px 50px 20px 50px;" bgcolor="" data-distribution="2,1">
        <tbody>
          <tr role="module-content">
            <td height="100%" valign="top"><table width="440" style="width:440px; border-spacing:0; border-collapse:collapse; margin:0px 20px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="t7affZnVRDfBkmAqcpYU4C" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:15px 0px 5px 0px; line-height:20px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #0a3752; font-family: verdana, geneva, sans-serif; font-size: 20px"><strong>GST Benefit</strong></span></div><div></div></div></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="t7affZnVRDfBkmAqcpYU4C.1" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:0px 0px 18px 0px; line-height:20px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #0a3752; font-family: verdana, geneva, sans-serif">Embassy Lake Terrace 3 BHK Ultra luxury apartment is Starts from Rs. 5.5 Cr*, Without GST.</span></div><div></div></div></td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table><table width="220" style="width:220px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 20px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="8MK9EUGigZmF1RkDXwck3N">
        <tbody>
          <tr>
            <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
              <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="440" alt="" data-proportionally-constrained="true" data-responsive="true" src="'. $base_url .'images/gst-benefit.jpg">
            </td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table></td>
          </tr>
        </tbody>
      </table>
      <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="01b58dd9-a5f9-447c-b64d-fca44d976dce.1.1">
        <tbody>
          <tr>
            <td style="padding:0px 50px 0px 50px;" role="module-content" height="100%" valign="top" bgcolor="">
              <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="5px" style="line-height:5px; font-size:5px;">
                <tbody>
                  <tr>
                    <td style="padding:0px 0px 5px 0px;" bgcolor="#84B0CA"></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:20px 50px 20px 50px;" bgcolor="" data-distribution="1,2">
        <tbody>
          <tr role="module-content">
            <td height="100%" valign="top"><table width="220" style="width:220px; border-spacing:0; border-collapse:collapse; margin:0px 20px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="8s5S4vEMmEFFvEACaAdQnT">
        <tbody>
          <tr>
            <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
              <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="220" alt="" data-proportionally-constrained="true" data-responsive="true" src="'. $base_url . 'images/kitchen.jpg">
            </td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table><table width="440" style="width:440px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 20px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
          <tbody>
            <tr>
              <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="d58MX5emqUnAkiXJRGcuVd" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:15px 0px 18px 0px; line-height:20px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #0a3752; font-family: verdana, geneva, sans-serif; font-size: 20px"><strong>Designer Kitchen</strong></span></div><div></div></div></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="d58MX5emqUnAkiXJRGcuVd.1" data-mc-module-version="2019-10-22">
        <tbody>
          <tr>
            <td style="padding:0px 0px 18px 0px; line-height:20px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #0a3752; font-family: verdana, geneva, sans-serif">Limited Period offer, each booking of 3 BHK Luxury apartment will get Designer Kitchen worth of up
                to Rs. 40 L from Embassy Interriors.</span></div><div></div></div></td>
          </tr>
        </tbody>
      </table></td>
            </tr>
          </tbody>
        </table></td>
          </tr>
        </tbody>
      </table><table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="c2f7a2d5-91ec-45f0-8519-5264163797c0">
        <tbody>
          <tr>
            <td style="padding:0px 0px 20px 0px;" role="module-content" bgcolor="">
            </td>
          </tr>
        </tbody>
      </table>
      
       </td>
                                          </tr>
                                        </table>
                                        <!--[if mso]>
                                      </td>
                                    </tr>
                                  </table>
                                </center>
                                <![endif]-->
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </center>
        </body>
      </html>
        </div>
    </body>
            ';
        
        $headers    = "From:" . $from_name . " <" . $from_email . ">\r\n";
        $headers    .= "Reply-To: " . $from_email . "\r\n";
        $headers    .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        header("location: index.html");
    }

} else {
        echo 'failed';
    }

?>