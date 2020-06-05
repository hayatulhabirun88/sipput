<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


    function ambil_data_pemilih()
    {
        return $this->db->get('pemilih');
    }

    function jumlah_data_pemilih()
    {
        return $this->db->get('pemilih')->num_rows();
    }

}