Trabajos individuales de la materia entornos graficos.

- - Ejercicio N2 --

1) HTML o HiperxText Makup Language , es un lenguage usado para la elaboracion de paginas web, define una estructura basica con los elementos que debe contener una pagina Web. Fue creado por Tim Berners-Lee en 1990, se han echos varias versiones de tal lenguaje , HTML1.0 , HTML2.0 , HTML3.2 , HTML4.0 y 4.01 , XHTML y la ultima version HTML5 .

2) Publicar documentos en línea con encabezados, textos, tablas, listas, fotos, 
etc. 
Obtener información en línea a través de vínculos de hipertexto, haciendo 
clic con el botón de un ratón.
Diseñar formularios para realizar transacciones con servicios remotos, para
buscar información, hacer reservas, pedir productos, etc. 
Incluir hojas de cálculo, videoclips, sonidos, y otras aplicaciones directamente 
en sus documentos. 

3) Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Los elementos desaprobados pueden declararse obsoletos en el futuro. Los atributoos presentacion de HTML han sido desaprobados cuando existen alternativas con hojas de estilo.

Un elemento o atributo obsoleto es aquel para el cual no hay garantia de soporte por parte de un agente de usuario. 

4) DTD (document type definition) es una especificacion utilizada en la programacion web para definir la estructura y las reglas de validacion de un documento. Este es un conjunto de declaraciones que describen el tipo de los elementos y los atributos que deben incluirse en un archivo para que sea considerado valido.

En HTML 4.01 los DTDs posibles son =
    DTD HTML 4.01 Estricto = incluye todos los elementos y atributos que no han sido desaprobados o que no aparecen en documentos de marcos.

    DTD HTML 4.01 Transicional = Incluye todo lo que incluye el DTD estricto mas los elementos y atributos desaprobados.

    DTD HTML 4.01 para documentos con marcos = Incluye todo lo que incluye el DTD transicional mas los marcos/

5) Metadatos = Marco de descripcion de recursos del W3C se convirtio en recomendacin del W3C en febrero de 1999.
Permite a los autores especificar metadatos legibles por maquina sobre documentos HTML y otros recursos accesibles por la red. Estos pueden especificar , lenguaje , codificacion de caracteres , palabras claves para los motores de busqueda, etc.


- - Ejercicio N2 --


2.a) = Este elemento puede ir en cualquier parte del codigo ya que es un comentario donde lo que esta dentro de

2.b) = Este elemento va dentro del body de un HTML. Un div es como tomar un bloque del body . Sirve para "seccionar" el codigo. tiene un atributo que es id , un id es unico para cada elemento , nos permite edintificar el elemento para vincularlo a scripts o hojas de estilos.

2.c) = Este elemento va dentro del Body. Es una imagen que en este caso tiene el atributo src vacio por lo tanto no muestra ninguna imagen, igualmente tiene un id y un name , el name sirve por ejemplo para que cuando recibamos los datos y vaya a un servidor pues este pueda interpretar los datos del form por el nombre. Tiene el atributo width que es el ancho de la imagen con un valor de 32 pixeles. Tiene el atributo heigth que es el alto de la imagen con un valor de 32 pixeles. Tiene el atributo longdesc que contiene la ruta para ver la descripcion de la imagen, en este caso "detalles.htm"

2.d) = Los elementos meta tambien llamados metatags van colocados en el Head del codigo HTML. Estos elementos metas nos brindan detalles/caracteristicas del documento. El PRIMER meta tiene el nombre keywords que nos indica que el content va a tener las palabras claves de nuesta pagina, estas palabras sirven para que los motores de busqueda nos coloquen en mejor posicion al buscar estas palabras. El atributo lang nos indica que el lenguaje de nuestra pagina es Español con el valor "es". El SEGUNDO meta tiene el atributo "http-equiv" que se utiliza en HTML para simular una respuesta HTTP. A través de esta etiqueta, podemos especificar ciertos encabezados o metadatos que afectan la forma en que los navegadores interpretan y procesan la página web, en este caso tiene el valor "expires" se utiliza para especificar la fecha o el tiempo después del cual la respuesta se considera caducada. El atributo content nos da hora/fecha de cuando se accionará el http-equiv , en este caso el valor es 16 de Septiembre del 2019 a las 19:49hs.

