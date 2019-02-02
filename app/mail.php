<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['name'])) {$fio=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}
	if(isset ($_POST['step1'])) {$step1=$_POST['step1'];}
	if(isset ($_POST['step2'])) {$step2=$_POST['step2'];}
	if(isset ($_POST['step3'])) {$step3=$_POST['step3'];}
	if(isset ($_POST['step4'])) {$step4=$_POST['step4'];}
	if(isset ($_POST['step5'])) {$step5=$_POST['step5'];}
	if(isset ($_POST['adv'])) {
		foreach ( $_POST['adv'] as $key => $value ) {
			$adv .= "$value,\n";
		}
	}
	if(isset ($_POST['step7'])) {$step7=$_POST['step7'];}

	$to = "info@ms-digital.top"; // Замениь на емаил клиента

	$message = "Форма: $title <br><br>";
	if ( $fio || $phonenum || $step1 || $step2 || $step3 || $step4 || $step5 || $adv || $step7 ) {
		echo $message .= ""
			. ( $fio ?" Имя:  $fio <br>" : "")
			. ( $phonenum ?" Телефон:  $phonenum <br><br>" : "")
			. ( $step1  ? " Сколько заявок и звонков на сегодняшний день: $step1 <br>" : "")
			. ( $step2  ? " Сколько заявок можете обработать за месяц: $step2 <br>" : "")
			. ( $step3  ? " Город: $step3<br>" : "")
			. ( $step4  ? " % потенциальных клиентов, посетив пробное занятие, купивших абонемент: $step4 <br>" : "")
			. ( $step5  ? " Бюджет: $step5 <br>" : "")
			. ( $adv  ? " Уже использовали: $adv <br>" : "")
			. ( $step7  ? " Подарок: $step7 <br>" : "");
	}

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: no-reply@ms-digital.top"; // Заменить домен на домен клиента

	if (!$title && !$phonenum) {
	} else {
		mail($to,"New lead(ms-digital.top)",$message,$headers); // Заменить домен на домен клиента
	}
?>