# Proyecto - Construccion de Software - Grupo 7
## Tabla de Contenidos

* [Preparación](#Preparación)
* [Historias de Usuario](#Historias-de-Usuario)
* [Desarrollo](#Desarrollo)
* [Integrantes](#integrantes)

## Preparacion

El proyecto consiste en desarrollar un producto software que permita llevar un registro de acciones en donde se ingresen los campos de nombre, fecha, precio de compra y cantidad de acciones. Dados todos los campos se agrega un último campo donde se calcula el costo total de la compra el cual es el producto del precio de compra por la cantidad de acciones. A continuación, se presenta una imagen de cómo se vería este registro de acciones con sus respectivos campos

## Historias de Usuario

| Numero | 1 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Ver acciones |
| Descripcion | Como usuario, Quiero ver mis acciones con los datos de nombre, fecha de compra, precio de compra por accion y cantidad de acciones Para tener un registro claro y accesible de mis transacciones financieras.|
| Criterios de aceptacion | - Dado que se tiene una lista vacia, cuando el usuario ingresa a la aplicacion, entonces se muestra un mensaje indicado que no existen registros. - Dado que se tienen registros, cuando el usuario ingresa a la aplicacion se mostrara una tabla con todas las acciones y sus campos respectivos |
| Tareas | T1: Configurar la conexion a la base de datos. <br> T2: Hacer la pantalla principal donde se muestran los registros de las acciones. <br> T3: Leer los registros de las acciones en la base de datos y mostrarlos en la pantalla. <br> T4: Agregar el mensaje informativo que aparece cuando no existen registros en la base de datos. |

| Numero | 2 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Agregar acciones |
| Descripcion | Como usuario, Deseo la capacidad de agregar nuevas acciones con todos sus campos correspondientes en la aplicación. Para realizar un seguimiento detallado de mis adquisiciones financieras.|
| Criterios de aceptacion | - Dado que se ingresa la fecha de compra, esta debe permitir la selección de una fecha válida y presentarse en un formato fácil de entender. - Al completar el formulario y clicar en el botón de agregar, la nueva acción deberá registrarse en la lista de acciones existente |
| Tareas | T1: Creación de un botón con la leyenda “Agregar compra” con enlace a una nueva página para agregar una compra y estilo en css. <br> T2: Creación de una página con un formulario con los parámetros nombre de acción, fecha, precio por acción y cantidad de compra. <br> T3: Implementación de query de creación de registro en la base de datos utilizando a los parámetros del formulario.|

| Numero | 3 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Costo total de compra |
| Descripcion | Como usuario, Deseo la capacidad de visualizar el costo total de compra de mis  acciones en función del precio de compra por acción y la cantidad de acciones adquiridas, Para conocer la cantidad total que debo pagar por las acciones que he adquirido.|
| Criterios de aceptacion | - Dado que ingreso a la aplicación, cuando visualizo el inicio, entonces este deberá mostrar automáticamente el costo total de compra de mis acciones. -Dado que agrego nuevas acciones entonces el costo total deberá actualizarse instantáneamente. |
| Tareas | T1: Calcular el costo total de compra cada vez que se agrega una nueva acción. <br> T2: Leer y mostrar el costo total de compra en la tabla general de acciones.|

| Numero | 4 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Modificar acciones |
| Descripcion | Como usuario, Deseo poder cambiar los detalles de una acción previamente creada Para realizar cambios o correcciones en los campos según lo necesite.|
| Criterios de aceptacion | - Dado un registro existente en la tabla, al clicar el botón modificar nos mostrara un formulario donde se realizarán los campos, se guardarán y el cambio se verá reflejado en la tabla. |
| Tareas | T1: Crear una nueva columna a la tabla general donde se muestre un botón para actualizar. <br> T2: Crear una nueva pantalla con un formulario para actualizar el registro. <br> T3: Crear la función para que en la base de datos permita actualizar un registro dado un id. <br> T4: Crear la función para obtener el id del registro cuando se de click al botón y llenar el formulario con los datos del registro. <br> T5: Crear la función para que cuando se de click en enviar el formulario se actualice en la base de datos y se muestre en la lista de registros.|

| Numero | 5 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Eliminar acciones |
| Descripcion | Como usuario, Deseo eliminar los registros de acciones previamente creadas Para deshacerme de registros que considere inútiles o incorrectos de la tabla de acciones.|
| Criterios de aceptacion | - Dado un registro mostrado en la tabla, al clicar el botón “eliminar” el registro ya no aparecerá en los registros de la tabla. |
| Tareas | T1: Creación del botón eliminar dentro de la tabla. <br> T2: Dar estilo al botón eliminar mediante CSS. <br> T3: Creación del método eliminar con sentencia query |

| Numero | 6 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Mostrar Cambio, Ganancia/Perdida |
| Descripcion | Como usuario, Deseo ver el porcentaje de cambio y la ganancia o perdida de cada compra Para verificar los beneficios o perdidas de mis compras.|
| Criterios de aceptacion | - Dada una compra, al mostrar la tabla, deberan verse los campos de porcentaje de cambio y el calculo de ganancia o perdida. |
| Tareas | T1: Crear el campo de cambio y de ganancia/perdida en la base de datos. <br> T2: Crear el campo de cambio y de ganancia/perdida en la tabla mostrada. <br> T3: Crear el script que calcula el valor de los campos cambio y ganancia/perdida. |

| Numero | 7 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Ordenar Registros |
| Descripcion | Como usuario, Deseo ver los registros ordenados segun un campo de la tabla en especifico Para facilitar la interpretacion de los registros segun un orden a mi criterio.|
| Criterios de aceptacion | - Dados varios registros en la tabla, al seleccionar el criterio de ordenamiento, deberan ordenarse los registros en la tabla segun le criterio seleccionado. |
| Tareas | T1: Crear combo box con los criterios de ordenamiento. <br> T2: Crear el Boton que ordena los registros a partir de un criterio dado. <br> T3: Crear el script que ordena los registros y los muestra en la tabla. |

## Desarrollo

Para el desarrollo del software se utilizó un enfoque ágil debido a la complicación del tiempo.
En este caso se utilizó programación extrema en conjunto de TDD. El desarrollo se dividió en 3 iteraciones:

- Definicion de pruebas
- Primera iteración correspondientes a las historias 1, 2 y 3.
- Segunda iteración implementación de las ultimas historias de usuario

Las tecnologias utilizadas en este proyecto fueron las siguientes:

- MySQL base de datos 
- PHP lenguaje programación centrado en diseño de web y servidor 
- CSS para diseño llamativo
- PHPunit para desarrollo y ejecución de pruebas.

## Integrantes

| [<img src="https://avatars.githubusercontent.com/u/133171706?v=4" width=115><br><sub>Christopher Zambrano</sub>](https://github.com/Chrisathan12) |  [<img src="https://avatars.githubusercontent.com/u/143550175?v=4" width=115><br><sub>Luis de la Cruz</sub>](https://github.com/LuLesDLC) |  [<img src="https://avatars.githubusercontent.com/u/73501325?v=4" width=115><br><sub>Sebastian Moyano</sub>](https://github.com/WSebastianML) |
| :---: | :---: | :---: |
