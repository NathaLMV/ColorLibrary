<?php

namespace libs;

 class Terminal {

     const FORMAT_BOLD = "\x1b[1m";
     const FORMAT_OBFUSCATED = "";
     const FORMAT_ITALIC = "\x1b[3m";
     const FORMAT_UNDERLINE = "\x1b[4m";
     const FORMAT_STRIKETHROUGH = "\x1b[9m";
     const FORMAT_RESET = "\x1b[m";
     const COLOR_BLACK = "\x1b[38;5;16m";
     const COLOR_DARK_BLUE = "\x1b[38;5;19m";
     const COLOR_DARK_GREEN = "\x1b[38;5;34m";
     const COLOR_DARK_AQUA = "\x1b[38;5;37m";
     const COLOR_DARK_RED = "\x1b[38;5;124m";
     const COLOR_PURPLE = "\x1b[38;5;127m";
     const COLOR_GOLD = "\x1b[38;5;214m";
     const COLOR_GRAY = "\x1b[38;5;145m";
     const COLOR_DARK_GRAY = "\x1b[38;5;59m";
     const COLOR_BLUE = "\x1b[38;5;63m";
     const COLOR_GREEN = "\x1b[38;5;83m";
     const COLOR_AQUA = "\x1b[38;5;87m";
     const COLOR_RED = "\x1b[38;5;203m";
     const COLOR_LIGHT_PURPLE = "\x1b[38;5;207m";
     const COLOR_YELLOW = "\x1b[38;5;227m";
     const COLOR_WHITE = "\x1b[38;5;231m";

     static function send(string $message)
     {
         if (0 == !strlen($message)) {
             echo $message . "\n";
         }
     }


     public static function setTranslateConsole($message, array $parametros = [])
     {
         $message = str_replace("&0", self::COLOR_BLACK, $message);
         $message = str_replace("&1", self::COLOR_DARK_BLUE, $message);
         $message = str_replace("&2", self::COLOR_DARK_GREEN, $message);
         $message = str_replace("&3", self::COLOR_DARK_AQUA, $message);
         $message = str_replace("&4", self::COLOR_DARK_RED, $message);
         $message = str_replace("&5", self::COLOR_PURPLE, $message);
         $message = str_replace("&6", self::COLOR_GOLD, $message);
         $message = str_replace("&7", self::COLOR_GRAY, $message);
         $message = str_replace("&8", self::COLOR_DARK_GRAY, $message);
         $message = str_replace("&9", self::COLOR_BLUE, $message);
         $message = str_replace("&a", self::COLOR_GREEN, $message);
         $message = str_replace("&b", self::COLOR_AQUA, $message);
         $message = str_replace("&c", self::COLOR_RED, $message);
         $message = str_replace("&d", self::COLOR_LIGHT_PURPLE, $message);
         $message = str_replace("&e", self::COLOR_YELLOW, $message);
         $message = str_replace("&f", self::COLOR_WHITE, $message);
         foreach ($parametros as $index => $params) {
             $message = str_replace("{%$index}", $params, $message);
         }
         return $message;
     }
 }

 $termi = new Terminal();
 $termi::send($termi::setTranslateConsole("&aLIBRERIA DE COLORES", []));
 $termi::send($termi::setTranslateConsole("&dCREADOR NATHA", []));
 $termi::send($termi::setTranslateConsole("&dVERSION 1.0.0", []));
 $termi::send($termi::setTranslateConsole("&bPROXIMAMENTE MAS DISPOSITIVOS COMPATIBLES", []));
?>
