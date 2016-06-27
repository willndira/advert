<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $data["message"] = "Welcome to code ignitor";
        $data["names"] = array("peter","john","james","michael","mathew");
        $this->view_home($data);
    }

    public function view_home($data) {
        $this->load->view('view_home_header.php');
        $this->load->view('view_home_content.php', $data);
        $this->load->view('view_home_footer.php');
    }

}
