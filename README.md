# ColorLibrary
Libreria para colores de php
sorporta windows, android

# PARA CREAR UNA INSTANCIA
```php
use libs\console\Console.php

public function getConsole() : Console {
  return new Console();
}
```

# COMO UTILIZAR LA FUNCION SEND(STRING $MESSAGE) Y SETRANSLATECONSOLE(STRING $MESSAGE, ARRAY $ARGUMENTOS)
```php
public function message() {
  Console::send(Console::setTranslateConsole("&3LIBRERIA &7DE &dCOLORES", []);
}
```

![example](https://m.imgur.com/HTtQY7I.jpg)
