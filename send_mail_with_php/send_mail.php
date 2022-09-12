<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if($_POST['eposta']<>'' && $_POST['isim']<>'' && $_POST['telefon']<>'' && $_POST['mesaj']<>''){
	
$isim=$_POST['isim'];
$eposta=$_POST['eposta'];
$telefon=$_POST['telefon'];
$mesaj=$_POST['mesaj'];

$mail = new PHPMailer(true);								// Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;									// SMTP hata ayıklama // 0 = mesaj göstermez (testler bittikten sonra kullanılmalıdır) // 1 = sadece mesaj gösterir // 2 = hata ve mesaj gösterir
    $mail->isSMTP();										
    $mail->SMTPAuth = true;									// SMTP doğrulamayı etkinleştirir
    $mail->Username = 'iletisim@#######.com';				// SMTP kullanıcı adı (gönderici adresi)
    $mail->Password = '###########';								// SMTP şifre
    $mail->Host = '########.com';						// Mail sunucusunun adresi
	$mail->Port = 587;										// Normal bağlantı için 587, güvenli bağlantı için 465 yazın
	$mail->SMTPSecure = 'tls';								// Enable TLS encryption, '' , 'ssl' , 'tls'
    $mail->SMTPOptions = array(
		'ssl' => [
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true,
		],
	);
	$mail->SetLanguage('tr', 'PHPMailer/language/');
	
    //Recipients
    $mail->setFrom('gonderen@alanadi.com', 'Adınız Soyadınız');		// Mail atıldığında gorulecek isim ve email
    $mail->addAddress('############@gmail.com');							// Mailin gönderileceği alıcı adresi

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'İletişim formundan mesajınız var!';											// Email konusu
    $mail->Body    = "$isim<br />$eposta<br />$telefon<br />$mesaj";				// Mailin içeriği
	$mail->CharSet = 'utf-8';
    $mail->send();
    echo 'Mesaj gönderildi';
} catch (Exception $e) {
    echo 'Mesaj gönderilmedi. Hata: ', $mail->ErrorInfo;
}
}
?>