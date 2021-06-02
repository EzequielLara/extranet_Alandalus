<?php 

	// Clase Alumno 
	class Alumno{
		private $id;
		private $usuario;
		private $pass;
		private $nombre;
		private $apellidos;
		private $telefono;
		private $email;
		private $curso;
		private $activo;
		private $asignaturas;
		private $notas;

		//constructor
		public function __construct($id, $usuario, $pass, $nombre, $apellidos, $telefono, $email, $curso, $activo, $asignaturas)
		{
			$this->setId($id);
			$this->setUsuario($usuario);
			$this->setPass($pass);
			$this->setNombre($nombre);
			$this->setApellidos($apellidos);
			$this->setTelefono($telefono);
			$this->setEmail($email);
			$this->setCurso($curso);
			$this->setActivo($activo);
			$this->setAsignaturas($asignaturas);
			
			
		}

		function listarDatosEnPantalla(){


			echo "<td>".$this->getId()."</td>";
			echo "<td>".$this->getUsuario()."</td>";
			echo "<td>".$this->getNombre()."</td>";
			echo "<td>".$this->getApellidos()."</td>";
			echo "<td>".$this->getTelefono()."</td>";
			echo "<td>".$this->getEmail()."</td>";
			echo "<td>".$this->curso->getId()."</td>";
			echo "<td>".$this->getActivo()."</td>";
			
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
		public function getTelefono(){
			return $this->telefono;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function getActivo(){
			return $this->activo;
		}
		public function getAsignaturas(){
			return $this->asignaturas;
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
	
/*	
	// Creando alumnos
	$alumnos[] = new Alumno();
	$alumnos[] = new Alumno();
	$alumnos[] = new Alumno();
	$alumnos[0]->alumno= 'Marcos';
	$alumnos[1]->alumno= 'Carlos';
	$alumnos[2]->alumno= 'Amador';
	foreach ($alumnos as $alumno) {
		$alumno->darsaludo();
	}
	*/
?>