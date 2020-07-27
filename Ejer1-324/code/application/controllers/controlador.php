<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
	function __construct(){
		parent:: __construct();
        $this->load->helper('form');
        $this->load->model('flujo');
        $this->load->model('ingresadoc');
	}
	public function index()
	{
        if(!isset($_GET['flujo']))
        {
            $f='F1';
            $p='P1';
            $ps='P2';
            $pantalla='averigua';
        }
        else {
            $f=$_GET['flujo'];
            $p=$_GET['proceso'];
            $ps=$_GET['procsig'];
            $pantalla=$_GET['pantalla'];
        }
        $data['estado']=$this->input->get('estado');
        //$data['m']=$this->input->get('mensaje');
        $data['proc']=$this->flujo->obtProceso($p);
        $this->load->view('cabecera');
        $this->load->view($pantalla, $data);
		$this->load->view('motor');
    }
    public function index2()
	{
        if($_GET['btnEnviar']=='Siguiente')
        {  
            if(isset($_GET['ci']))
            {
                if ($_GET['psa']=='0' || $_GET['titulo']=='0' || $_GET['boleta']=='0' || $_GET['matricula']=='0')
                {
                    $data['sw']='0';
                }
                else{
                    $data=array(
                        'cedula' =>$this->input->get('ci'),
                        'psa'=>$this->input->get('psa'),
                        'titulo'=>$this->input->get('titulo'),
                        'boleta'=>$this->input->get('boleta'),
                        'matricula'=>$this->input->get('matricula'));
                        $this->ingresadoc->insertDoc($data);
                        $data['sw']='1';
                        //$data['cond']=$this->flujo->obtProcesoCond($p);
                }  
            }
            if(isset($_GET['estado']))
            {
                $p=$_GET['proceso'];
                $data['condicional']=$this->flujo->obtProcesoCond($p);
                $data['estado']=$this->input->get('estado');
                $this->load->view('auxiliar2', $data);
            }
            else {
                $p=$_GET['procsig'];
                $data['abc']=$this->flujo->obtProceso($p);
                $this->load->view('auxiliar', $data);   
            }
        }
        else {
            $p=$_GET['proceso'];
            if($data['abc']=$this->flujo->obtProcesoAnt($p))
            {
                $this->load->view('auxiliar', $data);
            }
            else{
                header("Location:http://localhost/code/index.php/controlador/");
            }
        }    
    }
}