2.e) = Este elemento va en el Body. Es un hipervinculo, que por el atributo "href" sabemos que nos redirigira a ese link. El atributo type con ese valor nos indica que el tipo de contenido de la pagina web a la que nos dirige el hipervinculo es de tipo texto. El atributo "hrefLang" nos indica con que idioma queremos que abra la pagina del link, en este caso en español. El atributo "charset" define el juego de caracteres a utilizar para mostrar el documento. El atributo "rel" es acerca de la relación entre el documento y el archivo que estamos incorporando por medio de href. El hipervinculo tiene un contenido que es "Resumen HTML ".

2.f) = Estos elementos tambien van situados en el Body. Es una tabla con un width o sea un ancho de 200 pixeles. El atributo "summary" que se utiliza para dar una descripción lo mas precisa posible del contenido o tema tratado en nuestra tabla. La etiqueta se encarga de darle un titulo a nuestra table , el contenido seria el titulo , en este caso Titulo. La etiqueta es una fila dentro de nuestra tabla. La etiqueta es la cabecera de una columna , si es que esta dentro de un como en este caso. Tiene la propiedad "scope" que nos indica que es una celda de cabecera de una columna por el valor "col". El contenido nos indica que desea dejar un espacio en blanco. El "scope" "row" nos indica que es una celda de cabecera de una fila. La etiqueta nos indica los elementos dentro de una tabla (no cabeceras) , lo que se muestra es el contenido de esa etiqueta. Esto es una tabla con cuatro columnas y tres filas.


- - Ejercicio N3 --


3.a) = El primer elemento es un hipervinculo a google que se abre en la misma pestaña en la que estamos. Veremos un texto de color azul con una subrayado.

El segundo elemento es un hipervinculo a google que se abre en una pestaña nueva. Por el target. Veremos un texto de color azul con una subrayado.

El tercer elemento es un hipervinculo que no tiene ningun contenido. No visualizaremos nada en pantalla , ya que esta vacio el contenido del hipervinculo.

El cuarto elemento tambien es un hipervinculo , que al tener " href = "#" " significa que ese link se va a utilizar para vincular a algo de nuestra pagina , en este caso le falta el id asiq no nos lleva a ningun lado , pero si ponemos un id de algun elemento pues nos lleva a donde se encuentra ese elemento.

El quinto elemento es un hipervinculo , que al tener " href = "#" " significa que ese link se va a utilizar para vincular a algo de nuestra pagina , en este caso tiene el id y nos lleva al elemento con el id = arriba.

El sexto elemento es un hipervinculo con el atributo name que se utiliza principalmente para crear anclas internas en una página web. Puedes asignar un nombre a un elemento específico (como un párrafo, una imagen o una sección) y luego enlazar a ese nombre desde otro lugar en la misma página. Y el atributo id se utiliza para identificar de manera única un elemento en toda la página. Se suele usar para aplicar estilos CSS o para acceder al elemento mediante JavaScript.

3.b) = El primer elemento es un parrafo que contiene primero una imagen  y segundo un hipervinculo con el contenido de Clik aqui que te direcciona a "http://www.google.com.ar" . 

El segundo elemento tambien es un parrafo que tiene dentro un hipervinculo que tiene como contenido una imagen que nos direcciona (al clickearla) a  "http://www.google.com.ar" . Y el parrafo tiene como contenido "Click aqui".

El tercer elemento tambien es un parrafo que contiene un hipervinculo que tiene como contenido una imagen y "Click aqui" con un href a "http://www.google.com.ar" .

El cuarto elemento es un parrafo que contiene dos hipervinculos , el primero tiene como contenido una imagen y el segundo tiene como contenido "Click aqui" .

3.c) = El primer elemento es una lista desordenada que contiene 3 List items.

El segundo elemento es una lista ordenada que contiene 3 List items. Donde cada elemento tiene un indice que va del 1 al 3. Sin la necesidad de colocarle un valor.

