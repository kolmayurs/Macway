<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to1 = 'mayur@mayurkoli.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to2 = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to3 = 'kolimayurs@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject_macway = "Website Enquiry Form:  $name";
$email_subject_client = "Website Enquiry Form:  $name";
$email_body = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Macway</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family:Arial, sans-serif; background:#fafafa;">
    <table bgcolor="#fafafa" cellpadding="0" cellspacing="0" width="100%" border="0" align="center" style="padding:20px 10px 25px 10px; margin:0 auto; white-space:nowrap;">
        <tr>
            <td width="100%" valign="top">
                <table cellpadding="0" cellspacing="0" width="600" class="deviceWidth" border="0" align="center" bgcolor="fafafa" style="margin:0 auto; min-width:600px; white-space:nowrap;">
                    
                    <tr>
                        <td style="width:558px; padding:20px 10px 30px 10px; border: 1px solid #efefef; border-top:0px !important; background-color:#ffffff; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">
                            <table align="center" cellpadding="0" cellspacing="0" class="deviceWidth" border="0" style="width:100%; background-color:#ffffff;">
                                <tr>
                                    <td class="body_copy" align="center" style="width:38px; padding:10px 10px 20px 25px; background-color:#ffffff; color:#252525;">
                                        <a href="http://macwayintl.com/" target="_blank" style="text-decoration:none; color:#010101;"><img src="http://macwayintl.com/img/logo_black.png" style="display:block; vertical-align:top; color:#010101" height="57" border="0" width="77"></a>
                                    </td>
                                    <td class="body_copy" align="center" style="width:480px; padding:15px 10px 25px 10px; font-size:19px; font-weight:bold; font-family:arial,sans-serif;line-height:24px; text-align:left; vertical-align:middle; background-color:#ffffff; color:#010101;">Enquiry received from Mayur</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="width:560px; background-color:#ffffff;">
                                        <table align="center" cellpadding="0" cellspacing="0" class="deviceWidth" border="0" style="width:550px; background-color:#f7f7f7; border-radius:5px; padding:5px;">
                                          <tr>
                                                <td align="left" style="padding:20px;font-size:14px; font-family:arial,sans-serif;line-height:24px; text-align:left; vertical-align:top; background-color:#f7f7f7; color:#818181; border-bottom:1px dashed #a3a3a3;">
                                                    <img src="http://i.imgur.com/JvskLMK.png" style="color:#818181; padding:0px 15px 3px 0px; vertical-align:bottom;" height="18" border="0" width="18">Name</td>
                                                <td align="left" style="padding:20px;font-size:16px; font-family:arial,sans-serif;line-height:24px; text-align:right; vertical-align:top; background-color:#f7f7f7; color:#010101; border-bottom:1px dashed #a3a3a3;">'.$name.'</td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding:20px;font-size:14px; font-family:arial,sans-serif;line-height:24px; text-align:left; vertical-align:top; background-color:#f7f7f7; color:#818181; border-bottom:1px dashed #a3a3a3;">
                                                    <img src="http://i.imgur.com/6Au5QhD.png" style="display:inline-block;color:#818181; padding:0px 15px 3px 0px; vertical-align:bottom;" height="14" border="0" width="19"><span style="display:inline-block;">Email ID</span>
                                                </td>
                                                <td align="left" style="padding:20px;font-size:16px; font-family:arial,sans-serif;line-height:24px; text-align:right; vertical-align:top; background-color:#f7f7f7; color:#010101; border-bottom:1px dashed #a3a3a3;">'.$email_address.'</td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding:20px;font-size:14px; font-family:arial,sans-serif;line-height:24px; text-align:left; vertical-align:top; background-color:#f7f7f7; color:#818181; border-bottom:1px dashed #a3a3a3;">
                                                    <img src="http://i.imgur.com/CLQROgp.png" style="display:inline-block;color:#818181; padding:0px 15px 3px 0px; vertical-align:bottom;" height="22" border="0" width="19"><span style="display:inline-block;">Phone Number </span>
                                                </td>
                                                <td align="left" style="padding:20px;font-size:16px; font-family:arial,sans-serif;line-height:24px; text-align:right; vertical-align:top; background-color:#f7f7f7; color:#010101; border-bottom:1px dashed #a3a3a3;">'.$phone.'</td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2" align="left" style="padding:20px;font-size:16px; font-family:arial,sans-serif;line-height:16px; text-align:center; vertical-align:top; background-color:#f7f7f7; color:#010101;"><span style="display:block; padding:0px; color:#818181;">Message:</span><br />'.$message.'</td>
                                               
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="width:100%; font-size:15px; padding:5px 0 0 0; font-family:arial,sans-serif;line-height:20px; text-align:center; color:#636363; background-color:#fafafa;">For any queries please reach out to us at <a href="mailto:info@macwayintl.com" target="_blank" style="text-decoration:underline; color:#FF3351;">info@macwayintl.com</a></td>
                    </tr>
                    <tr>
                        <td style="width:560px;border-collapse:collapse; padding:15px; ">
                            <table align="center" cellspacing="0" cellpadding="0" style="width:102px; background:#fafafa;font-size:12px; margin: 0 auto;">
                                <tr>
                                    <td style="vertical-align:top; text-align:left;" class="center">
                                        <a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank">
                                            <img src="http://macwayintl.com/img/facebook.png" alt="Facebook" title="Facebook" width="41" height="41" border="0" style="padding:10px 5px;" />
                                        </a>
                                    </td>

                                    <td style="vertical-align:top; text-align:right;" class="center">
                                        <a href="https://www.instagram.com/macway_intl/" target="_blank">
                                            <img src="http://macwayintl.com/img/insta.png" alt="Instagram" title="Instagram" width="41" height="41" border="0" style="padding:10px 5px;;" />
                                        </a>
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';

