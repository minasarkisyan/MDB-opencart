<?php
//socks5 прокси http://free-proxy.cz/
include "validation.php";

// $token = '595274983:AAFE02e-g90ULRDDhVSwl6ob-NsK2QzNE5I';
// $chat_id = '-287753475';

$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$radio = $_POST['deliver'];
$check = $_POST['check'];
$question = $_POST['question'];
$time = date("G:i:s-j-m-Y");

$name = clean($name);
$phone = clean($phone);
$city = clean($city);
$question = clean($question);
$radio = clean($radio);
$check = clean($check);

$arr = [
	'Быстрый заказ №:'=> $time,
	'Имя клиента: '=> "$name",
	'Номер телефона: ' => "$phone",
	'Город: ' => "$city",
	'Доставка: ' => "$radio",
	'Опция: ' => "$check",
	'Комментарий: ' => "$question"
];

foreach ($arr as $key => $value) {
	echo $message = $key.$value."<br>"."\r\n";
}


//Если вдруг сервер запросит SSL
/*$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
file_get_contents($sendToTelegram, false, stream_context_create($arrContextOptions));
*/

// $parameters = [
// 'chat_id' => '-287753475',
// 'text' => "$message"
// ];
//
// $proxy = '94.177.198.33:1080';
//
// $ch = curl_init();
// $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}html&text={$message}";
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_PROXY, "socks5://$proxy");
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $result = curl_exec($ch);
//
// /*Send to mail*/
//
// $headers = 'From: my-shop.ru@mx.anz.ru' . "\r\n" . 'Reply-To: postpay24@gmail.com' . "\r\n";
//
// mail("neodimagnets@gmail.com", "Заявка с сайта неодимовые-магниты.su", $message, $headers);

?>
