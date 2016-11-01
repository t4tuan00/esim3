<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function index(){

	echo "Tämä on Home-controllerin index-funktio";
	}

public function toka(){
	echo "Tämä on home-cotrollerin toka-funktio";
	}
public function kolmas(){
	$data['nimet']=array(
		array("en"=>'Jussi',"sn"=>'Jokinen'),
		array("en"=>'Tuuve',"sn"=>'Luu'),
		array("en"=>'koivu',"sn"=>'___'),
		array("en"=>'dsfdsaf',"sn"=>'adsfdsaf')
		);
	$data['user']="Antti";
	$data['vuosi']="2016";
	$this->load->view('home/kolmas',$data);
	}

public function neljas(){
	$this->load->model('home_model');
	$data['sisalto']=$this->home_model->getNames();
	$this->load->view('home/neljas',$data);
}
}
