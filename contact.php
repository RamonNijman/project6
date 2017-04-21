<?php
$veld_naam = $_POST['naam'];
$veld_email = $_POST['email'];
$veld_tel = $_POST['tel'];
$veld_onderwerp = $_POST['onderwerp'];
$veld_bericht = $_POST['bericht'];

$mail_naar = 'rnijman2000@gmail.com';
$onderwerp = 'Bericht ontvangen van: '.$veld_naam;

$body_bericht = 'Naam: '.$veld_naam."\n";
$body_bericht .= 'E-mail: '.$veld_email."\n";
$body_bericht .= 'Telefoonnummer: '.$veld_tel."\n";
$body_bericht .= 'Onderwerp: '.$veld_onderwerp."\n";
$body_bericht .= 'Bericht: '.$veld_bericht;

$headers = 'From: '.$veld_email."\r\n";
$headers .= 'Reply-To: '.$veld_email."\r\n";

$mail_status = mail($mail_naar, $onderwerp, $body_bericht, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Bedankt voor uw email. We proberen zo spoedig mogelijk te antwoorden!');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Oeps, er is een fout. Stuur aub, een email naar: info@colicss.nl');
		window.location = 'index.html#contact';
	</script>
<?php
}
?>