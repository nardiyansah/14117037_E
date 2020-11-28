<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id = 0)
	{
        if(isset($this->session->username)){

        }else{
            redirect(base_url('login'));
        }

        if($id==0){
            $this->load->view('mis_index');
        }

        $this->db->where('id', $id);
		$data['artikel'] = $this->db->get('users')->result()[0];
		
		$data['id'] = $id;

        $this->load->view('artikel', $data);
	}

	public function save($id){

		$data = array(
			'artikel' => $_POST['artikel']
		);

		$this->db->where('id', $id);
		$this->db->update('users', $data);

		redirect(base_url('artikel/'.$id));
	}

}
