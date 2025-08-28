<?php
require_once "./view/header.php";
require_once "./controller/PageController.php";

$pg = $_GET["pg"] ?? "home";   // Nếu không có pg thì mặc định là home

$ctrl = new PageController($pg);
$ctrl->view();

require_once "./view/footer.php";
