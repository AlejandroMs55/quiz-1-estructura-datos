# Diferencias entre un IDE y un editor de texto

## IDE (Entorno de Desarrollo Integrado)
Un IDE es una aplicacion que proporciona un conjunto completo de herramientas para el desarrollo de software. Los IDEs suelen incluir un editor de codigo fuente, un depurador, un compilador o interprete, y herramientas de gestion de proyectos, todo en un solo paquete. Los IDEs estan diseñados para facilitar el proceso de programacion, permitiendo a los desarrolladores escribir, depurar y probar su codigo de manera eficiente. Ejemplos populares de IDEs incluyen Visual Studio, IntelliJ IDEA, Eclipse, y PyCharm.

## Editor de Texto
Un editor de texto es una herramienta mas sencilla que permite escribir y editar texto sin formato, incluyendo codigo fuente. A diferencia de un IDE, un editor de texto no incluye herramientas adicionales como un depurador o un compilador. Los editores de texto son mas ligeros y flexibles, lo que permite a los desarrolladores personalizarlos segun sus necesidades con extensiones y plugins. Ejemplos populares de editores de texto incluyen Sublime Text, Atom, Notepad++, y Visual Studio Code.

# Tipos de Lenguajes de Programacion

## Lenguajes Tipados
Los lenguajes de programacion tipados son aquellos que asocian un tipo de dato especifico con cada variable en el momento de su declaracion o durante la ejecucion del programa. Los tipos de lenguajes tipados se dividen en:

- **Tipado Estatico:** El tipo de las variables se determina en tiempo de compilacion y no puede cambiar. Ejemplos: Java, C++, C#.
- **Tipado Dinamico:** El tipo de las variables se determina en tiempo de ejecucion y puede cambiar durante la ejecucion del programa. Ejemplos: Python, JavaScript, Ruby.

## Lenguajes No Tipados
En un lenguaje no tipado, las variables no tienen tipos de datos asociados. Este tipo de lenguajes es menos comun en la practica, pero se puede ver en lenguajes de programacion antiguos o muy especificos, donde no existe una distincion clara de tipos.

# Tipos de Datos en Java

## Datos Numericos
Java incluye varios tipos de datos numericos que se dividen en dos categorias:

- **Enteros:** `byte` (8 bits), `short` (16 bits), `int` (32 bits), `long` (64 bits).
- **Punto Flotante:** `float` (32 bits), `double` (64 bits).

## Cadenas
El tipo de dato que representa secuencias de caracteres en Java es `String`. Las cadenas de caracteres son inmutables, lo que significa que no se pueden modificar despues de ser creadas. Java proporciona una clase llamada `String` que permite trabajar con este tipo de datos.

## Fechas
Java maneja fechas a traves de varias clases incluidas en el paquete `java.time`. Las mas comunes son:

- **LocalDate:** Representa una fecha (año, mes, dia) sin hora.
- **LocalTime:** Representa una hora (hora, minuto, segundo) sin fecha.
- **LocalDateTime:** Combina fecha y hora en un solo objeto.
- **ZonedDateTime:** Representa una fecha y hora con zona horaria especifica.