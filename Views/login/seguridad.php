<?php
@session_start();

if($_SESSION["autentica"] != "SIP"){
	?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>"><?php
	exit();
}
?>