$email_body1='<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Macway</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family:Arial, sans-serif; background:#fafafa;">
    <table bgcolor="#fafafa" cellpadding="0" cellspacing="0" width="100%" border="0" align="center" style="padding:20px 10px 25px 10px; margin:0 auto; white-space:nowrap;">
        <tr>
            <td width="100%" valign="top">
                <table cellpadding="0" cellspacing="0" width="600" class="deviceWidth" border="0" align="center" bgcolor="fafafa" style="margin:0 auto; min-width:600px; white-space:nowrap;">
                    
                    <tr>
                        <td style="width:558px; padding:10px 10px 10px 10px; border: 1px solid #efefef; border-top:0px !important; background-color:#ffffff; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">
                            <table align="center" cellpadding="0" cellspacing="0" class="deviceWidth" border="0" style="width:100%; background-color:#ffffff;">
                                <tr>
                                    <td class="body_copy" align="center" style="width:38px; padding:10px 10px 20px 25px; background-color:#ffffff; color:#252525;">
                                        <a href="http://macwayintl.com/" target="_blank" style="text-decoration:none; color:#010101;"><img src="http://macwayintl.com/img/logo_black.png" style="display:block; vertical-align:top; color:#010101" height="57" border="0" width="77"></a>
                                    </td>
                                    <td class="body_copy" align="center" style="width:480px; padding:15px 10px 25px 10px; font-size:19px; font-weight:bold; font-family:arial,sans-serif;line-height:24px; text-align:left; vertical-align:middle; background-color:#ffffff; color:#010101;">Thank You for your Enquiry<br /><span style="font-size:15px;font-weight:normal; color:#c2c2c2;">We will get back to you as soon as possible.</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="width:100%; font-size:15px; padding:5px 0 0 0; font-family:arial,sans-serif;line-height:20px; text-align:center; color:#636363; background-color:#fafafa;">For any queries please reach out to us at <a href="mailto:info@macwayintl.com" target="_blank" style="text-decoration:underline; color:#FF3351;">info@macwayintl.com</a></td>
                    </tr>
                    <tr>
                        <td style="width:560px;border-collapse:collapse; padding:15px; ">
                            <table align="center" cellspacing="0" cellpadding="0" style="width:102px; background:#fafafa;font-size:12px; margin: 0 auto;">
                                <tr>
                                    <td style="vertical-align:top; text-align:left;" class="center">
                                        <a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank">
                                            <img src="http://macwayintl.com/img/facebook.png" alt="Facebook" title="Facebook" width="41" height="41" border="0" style="padding:10px 5px;" />
                                        </a>
                                    </td>

                                    <td style="vertical-align:top; text-align:right;" class="center">
                                        <a href="https://www.instagram.com/macway_intl/" target="_blank">
                                            <img src="http://macwayintl.com/img/insta.png" alt="Instagram" title="Instagram" width="41" height="41" border="0" style="padding:10px 5px;;" />
                                        </a>
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';
$headers = "From: noreply@macwayintl.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to1,$email_subject,$email_body,$headers);
mail($to2,$email_subject,$email_body1,$headers);
mail($to3,$email_subject,$email_body,$headers);

file_put_contents("ip.txt", $ip . $email_subject . $email_body . $headers, FILE_APPEND);


return true;			
?>
