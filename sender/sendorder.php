<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ********************************
// EMAIL

$subject = "Ваш заказ № " . $_POST['id'] ;
$content = $_POST['body'];
if ($_POST['country'] == "russia") {
	$to = array("postnikov@gmail.com", "tubadubarf@gmail.com", "suryaindress@gmail.com", "I_lisavia@mail.ru", $_POST['email']) ;
} else {
	if ($_POST['country'] == "crimea") {
		$to = array("postnikov@gmail.com", "tubadubacrimea@gmail.com", "suryaindress@gmail.com", "I_lisavia@mail.ru", $_POST['email']) ;
	} else {
		$to = array("tubadubauk@gmail.com") ;
	}
}

if (true) {

	if ($_POST['email'] != "one-click-order") {
		$to = array("tubadubauk@gmail.com", $_POST['email']) ;
	}
	require_once dirname( __FILE__ ) . '/swiftmailer/swiftmailer-5.x/lib/swift_required.php';

	// Mail Transport
	$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
	    ->setUsername('tubadubauk@gmail.com') // Your Gmail Username
	    ->setPassword('gxzkztrecpazuzsf'); // Your Gmail Password

	// Mailer
	$mailer = Swift_Mailer::newInstance($transport);

	// Create a message
	$message = Swift_Message::newInstance($subject)
	    ->setFrom(array('tubadubauk@gmail.com' => 'Tuba-Duba shop')) // can be $_POST['email'] etc...
	    ->setTo($to) // your email / multiple supported.
	    ->setBody($content, 'text/html');

	// Send the message
	if ($mailer->send($message)) {
	    echo 'OK:1';
	} else {
	    echo 'I am sure, your configuration are not correct. :(';
	}
}

// *******************************
// DRIVE

if ($_POST['country'] == "ukraine") {
	try {
		require_once realpath(dirname(__FILE__) . '/vendor/autoload.php');
		include_once dirname( __FILE__ ) . "/google-api-php-client/examples/templates/base.php";
		$client = new Google_Client();
		putenv("GOOGLE_APPLICATION_CREDENTIALS=service-account-credentials.json");
		if ($credentials_file = checkServiceAccountCredentialsFile()) {
		  // set the location manually
		  $client->setAuthConfig($credentials_file);
		} elseif (getenv('GOOGLE_APPLICATION_CREDENTIALS')) {
		  // use the application default credentials
		  $client->useApplicationDefaultCredentials();
		} else {
		  echo missingServiceAccountDetailsWarning();
		  exit;
		}
		$client->setApplicationName("Sheets API Testing");
		$client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);
		$fileId = '14Sg7c84WBR1EMOA60PqYN3yv2VUV07BJ8KTqPlQ24l4'; // '1bJDlunPdkjTf-UKimABtgsCw9W0WzoEhCzWBSkPn2UM';
		$tokenArray = $client->fetchAccessTokenWithAssertion();
		$accessToken = $tokenArray["access_token"];

		 $url = "https://spreadsheets.google.com/feeds/list/$fileId/od6/private/full";
		 $method = 'POST';
		 $headers = ["Authorization" => "Bearer $accessToken", 'Content-Type' => 'application/atom+xml'];
		 $postBody = '<entry xmlns="http://www.w3.org/2005/Atom" xmlns:gsx="http://schemas.google.com/spreadsheets/2006/extended">';

		 //id	name	height	phone	email	country	city	address	where	comments	status	time	what
			foreach($_POST as $key => $value) {
				if ($key != "body") {
					$postBody = $postBody . "<gsx:" . $key . ">" . str_replace(array("<br>","<br/>","<BR>","<BR/>"),"",$value) . "</gsx:" . $key . ">";

				}
			  //echo "POST parameter '$key' has '$value'";
			}

		$postBody = $postBody . "<gsx:status>new</gsx:status>";
		 $postBody = $postBody . '</entry>';
		 $httpClient = new GuzzleHttp\Client(['headers' => $headers]);
		 $resp = $httpClient->request($method, $url, ['body' => $postBody]);
		 $body = $resp->getBody()->getContents();
		 $code = $resp->getStatusCode();
		 $reason = $resp->getReasonPhrase();
	} catch (Exception $e) {
		echo "Error:" . $e;
	}
}
// ********************************
// SMS
if ($_POST['country'] == "ukraine") {
	try {
		$number = $_POST['phone'];
	    // Підключаємося до серверу
	    $client = new SoapClient('http://turbosms.in.ua/api/wsdl.html');

	    // Можна переглянути список доступних функцій серверу
	    //print_r($client->__getFunctions());

	    // Дані авторизації
	    $auth = [
	        'login' => 'akve',
	        'password' => 'dogpile0'
	    ];

	    // Авторизуємося на сервері
	    $result = $client->Auth($auth);

	    // Результат авторизації
	    //echo $result->AuthResult . PHP_EOL;

	    // Отримуємо кількість доступних кредитів
	    $result = $client->GetCreditBalance();
	    if ($result->GetCreditBalanceResult > 0) {
		    $text = "Благодарим за заказ) Мы очень скоро свяжемся с вами, чтобы уточнить все нюансы."; //iconv('windows-1251', 'utf-8', 'Проверка ) ');

		    // Відправляємо повідомлення на один номер.
		    // Підпис відправника може містити англійські букви і цифри. Максимальна довжина - 11 символів.
		    // Номер вказується в повному форматі, включно з плюсом і кодом країни
		    $sms = [
		        'sender' => 'Tuba-Duba',
		        'destination' => $number,
		        'text' => $text
		    ];
		    $result = $client->SendSMS($sms);
		    echo "OK:1";
	    }

	} catch(Exception $e) {
	    echo 'Ошибка: ' . $e->getMessage() . PHP_EOL;
	}
}
?>
