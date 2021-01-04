# `EXTRANET IES AL-ANDALUS`   
#### Usando PHP para acceder a BBDD  



     Tarea realizada para el módulo de DWES: Tras realizar un login el usuario "alumno" podrá acceder a sus datos personales y académicos. El usuario  
    "profesor" podra acceder a distintos datos de los alumnos y realizar bajas y altas.    
    
1.- Dada una Base de datos ("iesalandalus") dada como recurso para la tarea de esta unidad formada por tablas de "alumnos", "asignaturas", "cursos", "profesores" y "trimestres".


- Instala una BBDD MySql en tu máquina local.
- Instala PhpMyadmin en tu máquina local.
- Crea una BBDD llamada "iesalandalus" desde phpmyadmin.
- Ejecuta el fichero .sql en la BBDD creada en el paso anterior.
- Crea un usuario de nombre "admin" y contraseña "administrador" desde phpmyadmin o desde linea de comandos que tenga todos los permisos sobre la base de datos "iesalandalus", es decir, pueda realizar cualquier operacion sobre la Base de datos.
- Crea otro usuario de nombre "usuario" y contraseña "usuario" desde phpmyadmin o desde linea de comandos que solo tenga permisos de lectura sobre las base de datos "iesalandalus", es decir, que pueda realizar listados y busquedas sobre todas las tablas de la base de datos, pero no pueda ni insertar, ni actualizar, ni borrar registros, ni tablas en la base datos.

2.- Crear un acceso a la extranet del IES Al-Ándalus

- El formulario de acceso consultará en la tabla de profesores y alumnos y comprobará de qué tipo de usuario se trata
- Si el usuario es de un alumno, tan sólo mostrará su información y el curso en el que está matriculado y el listado de sus asignaturas.
- Si el usuario es un profesor, se mostrará un menú superior con las siguientes opciones: ALUMNOS || CURSOS || TRIMESTRES || SALIR

2.1.- Menú ALUMNOS

- Se mostrará un listado (una tabla) de alumnos por cursos de la BBDD. El alumno que esté dado de baja, se mostrará con fondo rojo en el listado.

2.2.- Menú CURSOS

- Se mostrará un listado de todos los cursos de la BBDD.

2.3.- Menú TRIMESTRES

- Se mostrará un listado de todos los trimestres de la BBDD.

3.- Ampliación de funcionalidades para el profesor.

- En la sección del listado de ALUMNOS, habrá una opción para matricular alumnos y otra para eliminar cualquier alumno (sólo se dará de baja y nunca se eliminará de la BBDD).
    
### `Algunas imágenes finales del proyecto:` 

  ![](https://github.com/EzequielLara/extranet_Alandalus/blob/main/extranetAlandalus/img/login.JPG)
![](https://github.com/EzequielLara/extranet_Alandalus/blob/main/extranetAlandalus/img/listadoAlumnos.JPG)
