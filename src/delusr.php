<?php
//really delete the user
$cookie_name = "phid";
exec("rm -rf departed/" . $_COOKIE[$cookie_name]);
exec("rm -rf registered_phid/" . $_COOKIE[$cookie_name]);
setcookie("phid", "", time() - 9999999999);
?>
<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<title>Bye!</title>
User removed.
