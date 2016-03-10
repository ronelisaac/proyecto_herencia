<?php
/**
 * Esta clase crea las entidades y objetos relacionados a un parentesco directo padre o madre
 * Hereda las caracteristicas de una persona
 *
 * @author Ronel Lezama <ronellezama@gmail.com>
 * Añoi:2016
 * 
 */ 
	require_once("Persona.php");

	class Parentesco extends Persona
	{

		// Propiedades

		// Constructor:
        function __construct($ci,$n,$a,$padre,$madre) {
			parent::__construct($ci,$n,$a);
			$this->padre=$padre;
			$this->madre=$madre;
        }
		
		
		
		//public function get

		// Métodos:

        public function getPadre() {
            return $this->padre;
        }

         public function getMadre() {
            return $this->madre;
        }


	}

?>
