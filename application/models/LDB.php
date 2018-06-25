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
}

?>