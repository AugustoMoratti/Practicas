EJERCICIO 1

1) ¿ Qué es CSS y para qué se usa ? 

    CSS que es Cascade style shets que significa en español hojas de estilo en cascada.
    Esta tecnologia nos permite darle una apariencia a la pagina web del lado del cliente.
    Este lenguaje esta definido en las especificaciones de W3C.

    Es un "mecanismo" que describe como se va a ver el documento en la pantalla , esta forma de descripcion de estilos le ofrece a los desarrolladores el control total sobre el estilo del documento.

    Se utiliza para dar estilo a documentos HTML y XML, separando el contenido de la  presentación. Los Estilos definen la forma de mostrar los elementos HTML y XML.

2) CSS utiliza reglas para las declaraciones de estilo, ¿ cómo funcionan ?

    CSS utiliza reglas , declaraciones sobre el estilo de uno o mas elementos. Las hojas de estilo estan compuestas por una o mas de esas reglas aplicadas a un documento HTML o XML.
    Esta regla esta conformada por dos partes , un selector y la declaracion. La declaracion esta conformada por una propiedad y el valor que se le desee asignar.
    El selector es el enlace entre el documento y el estilo , especificando que elementos seran afectados por la declaracion.

3) ¿ Cuáles son las tres formas de dar estilo a un documento ?

    1- Utilizando una hoja de estilo externa que estará vinculada a un documento a traves de la etiqueta <link> , que va colocada en el head del documento HTML .

    2-Utilizando la etiqueta <style>, en el documento html, generalmente se situa en el head . De esta forma los estilos seran aplicados antes de que la pagina se cargue por completo.

    3-Utilizando estilos directamente sobre los elementos que lo permiten a traves del atributo <style> dentro de <body>. Pero este tipo de estilo pierde las ventajas que ofrecen las hojas de estilo al mezclarse el contenido con la presentacion.
    	
4) ¿ Cuáles son los distintos tipos de selectores más utilizados ? 

    Podes seleccionar elementos de HTML en funcion del nombre del elemento, tambien se puede agrupar esos elementos colocando comas.
    Existe el selector universal (*) , este selecciona todos los elementos del HTML.
    Existen los selectores de clases (.nombreClase) para seleccionar todos los elementos con esa clase.
    Existen los selectores de ID (#nombreID) para seleccionar un elemento del HTML con ese ID.
    Existen selectores descendientes , colocamos el elemento padre y luego el hijo , entonces asi solo modificaremos a esos elementos solo si son hijos del padre que colocamos.

5) ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos ?

    Es una palabra clave que se añade a los selectores y que especifica un estado especial del elemento seleccionado.
    Las mas utilizadas aplciadas a vinculos son =
     1- (:link) se refiere a un enlace (con atributo href) y apunta a un link que no ha sido visitado.
     2-(:visited) Se refiere a un enlace que ya ha sido visitado.

6) ¿ Qué es la herencia ?

    Es un mecanismo a traves del cual los elementos hijos adquieren propiedades de los elementos que los contienen.

7) ¿ En qué consiste el proceso denominado cascada?

    Esto consiste que cuando tienes varias reglas de CSS aplicadas a un mismo elemento , todas ellas deben converger en una serie de estilos en base a las reglas de la escifidad, al orden en el que aparecen y a su importancia.


EJERCICIO 2

La primera declaracion tiene un selector que nos dice que al parrafo que tenga el id "normal" se le cambia la fuente a un arial y si no toma la arial se usa helvetica , tambien nos indica el tamaño de la fuente de 11px y un grosor de texto de tipo bold.

La segunda declaracion tiene un selector que nos dice que a todos los elementos que tengan el id "destacado" se le aplicará un borde de tipo solido de color azul y de 2 pixeles de grosor.

La tercera declaracion tiene un selector que nos dice que a todos los elementos con el id "distinto" se le aplicara un fondo de color #9EC7EB y tendrán una letra de color rojo.

EJERCICIO 3

La primera declaración tiene un selector que nos dice que a los parrafos que contengan la clase "quitar" tengan el texto de color rojo.

La segunda declaracion tiene un selector que nos dice que a todos los elementos que tengan la clase "desarrollo" se le cambie el tamaño de la fuente a 8 pixeles.

La tercera declaracion tiene un selector que nos dice que a todos los elementos que contengan la clase "importante" se le cambie el tamaño de la fuente a 20 pixeles.

La prioridad de aplicacion siempre la tiene la ultima declaracion que se aplique , si es que se modifica lo mismo al mismo elemento.

EJERCICIO 4

a) Codigo 1 =
    
    La primer declaracion selecciona a todos los elementos y le da un color "green" , la segunda declaracion selecciona todos los links y les asigna el color "gray" , la tercera declaracion selecciona a los links y dice que si ya fueron visitados se les asigna el color "blue" , la cuarta declaracion selecciona a los links y cuando se pasa con el mouse por encima se le asigna un color "fuchsia" , la quinta declaracion selecciona a los links y dice que cuando un link este siendo seleccionado se le asigne el color "red" , la sexta declaracion selecciona todos los parrafos y le modifica el tipo de fuente , el color de la fuente y el tamaño y por ultima declaracion selecciona la clase contenido (en este caso es el parrafo del codigo) y le modifica el tamaño de la fuente y su grosor. 
    En este codigo lo que ocurre es que la ultima declaracion y la penultima modifican a un mismo elemento pero se toma en cuenta que como es en cascada la que prevalece es la ultima, por lo tanto el parrafo con la clase "contenido" quedara con un tamaño de fuente de 14px.

b) Codigo 2 =

    Lo que cambia en este codigo es que como la clase contenido está aplicada al body y este se modifica en la ultima declaracion entonces todos los elementos del body tendran un tamaño de fuente de 14px y un grosor tipo bold.



EJERCICIO 5

Hecho en (style.css)

EJERCICIO 6

Hecho en 
    ej-6.html
    ej-6.css
    mirar.html
