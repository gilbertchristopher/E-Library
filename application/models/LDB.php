<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LDB extends CI_Model{
    //Function ini digunakan untuk mengambil data dari tabel buku sesuai dengan kata kunci yang diberikan
    public function searchByKey($keys, $limit, $offset){
        $condition = "title LIKE '%" .$keys ."%' OR author LIKE '%" .$keys ."%' OR genre LIKE '%" .$keys ."%' OR ASIN LIKE '%" .$keys ."%'";
        $this->db->select('ASIN, title, author, genreId, genre, imgUrl');
        $this->db->from('buku');
        $this->db->where($condition);
<<<<<<< HEAD
        //$this->db->order_by("title", "asc");
=======
        $this->db->limit($limit,$offset);
        $this->db->order_by("title", "asc");
>>>>>>> 98803f9644d320f6bdd0147b5ab2a97afd08415e
        $query = $this->db->get();
        return $query->result();
    }

    public function countDataByKeyword($keyword){
        $condition = "title LIKE '%" .$keyword ."%' OR author LIKE '%" .$keyword ."%' OR genre LIKE '%" .$keyword ."%' OR ASIN LIKE '%" .$keyword ."%'";
        $this->db->select('ASIN, title, author, genreId, genre, imgUrl');
        $this->db->from('buku');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->num_rows();
    }

    //Function ini digunakan untuk mengambil semua data dari tabel buku
    public function displayAllBooks(){
        $this->db->select('ASIN, title, author, genreId, genre, imgUrl');
        $this->db->from('buku');
        $query = $this->db->get();
        return $query->result();
    }

    //Function ini digunakan untuk mengambil data dari tabel buku sesuai filter yang dipilih
    public function displayFilteredBooks($keyword){
        $condition = "genre LIKE '%".$keyword."%'";
        $this->db->select('ASIN, title, author, genreId, genre, imgUrl');
        $this->db->from('buku');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }

    //function ini untuk generate genre di select box
    public function generateGenre(){
        $this->db->distinct();
        $this->db->select('genre');
        $this->db->from('buku');
        $this->db->order_by("genre", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    //function ini untuk mengambil data spesifik yg dipilih untuk diedit atau delete
    public function selectedBooks($asin){
        $condition = "ASIN = '$asin'";
        $this->db->select('ASIN, title, author, genreId, genre, imgUrl');
        $this->db->from('buku');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }

    //function ini untuk menghapus buku yang telah dipilih sblmnya
    public function deleteBook($asin){
        $condition = "ASIN = '$asin'";
        $this->db->where($condition);
        $this->db->delete('buku');
    }

    //function ini untuk mengedit buku yang telah dipilih sebelumnya
    public function editBook($title, $author, $genre, $imgUrl){
        
    }

    //Function ini digunakan untuk login ke dalam sistem
    //Apabila berhasil, maka function akan mengembalikkan data-data berdasarkan email dan password pengguna
    //Apabila gagal, maka function akan mengembalikkan nilai false yang menandakan data tidak ditemukan atau pengguna tidak terdaftar
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

    //Function ini digunakan untuk mendaftarkan pengguna baru
    //Apabila berhasil, maka function akan mengembalikkan nilai TRUE
    //bila gagal, maka function akan mengembalikkan nilai FALSE
    public function registerNewUser($email, $password, $nim){
        $salt = $this->randomStringGenerator();
        $saltedPass = $password .$salt;
        $hashedPass = 

        $this->db->insert('');
    }


    //Function ini digunakan untuk menghasilkan string secara random yang digunakan sebagai salt
    public function randomStringGenerator(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomstring = '';
        for($i = 0; $i < 5; $i++){
            $randomstring .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomstring;
    }

    //Function for  adding books
    public function addBooks($ASIN, $img, $title, $author, $genre){
       // $this->db->insert('book',)
    }


    public function subset($number,$offset){
		return $query = $this->db->get('buku',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
        
        return $this->db->count_all('buku');
	}
}

?>