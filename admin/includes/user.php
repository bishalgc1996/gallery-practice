<?php


class User {

  
  public static function find_all_users() {
    global $database;
    $result_set = $database->query('SELECT * FROM users');
    return $result_set;
  }


  public static function find_user_by_id() {
    global $database;
    $result_set = $database->query('SELECT * FROM users');
    return $result_set;
  }
}



?>