<?php
/**
 * Esta clase crea las entidades y objetos relacionadosa a una persona.
 *
 * @author Ronel Lezama <ronellezama@gmail.com>
 * Añoi:2016
 * 
 */ 
	class Persona
	{
		// Constructor:
        function __construct($ci,$nmb,$apl) {
		$this->cedula=$ci;
		$this->nombre=$nmb;
		$this->apellido=$apl;		
			
        }

		// Métodos:


        function getNombre() {
            return $this->nombre;
        }

        public function setNombre( $nombre ) {
            $this->nombre = $nombre;
        }

        public function getApellidos() {
            return $this->apellidos;
        }

        public function setApellidos( $apellidos ) {
            $this->apellidos = $apellidos;
        }
/*
        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo( $sexo ) {
            $this->sexo = $sexo;
        }*/
/*
        public function caminar() 
		{
			if( $this->caminando == true ) 
			{
				echo "Ya está caminando...<br />";
			}
			else
			{
				$this->caminando = true;
				echo "Comienza a caminar...<br />";
			}
        }

        public function detenerse() 
		{
			if( $this->caminando == true ) 
			{
				$this->caminando = false;
				echo "Se detiene...<br />";
			}
			else
			{
				echo "No está caminando...<br />";
			}

        }*/

	}

?>

