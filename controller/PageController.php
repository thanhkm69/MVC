<?php
require_once "./model/ConnectDB.php";

class PageController
{
    private $page;
    private $db;

    function __construct($page)
    {
        $this->page = $page;
        $this->db = new ConnectDB(); // model DB
    }

    function view()
    {
        $data = [];

        switch ($this->page) {
            case "home":
                $data["dm"] = $this->db->getAll("SELECT * FROM danhmuc");
                break;

            case "products":
                break;
        }

        extract($data);
        require "./view/{$this->page}.php";
    }
}