El tercer bloque de codigo tiene 3 listas ordenadas, cada una contiene un Items, y a la segunda y tercera lista se le agrego a cada item un value. La diferencia grafica con el anterior es que entre cada elemento hay un espacio.

El cuarto elemento no es una lista sino un bloque que contiene un parrafo con saltos de linea, graficamente se puede notar que tiene un margen en todas las direcciones, en cambio las listas solo vienen con un margin top y bottom.

3.d) El primer bloque de codigo es una tabla que tiene 3 filas y 2 columnas. Tiene cabeceras "Columna 1" y "Columna 2" , y 4 celdas.

El segundo bloque de codigo es una tabla que tiene 3 filas y 2 columnas. No tiene cabeceras , pero simula tenerlas con un div(centrado) y un strong para que la palabra resalte mas. Ambos bloques se ven iguales , pero no son iguales.

3.e)El primer bloque es una tabla que tiene una etiqueta caption que es la que se usa para asignarle un titulo a una tabla , tambien tiene 2 filas y 3 columnas.

El segundo bloque es una tabla que en vez de usar un caption , se uso una fila con una sola columna que ocupa el espacio de 3 columnas (colspan ="3")  y dentro se coloco un div (centrado) con el elemento Titulo, tambien tiene 2 filas y 3 columnas , aparte de la fila que se uso como titulo.

ambas ocupan un ancho de 200px.

3.f) Ambos bloques de codigo son una tabla con 3 columnas y 3 filas.
Ambos codigos tiene colocado el titulo de igual forma con una fila que ocupa todas las columnas de la tabla, difieren en el primer elemento de la tabla donde en el primer bloque de codigo es una celda que ocupa 1 columna y 2 filas en cambio en el segundo bloque de codigo esta celda ocupa 2 columnas y 1 fila. 
Luego cada celda ocupa solo 1 espacio en la fila y columna.

3.g) En estos bloques podemos notar que en el segundo bloque se aplicaron los atributos border, cellpadding y cellspacing , estos dos ultimos con el valor 0 lo que hace es quitar el espacio entre celdas y generar que el borde sea uno solo , en cambio en el bloque 1 podemos notar que solo tiene el atributo border y lo que sucede es que hay como un doble borde , ya que bordea la tabla y dentro a cada celda.

3.h) El primer bloque de codigo es un formulario echo con fieldset(es un bloque con borde que encierra los inputs) , con el titulo del formulario , login. Al ver el formulario vemos que no utiliza la etiqueta label y que contienen valores por defecto sus inputs , tiene 2 inputs , uno de tipo texto y el otro tipo password.Tambien notamos que el boton con valor "enviar" es de tipo submit y al colocarlo envia el formulario a "procesar.php" . Utiliza en el method post este no cambia la url despues del form y los datos lo encontramos en network en inspeccionar.

El segundo bloque a diferencia del primero no usa la etiqueta fieldset , coloca el titulo directamente y utiliza un br para un salto de linea , pero si utiliza labels. Sus inputs no tienen tipos especiales sino que directamente son de tipo texto. Sus inputs no tienen valores por defecto. Este tiene un input con el valor "enviar" de tipo submit o sea que envia lo que tengan los valores dentro de los inputs , no se especifica la direccion en el form, utiliza el method get (envia los valores dentro de los campos a traves de la url) , utiliza un target _blank , lo que hace es abrir de nuevo el mismo formulario con campos vacios.

El tercer bloque es igual al primero lo que cambia es que el action es enviar un mail y el input con el valor "enviar" es de tipo de reset o sea que vuelve a poner como defecto los demas input. Este no utiliza valores por defectos en los inputs de tipo password y text.

3.i) El primer elemento es un boton que contiene una imagen y un texto dentro.
En cambio el segundo elemento es un input de tipo button con el valor "Click Aqui".
Dos formas distintas de hacer un boton.

3.j)El primer elemento es un parrafo que contiene 2 label y que ambos contiene un input de tipo radio. Son opciones , no podes seleccionar ambas ya que tienen el mismo name.
En cambio en el segundo bloque podes seleccionar ambas opciones.

3.k)La diferencia es que con el atributo multiple con el valor de multiple se muestra un cuadro de lista de desplazamiento en lugar de un menu desplegable de una sola linea.