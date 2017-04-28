<?php

/**
 * Created by PhpStorm.
 * User: CHEVALIER-09
 * Date: 28/04/2017
 * Time: 01.06
 */
class mGtb extends CI_Model
{
    public function save($table, $data){
        return $this->db->insert($table, $data);
    }

    public function get_allData($table){
        return $this->db->get($table);
    }

    public function get_whereData($table, $where){
         return $this->db->get_where($table, $where);
    }

}