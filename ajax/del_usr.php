<?
require_once("../lib/init.php");
require_once("../lib/settings.php");
$cs = new CashSett($db, $usr, $lng);
echo $cs->delUsr($_GET['id']);
?>
