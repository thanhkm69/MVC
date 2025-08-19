<?php
class PageController
{
    public $view;

    function __construct($view)
    {
        $this->view = $view;
    }
    function view()
    {
        require_once "./view/" . $this->view . ".php";
    }
}
