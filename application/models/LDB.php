<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LDB extends CI_Model{
    public function searchByKey($keys){
        $condition = "title LIKE '%" .$keys ."%' OR author LIKE '%" .$keys ."%' OR genre LIKE '%" .$keys ."%' OR ASIN LIKE '%" .$keys ."%'";
        $this->db->select('ASIN, title, author, genreid, genre, imgUrl');
        $this->db->from('buku');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }

    public function login($email, $password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return $query->result();
        } else {
            return false;
        }
    }
}

?>