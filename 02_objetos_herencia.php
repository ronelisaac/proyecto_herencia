<?php

	// Incluimos el archivo con la definición de la Clase usada
	//require_once("Parentesco.php");
        require_once("familia.php");

	// Crear un Objeto (una instancia de la Clase):
	/*$obj1= new Persona(1,"Maria","Herrera");
        $obj2= new Parentesco(2,"Jesus","García",$objSraMaria>cedula);
        $obj3= new Parentesco(3,"Isidro","García",$objSrJesus>cedula);
        $obj4 = new Parentesco(4,"Norelis","García",$objSrIsidro>cedula);
        $obj5 = new Parentesco(5,"Antonio","García",$objSrIsidro>cedula);
        for($i=1;$i<6;$i++){
            $
        }*/
          $vector_familia= array();
        //construye el parentesco enviando( cedula,nombre,apellido,id_padre,id_madre)
        $persona = new Parentesco(1,"Maria","Herrera",'','');
        array_push($vector_familia, $persona);
        $persona = new Parentesco(2,"Jesus","García",'',1);
        array_push($vector_familia, $persona);
        $persona = new Parentesco(3,"Isidro","García",2,'');
        array_push($vector_familia, $persona);
        $persona = new Parentesco(4,"Norelis","García",3,'');
        array_push($vector_familia, $persona);
        $persona = new Parentesco(5,"Antonio","García",3,'');
        array_push($vector_familia, $persona);
        
        $persona_consultar=1;
        $familia=new Familia (1);
        $familia->comprobarHijos($vector_familia,1);

       
   foreach($familia->vectorHijos as $elemento_vector)
    {
        $hijos .= "<span style='border:solid 1px;margin-left:5px;'>" . $elemento_vector->nombre . $elemento_vector->apellido."</span>";
    }
    foreach($familia->vectorNietos as $elemento_vector)
    {
        $nietos .= "<span style='border:solid 1px;margin-left:5px;'>". $elemento_vector->nombre. $elemento_vector->apellido . "</span>";
    }
    foreach($familia->vectorBisNietos as $elemento_vector)
    {
        $bisnietos .= "<span style='border:solid 1px;margin-left:5px;'>". $elemento_vector->nombre  . $elemento_vector->apellido .  "</span>";
    }
    echo "<p><h1>Arbol Familiar Sra. Maria Herrera</h1></p><p><h2>Hijos</h2> <br />$hijos</p><p><h2>Nietos</h2><br />$nietos</p><p><h2>Bis Nietos</h2><br>$bisnietos</p>";
        /*
        if (in_array("Irix", $os)) {
    echo "Existe Irix";
}
*/
        
        
        
        
        
        
        
        
        
        
        
        
        
	/*$objUsuario->setNombre();
	$objUsuario->setApellidos();
	$objUsuario->setNombreUsuario("MMMedina");*/
	//$objUsuario->setPassword("1234");

	/*echo "Nombre: [".$objUsuario->getNombre()."]<br/>";         // Devuelve: "Nombre: [MARTINA]"
	echo "Apellidos: [".$objUsuario->getApellidos()."]<br/>";   // Devuelve: "Apellidos: [MARRERO MEDINA]"

	echo "Usuario: [".$objUsuario->getNombreUsuario()."]<br/>";	// Devuelve: "Usuario: [MMMedina]"
	echo "Contraseña: [".$objUsuario->getPassword()."]<p/>";   // Devuelve: "Contraseña: [1234]"
/*
	$objUsuario->caminar();
	$objUsuario->detenerse();
	$objUsuario->detenerse();
	*/

?>
