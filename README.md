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
| Tareas | *T1:* Configurar la conexion a la base de datos T2: Hacer la pantalla principal donde se muestran los registros de las acciones T3: Leer los registros de las acciones en la base de datos y mostrarlos en la pantalla T4: Agregar el mensaje informativo que aparece cuando no existen registros en la base de datos. |

| Numero | 2 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Agregar acciones |
| Descripcion | Como usuario, Deseo la capacidad de agregar nuevas acciones con todos sus campos correspondientes en la aplicación. Para realizar un seguimiento detallado de mis adquisiciones financieras.|
| Criterios de aceptacion | - Dado que se ingresa la fecha de compra, esta debe permitir la selección de una fecha válida y presentarse en un formato fácil de entender. - Al completar el formulario y clicar en el botón de agregar, la nueva acción deberá registrarse en la lista de acciones existente |
| Tareas | T1: Creación de un botón con la leyenda “Agregar compra” con enlace a una nueva página para agregar una compra y estilo en css. T2: Creación de una página con un formulario con los parámetros nombre de acción, fecha, precio por acción y cantidad de compra.T3: Implementación de query de creación de registro en la base de datos utilizando a los parámetros del formulario.|

| Numero | 3 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Costo total de compra |
| Descripcion | Como usuario, Deseo la capacidad de visualizar el costo total de compra de mis  acciones en función del precio de compra por acción y la cantidad de acciones adquiridas, Para conocer la cantidad total que debo pagar por las acciones que he adquirido.|
| Criterios de aceptacion | - Dado que ingreso a la aplicación, cuando visualizo el inicio, entonces este deberá mostrar automáticamente el costo total de compra de mis acciones. -Dado que agrego nuevas acciones entonces el costo total deberá actualizarse instantáneamente. |
| Tareas | T1: Calcular el costo total de compra cada vez que se agrega una nueva acción. T2: Leer y mostrar el costo total de compra en la tabla general de acciones.|

| Numero | 4 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Modificar acciones |
| Descripcion | Como usuario, Deseo poder cambiar los detalles de una acción previamente creada Para realizar cambios o correcciones en los campos según lo necesite.|
| Criterios de aceptacion | - Dado un registro existente en la tabla, al clicar el botón modificar nos mostrara un formulario donde se realizarán los campos, se guardarán y el cambio se verá reflejado en la tabla. |
| Tareas | T1: Crear una nueva columna a la tabla general donde se muestre un botón para actualizar. T2: Crear una nueva pantalla con un formulario para actualizar el registro. T3: Crear la función para que en la base de datos permita actualizar un registro dado un id. T4: Crear la función para obtener el id del registro cuando se de click al botón y llenar el formulario con los datos del registro. T5: Crear la función para que cuando se de click en enviar el formulario se actualice en la base de datos y se muestre en la lista de registros.|

| Numero | 5 |
|-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Titulo | Eliminar acciones |
| Descripcion | Como usuario, Deseo eliminar los registros de acciones previamente creadas Para = deshacerme de registros que considere inútiles o incorrectos de la tabla de acciones.|
| Criterios de aceptacion | - Dado un registro mostrado en la tabla, al clicar el botón “eliminar” el registro ya no aparecerá en los registros de la tabla. |
| Tareas | T1: Creación del botón eliminar dentro de la tabla. T2: Dar estilo al botón eliminar mediante CSS T3: Creación del método eliminar con sentencia query |

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
