<?php

$html = '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Emailer BlinkInteract</title>
    </head>
    <body>
        <table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
            <tbody>
                <tr>
                    <td align="center" bgcolor="#fafbfb">
                        <table width="380" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#fff">
                            <tbody>
                                <tr>
                                    <td align="center" bgcolor="#fafbfb"><img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="1" height="10" alt="" style="display:block;font-size:0em;border:0px" class="CToWUd"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="380" align="center" bgcolor="#fff" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table width="380" border="0" cellspacing="0" cellpadding="0">
                                                            <tbody><tr>
                                                                    <td align="left">
                                                                        <a href="https://demo33.blink-interact.com/interactivevideo/"></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="10" height="20" alt="" style="display:block;font-size:0em;border:0px" class="CToWUd">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="10" height="8" alt="" style="display:block;font-size:0em;border:0px" class="CToWUd"></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="10" height="14" alt="" style="display:block;border:0px" class="CToWUd"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding-left:20px;padding-right:20px;font-family:"Open Sans",sans-serif,arial;font-size:16px;font-weight:600;line-height:23px;color:#222">Greetings from BlinkInteract!</td>
                                                </tr>							
                                                <tr>
                                                    <td align="center"><img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="10" height="33" alt="" style="display:block;border:0px" class="CToWUd"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding-left:20px;font-family:"Open Sans",sans-serif,arial;font-size:14px;line-height:18px;color:#222">Thank you for contacting us. This is to confirm that your message has been received by us on  ' . date('Y-m-d') . '.<br/>
                                                        <br/>
                                                        The details provided by you were as mentioned below: </td>
                                                </tr>
                                                 <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Industry:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $industry . '</span></td>
                                                </tr>
                                                 <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Services:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $services . '</span></td>
                                                </tr>
                                                 <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Budget:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $budget . '</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>is this project urgent?:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $urgent . '</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Name:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $name . '</span></td>
                                                </tr>
                                                 <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Email:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $email . '</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Phone Number:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $phoneNumber . '</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="color:#222222;padding-left:20px; padding-top: 20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:30px"><span style="float:left;"><strong>Message:</strong></span>
                                                        <span style="float:right;width:60%;text-align:left;padding-right:20px; ">' . $message . '</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding-top:24px;padding-left:20px;padding-right:20px;font-family:"Open Sans",sans-serif,arial;font-size:15px;line-height:22px;color:#222">

                                                        <br/><br/>
                                                        Thanks & Regards,<br/>
                                                        BlinkInteract Team
                                                        <br/><br/>
                                                        <span style="font-family:"Open Sans",sans-serif,arial;font-size:8px;line-height:16px;color:#222"> DO NOT REPLY TO THIS MAIL. THIS IS AN AUTO GENERATED MAIL AND REPLIES TO THIS EMAIL ID ARE NOT ATTENDED.</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="1" height="29" alt="" style="display:block;border:0px" class="CToWUd"></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><img src="https://demo33.blink-interact.com/interactivevideo/images/spacer.png" width="380" height="10" alt="" style="display:block;border-bottom:1px solid #f3f7f8" class="CToWUd"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';
?>