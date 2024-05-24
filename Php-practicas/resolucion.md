1) Variables = 
    a = boolean
    b = string
    c = string
    d = entero

  Operadores =
    asignacion =
        +=
        =
    ternario =
        ++

  Funciones = 
    La funcion gettype usó los parametros $a , $b , $c , $d, esta funcion muestra el tipo de variable o si es nula.
    la funcion doble se le pasa el parametro $d++ , esta funcion returna el doble del parametro.

  Estructuras de control =
    if(is_string($a)){
        echo "Cadena : $a";
    }

    if(is_int($d)){
        $d+=4;
    }

  Salida por pantalla =
    boolean 
    string
    string
    integer
    1
    xyz
    xyz
    18
    44
    44
  
-----------------------------------
2) 
  
  a) Son equivalentes , tienen la misma salida que es 12345678910

  b) Son equivalentes , tienen la misma salida (12345678910).

  c) Son equivalentes, ambos codigos comparan una variable y segun su valor imprimen en pantalla el valor que tenga.

-----------------------------------
3) 

  a) Este codigo se utiliza para formar una tabla de 5 filas y 2 columnas con un borde de 1px.

  b) Este codigo muestra un formulario que te pide ingresar la edad y te indica si sos mayor de edad o menor de edad.

-----------------------------------
4) La primer salida será un warning ya que no estan definidas las variables de la primer linea de codigo y luego mostrará "el clavel blanco"
-----------------------------------
5) Echo en una carpeta llamada "Ejercicio 5"
-----------------------------------


-----------------------------------
1) Los codigos son equivalentes, ambos estan cargando un array asociativo con las mismas claves-valor.
-----------------------------------
2) 
  a) bar1
  b) 5942
  C) No habra salida en pantalla , la matriz ya no estará definida.
-----------------------------------
3) 
  a)Has entrado en esta pagina a las (hora que entraste) horas, con (Minutos en que entraste) minutos y (Segundos en que entraste) segundos, del (dia/mes/año - fecha).
  b)5 + 6 = 11
-----------------------------------
4) 
  Es una funcion que al recibir una cadena que dentro de la funcion recibe el nombre de (nombre_usuario) , se chequea que la cadena cumpla con dos condiciones que sea mayor a 3 y menor que 20 si no cumple alguna de esas condiciones returna que el nombre no es valido.
  Si la funcion cumple con la longitud pasa revisarse que cumpla con los caracteres posibles de uso , usa un for y dentro un if , este if compara un caracter leido del nombre con la cadena de caracteres permitidos , utilizando substr para hallar uno por uno los caracteres del nombre y strpos para buscar el caracter del nombre dentro de la cadena de caracteres permitidos , si este if es falso nos returna que el nombre no es valido.
  Si pasa ambos if returna el nombre es valido.