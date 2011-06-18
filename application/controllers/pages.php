<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function home() {
        $data['page'] = 'pages/home';
        $this->load->view('template', $data);
    }

}

?>
