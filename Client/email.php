<?php
session_start();
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[];    
$name = (isset($_SESSION['name']))?$_SESSION['name']:[];    
include ("./phpMailer/PHPMailer.php");
include ("./phpMailer/Exception.php");
include ("./phpMailer/OAuth.php");
include ("./phpMailer/POP3.php");
include ("./phpMailer/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail =new PHPMailer(true);
$mail -> charSet = "UTF-8";     
$mess="

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>

<head>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta content='telephone=no' name='format-detection'>
    <title></title>
    <!--[if (mso 16)]>
    <style type='text/css'>
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
    <!--[if !mso]><!-- -->
    <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap' rel='stylesheet'>
    <!--<![endif]-->
</head>

<body>
    <div class='es-wrapper-color'>
        <!--[if gte mso 9]>
			<v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
				<v:fill type='tile' src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/98181605774448010.png' color='#ffffff' origin='0.5, 0' position='0.5, 0'></v:fill>
			</v:background>
		<![endif]-->
        <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' background='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/98181605774448010.png' style='background-position: center top;'>
            <tbody>
                <tr>
                    <td class='esd-email-paddings' valign='top'>
                        <table cellpadding='0' cellspacing='0' class='esd-header-popover es-header' align='center'>
                            <tbody>
                                <tr>
                                    <td class='esd-stripe' align='center' background='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/12181606141798082.png' style='background-image: url(https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/12181606141798082.png); background-repeat: no-repeat; background-position: center 25px;' esd-custom-block-id='219796'>
                                        <table bgcolor='#ffffff' class='es-header-body' align='center' cellpadding='0' cellspacing='0' width='600'>
                                            <tbody>
                                                <tr>
                                                    <td class='esd-structure es-p20t es-p20r es-p20l' align='left'>
                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='560' align='left' class='esd-container-frame'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr class='es-mobile-hidden'>
                                                                                    <td align='center' class='esd-block-text'>
                                                                                        <p class='view' style='font-size: 12px;'>
                                                                                            <font style='vertical-align: inherit;'>
                                                                                                <font style='vertical-align: inherit;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                     
                                                                                                    </font>
                                                                                                </font>
                                                                                            </font>
                                                                                        </p>
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
                                                    <td class='esd-structure es-p20t es-p5b es-p20r es-p20l' align='left'>
                                                        <!--[if mso]><table width='560' cellpadding='0' cellspacing='0'><tr><td width='162' valign='top'><![endif]-->
                                                        <table cellpadding='0' cellspacing='0' class='es-left' align='left'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='142' class='es-m-p0r esd-container-frame es-m-p20b' valign='top' align='center'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align='center' class='esd-block-image es-p5t' style='font-size: 0px;'><a target='_blank' href='https://viewstripo.email'><img src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/19291605775271564.png' alt='House map' style='display: block;' width='142' title='House map'></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class='es-hidden' width='20'></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width='244' valign='top'><![endif]-->
                                                        <table cellpadding='0' cellspacing='0' align='left' class='es-left'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='244' align='left' class='esd-container-frame es-m-p20b'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align='center' class='esd-empty-container' style='display: none;'></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width='20'></td><td width='134' valign='top'><![endif]-->
                                                        <table cellpadding='0' cellspacing='0' class='es-right' align='right'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='134' align='left' class='esd-container-frame'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align='right' class='esd-block-button es-p5t'><span class='es-button-border' style='border-color: #f07167; background: #ffffff; border-width: 2px;'><a href='https://viewstripo.email' class='es-button es-button-1639451820723' target='_blank' style='background: #ffffff; border-color: #ffffff; color: #f07167; font-size: 18px; border-width: 5px 20px;'>
                                                                                                <font style='vertical-align: inherit;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                        <font style='vertical-align: inherit;'>
                                                                                                            <font style='vertical-align: inherit;'>Liên hệ với tôi</font>
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </font>
                                                                                            </a></span></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='es-content' cellspacing='0' cellpadding='0' align='center'>
                            <tbody>
                                <tr>
                                    <td class='esd-stripe' align='center' style='background-image: url(https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/12181606141798082.png); background-repeat: no-repeat; background-position: center -80px;' background='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/12181606141798082.png'>
                                        <table class='es-content-body' style='background-color: transparent;' width='600' cellspacing='0' cellpadding='0' align='center'>
                                            <tbody>
                                                <tr>
                                                    <td class='esd-structure es-p20' align='left' esd-custom-block-id='219798'>
                                                        <!--[if mso]><table width='560' cellpadding='0' cellspacing='0'><tr><td width='338' valign='top'><![endif]-->
                                                        <table cellspacing='0' cellpadding='0' align='left' class='es-left'>
                                                            <tbody>
                                                                <tr>
                                                                    <td class='es-m-p0r esd-container-frame es-m-p20b' width='338' valign='top' align='center'>
                                                                        <table width='100%' cellspacing='0' cellpadding='0'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align='left' class='esd-block-text'>
                                                                                        <h1>
                                                                                            <font style='vertical-align: inherit;'>
                                                                                                <font style='vertical-align: inherit;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                        <font style='vertical-align: inherit;'>Xin chào:$name </font>
                                                                                                    </font>
                                                                                                </font>
                                                                                                <font style='vertical-align: inherit;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                        <font style='vertical-align: inherit;></font>
                                                                                                    </font>
                                                                                                </font>
                                                                                            </font>
                                                                                        </h1>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width='20'></td><td width='202' valign='top'><![endif]-->
                                                        <table cellpadding='0' cellspacing='0' class='es-right' align='right'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='202' align='left' class='esd-container-frame'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr class='es-mobile-hidden'>
                                                                                    <td align='center' class='esd-block-spacer' height='46'></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align='center' class='esd-block-image' style='font-size: 0px;'><a target='_blank' href='https://viewstripo.email'><img src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/56641606141860633.png' alt='Olaf' style='display: block;' width='202' title='Olaf'></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='esd-structure esdev-adapt-off es-p40t es-p20r es-p20l' align='left' esd-custom-block-id='219800'>
                                                        <table width='560' cellpadding='0' cellspacing='0' class='esdev-mso-table'>
                                                            <tbody>
                                                                <tr>
                                                                    <td class='esdev-mso-td' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' class='es-left' align='left'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='30' class='es-m-p0r esd-container-frame' align='center'>
                                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align='left' class='esd-block-image es-p5t es-m-p10r es-m-txt-r' style='font-size: 0px;'><a target='_blank' href='https://viewstripo.email'><img src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/56721605777232063.png' alt='Gift' style='display: block;' width='30' title='Gift'></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td width='20'></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class='esdev-mso-td' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' class='es-left' align='left'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='360' class='esd-container-frame' align='center'>
                                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align='left' class='esd-block-text es-m-txt-l'>
                                                                                                        <h1>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>
                                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                                        <font style='vertical-align: inherit;'>Thông tin sản phẩm</font>
                                                                                                                    </font>
                                                                                                                </font>
                                                                                                            </font>
                                                                                                        </h1>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td width='20'></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class='esdev-mso-td' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' class='es-right' align='right'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='129' align='center' class='esd-container-frame'>
                                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                                            <tbody>
                                                                                                <tr class='es-mobile-hidden'>
                                                                                                    <td align='right' class='esd-block-text es-p10t' esd-links-color='#003241'>
                                                                                                        <p><u><a target='_blank' style='color: #003241;' href='https://viewstripo.email'>
                                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                                        <font style='vertical-align: inherit;'>
                                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                                <font style='vertical-align: inherit;'>Thêm ý tưởng</font>
                                                                                                                            </font>
                                                                                                                        </font>
                                                                                                                    </font>
                                                                                                                </a></u></p>
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
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>";
                  
                                                          
                                                
              $mess.="<table width='500' border='1'>";
              $mess.="<tr> 
                          <th>STT</th>
                          <th>Tên sản phẩm</th>
                          <th>số lượng</th>
                          <th>Giá tiền</th>
                          <th>Tổng</th>
                      </tr>";
              $tong=0;
              $stt=0;
              $magh=$_GET['magh'];
              foreach( $cart as $key => $row){
                  $stt++;
                $sl= $row['soluong'];
                $tensp= $row['TENSP'];
                $gb= $row['GIABAN'];
                $anh=$row['ANH'];
                // $sl= $row['soluong'];
              $tong += $row['GIABAN'] * $row['soluong'];
                      $mess.="
                      <tr> 
                    <td>$stt</td>
                    <td>$tensp</td>
                    <td>$sl</td>
                    <td>$gb</td>
                    <td>$tong</td>
                  
                </tr>";
              }
              $mess.="</table>
                            </td>
                            </tr>
                            </tbody>
                            </table></td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding='0' cellspacing='0' class='es-footer' align='center'>
                            <tbody>
                                <tr>
                                    <td class='esd-stripe' align='center' esd-custom-block-id='219806'>
                                        <table bgcolor='#ffffff' class='es-footer-body' align='center' cellpadding='0' cellspacing='0' width='600'>
                                            <tbody>
                                                <tr>
                                                    <td class='esd-structure es-p20t es-p20b es-p20r es-p20l' align='left'>
                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='560' class='esd-container-frame' align='left'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class='esd-block-menu' esd-tmp-menu-padding='10|10' esd-tmp-menu-color='#fdfcdc'>
                                                                                        <table cellpadding='0' cellspacing='0' width='100%' class='es-menu'>
                                                                                            <tbody>
                                                                                                <tr class='links'>
                                                                                                    <td align='center' valign='top' width='25%' class='es-p10t es-p10b es-p5r es-p5l' style='padding-bottom: 10px;'><a target='_blank' href='https://viewstripo.email.' style='color: #fdfcdc;'>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>Về chúng tôi</font>
                                                                                                            </font>
                                                                                                        </a></td>
                                                                                                    <td align='center' valign='top' width='25%' class='es-p10t es-p10b es-p5r es-p5l' style='padding-bottom: 10px;'><a target='_blank' href='https://viewstripo.email.' style='color: #fdfcdc;'>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>Tin tức</font>
                                                                                                            </font>
                                                                                                        </a></td>
                                                                                                    <td align='center' valign='top' width='25%' class='es-p10t es-p10b es-p5r es-p5l' style='padding-bottom: 10px;'><a target='_blank' href='https://viewstripo.email.' style='color: #fdfcdc;'>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>Sự nghiệp</font>
                                                                                                            </font>
                                                                                                        </a></td>
                                                                                                    <td align='center' valign='top' width='25%' class='es-p10t es-p10b es-p5r es-p5l' style='padding-bottom: 10px;'><a target='_blank' href='https://viewstripo.email.' style='color: #fdfcdc;'>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>Những cửa hiệu</font>
                                                                                                            </font>
                                                                                                        </a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align='center' class='esd-block-social es-p10t es-p10b' style='font-size:0'>
                                                                                        <table cellpadding='0' cellspacing='0' class='es-table-not-adapt es-social'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align='center' valign='top' class='es-p20r' esd-tmp-icon-type='facebook'><a target='_blank' href='https://viewstripo.email.'><img title='Facebook' src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/83091605792639894.png' alt='Fb' width='32'></a></td>
                                                                                                    <td align='center' valign='top' class='es-p20r' esd-tmp-icon-type='twitter'><a target='_blank' href='https://viewstripo.email.'><img title='Twitter' src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/79911605792640094.png' alt='Tw' width='32'></a></td>
                                                                                                    <td align='center' valign='top' class='es-p20r' esd-tmp-icon-type='instagram'><a target='_blank' href='https://viewstripo.email.'><img title='Instagram' src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/66471605792641115.png' alt='Inst' width='32'></a></td>
                                                                                                    <td align='center' valign='top' esd-tmp-icon-type='youtube'><a target='_blank' href='https://viewstripo.email.'><img title='Youtube' src='https://tlr.stripocdn.email/content/guids/CABINET_43f57cd17df7173735d2e390a6fa0296/images/78801605792640094.png' alt='Yt' width='32'></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align='center' class='esd-block-text es-p10t es-p10b'>
                                                                                        <p style='font-size: 12px;'>
                                                                                            <font style='vertical-align: inherit;'>
                                                                                                <font style='vertical-align: inherit;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                        <font style='vertical-align: inherit;'>Bạn đã nhận được email này vì bạn đã truy cập vào trang web của chúng tôi hoặc hỏi chúng tôi về bản tin thường xuyên. </font>
                                                                                                    </font>
                                                                                                </font>
                                                                                                <font style='vertical-align: inherit;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                        <font style='vertical-align: inherit;'>Bảo đảm rằng thư của chúng tôi, tôi sẽ được gửi đến thư viện (chứ không phải là các chuỗi hoặc thùng rác của chúng tôi). </font>
                                                                                                    </font>
                                                                                                </font>
                                                                                            </font><br><u><a target='_blank' class='ubsubscribe' style='font-size: 12px;'>
                                                                                                    <font style='vertical-align: inherit;'>
                                                                                                        <font style='vertical-align: inherit;'>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>Cảnh sát bảo mật | </font>
                                                                                                            </font>
                                                                                                        </font>
                                                                                                        <font style='vertical-align: inherit;'>
                                                                                                            <font style='vertical-align: inherit;'>
                                                                                                                <font style='vertical-align: inherit;'>Cancel register</font>
                                                                                                            </font>
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </a></u>
                                                                                        </p>
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
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding='0' cellspacing='0' class='es-content esd-footer-popover' align='center'>
                            <tbody>
                                <tr>
                                    <td class='esd-stripe' align='center'>
                                        <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' width='600'>
                                            <tbody>
                                                <tr>
                                                    <td class='esd-structure es-p20' align='left'>
                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='560' class='esd-container-frame' align='center' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align='center' class='esd-block-image es-infoblock made_with' style='font-size:0'><a target='_blank' href='https://viewstripo.email/?utm_source=templates&utm_medium=email&utm_campaign=kids-3&utm_content=christmas'><img src='https://tlr.stripocdn.email/content/guids/CABINET_9df86e5b6c53dd0319931e2447ed854b/images/64951510234941531.png' alt width='125'></a></td>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
";   
$mess.="<form action='http://shopnoithat.com:81/client/xacnhan.php' method='POST'>
  <input value='$magh' type='hidden' name ='magh'/>
  <input value='1' type='hidden' name='trangthai'/>
  <input value='Xác nhận' type='submit'/>
</form>";
  
$content=$mess;        

try {
    //Server settings
    $mail->SMTPDebug = 0;     
  //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'quangdiep957@gmail.com';                     //SMTP username
    $mail->Password   = 'pcfexzjqycivaglu';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('system@gmail.com', 'Mailer');
    $mail->addAddress($name, 'Joe User');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Xác nhận đơn hàng : ';
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Vui lòng vào email xác nhận đơn hàng';
     unset($_SESSION['cart']);
   //  header('location:email.php');
} catch (Exception $e) {
    echo "gửi mail thất bại: {$mail->ErrorInfo}";
}
?>