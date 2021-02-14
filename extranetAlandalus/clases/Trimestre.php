<?php

	// Clase Trimestre.
	class Trimestre{
		/* Definición de variables de la clase */
		private $id;
		private $nombre;
		private $nombre2;
		private $orden;

		/* Declaramos el constructor. Le pasamos un array con los datos para construir el objeto */
		public function __construct($id, $nombre, $nombre2, $orden){
			
			$this->id = $id;
			$this->nombre = $nombre;
			$this->nombre2 = $nombre2;
			$this->orden = $orden;
		}

		function listarDatosEnPantalla(){


			echo "<td>".$this->getId()."</td>";
			echo "<td>".$this->getNombre()."</td>";
			echo "<td>".$this->getNombre2()."</td>";
			echo "<td>".$this->getOrden()."</td>";
			
		}

		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getNombre2(){
			return $this->nombre2;
		}

		public function getOrden(){
			return $this->orden;
		}        
	}

?>