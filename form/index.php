<?php


if($_SERVER['REQUEST_METHOD'] !== 'POST') {
echo 'Error';
}

if(!isset($_POST['type']) || empty($_POST['type'])){
exit;
}



$error = [];

$type = $_POST['type'];



// форма в подвале
if($type == 'footerForm'){

if(!isset($_POST['name']) || mb_strlen($_POST['name']) < 2 || preg_match('/[^а-яёА-ЯЁ ]/iu', $_POST['name'])){
array_push($error, ['error' => 'name']);
}



if(!isset($_POST['tell']) || empty($_POST['tell']) || strpos($_POST['tell'], '_') !== false){
array_push($error, ['error' => 'tell']);
}


if(count($error) > 0){
echo json_encode(['error' => $error], JSON_UNESCAPED_UNICODE);
exit;
}


$name = $_POST['name'];
$tell = $_POST['tell'];
$formName = 'Форма в подвале';
$date = date('d.m.Y H:i:s');

// тут далее пишешь отправку данных куда надо (mail/smtp/tg/bitrix/amo/macro...)
//$send = send($args);
//if($send){
//echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
//exit;
//}
//else{
// сбой на сервере - выводим какое-то сообщение
//}





echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
exit;

}




// обратный звонок
if($type == 'callback'){

if(!isset($_POST['name']) || mb_strlen($_POST['name']) < 2 || preg_match('/[^а-яёА-ЯЁ ]/iu', $_POST['name'])){
array_push($error, ['error' => 'name']);
}



if(!isset($_POST['tell']) || empty($_POST['tell']) || strpos($_POST['tell'], '_') !== false){
array_push($error, ['error' => 'tell']);
}


if(count($error) > 0){
echo json_encode(['error' => $error], JSON_UNESCAPED_UNICODE);
exit;
}


$name = $_POST['name'];
$tell = $_POST['tell'];
$formName = 'Обратный звонок';
$date = date('d.m.Y H:i:s');

// тут далее пишешь отправку данных куда надо (mail/smtp/tg/bitrix/amo/macro...)
//$send = send($args);
//if($send){
//echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
//exit;
//}
//else{
// сбой на сервере - выводим какое-то сообщение
//}





echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
exit;






}


// типичные формы
if($type == 'typical'){

if(!isset($_POST['name']) || mb_strlen($_POST['name']) < 2 || preg_match('/[^а-яёА-ЯЁ ]/iu', $_POST['name'])){
array_push($error, ['error' => 'name']);
}



if(!isset($_POST['tell']) || empty($_POST['tell']) || strpos($_POST['tell'], '_') !== false){
array_push($error, ['error' => 'tell']);
}


if(count($error) > 0){
echo json_encode(['error' => $error], JSON_UNESCAPED_UNICODE);
exit;
}


$name = $_POST['name'];
$tell = $_POST['tell'];
$formName = $_POST['requestName'];
$date = date('d.m.Y H:i:s');

// тут далее пишешь отправку данных куда надо (mail/smtp/tg/bitrix/amo/macro...)
//$send = send($args);
//if($send){
//echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
//exit;
//}
//else{
// сбой на сервере - выводим какое-то сообщение
//}





echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
exit;






}



// форма калькулятор
if($type == 'calc'){

if(!isset($_POST['name']) || mb_strlen($_POST['name']) < 2 || preg_match('/[^а-яёА-ЯЁ ]/iu', $_POST['name'])){
array_push($error, ['error' => 'name']);
}



if(!isset($_POST['tell']) || empty($_POST['tell']) || strpos($_POST['tell'], '_') !== false){
array_push($error, ['error' => 'tell']);
}


if(count($error) > 0){
echo json_encode(['error' => $error], JSON_UNESCAPED_UNICODE);
exit;
}


$name = $_POST['name'];
$tell = $_POST['tell'];

$appartmentPrice = $_POST['appartmentPrice'];
$loanTerm = $_POST['loanTerm'];
$initialPayment = $_POST['initialPayment'];
$interestRate = $_POST['interestRate'];
$formName = $_POST['requestName'];
$paymentPerMonth = $_POST['paymentPerMonth'];
$date = date('d.m.Y H:i:s');

// тут далее пишешь отправку данных куда надо (mail/smtp/tg/bitrix/amo/macro...)
//$send = send($args);
//if($send){
//echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
//exit;
//}
//else{
// сбой на сервере - выводим какое-то сообщение
//}




echo json_encode(['success' => 'done'], JSON_UNESCAPED_UNICODE); // ключ success - после успешной отправки формы
exit;






}




// а если какая-то шляпа, то идет он нахуй
else{
exit;
}




//function send($args){
//
//
//
//
//
//}