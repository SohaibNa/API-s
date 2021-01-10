<?php

 class DB{

   private static $writeDBConntection;
   private static $readDBConnection;


   public static function connectWriteDB(){

     if (self::$writeDBConntection === null){
       self::$writeDBConntection = new PDO('mysql:host=localhost;dbname=task;charset=utf8', 'root', 'root');
       self::$writeDBConntection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       self::$writeDBConntection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

     return self::$writeDBConntection;

   }

   public static function connectReadDB(){

     if (self::$readDBConntection === null){
       self::$readDBConntection = new PDO('mysql:host=localhost;dbname=task;charset=utf8', 'root', 'root');
       self::$readDBConntection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       self::$readDBConntection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

     return self::$readDBConntection;

   }


 }
