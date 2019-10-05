<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function Register($data) {
        $this->db->insert('akun', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;              
    }

    public function getDataAkun($username)
    {
        # code...
        $this->db->select('*');
        $this->db->where('email',$username);
        $this->db->from('akun');
        $query = $this->db->get();
        return $query->row();
    }
    public function getPasswordById($id)
    {
        # code...
        $this->db->select('password');
        $this->db->where('idAkun',$id);
        $this->db->from('akun');
        $query = $this->db->get();
        return $query->row();
    }
    public function getDataAdmin($username)
    {
        $this->db->select('*');
        $this->db->where('username',$username);
        $this->db->from('admin');
        $query = $this->db->get();
        return $query->row();
        # code...
    }

    //Update one item
    public function updateAkun($id,$data)
    {
        $this->db->where('idAkun', $id);
        $this->db->update('akun', $data);
    }

    public function updatePassword($id,$password)
    {
        # code...
        $data = array(
            'password' => $password
        );

        $this->db->where('idAkun', $id);
        $this->db->update('akun', $data);
    }

    


}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */