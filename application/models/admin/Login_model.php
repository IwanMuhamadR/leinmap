<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function load_form_rules(){
        $form_rules = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
            ),
        );
        return $form_rules;
    }

    public function validation(){
        $form = $this->load_form_rules();
        $this->form_validation->set_rules($form);
        if ($this->form_validation->run())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function userCheck(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $query = $this->db->select('*')
                    ->from('users')
                    ->where('username',$username)
                    ->where('password',$password)
                    ->limit(1)
                    ->get();
		// $query2 = $this->db->select('name')
                    // ->from('users')
                    // ->where('username',$username)
                    // ->where('password',$password)
                    // ->limit(1)
                    // ->get();
		// print_r($query->result());die;
        if($query->num_rows() == 1){
			// foreach($query2->result() as $row)
			// {
				// $data = array(
					// 'isLogin' => true,
					// 'name' =>  $row->name,
					// 'usergroup' =>  $row->usergroupid,
					// 'username' => $username					
				// );
				// $this->session->set_userdata($data);
			// }
			$data = array(
					'isLogin' => true,
					'usersid' =>  $query->row()->usersid,
					'name' =>  $query->row()->name,
					'usergroup' =>  $query->row()->usergroupid,
					'username' => $username					
				);
			$this->session->set_userdata($data);
            return true;
        }
        else{
            return false;
        }
    }

    function logout()
    {
        $data = array(
            'isLogin' => false,
			'name' => '',
            'username' => ''			
        );
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
    }
}