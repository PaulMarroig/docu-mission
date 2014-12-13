<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelutils {
	
	/**
	 * Retourne une instance de utilisateur courant stock� en variable de session
	 * @return Utilisateur
	 */
	public function getActiveUser(){
		$CI =& get_instance();
		return $CI->session->userdata("user");
	}
	
	/**
	 * Nettoie les variables global Post
	 * @param unknown $param
	 * @return string
	 */
	public function cleanPost($param){
		$param=htmlspecialchars($param);
		return $param;	
	}
	
	public function ifempty($params=array()){
		$checked=true;
		foreach ($params as $param){
			if($checked==true){
				if(empty($param)){
					$checked=false;
				}
			}
		}
		return $checked;
	}
}