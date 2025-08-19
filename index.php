<?php
require_once "./view/header.php";

if (isset($_GET["pg"])) {
    $pg = $_GET["pg"];
    switch ($pg) {
        case "products":
            require_once "./controller/PageController.php";
            $ctrl_view = new PageController($pg);
            $ctrl_view->view();
    }
} else {
    require_once "./controller/PageController.php";
    $ctrl_view = new PageController("home");
    $ctrl_view->view();
}

require_once "./view/footer.php";
