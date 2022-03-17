<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Database extends CI_Controller {


	public function __construct()
{
	parent::__construct();
	$this->load->model('Model_db');
}


public function index()
{
	$data['data_nd1']= $this->Model_db->getAllData_nd1();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd1', $data);
}

public function node2()
{
	$data['data_nd2']= $this->Model_db->getAllData_nd2();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd2', $data);
}

public function node3()
{
	$data['data_nd3']= $this->Model_db->getAllData_nd3();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd3', $data);
}

public function node4()
{
	$data['data_nd4']= $this->Model_db->getAllData_nd4();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd4', $data);
}

public function node5()
{
	$data['data_nd5']= $this->Model_db->getAllData_nd5();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd5', $data);
}

public function node6()
{
	$data['data_nd6']= $this->Model_db->getAllData_nd6();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd6', $data);
}

public function node7()
{
	$data['data_nd7']= $this->Model_db->getAllData_nd7();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd7', $data);
}

public function node8()
{
	$data['data_nd8']= $this->Model_db->getAllData_nd8();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd8', $data);
}

public function node9()
{
	$data['data_nd9']= $this->Model_db->getAllData_nd9();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd9', $data);
}

public function node10()
{
	$data['data_nd10']= $this->Model_db->getAllData_nd10();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd10', $data);
}

public function node11()
{
	$data['data_nd11']= $this->Model_db->getAllData_nd11();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd11', $data);
}

public function node12()
{
	$data['data_nd12']= $this->Model_db->getAllData_nd12();
	$this->load->view('header_database');
	$this->load->view('database/v_db_nd12', $data);
}

}
