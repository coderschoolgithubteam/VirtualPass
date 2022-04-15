<?php
$ini = parse_ini_file('../../config/config.ini');
if ($ini['overide_automatic_domain_name'] == "1"){
  $domain = $ini['domain_name'];
}
if ($ini['overide_automatic_domain_name'] != "1"){
  $domain = $_SERVER['SERVER_NAME'];
}
$arrFiles = array();
$handle = opendir('../registerd_qrids');
 
if ($handle) {
    while (($entry = readdir($handle)) !== FALSE) {
        $arrFiles[] = $entry;
    }
}
 
closedir($handle);
if ($arrFiles[2] == ".."){
    $page_val = 1;
}
else{
$value = max($arrFiles);
$page_val = $value+1;
}
$url = "https://" . $domain . "/index.php?page=" . $page_val;
header("Location: /mk_room/regqrid.php?page=" . $page_val);
?>
<title>Make a room!</title>
