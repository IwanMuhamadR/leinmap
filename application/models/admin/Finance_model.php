<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance_model extends CI_Model
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
        $query = $this->db->select('username','password','name')
                    ->from('users')
                    ->where('username',$username)
                    ->where('password',$password)
                    ->limit(1)
                    ->get();

        if($query->num_rows() == 1){
            $data = array(
                'isLogin' => true,
                'username' => $username,
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
            'username' => ''
        );
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
    }
}