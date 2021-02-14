<?php 

	// Clase Alumno 
	class Curso{
		private $id;
		private $nombre;
	

		//constructor
		public function __construct($id, $nombre)
		{
			$this->setId($id);
			$this->setNombre($nombre);	
			
		}

        function ListarDatosId(){

			
			echo "<td>".$this->getId()."</td>";
			
		}
        function listarDatosNombre(){

			

			echo "<td>".$this->getNombre()."</td>";
			
		}


		// Getters
		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
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
		
	}
?>