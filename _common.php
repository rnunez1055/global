<?php
include '_include.php';
include '_core.php';
include '_class.php';
include '_session.php';
include '_lang.php';
include 'frontend.common.php';
include PRJ_INCLUDE_PATH. 'functions.php';

$GLOBALS["vars"] = Variable::getInstance() ->init();

if ($GLOBALS["vars"]) {
	foreach($GLOBALS["vars"] ->getValues() as $value) {
		define(strtoupper($value ->varname), $value ->valor);
	}
}
?>
