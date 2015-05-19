<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principalmodel extends CI_Model { 
	function __construct() {
    	parent::__construct();
  	}
  public function login($User,$Pass){
    $this->db->where('Usuario',$User);
      $this->db->where('Password',$Pass);
      $prueba= $this->db->get('usuarios');
      if($prueba->num_rows() == 1){
        foreach ($prueba ->result() as $row){
          if((strcmp($row->Usuario,$User)!== 0)or(strcmp($row->Password,$Pass)!== 0)){
            redirect(base_url());
          }else{
            $data=array(
              'Logeado'=>'1',
            );
            $this->db->where('Usuario',$row->Usuario);
            $this->db->update('usuarios',$data);
            redirect('welcome/home');
          }
        }
        
      }else{
        redirect(base_url());
      }
  }
  public function obtenerDatosMa($IDM){
      $this->db->where('IDM',$IDM);
      $query = $this->db->get('Maestros');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }
  public function obtenerDatosCu($NRC){
      $this->db->where('NRC',$NRC);
      $query = $this->db->get('curso');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }
   public function EliminarMa($IDM){
     $this->db->where('IDM',$IDM);
      $this->db->delete('Maestros');
  }
  public function EliminarCu($NRC){
     $this->db->where('NRC',$NRC);
      $this->db->delete('curso');
  }
  public function obtenerDatosA($IDA){
      $this->db->where('IDA',$IDA);
      $query = $this->db->get('Asignatura');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }
   public function EliminarA($IDA){
     $this->db->where('IDA',$IDA);
      $this->db->delete('Asignatura');
  }


}