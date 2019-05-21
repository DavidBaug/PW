# Cómo se hizo

### Práctica 2 - Programación Web

##### [David Gil Bautista](https://github.com/DavidBaug)

##### [Contacto](mailto:davidgilbautista@gmail.com)



## Índice

- ### [Estructura base de datos](#id1)

- ### algo

- ### algo más







<div id='id1' />

## Estructura base de datos



Para comenzar debemos crear la base de datos y estructurar las tablas que usaremos para la página. Para ello he optado por usar una tabla por cada "item". Una tabla para guardar la tabla que recoja los datos de un usuario, otra para recoger la información de un libro y otra más para asociar la opinión de un usuario sobre un libro. Sabiendo esto he creado las siguientes tablas:



![./1.PNG](./1.PNG)

En la tabla del **libro valorado** podemos ver que tenemos una clave múltiple que hace referencia a la tabla **libro** y a la tabla **usuario**, es decir, para poder crear la opinión de un libro deberá existir el libro y el usuario. Cosa que puede hacer que a la hora de introducir un libro nuevo con su opinión nos cause algún problema, pero veremos cómo resolverlo después.



