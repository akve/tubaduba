<?php  
/**   
 * Даний приклад надає можливість відправляти СМС повідомлення  
 * з заміною номера, переглядати залишок кредитів користувача,  
 * переглядати статус відправлених повідомлень.  
 * -----------------------------------------------------------------  
 * Для роботи даного прикладу необхідно підключити SOAP-розширення.   
 */   

// Всі дані повертаються в кодуванні UTF-8   
header('Content-type: text/html; charset=utf-8');   

echo '<pre>';   
try {  

    // Підключаємося до серверу  
    $client = new SoapClient('http://turbosms.in.ua/api/wsdl.html');   

    // Можна переглянути список доступних функцій серверу   
    print_r($client->__getFunctions());   

    // Дані авторизації   
    $auth = [   
        'login' => 'akve',   
        'password' => 'dogpile0'   
    ];   

    // Авторизуємося на сервері   
    $result = $client->Auth($auth);   

    // Результат авторизації    
    echo $result->AuthResult . PHP_EOL;   

    // Отримуємо кількість доступних кредитів  
    $result = $client->GetCreditBalance();   
    echo $result->GetCreditBalanceResult . PHP_EOL;   

    // Текст повідомлення ОБОВ'ЯЗКОВО відправляти в кодуванні UTF-8  
    $text = "Проверка"; //iconv('windows-1251', 'utf-8', 'Проверка ) ');   

    // Відправляємо повідомлення на один номер.   
    // Підпис відправника може містити англійські букви і цифри. Максимальна довжина - 11 символів.   
    // Номер вказується в повному форматі, включно з плюсом і кодом країни   
    $sms = [   
        'sender' => 'Tuba-Duba',   
        'destination' => '+380501764223',   
        'text' => $text   
    ];  
    $result = $client->SendSMS($sms);  

    //echo $result;

    // Запитуємо статус конкретного повідомлення по ID   
    //$sms = ['MessageId' => 'c9482a41-27d1-44f8-bd5c-d34104ca5ba9'];  
    //$status = $client->GetMessageStatus($sms);   
    //echo $status->GetMessageStatusResult . PHP_EOL;   

} catch(Exception $e) {  
    echo 'Ошибка: ' . $e->getMessage() . PHP_EOL;  
}  
echo '</pre>';  
?>  