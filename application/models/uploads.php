<?php
class Uploads extends CI_Model {

    var $tabel = 'konten';
	var $tabel1 = 'comment';

    function __construct() {
        parent::__construct();
    }

    //fungsi untuk menampilkan semua data dari tabel database
	function getkonten() {
         return $this->db->get('konten');
	}

  function getKontenPopuler(){
    return $this->db->query("SELECT * FROM konten ORDER BY id DESC");
  }

    //fungsi insert konten ke database
    function get_insert($filenamepass){
            $judul = $this->input->post('judulberita');
            $kategori = $this->input->post('kategoriberita');
            $isi = $this->input->post('isiberita');
          	$data = array(
                      	'id'=>rand(),
                      	'judul'=>$judul,
                        'kategori'=>$kategori,
                      	'isi'=>$isi,
                      	'urlphoto'=>$filenamepass
                        	);
                   //$this->db->insert($this->tabel, $data);
            $this->db->insert('konten', $data);
                      return TRUE;
              }

	//fungsi untuk mengambil 1 data
    function get_edit_photos_model($id) {
      $this->db->where('id', $id);
      $kueri = $this->db->get('konten');
      return $kueri->result();
    }

    function getKontenIsi($id) {
      $this->db->where('id', $id);
      $kueri = $this->db->get('konten');
      return $kueri->result();
    }

    function get_update($id,$filenamepass){
      $judul = $this->input->post('judulberita');
      $isi = $this->input->post('isiberita');
      $data = array(
                  'id'=>rand(),
                  'judul'=>$judul,
                  'isi'=>$isi,
                  'urlphoto'=>$filenamepass
                    );

       $this->db->where('id', $id);
       $this->db->update('konten', $data);
       return TRUE;
    }

	//fungsi untuk menghapus data
    function do_hapus_data($id) {
        $this->db->delete('konten', array('id' => $id));
        redirect('admin/adminberbol/konten');
    }

	function do_hapus_data_comment($id) {
        $this->db->delete('comment', array('id' => $id));
        redirect('admin/adminberbol/comments');
    }

	//fungsi insert comment ke database
	function get_insert_comment($data){
    $nama = $this->input->post('userName');
    $email = $this->input->post('userEmail');
    $pesan = $this->input->post('userPesan');
    $data = array(
                'nama'=>$nama,
                'email'=>$email,
                'pesan'=>$pesan
                  );
           //$this->db->insert($this->tabel, $data);
    $this->db->insert('comment', $data);
              return TRUE;
    }

	//fungsi untuk menampilkan semua data dari tabel comment
	function getComment() {
         return $this->db->get('comment');
	}

}

?>
