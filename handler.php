<?php

require_once 'phpmailer.php';
$message = 'Поступил новый заказ на  <b>'.$_SERVER['HTTP_HOST'].'</b>: <br />';
$respons = array();
foreach ($_POST as $key => $value){
	if(in_array($key, array('url' ,'amount', 'action', 'user_id', 'referrer', 'page_id', 'project_id'))) continue;
	$message .= '<b>'.htmlspecialchars($key).'</b>: '.htmlspecialchars($value).'<br />';
}
$message .= '<b>Хвост</b>: '. htmlspecialchars($_POST['referrer']).'<br />';
$message .= '<b>IP</b>: '. $_SERVER['REMOTE_ADDR'].'<br />';
$message .= '<b>Дата и время</b>: '. date('Y-m-d H:i:s').'<br />';
$message .= 'Это письмо отправлено автоматически и на него не надо отвечать. Если Вы получили данное письмо по ошибке просто проигнорируйте его.';
$mail = new PHPMailerLite();
$mail->IsMail();
//$mail->SetFrom('robot@'.$_SERVER['HTTP_HOST']);
$mail->AddAddress('dimakel.46.64@mail.ru');
$mail->Subject = 'Уведомление о новом заказе';
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
if(isset($_FILES)){
	$message .= '<hr />';
	foreach ($_FILES as $file){
		$mail->AddAttachment($file['tmp_name'], $file['name']);
		$message .= 'Приложен файл: ' . htmlspecialchars($file['name']). ' Будте осторожны! / Файлы могут содержать вредоносный код.';
	}
}
$mail->MsgHTML($message);
if (!$mail->Send()) {
	$respons['status'] = 'ERROR';
	$respons['msg'] = 'Ошибка отправки сообщения!';
	echo json_encode($respons);
	exit;
}
$respons['status'] = 'OK';
$respons['msg'] = 'Ваша заявка успешно отправлена.';
echo json_encode($respons);
exit;
