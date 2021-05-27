<?php  
error_reporting(0);
function conectar_mysli(){
	$cons_usuario="root";
    $cons_contra="root";
    $cons_base_datos="seed";
    $cons_equipo="localhost";
    $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    return $obj_conexion;
}


function listar_ficheros(){
   $obj_conexion = conectar_mysli();
   
    $sql = "SELECT * FROM `circuitos`";  
    $var_resultado = $obj_conexion->query($sql);


    return $var_resultado;
}

function buscar_circuito($id){
   $obj_conexion = conectar_mysli();
   
    // $sql = "SELECT * FROM `circuitos` WHERE id = '$id'";  
    // $var_resultado = $obj_conexion->query($sql);


    $obj_conexion = conectar_mysli();
  	$sql = "SELECT * FROM `circuitos` WHERE id = '$id'";
    $var_resultado = $obj_conexion->query($sql);  
    $row_cnt = $var_resultado->num_rows; 
      if ($row_cnt > 0) {  
        while ($row=$var_resultado->fetch_array()){  
          return $row['id_c'];
        }
      }


    
 }

$listado = listar_ficheros();
$contador = 0;
 while ($row=$listado->fetch_array()){ 


// echo "<br>-";
 // echo $row['ID_CIRCUITO_FK'].'-'.buscar_circuito($row['ID_CIRCUITO_FK']);
// $circuit = buscar_circuito($row['ID_CIRCUITO_FK']);




// echo "Form::create([ 

// 	'type_of_form_id' => ".$row['type_of_form_id'].", 
// 	'slogan_id' => ".$row['slogan_id'].",
// 	'sub_slogan_id' => ".$row['sub_slogan_id'].",
// 	'spreadsheet_order' => ".$row['spreadsheet_order'].", 
// 	'politic_party' => '".utf8_encode($row['politic_party'])."',
// 	'deputy' => '".$row['deputy']."', 
// 	'councilors' => '".$row['councilors']."', 
// 	'ombudsman' => '".$row['ombudsman']."', 
// 	'referendum' => '".$row['referendum']."']);";

// echo "
// 			SubSlogan::create([
// 			    'name' => '".utf8_encode($row['nombre_sub_lema'])."',
// 			    'number_sub_slogan' => '".utf8_encode($row['numero_sub_lema'])."',
// 			    'slug' => '".utf8_encode($row['slug'])."',
// 			    'slogan_id' => '".utf8_encode($row['fk_lema'])."'
// 			]);";

echo "<br>";

// echo "Municipality::create([ 
// 'name' => '".utf8_encode($row['nombre'])."', 
// 'code' => '".utf8_encode($row['codigo_municipio'])."', 
// 'ur' => '".utf8_encode($row['UR'])."', 
// 'councilor' => '".utf8_encode($row['concejales'])."', 
// 'observations' => '".utf8_encode($row['observaciones'])."', 
// 'department' => '".utf8_encode($row['departamento'])."' ]);";

// echo "

// TableControl::create([
// 'table_number'     => '".($row['mesa_archivo'])."', 
// 'entered'     => false, 
// 'loaded'     => false, 
// 'checked'     => false, 
// 'doubtful'     => false, 
// 'archived'     => false, 
// 'claimed'     => false, 
// 'user_entered'     => '".($row['mesa_archivo'])."', 
// 'foreign'     => '".($row['extranjero'])."', 
// 'file_id'     => null]);


// ";
// 
// entradas
// echo "

// 		User::create([
//             'username' => '".($row['Nombre'])."',
//             'place' => 'Jefatura',
//             'password' => Hash::make('".($row['Clave'])."'),
//         ]);
        
        // SystemUser::create([
        //     'user_id' => 7,
        //     'system_id' => 2,
        //     'expired_at' => date(\"Y-m-d H:i:s\", strtotime('+1440 minutes', strtotime($now))),
        //     'active' => true
        // ]);
        // Systemuser_profile::create([
        //     'system_user_id' => 3,
        //     'profile_id' => '".($row['Perfil'])."'
        // ]);


// ";
// 
//  echo "

//  		User::create([
//              'username' => '".($row['Nombre'])."',
//              'place' => 'Jefatura',
//              'password' => Hash::make('".($row['Clave'])."'),
//          ]);
//          $ now = date('Y-m-d H:i:s');
// ";
// echo "<br>";
// echo "
//          SystemUser::create([
//              'user_id' => ".$contador.",
//              'system_id' => 2,
//              'expired_at' => date(\"Y-m-d H:i:s\", strtotime('+1440 minutes', strtotime($ now))),
//              'active' => true
//          ]);
//   ";
// echo "<br>";
//   echo "
//          Systemuser_profile::create([
//              'system_user_id' => ".$contador.",
//              'profile_id' => ".$row['Perfil']."
//          ]);
// ";

// echo "<br>";
// echo "<br>";


	$contador++;

 	// echo ''.$row['nombre'];
 	// municipalidad
 	// echo "Municipality::create([
  //           'name' => '".$row['nombre']."',
  //           'code' => '".$row['codigo_municipio']."',
  //           'ur' => ".$row['UR'].",
  //           'councilor' => '".$row['concejales']."',
  //           'observations' => 'Detalle',
  //           'department' => '".utf8_encode($row['departamento'])."'
  //       ]);";



 	
  // echo "School::create([
  //           'name' => '".utf8_encode($row['nombre_escuela'])."',
  //           'address' => '".utf8_encode($row['domicilio'])."',
  //           'municipality_id' => '".utf8_encode($row['fk_municipio'])."',
  //           'refrence_id' => '".$row['ID']."'
  //       ]);";
  //       
  //       
  echo "Circuit::create([ 
  'name' => '".utf8_encode($row['nombre_circuito'])."', 
  'circuit_number' => '".utf8_encode($row['id_string'])."', 
  'municipality_id' => '".utf8_encode($row['id_municipios'])."', 
  'section_id' => '".utf8_encode($row['fk_seccion'])."' ]);";

    // echo "Place::create([
    // 'table_number' => '".utf8_encode($row['NUMERO_MESA'])."', 
    // 'reference_id' => '".utf8_encode($row['ID_ESCUELA_FK'])."', 
    // 'circuit_id' => '".utf8_encode($row['ID_CIRCUITO_FK'])."',
    // 'type_of_form' => '".utf8_encode($row['ID_TIPO_FORM_FK'])."', 
    // 'voters_numbers' => '".utf8_encode($row['CANTIDAD_ELECTORES'])."', 
    // 'foreign' => '".utf8_encode($row['EXTRANJERO'])."']);";
  //       
  // echo "Candidate::create([
  // 			'name' => '".utf8_encode($row['nombre'])."'
  //       ]);";

   // 			    echo "
			// Slogan::create([
			//     'name' => '".utf8_encode($row['Nombre'])."',
			//     'slogan_number' => '".utf8_encode($row['Numero_lema'])."',
			//     'slug' => '".utf8_encode($row['slug'])."'
			// ]);";
			// 
		// echo "
		// 	SubSlogan::create([
		// 	    'name' => '".utf8_encode($row['nombre_sub_lema'])."',
		// 	    'number_sub_slogan' => '".utf8_encode($row['numero_sub_lema'])."',
		// 	    'municipality_id' => '".utf8_encode($row['fk_municipio'])."',
		// 	    'slug' => '".utf8_encode($row['slug'])."',
		// 	    'slogan_id' => '".utf8_encode($row['fk_lema'])."'
		// 	]);";
	// echo "Form::create([ 
	// 'type_of_form_id' => ".utf8_encode($row['type_of_form_id']).", 
	// 'slogan_id' => ".utf8_encode($row['slogan_id']).", 
	// 'sub_slogan_id' => ".utf8_encode($row['sub_slogan_id']).",
	// 'spreadsheet_order' => ".utf8_encode($row['spreadsheet_order']).", 
	// 'politic_party' => '".utf8_encode($row['politic_party'])."', 
	// 'deputy' => '".utf8_encode($row['deputy'])."', 
	// 'councilors' => '".utf8_encode($row['councilors'])."', 
	// 'ombudsman' => '".utf8_encode($row['ombudsman'])."', 
	// 'referendum' => '".utf8_encode($row['referendum'])."', 
	// ]);";
 	// echo '<br>';

 } 



?>