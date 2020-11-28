<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');
    }
    
    public function cek_login(){
        
        if(isset($_POST)){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $user = $this->db->get('users')->result();

            if($user){
                $this->session->set_userdata('username', $user[0]->username);
                redirect(base_url());
            }else{
                redirect(base_url('login'));
            }
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');

        redirect(base_url());
    }
}
