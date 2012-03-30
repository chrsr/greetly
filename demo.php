<?php
    $to = $_GET["e"];
    $subject = 'Greetly Demo!';

    $headers = "From: chris@chrsr.com\r\n";
    $headers .= "Reply-To: chris@chrsr.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html>';
    $message .= '<body>';
    $message .= '<style type="text/css">';
    $message .= 'body{margin:0px;padding:0px;}';
    $message .= '</style>';
    $message .= '<table style="border-collapse:collapse; background-color:#fff;" cellpadding="0" cellspacing="0" border="0" width="100%">';
    $message .= '<tr>';
    $message .= '<td align="center">';
    $message .= '<table style="border-collapse:collapse;" cellpadding="0" cellspacing="0" border="0" width="600">';
    $message .= '<tr>';
    $message .= '<td height="150" align="center">';
    $message .= '<h1>Hey, good looking!</h1>';
    $message .= '</td>';
    $message .= '</tr>';
    $message .= '<tr>';
    $message .= '<td height="150" align="center">';
    $message .= '<img style="display:block;" src="http://chrsr.com/greetly/e.php?e=' . $to . '" width="150" alt="Yes you!" />';
    $message .= '</td>';
    $message .= '</tr>';
    $message .= '</table>';
    $message .= '</td>';
    $message .= '</tr>';
    $message .= '</table>';
    $message .= '</body>';
    $message .= '</html>';	

	mail($to, $subject, $message, $headers);
?>

<h1>Check your email !</h1>