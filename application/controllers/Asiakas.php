<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
public function listaa(){
	$this->load->model('Asiakas_model');
	$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
	$this->load->view('asiakas/listaa',$data);
	}
}
