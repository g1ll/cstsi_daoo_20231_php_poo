<?php 

if($_POST){
	echo "<pre>POST:";
	var_dump($_POST);
	echo "</pre>";
}

if($_GET){
	echo "<pre>GET:";
	var_dump($_GET);
	echo "</pre>";
}