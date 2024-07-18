<?php
require_once ('../db_connect/index.php');
$categories = $pdo->prepare("select * from categories");
$categories->execute();
$res = $categories->fetchAll();



$page_titel = "ListCategory";
$template = "ListCategory";
include "../layout.phtml";

?>