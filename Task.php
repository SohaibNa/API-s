<?php

class TaskException extends Exception {




}

class Task{

  private $_id;
  private $_title;
  private $_description;
  private $_deadline;
  private $_completed;

  public function __construct($id, $title, $description, $deadline, $completed){
    $this->setID($id);
    $this->setTitle($title);
    $this->setDescription($description);
    $this->setDeadline($deadline);
    $this->setCompleted($completed);
  }


  public function getID(){
    return $this->_id;
  }
  public function getTitle(){
    return $this->_title;
  }
  public function getDiscription(){
    return $this->_description;
  }
  public function getDeadLine(){
    return $this->_deadline;
  }
  public function getCompleted(){
    return $this->_completed;
  }
  public function setID($id){
  if (($id !== null) && (!is_numeric($id) || $id <= 0 || $id > 5322308 || $this->_id !== null)){
    throw new TaskException("Task ID Error");
  }
  $this->_id = $id;

  }
  public function setTitle($title){
    if (strlen($title) < 0 || strlen($title) > 255){
      throw new TaskException("Task title Error");

    }

    $this->_title = $title;
  }
  public function setDescription($description){
    if (($description !== null) && (strlen($description) > 16999933)) {
    throw new TaskException("Task Description Error");
    }
    $this->_description = $description;
  }
  public function setDeadline($deadline){
    if (($deadline !== null) && date_format(date_create_from_format('d/m/Y H:i', $deadline), 'd/m/Y H:i') != $deadline){
      throw new TaskException("Task Deadline Error");

    }
    $this->_deadline = $deadline;
  }
  public function setCompleted($completed){
    if (strtoupper($completed) !== 'Y' && strtoupper($completed) !== 'N') {
      throw new TaskException("Task Completed Error");

    }
    $this->_completed = $completed;
  }

  public function returnTaskAsArray(){

    $task = array();
    $task['id'] = $this->getID();
    $task['title'] = $this->getTitle();
    $task['description'] = $this->getDiscription();
    $task['deadline'] = $this->getDeadLine();
    $task['completed'] = $this->getCompleted();
    return $task;


  }



}
