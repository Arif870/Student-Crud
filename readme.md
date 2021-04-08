# Student Crud Application system by OOP (PHP)

## Freatures
=============
- Student add to database
- Student all data show
- Student data edit
- Student data Delete
- Student data Update

### Database class Design
============================
''''php
namespace App\Supports;

use mysqli;

/**
 * Database Class
 */

 class Database{
     
    /**
     * Private Properties
     */

     private $host = "localhost";
     private $user = "root";
     private $pass = "root";
     private $db = "students";
     private $connection;

     private function connection(){

        return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db );
         
     }

     /**
      * Create student
      */

      protected function create($sql){
          
       return $this -> connection() -> query($sql);
        
      }

      /**
      * show all student
      */

      protected function all($table, $order = "DESC"){

        return $this -> connection() -> query("SELECT * FROM $table ORDER BY id $order");
          
    }

     /**
      * delete student
      */

      protected function delete($table, $id){

        return $this -> connection() -> query("DELETE FROM $table WHERE id = $id ");
          
    }

    /**
      * update student
      */

      protected function update($table, $id){
          
    }

     /**
      * find single student
      */

      protected function find($table, $id){
          
        return $this -> connection() -> query("SELECT * FROM $table WHERE id = $id ");
    }
 }
'''