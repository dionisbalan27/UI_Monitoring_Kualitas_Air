<?php

class Model_db extends CI_Model
{
    public function __construct()
    {
	parent::__construct();
	$this->load->database();
}
      public function getAllData_nd1()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd1');
        return $query->result();
    }

    public function getAllData_nd2()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd2');
        return $query->result();
    }

    public function getAllData_nd3()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd3');
        return $query->result();
    }

    public function getAllData_nd4()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd4');
        return $query->result();
    }

    public function getAllData_nd5()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd5');
        return $query->result();
    }

    public function getAllData_nd6()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd6');
        return $query->result();
    }

    public function getAllData_nd7()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd7');
        return $query->result();
    }

    public function getAllData_nd8()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd8');
        return $query->result();
    }

    public function getAllData_nd9()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd9');
        return $query->result();
    }

    public function getAllData_nd10()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd10');
        return $query->result();
    }

    public function getAllData_nd11()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd11');
        return $query->result();
    }

    public function getAllData_nd12()
    {
        $this->db->order_by('id','DESC');
        $query=$this->db->get('esptable_nd12');
        return $query->result();
    }


}