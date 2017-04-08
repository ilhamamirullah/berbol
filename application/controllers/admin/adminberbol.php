<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminberbol extends CI_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('uploads'); //load model uploads yang berada di folder model
        $this->load->helper(array('url')); //load helper url
        if (!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
  	{
      $this->load->view('viewadmin/index');
  	}

  	public function konten()
  	{
  		$data['record'] = $this->uploads->getkonten();
          $this->load->view('viewadmin/konten',$data);
  	}

  	public function tambah_konten()
  	{
  		$this->load->view('viewadmin/tambah_konten');
  	}

  	public function insert(){
                              $config['upload_path'] = './assets/images';
                              $config['allowed_types'] = 'gif|jpg|jpeg|png';
                              $config['max_size'] = '50000';
                              $this->load->library('upload', $config);
                              if ( ! $this->upload->do_upload('fileupload')) {
                              echo $this->upload->display_errors();
                              }
                              else
                              {
                              $file_data = $this->upload->data();
                              $filenamepass = $file_data['file_name'];

                              $this->uploads->get_insert($filenamepass);
                              redirect('admin/adminberbol/konten');
                              }
                          }

  		function do_hapus_data($id) {
          $this->uploads->do_hapus_data($id);
  		}

  		function do_hapus_data_comment($id) {
          $this->uploads->do_hapus_data_comment($id);
  		}

  		function edit_data($id) {
          $data['record'] = $this->uploads->get_edit_photos_model($id);
          $data['id']=$id;
          $this->load->view('viewadmin/edit_konten', $data);
      }

      public function update($id){
        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '50000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('fileupload')) {
        echo $this->upload->display_errors();
        }
        else
        {
        $file_data = $this->upload->data();
        $filenamepass = $file_data['file_name'];
        $this->uploads->get_update($id,$filenamepass);
        redirect('admin/adminberbol/konten');
        }
      }

  	public function comments()
  	{
  		$data['record'] = $this->uploads->getComment();
          $this->load->view('viewadmin/comment',$data);
  	}

  	function logout() {
          $this->session->unset_userdata('logged_in');
          redirect('admin/adminberbol', 'refresh');
      }
  }
