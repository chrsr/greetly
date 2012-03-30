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
    $message .= '<table style="border-collapse:collapse;" cellpadding="0" cellspacing="0" border="0" width="100%">';
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>greetly ...</title>
    <meta name="description" content="gravatar images in your email" />

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-5479657-10']);
        _gaq.push(['_trackPageview']);
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<body>

    <h1>Check your email !</h1>

</body>
</html>