<?php
    $json_data = str_replace("\r\n",'',$json_data);
    $json_data = str_replace("\n",'',$json_data);

    $mail = "test@test.com";
    $subject = "Заявка с сайта";

    $headers = "From: \"application\" \n";
    $headers .= "Content-type: text/html; charset=utf-8 \r\n";

    if ($_GET[name] == 'callback'){
        $message = "<h2>Заявка</h2><hr>
				<p><strong>Дата и время:</strong> ".date("Y-m-d H:i:s")."</p>
				<p><strong>Имя:</strong> $_GET[name]</p>
				<p><strong>Телефон:</strong> $_GET[phone]</p>
				<p><strong>Удобное время:</strong> $_GET[time]</p>
	    ";
    }
    if ($_GET[name] == 'message'){
        $message = "<h2>Заявка</h2><hr>
				<p><strong>Дата и время:</strong> ".date("Y-m-d H:i:s")."</p>
				<p><strong>Имя:</strong> $_GET[name]</p>
				<p><strong>Email:</strong> $_GET[email]</p>
				<p><strong>Сообщение:</strong> $_GET[message]</p>
	    ";
    }

    mail($mail, $subject, $message, $headers);

    exit;
?>

