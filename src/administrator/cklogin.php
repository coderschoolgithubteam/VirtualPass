<?php
/*
MIT License

Copyright (c) 2022 Jack Gendill

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
$ini = parse_ini_file('../../config/config.ini');
if ($ini['overide_automatic_domain_name'] == "1"){
  $domain = $ini['domain_name'];
}
if ($ini['overide_automatic_domain_name'] != "1"){
  $domain = $_SERVER['SERVER_NAME'];
}
$cookie_namez = "admin";
$raniddd = rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand() . rand();
$uname = $_POST['uname'];
$passwd = $_POST['passwd'];
$ini = parse_ini_file('../../config/config.ini');
$unameck = $ini['admin_uname'];
$passwdck = $ini['admin_passwd'];
if ($uname == $unameck){
    if ($passwd == $passwdck){
        setcookie($cookie_namez, $raniddd, time() - (1200), "/", $domain, TRUE, TRUE);
        setcookie($cookie_namez, $raniddd, time() + (1200), "/", $domain, TRUE, TRUE);
        $cookie = fopen("cookie/" . $raniddd, "w");
        fwrite($cookie, $raniddd);
        fclose($cookie);
        header("Location: /administrator/menu.php");
    } else{
        echo('<link href="style.css" rel="stylesheet" type="text/css" />Invalid!');
    }
} else{
    echo('<link href="style.css" rel="stylesheet" type="text/css" />Invalid!');
}




?>