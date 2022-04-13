<?php 
	header('Access-Control-Allow-Origin: *');  
	header('Content-Type: text/html; charset=utf-8');
	date_default_timezone_set('Asia/Bangkok');
	ob_start();
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	if($_SERVER['SERVER_NAME'] == 'localhost'){
		require_once($_SERVER['DOCUMENT_ROOT'].'/_gosport/config/domains/gosport/config.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/_gosport/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/_gosport/lib/system/loader/autoload.php'); 
	}else if($_SERVER['SERVER_NAME'] == 'e-petition.energy.go.th'){
		require_once('/var/www/html/e-petition.energy.go.th/config/domains/epetition/config.php'); 
		require_once('/var/www/html/e-petition.energy.go.th/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once('/var/www/html/e-petition.energy.go.th/lib/system/loader/autoload.php'); 
	}else{
		require_once('/home/charoenlap/domains/charoenlap.com/public_html/epetition/config/domains/epetition/config.php'); 
		require_once('/home/charoenlap/domains/charoenlap.com/public_html/epetition/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once('/home/charoenlap/domains/charoenlap.com/public_html/epetition/lib/system/loader/autoload.php'); 
	}
?>