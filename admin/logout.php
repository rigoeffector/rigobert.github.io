<?php
ob_start();
session_start();

if(isset($_SESSION['usr_id'])) {
	session_destroy();
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>
<?php ob_end_flush(); ?>