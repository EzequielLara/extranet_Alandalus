<?php 

	// Clase Profesor
	class Profesor
	{
		private $id;
		private $usuario;
		private $pass;
		private $nombre;
		private $apellidos;
		private $email;
		private $tutor;
	

		//constructor
		public function __construct($id, $usuario, $pass, $nombre, $apellidos, $telefono, $email, $curso, $activo, $asignaturas)
		{
			$this->setId($id);
			$this->setUsuario($usuario);
			$this->setPass($pass);
			$this->setNombre($nombre);
			$this->setApellidos($apellidos);
			$this->setEmail($email);
			$this->setTutor($tutor);
		
			
		}

		function listarDatosEnPantalla(){


			echo "<td>".$this->getId()."</td>";
			echo "<td>".$this->getUsuario()."</td>";
			echo "<td>".$this->getNombre()."</td>";
			echo "<td>".$this->getApellidos()."</td>";
			echo "<td>".$this->getEmail()."</td>";
			echo "<td>".$this->getTutor()."</td>";
			
		}


		// Getters
		public function getId(){
			return $this->id;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function getPass(){
			return $this->pass;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellidos(){
			return $this->apellidos;
		}
	
		public function getEmail(){
			return $this->email;
		}
		public function getTutor(){
			return $this->curso;
		}

		//Setters
		public function setId($id){
			
			$this->id=$id;
			return $this;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
			return $this;
		}
		public function setPass($pass){
			$this->pass = $pass;
			return $this;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
			return $this;
		}
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
			return $this;
		}
		public function setTelefono($telefono){
			$this->telefono=$telefono;
			return $this;
		}
		public function setEmail($email){
			$this->email=$email;
			return $this;
		}
		public function setCurso($curso){
			$this->curso=$curso;
			return $this;
		}
		public function setActivo($activo){
			$this->activo=$activo;
			return $this;
		}
		public function setAsignaturas($asignaturas){
			$this->asignaturas=$asignaturas;
			return $this;
		}
	}
	
		
	/* Creando Profesores
	$profesores[] = new Profesor('Amador', 'Campos Aznar', '2000-12-01');
	$profesores[] = new Profesor('Óscar', 'Gómez', '2000-12-01');
	$profesores[] = new Profesor('Luisa', 'Parra Martínez', '2000-12-01');
	foreach ($profesores as $profesor) {
		$profesor->darsaludo();
	}*/
		
?>