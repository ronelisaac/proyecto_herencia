<?php

/**
 * Esta clase construye el arbol familiar a trabes de objetos y arreglos
 * Hereda las caracteristicas de una persona y parentesco
 *
 * @author Ronel Lezama <ronellezama@gmail.com>
 * Añoi:2016
 * 
 */ 
	require_once("Parentesco.php");

	class Familia extends Parentesco
	{

		// Propiedades 

		// Constructor:
        function __construct($ci_consultar) {	
		$this->ciconsultar=$ci_consultar;
		$this->cipadre=0;
		$this->cihijo=0;
		$this->cinieto=0;
		$this->cibisnieto=0;
		$this->vectorHijos=array();
		$this->vectorNietos=array();
		$this->vectorBisNietos=array();
        }
		

		// Métodos:
		/**
 * Comprueba los hijos de una busqueda en especifica,
 * la busqueda se realiza a traves de la cedula(identificador unico de la persona)
 * recibe un arreglo de objetos el cual contiene todos los rgistros de la familia cedula, nombre, apellido, cedula del padre, cedula de la madremadre
 * @CCION: COMPARA LOS DATOS DEL PADRE Y LA MADRE Y INSERTA EN EL OBJETO VECTORHIJOS LOS DATOS ENCONTRADOS
 * 		   ASIGNA LA CEDULA ENCONTRADA Y VERIFICA DE UNA VEZ SI TIENE UN HIJO QUE SERIA EL NIETO DE LA CEDULA PRINCIPAL EN EL MÉTODO COMPROBAR NIETOS
 * @return 
 */
	public function comprobarHijos($vect_Familia)
	{
		foreach($vect_Familia as $elemento_vector)
		{
				//verifica si es madre o padre y a su vez la cedula no es del mismo a buscar
		        if(($elemento_vector->madre==$this->ciconsultar or $elemento_vector->padre==$this->ciconsultar)  and $elemento_vector->cedula!=$this->ciconsultar){

								array_push($this->vectorHijos, $elemento_vector);
								$this->cipadre=$elemento_vector->cedula;
								$this->comprobarNietos($vect_Familia,2);
					
				
			}
			
		       
				
		}
			    
	}
			/**
 * Comprueba los hijos de una busqueda en especifica,
 * la busqueda se realiza a traves de la cedula(identificador unico de la persona)
 * recibe un arreglo de objetos el cual contiene todos los rgistros de la familia cedula, nombre, apellido, cedula del padre, cedula de la madremadre
 * @CCION: COMPARA LOS DATOS DEL PADRE Y LA MADRE Y INSERTA EN EL OBJETO vectorNietos LOS DATOS ENCONTRADOS
 *  * @CCION: COMPARA LOS DATOS DEL PADRE Y LA MADRE Y INSERTA EN EL OBJETO vectorNietos LOS DATOS ENCONTRADOS
 * 		   ASIGNA LA CEDULA ENCONTRADA Y VERIFICA DE UNA VEZ SI TIENE UN HIJO  QUE SERIA BISNIETO EN LA BUSQUEDA PRINCIPAL EN EL MÉTODO COMPROBAR bis NIETOS
 * @return 
 */
	public function comprobarNietos($vect_Familia)
	{
		foreach($vect_Familia as $elemento_vector)
		{
				//verifica si es madre o padre y a su vez la cedula no es del mismo a buscar
		        if(($elemento_vector->madre==$this->cipadre or $elemento_vector->padre==$this->cipadre)  and $elemento_vector->cedula!=$this->padre){
								//comprueba nietos
								array_push($this->vectorNietos, $elemento_vector);
								$this->cihijo=$elemento_vector->cedula;
								$this->comprobarBisnietos($vect_Familia);
			}
				
		}
			    
	}
 /**
 * Comprueba los hijos de una busqueda en especifica,
 * la busqueda se realiza a traves de la cedula(identificador unico de la persona)
 * recibe un arreglo de objetos el cual contiene todos los registros de la familia cedula, nombre, apellido, cedula del padre, cedula de la madremadre
 * @CCION: COMPARA LOS DATOS DEL PADRE Y LA MADRE Y INSERTA EN EL OBJETO vectorBisNietos LOS DATOS ENCONTRADOS
 *  * @CCION: COMPARA LOS DATOS DEL PADRE Y LA MADRE Y INSERTA EN EL OBJETO vectorBisNietos LOS DATOS ENCONTRADOS
 * 		   ASIGNA LA CEDULA ENCONTRADA Y
 * @return 
 */
	public function comprobarBisnietos($vect_Familia)
	{
		foreach($vect_Familia as $elemento_vector)
		{
				//verifica si es madre o padre y a su vez la cedula no es del mismo a buscar
		        if(($elemento_vector->madre==$this->cihijo or $elemento_vector->padre==$this->cihijo)  and $elemento_vector->cedula!=$this->cihijo){
								array_push($this->vectorBisNietos, $elemento_vector);
						
				}				
		}
			    
	}


	}

?>
