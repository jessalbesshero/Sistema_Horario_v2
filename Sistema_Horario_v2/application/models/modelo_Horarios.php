<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * modelo_Horarios: Modelo del sistema horarios versión 2
 *  Modelo MVC Sistema_Horarios_v2 
 * @Sirio 
 * @Jesús
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class modelo_Horarios extends CI_Model { 
	function __construct() {
    	parent::__construct();
  	}

//Login:------------------------------------------------------------------------
    public function login($User,$Pass){
        $this->db->where('Usuario',$User);
        $this->db->where('Password',$Pass);
        $prueba= $this->db->get('usuarios');
        if($prueba->num_rows() == 1){
            foreach ($prueba ->result() as $row){
                if((strcmp($row->Usuario,$User)!== 0)or(strcmp($row->Password,$Pass)!== 0)){
                    redirect(base_url());
                    //echo 'Entro aquí'.base_url();
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
      
    public function consulta_Asignatura($IDA){
        $this->db->where('IDA',$IDA);
        $query = $this->db->get('Asignatura');
        if ($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
        }
    }
     
    public function consulta_Curso($NRC){
        $this->db->where('NRC',$NRC);
        $query = $this->db->get('curso');
        if ($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    public function consulta_Maestros($IDM){
        $this->db->where('IDM',$IDM);
        $query = $this->db->get('Maestros');
        if ($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    public function eliminar_Maestros($IDM){
        $this->db->where('IDM',$IDM);
        $this->db->delete('Maestros');
    }
  
    public function eliminar_Salon($IDS){
        $this->db->where('IDS',$IDS);
        $this->db->delete('salon');
    }
    
    public function eliminar_Curso($NRC){
        $this->db->where('NRC',$NRC);
        $this->db->delete('curso');
    }
   
    public function eliminar_Asignatura($IDA){
        $this->db->where('IDA',$IDA);
        $this->db->delete('Asignatura');
    }
    
    public function eliminar_Carrera($IDCarrera){
        $this->db->where('idCarrera',$IDCarrera);
        $this->db->delete('Carrera');
    }
}
