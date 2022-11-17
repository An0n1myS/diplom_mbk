<?php
/*
Template Name: Выход
 */
	setcookie('user', $user['name'], time() - 3600, "/");
	header("location: http://wpfolder/");
?>