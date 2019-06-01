# Cómo se hizo

### Práctica 2 - Programación Web

##### [David Gil Bautista](https://github.com/DavidBaug)

##### [Contacto](mailto:davidgilbautista@gmail.com)



## Índice

- ### [Usuarios y libros](#id1)

- ### [Login y logout](#id2)

- ### [Alta de usuario y modificación de los datos personales](#id3)

- ### [Alta libro](#id4)

- ### [ Alta y modificación de una opinión](#id5)

- ### [ Mis libros](#id6)

- ### [ Javascript](#id7)





<div id='id1' />

## Usuarios y libros

Para comenzar debemos crear la base de datos y estructurar las tablas que usaremos para la página. Para ello he optado por usar una tabla por cada "item". Una tabla para guardar la tabla que recoja los datos de un usuario, otra para recoger la información de un libro y otra más para asociar la opinión de un usuario sobre un libro. Sabiendo esto he creado las siguientes tablas:



![./1.PNG](./1.PNG)

En la tabla del **libro valorado** podemos ver que tenemos una clave múltiple que hace referencia a la tabla **libro** y a la tabla **usuario**, es decir, para poder crear la opinión de un libro deberá existir el libro y el usuario. Cosa que puede hacer que a la hora de introducir un libro nuevo con su opinión nos cause algún problema, pero veremos cómo resolverlo después.

Y en **libro** tendremos una clave que iremos aumentando conforme insertemos tuplas.

Para crear e insertar tuplas de las instancias anteriores he creado archivos específicos que realizan estas acciones tras completar el formulario y enviarlo. He optado por recoger todas las valoraciones sobre un libro en distintas tablas, cosa que nos facilitará mostrar los libros leídos en la sección mis libros y calcular la valoración media de un ejemplar específico.



<div id='id2' />

## Login y logout

Para el acceso al sistema y la desconexión uso un formulario en la cabecera y tras rellenar los datos o pulsar el botón de desconexión llamo a las funciones php encargadas de cerrar o iniciar la sesión, para el inicio se busca en la base de datos un par usuario-contraseña que coincida con alguna tupla de la tabla, y si se encuentra se fijan las variables del sistema con los datos del usuario. Obviamente las variables del formulario son obligatorias.

Para la desconexión se borran las variables y se cierra la sesión del servidor.

En caso de no cerrar la sesión esta permanece abierta por lo que tras cerrar la página y volver a acceder a ella entraremos directamente como si hubieramos introducido los datos y hubiérmos iniciado la sesión.


<div id='id3' />

## Alta de usuario y modificación de los datos personales

En caso de no tener un usuario registrado en el sistema deberemos darlo de alta. Al entrar en el registro encontramos un formulario en el que todos los campos son obligatorios y en los que mediante javascript y html controlo los datos que el usuario introduce. En caso de cumplirse todas las condiciones se envían los datos a una función php que los introduce en la base de datos.

Una vez se mandan los datos, por seguridad comprobamos que todos los campos tienen valor, y sabiendo que estos cumplen las condiciones para poder ser insertados en la base de datos creamos la sentencia sql y la ejecutamos, comprobamos si la acción se ha realizado correctamente y en caso contrario mostramos que se ha dado un cierto error.

A la hora de modificar los datos nos encontramos ante una situación similar a la del alta, pero en este caso no será obligatorio rellenar todos los campos, aunque para evitar fallos al entrar a la modificación incrusto los datos del usuario en el formulario y a partir de ahí el usuario podrá modificar aquellos que quiera. 


<div id='id4' />

## Alta libro

Al dar de alta un libro el usuario debe haber iniciado sesión, y tras entrar al enlace del alta se muestra un formulario en el que deberá introducir la información del libro y su opinión posteriormente, no tiene sentido crear un libro sin una opinión, por eso se realizan las acciones en secuencia, primero el alta del libro para poder asignarle un id y posteriormente una opinión usando el id del libro ya creado y el usuario activo.


<div id='id5' />

## Alta y modificación de una opinión

Ya hemos visto cómo se puede crear una opinión a la hora de dar de alta un libro, pero también podemos añadir una opinión a un libro que ya está en la base de datos. Accediendo a la información del libro, donde se muestran sus datos, la valoración media y los distintos comentarios de los usuarios podemos ver un enlace que nos llevará a valorar ese libro concreto. 

En caso de no existir una valoración ya hecha por un usuario accederemos a un formulario en el que al rellenar la opinión y el rating crearemos una nueva tupla, pero en caso de ya existir una con ese par libro-usuario accederemos a un formulario de modificación en el que el usuario podrá modificar la opinión y la valoración.

También se podrá acceder a la modificación de la valoración de un libro si desde la sección mis libros accedemos a uno de los que aparece en "mis libros leídos".


<div id='id6' />

## Mis libros

En esta sección debemos mostrar todos los libros leídos de un usuario y los últimos valorados. Para lo primero tan sólo se tiene que recorrer la tabla de libros valorados filtrando por el usuario, y mediante un bucle for dispongo todas las columnas con sus datos específicos. 

En el caso de los últimos libros valorados simplemente se seleccionan todas las tuplas de la tabla libro y se muestra la información de cada columna recorriendo todas.

<div id='id7' />

## Javascript

He usado Javascript para controlar los datos introducidos en los formularios y para mostrar algunos mensajes de error al intentar acceder a funciones que el usuario no tiene disponible.

Para la validación de los formularios de alta y modificación he comprobado que tengan el tamaño requerido para poder ser insertados en la base de datos, y para otros como el email compruebo que cumpla la estructura que tiene un correo electrónico (*xxxxxxx@aaaa.eee*) y para la inserción de la fecha que sea mayor que 0 (aunque podríamos suponer que no mucha gente va a insertar libros del año 2 D.C.).

Cuando un usuario sin haber iniciado sesión accede a uno de los libros que se muestran en el index verá la misma página que un usuario que ha accedido, cambiando el header, en el que se mostrará el formulario de acceso y la ausencia de la barra de navegación con el submenú de secciones. Al mostrar la misma página también se le da la opción de valorar un libro, debido a esto he usado Javascript para mostrar un mensaje indicando que para acceder a esa función deberá estar logueado.

Para mostrar los libros que ha leído un usuario determinado y mostrarlos al pasar el ratón sobre la imagen de usuario compruebo en php los libros valorados de ese usuario y mando un array a javascript con el cual mostraré una lista en un mensaje emergente.