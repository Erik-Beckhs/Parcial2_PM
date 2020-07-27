<?php
if(!defined('BASEPATH')) exit('no se permite acceso directo al script');
    class ingresadoc extends CI_Model{
        function __construct(){
            $this->load->database();
        }
        function insertDoc($data){
            $this->db->insert('academico3.documento', array('cedula'=>$data['cedula'], 'psa'=>$data['psa'], 'titulo'=>$data['titulo'], 'boleta'=>$data['boleta'], 'matricula'=>$data['matricula']));
        }
    }
?>