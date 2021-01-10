<?php

require_once('db.php');
require_once('../model/Response.php');
try {

 $writeDB = DB::connectWriteDB();
 $readDB = DB::connectReadDB();

}

catch (PDOException $e) {

 $response = new Response();
 $response->setHttpStatusCode(500);
 $response->setSuccess(false);
 $response->addMessage("Database Conntection Error");
 $response->send();
 exit;

}
