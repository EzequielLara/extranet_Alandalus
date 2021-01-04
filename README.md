# `MEJORAS EXTRANET IES AL-ANDALUS`   
#### Usando PHP para acceder a BBDD  

    Tras realizar un login el usuario "alumno" podrá acceder a sus datos personales y académicos. El usuario  
    "profesor" podra acceder a distintos datos de los alumnos y realizar bajas y altas.   

Partiendo de la tarea "Extranet del IES Al-Ándalus", realizaremos las siguientes ampliaciones y/o mejoras:

1-Utilización de algoritmos de encriptación de contraseñas mediante funciones PHP.

A la hora de almacenar las contraseñas dentro de una tabla en la base de datos, estas se pueden almacenar sin encriptar -como se ha relizado hasta ahora- o encriptadas. El hecho de almacenarlas sin encriptar permite a los usuarios obtener la información de las contraseñas comprometiendo la seguridad de la base de datos y del sitio web en cuestión:

a) Hasta ahora todos los alumnos y profesores tienen la contraseña "12345678" en la BBDD sin encriptar. Realiza un UPDATE sobre el campo pass de las tablas 'ies_alumno' y 'ies_profesor' utilizando un algoritmo de encriptación de PHP, por ejemplo MD5(). Comprueba que el alumno o profesor recien actualizado se ha almacenado con la contraseña encriptada y puede acceder a la extranet.

2-Utilización de sesiones en PHP para llevar un control del acceso de los usuarios registrados.

Utiliza sesiones para establecer un sistema/mecanismo que solo se visualice/muestre la pagina con el menu de usuario registrado solo a los usuarios que hayan introducido un nombre/login y una contraseña/password correctos sin tener que pasar por la página de control de acceso y mostrar la página de control de acceso para el resto de usuarios. Nota. Se deben evitar problemas de seguiridad en dicho sitio simplemente indicando la URL si se conoce, y evitar accesos directos a la página del usuario registrado para usuarios no autenticados.

Los usuarios logeados deben poder acceder directamente a la zona/pagina del menu de usuarios registrados sin tener que pasar por la pagina de control de acceso de usuarios. En está página - pagina de inicio de la parte privada de usuarios registrados- hay que mostrar un mensaje con el nombre del usuario, la fecha y la hora que ha accedido.
Los usuarios no logeados deben ir directamente a la pagina de control de acceso de los usuarios
En el menú de usuario registrado hay que añadir la opción de "Salir" para que finalice la sesión del usuario e impida un acceso posterior, y en sucesivos accesos deba volver a introducir un login y un password.
Realiza una nueva opción de menú, sólo disponible para el profesorado que es tutor, para que pueda matricular a un alumno en su curso.
(Opcional) Utiliza los estilos de bootstrap para realizar los menú y estilos de css.
