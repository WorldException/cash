<?
require_once("../../lib/init.php");
require_once("../../lib/analiz.php");

$ch_analiz = new CashAnaliz($db, $usr);
echo json_encode( $ch_analiz->getPurs($_GET['from'], $_GET['to'], $_GET['in'], $_GET['usr']) );
?>

