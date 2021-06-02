<?php 

	// Clase Asignatura
	class Notas{
		private $alumno;
		private $curso;
		private $asignatura;
		private $profesor;
		private $trimestre;
		private $nota;
	

		//constructor
		public function __construct($alumno, $curso, $asignatura, $profesor, $trimestre, $nota)
		{
			$this->setCurso($curso);
			$this->setAsignatura($asignatura);
			$this->setProfesor($profesor);
			$this->setTrimestre($trimestre);
			$this->setNota($nota);
		}

        function listarDatosEnPantalla(){


			echo "<td>".$this->getCurso()."</td>";
			echo "<td>".$this->getAsignatura()."</td>";
			echo "<td>".$this->getProfesor()."</td>";
			echo "<td>".$this->getTrimestre()."</td>";
			echo "<td>".$this->getNota()."</td>";
			
		}


		// Getters
		public function getAlumno(){
			return $this->alumno;
		}
		public function getCurso(){
			return $this->curso;
		}

		public function getAsignatura(){
			return $this->asignatura;
		}
		public function getProfesor(){
			return $this->profesor;
		}
		public function getTrimestre(){
			return $this->trimestre;
		}
		public function getNota(){
			return $this->nota;
		}

		//Setters
		public function setAlumno($alumno){
			
			$this->alumno=$alumno;
			return $this;
		}
		public function setCurso($curso){
			
			$this->curso=$curso;
			return $this;
		}
	
		public function setAsignatura($asignatura){
			$this->asignatura=$asignatura;
			return $this;
		}

		public function setProfesor($profesor){
			$this->profesor=$profesor;
			return $this;
		}
		public function setTrimestre($trimestre){
			$this->trimestre=$trimestre;
			return $this;
		}

		public function setNota($nota){
			$this->nota=$nota;
			return $this;
		}
		
	}
?>