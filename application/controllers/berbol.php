<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class berbol extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('uploads'); //load model uploads yang berada di folder model
        $this->load->helper(array('url')); //load helper url
    }

	public function index()
	{
		$data['record'] = $this->uploads->getKonten();
		$data['populer'] = $this->uploads->getKontenPopuler();
		$this->load->view('index', $data);
	}

	public function singlepage($id)
	{
		$data['record'] = $this->uploads->getKontenIsi($id);
		$data['record2'] = $this->uploads->getKonten();
		$data['populer'] = $this->uploads->getKontenPopuler();
		$data['id']=$id;
		$this->load->view('single_page', $data);
	}

	public function kontak()
	{
		$data['record'] = $this->uploads->getKonten();
		$this->load->view('pages/contact', $data);
	}

	public function insert(){
                $this->uploads->get_insert_comment($data); //akses model untuk menyimpan ke database
                redirect('berbol/kontak'); //jika berhasil maka akan ditampilkan view vupload
        }

	public function tentang()
	{
		$this->load->view('pages/tentang');
	}


}
