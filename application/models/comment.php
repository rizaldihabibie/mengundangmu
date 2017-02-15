<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class comment extends CI_Model{
    function __construct() {
        $this->tableName = 'comment';
    }
    public function saveComment($data){

            $insert = $this->db->insert($this->tableName,$data);
        return $insert;
    }
}