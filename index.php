<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";

$pageData = new Page_Data();
$pageData->setTitle("Dynamic Image Gallery");
$pageData->setContent($nav);
$pageData->setCSS("<link rel='stylesheet' href='./css/layout.css'>");
$pageData->appendCSS("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'>");

$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
	$fileToLoad = $_GET['page'];
} else {
	$fileToLoad = "gallery";
}

include_once "views/$fileToLoad.php";

$pageData->appendContent($info);
$pageData->setScript("<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>");

require "templates/page.php";
echo $page;
