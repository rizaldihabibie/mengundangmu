<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class comment extends CI_Model{
	
    // function __construct() {
    //     $this->tableName = 'comment';
    // }
    // public function saveComment($data){

    //         $insert = $this->db->insert($this->tableName,$data);
    //     return $insert;
    // }

    public function saveComment($data)
	{
		return $this->db->insert('comment', $data);
	}

    public function all()
		{
			$this->db->select('guest.id, guest.first_name, guest.last_name, guest.oauth_uid, guest.picture_url, guest.created, comment.id_comment, comment.id_guest, comment.comment');
			$this->db->from('comment');
			$this->db->join('guest', 'comment.id_guest = guest.oauth_uid');
			// $this->db->order_by('comment.id_comment', 'desc');
			return $this->db->get()->result();
		}
}