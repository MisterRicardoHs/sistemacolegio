 <?php
	require_once("conexion.php");
	class admin{

					private $conexion;
					public function __construct(){
					$this->conexion = new Conexion();
					}

					public function login($cedula,$contrasena){

						$sql = "SELECT * FROM padres WHERE cedula = '$cedula' AND clave = '$contrasena' ";
						$query = $this->conexion->prepare($sql);
						$query->execute();	
						$result=$query->fetchAll(\PDO::FETCH_ASSOC);
						return $result;
						}
						

					public function registroPadres($nombre, $cedula, $correo, $clave){
						$id = NULL;
						$sql = "INSERT INTO padres (id_padre, nombre,cedula,correo,clave) VALUES (:id_padre, :nombre,:cedula,:correo,:clave)";
						$query = $this->conexion->prepare($sql);
						$result = $query->execute([
						'id_padre'=>$id,
						'nombre'=>$nombre,
						'cedula'=>$cedula,
						'correo'=>$correo,
						'clave'=>$clave

						]);
					
						return $result;


						}

						public function registroCarril($carril,$idpadre,$estado){
							$id = NULL;
							$sql = "INSERT INTO padresxcarril (id_pac, id_carril,id_padre,estado) VALUES (:id_pac, :id_carril,:id_padre,:estado)";
							$query = $this->conexion->prepare($sql);
							$result = $query->execute([
							'id_pac'=>$id,
							'id_carril'=>$carril,
							'id_padre'=>$idpadre,
							'estado'=>$estado,
							]);
						
							return $result;
	
						}

						public function registroHijo($nombre,$identi,$seccion,$idpadre){
							$id = NULL;
							$sql = "INSERT INTO hijos (id_hijo, nombre,identi,grado, padre_id) VALUES (:id_hijo, :nombre,:identi,:grado,:padre_id)";
							$query = $this->conexion->prepare($sql);
							$result = $query->execute([
							'id_hijo'=>$id,
							'nombre'=>$nombre,
							'identi'=>$identi,
							'grado'=>$seccion,
							'padre_id' =>$idpadre
							]);
						
							return $result;
						}

						public function eliminarCarrilesUsados($idpadre){
							$sql = "DELETE FROM padresxcarril WHERE id_padre = '$idpadre'";
							$query=$this->conexion->prepare($sql);
							$result=$query->execute();
							return $result;
	
	
							}
						public function eliminarHijo($idhijo){
								$sql = "DELETE FROM hijos WHERE id_hijo = '$idhijo'";
								$query=$this->conexion->prepare($sql);
								$result=$query->execute();
								return $result;
		
		
								}
					public function consultarHijos($idpadre){

						$sql = "SELECT * FROM hijos  WHERE padre_id = '$idpadre' ORDER BY id_hijo desc";
						$query = $this->conexion->prepare($sql);
						$query->execute();	
						$result=$query->fetchAll(\PDO::FETCH_ASSOC);
						return $result;
						}

						public function consultarCarril($idcarril){
							$sql = "select h.nombre, h.grado 
							from hijos as h
							inner join padres as pa
							on pa.id_padre = h.padre_id
							inner join padresxcarril as pc
							on pc.id_padre = pa.id_padre
							where pc.id_carril = '$idcarril'";
							$query = $this->conexion->prepare($sql);
							$query->execute();	
							$result=$query->fetchAll(\PDO::FETCH_ASSOC);
							return $result;
						}

					public function actualizarEstado($usuario, $ultHora, $ultFecha){
						$sql = "UPDATE  sesion SET estado = 'I' WHERE usuario = '$usuario' AND hora_sesion = '$ultHora' AND fecha_sesion = '$ultFecha'";
			        	$query=$this->conexion->prepare($sql);
						$result=$query->execute();
						return $result;


						}

					}
?>