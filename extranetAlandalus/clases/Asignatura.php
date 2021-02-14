<?php 

	// Clase Asignatura
	class Asignatura{
		private $id;
		private $nombre;
		private $nombre_corto;
	

		//constructor
		public function __construct($id, $nombre, $nombre_corto)
		{
			$this->setId($id);
			$this->setNombre($nombre);
			$this->setNombre_corto($nombre_corto);
		}

        function listarDatosEnPantalla(){


			echo "<td>".$this->getId()."</td>";
			echo "<td>".$this->getNombre()."</td>";
			echo "<td>".$this->getNombre_corto()."</td>";
			
		}


		// Getters
		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}
		public function getNombre_corto(){
			return $this->nombre_corto;
		}

		//Setters
		public function setId($id){
			
			$this->id=$id;
			return $this;
		}
	
		public function setNombre($nombre){
			$this->nombre=$nombre;
			return $this;
		}

		public function setNombre_corto($nombre_corto){
			$this->nombre_corto=$nombre_corto;
			return $this;
		}
		
	}
?>