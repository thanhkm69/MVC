<?php
require_once "./view/header.php";

if (isset($_GET["pg"])) {
    require_once "./controller/PageController.php";
    $pg = $_GET["pg"];
    switch ($pg) {
        case "products":
            $ctrl_view = new PageController($pg);
            $ctrl_view->view();
    }
} else {
    require_once "./controller/PageController.php";
    require_once "./model/ConnectDB.php";
    $db = new ConnectDB();
    $dm = $db->getAll("select * from danhmuc");
    $ctrl_view = new PageController("home");
    $ctrl_view->view();
    // echo "<pre>";
    // var_dump($dm);
    // echo "</pre>";
}

require_once "./view/footer.php";
