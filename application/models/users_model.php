<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Users_model extends CI_Model {

    var $tabel_name = 'users';

    function  __construct() {
        parent::__construct();
    }

    function cek_user_login($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        $query = $this->db->get($this->tabel_name, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

}
?>
