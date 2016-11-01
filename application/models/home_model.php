<?php 
class Home_model extends CI_Model {

public function getNames(){
	$names=array(
		array("en"=>'Jussi',"sn"=>'Jokinen'),
		array("en"=>'Tuuve',"sn"=>'Luu'),
		array("en"=>'koivu',"sn"=>'___'),
		array("en"=>'dsfdsaf',"sn"=>'adsfdsaf95')
		);
	return $names;
}

}