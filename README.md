# `EXTRANET IES AL-ANDALUS`   
### `Tarea`

Crear un acceso de login a una extranet del instituto:

1- Se pedirá usuario y contraseña  
2- Accesos diferentes para dos perfiles diferentes de usuarios, profesores y alumnos.  
3- Los profesores tendrán acceso a los datos de los alumnos y los alumnos solo a sus propios datos.  

# `MEJORAS EXTRANET IES AL-ANDALUS`   
### `Segunda Tarea` 

Partiendo de la tarea "Extranet del IES Al-Ándalus", realizaremos las siguientes ampliaciones y/o mejoras:

1- Utilización de algoritmos de encriptación de contraseñas mediante funciones PHP.

A la hora de almacenar las contraseñas dentro de una tabla en la base de datos, estas se pueden almacenar sin encriptar -como se ha relizado hasta ahora- o encriptadas. El hecho de almacenarlas sin encriptar permite a los usuarios obtener la información de las contraseñas comprometiendo la seguridad de la base de datos y del sitio web en cuestión:

a) Hasta ahora todos los alumnos y profesores tienen la contraseña "12345678" en la BBDD sin encriptar. Realiza un UPDATE sobre el campo pass de las tablas 'ies_alumno' y 'ies_profesor' utilizando un algoritmo de encriptación de PHP, por ejemplo MD5(). Comprueba que el alumno o profesor recien actualizado se ha almacenado con la contraseña encriptada y puede acceder a la extranet.

2- Utilización de sesiones en PHP para llevar un control del acceso de los usuarios registrados.

Utiliza sesiones para establecer un sistema/mecanismo que solo se visualice/muestre la pagina con el menu de usuario registrado solo a los usuarios que hayan introducido un nombre/login y una contraseña/password correctos sin tener que pasar por la página de control de acceso y mostrar la página de control de acceso para el resto de usuarios. Nota. Se deben evitar problemas de seguiridad en dicho sitio simplemente indicando la URL si se conoce, y evitar accesos directos a la página del usuario registrado para usuarios no autenticados.

- Los usuarios logeados deben poder acceder directamente a la zona/pagina del menu de usuarios registrados sin tener que pasar por la pagina de control de acceso de usuarios. 
- En está página - pagina de inicio de la parte privada de usuarios registrados- hay que mostrar un mensaje con el nombre del usuario, la fecha y la hora que ha accedido.
- Los usuarios no logeados deben ir directamente a la pagina de control de acceso de los usuarios
- En el menú de usuario registrado hay que añadir la opción de "Salir" para que finalice la sesión del usuario e impida un acceso posterior, y en sucesivos accesos deba volver a introducir un login y un password.

3- Realiza una nueva opción de menú, sólo disponible para el profesorado que es tutor, para que pueda matricular a un alumno en su curso.

4- (Opcional) Utiliza los estilos de bootstrap para realizar los menú y estilos de css.

# `EXTRANET IES AL-ANDALUS CON POO`   
### `Tercera Tarea` 

Partiendo de la tarea nº 3 "Extranet del IES Al-Ándalus", realizaremos las siguientes ampliaciones y/o mejoras respecto a la POO:

    Diseña las clases necesarias para la extraner del IES, con sus gettes y settes
        Diseña la clase Alumno.php
        Diseña la clase Profesor.php.
        Diseña la clase Asignatura.php.
        Diseña la clase Curso.php.
        Diseña la clase Trimestre.php.
    Autoload. PHP proporciona la funcionalidad spl_autoload_register() que permite que una vez definida una función esta recorra las carpetas de nuestro proyecto cargando todas las clases que localice dentro del proyecto, pero en realidad no las usará hasta que no sean instanciadas.
    
# `EXTRANET IES AL-ANDALUS CONSUMIENDO RECURSOS DE UNA API`   
### `Cuarta Tarea`

Vamos a seguir utilizando nuestra extranet del IES Al-Ándalus para dar un servio a nuestro alumnado y familias, e informar a los usuarios de posibles cierres del centro por causas meteorológicas adversas, dependiendo unas variables meteorológicas, por ejemplo, el centro cerrará sus puertas los días que se preveea rachas de viento mayor a 103km/h:

Viento [103 a 117]: Viento huracanado. Destrucción en todas partes, lluvias muy intensas, inundaciones muy altas.
Viento > 118km/h: Viento huracanado. Voladura de autos, árboles, casas, techos y personas. Puede generar un huracán o un tifón.
La web tiempo.com dispone de una API gratuita para la distribución del tiempo por localidades: API tiempo.com

Regístrate en la web https://api.tiempo.com para poder tener acceso a una cuenta gratuita.

#### `Ejercicio 1`  
Desarrolla un script para poder mostrar una tabla con la predicción del tiempo para Almería (ciudad), en la página de login de la Extranet del IES Al-Ándalus. La información a mostrar en la tabla de inicio será:  
Temperatura máxima y mínima  
Icono del tiempo  
Velocidad del viento  
...  
Predicción a 4 días mínimo.  
#### `Ejercicio 2`  
Dentro de la extranet del PROFESOR y ALUMNO, habrá una nueva opción de menú llamada "AVISOS", en la que aparezca que el centro permanecerá cerrado sólo los días que se prevean un viento huracanado y una temperatura máxima mayor a 45º por un calor asixiante.  
Se mostrará un mensaje genérico y la causa del cierre del centro.  
En caso contrario se mostrará un mensaje genérico del tipo: "No existen avisos. El centro permanecerá abierto"

# `EXTRANET IES AL-ANDALUS ACTUALIZAR DATOS ASINCRONOS`   
### `Quinta Tarea`  

#### `Ejercicio 1`  
Desarrolla una nueva opción de menú en la extranet del alumno llamada "Mis notas" donde cada alumno pueda ver las notas de sus asignaturas y de cada trimestre. 

#### `Ejercicio 2`  
Desarrolla una nueva opción de menú en la extranet del profesor llamada "Evaluaciones" donde pueda introducir o actualizar las notas de las asignaturas que imparte. Utiliza la librería JQuery para no recargar la página y que sea más fácil introducir las notas por el profesor.


