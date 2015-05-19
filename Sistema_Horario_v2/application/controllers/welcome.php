<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
 	{
   	parent::__construct();
   		$this->load->model('principalmodel');		
 	}

	public function horario(){	
		$this->load->view('DDHorario');
	}

 	public function get_info_horario(){
 		$salon = $_POST['salon'];
 		$this->db->select('Dia,Hora,NCR');
 		$this->db->from('horario');
 		$this->db->where('IDS', $salon);

 		$this->db->order_by("IDHor", "desc"); 
 		$query = $this->db->get();
 		echo json_encode($query->result());
 	}

 	public function web_service(){
		$salon = $_POST['salon'];
		$dia   = $_POST['dia'];
		$hora  = $_POST['hora'];
		$nrc  = $_POST['nrc'];

		switch ($dia) {
			case 1:
				$dia = 'Lunes';
				break;
			case 2:
				$dia = 'Martes';
				break;
			case 3:
				$dia = 'Miercoles';
				break;
			case 4:
				$dia = 'Jueves';
				break;
			case 5:
				$dia = 'Viernes';
				break;
			default:
				$dia = 'Sabado';
				break;
		}

		switch ($hora) {
			case 1:
				$hora = 7;
				break;
			case 2:
				$hora = 9;
				break;
			case 3:
				$hora = 11;
				break;
			case 4:
				$hora = 13;
				break;
			case 5:
				$hora = 15;
				break;
			case 6:
				$hora = 17;
				break;
			default:
				$hora = 19;
				break;
		}

 		$data = array(
 			'IDS' => $salon,
 			'Dia' => $dia,
 			'Hora' => $hora,
 			'NCR' => $nrc
 		);

 		$this->db->insert('horario', $data); 
 		echo 'EXITO!';
 	}
	
	public function index()
	{
		$this->load->view('DDHorario');
	}

	public function salir(){
 		$this->db->where('Logeado','1');
 		$prueba= $this->db->get('usuarios');
 		if($prueba->num_rows() == 1){
 			foreach ($prueba ->result() as $row){
 				$data=array(
              'Logeado'=>'0',
            );
            $this->db->where('Usuario',$row->Usuario);
            $this->db->update('usuarios',$data);
            redirect(base_url());
 			}
 		}
 	}

 	public function falta(){
 		$this->load->view('headers/librerias');
		$this->load->view('falta');
		$this->load->view('headers/footer');
 	}

 	public function home(){
 		$this->load->view('headers/librerias');
		$this->load->view('home_view');
		$this->load->view('headers/footer');
 	}

	public function curso(){
		$this->load->view('headers/librerias');
		$this->load->view('Tcurso');
		$this->load->view('headers/footer');
	}

	public function tmaterias(){
		$this->load->view('headers/librerias');
		$this->load->view('TMaterias');
		$this->load->view('headers/footer');
	}

	public function agmate(){
		$this->load->view('headers/librerias');
		$this->load->view('insertarMaterias');
		$this->load->view('headers/footer');
	}

	public function agcurso(){
		$this->load->view('headers/librerias');
		$this->load->view('insertarCurso');
		$this->load->view('headers/footer');
	}

	public function agmaest(){
		$this->load->view('headers/librerias');
		$this->load->view('insertarMaestro');
		$this->load->view('headers/footer');
	}

	public function editarMaterias(){
		$IDA = $this->uri->segment(3);
		$obtenerDatos= $this->principalmodel->obtenerDatosA($IDA);
		if($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row){
				
				$Asignatura= $row->Asignatura;
				$Carrera=$row->Carrera;
				$Horas=$row->Horas;
				$Requerimiento=$row->Requerimiento;
				$Creditos=$row->Creditos;
			}
			$data = array(
					'IDA'=>$IDA,
					'Asignatura'=>$Asignatura,
					'Carrera'=>$Carrera,
					'Horas'=>$Horas,
					'Requerimiento'=>$Requerimiento,
					'Creditos'=>$Creditos,
				);
		}else{
			return FALSE;
		}
		$this->load->view('headers/librerias');
		$this->load->view('editarMaterias',$data);
		$this->load->view('headers/footer');

	}

	public function editarCurso(){
		$NRC= $this->uri->segment(3);
		$obtenerDatos= $this->principalmodel->obtenerDatosCu($NRC);
		if($obtenerDatos != False){
			foreach ($obtenerDatos->result() as $key) {
					$IDA= $key->IDA;
					$IDM= $key->IDM;
			}
			$data = array(
				'NRC'=>$NRC,
				'IDA'=>$IDA,
				'IDM'=>$IDM
				);
		}else{
			return FALSE;
		}
		$this->load->view('headers/librerias');
		$this->load->view('editarCurso',$data);
		$this->load->view('headers/footer');
	}

	public function eliminarMaterias(){
			$IDA = $this->uri-> segment(3);
			$this->principalmodel->EliminarA($IDA);

			$this->load->view('headers/librerias');
			$this->load->view('TMaterias');
			$this->load->view('headers/footer');
	}

	public function eliminarCurso(){
			$NRC = $this->uri-> segment(3);
			$this->principalmodel->EliminarCu($NRC);

			$this->load->view('headers/librerias');
			$this->load->view('Tcurso');
			$this->load->view('headers/footer');
	}

	public function tmaes(){
		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');
	}
	
	public function editarMaestro(){
		$IDM = $this->uri->segment(3);
		$obtenerDatos= $this->principalmodel->obtenerDatosMa($IDM);
		if($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row){
				
				$Nombre= $row->Nombre;
				$ApellidoP=$row->ApellidoP;
				$ApellidoM=$row->ApellidoM;
			}
			$data = array(
					'IDM'=>$IDM,
					'Nombre'=>$Nombre,
					'ApellidoP'=>$ApellidoP,
					'ApellidoM'=>$ApellidoM,
				);
		}else{
			return FALSE;
		}
		$this->load->view('headers/librerias');
		$this->load->view('editarMaestro',$data);
		$this->load->view('headers/footer');

	}
	public function eliminarMaestro(){
		$IDM = $this->uri-> segment(3);
		$this->principalmodel->EliminarMa($IDM);

		$this->load->view('headers/librerias');
		$this->load->view('TMaestros');
		$this->load->view('headers/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */