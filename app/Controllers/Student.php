<?php

    namespace App\Controllers;

    use App\Supports\Database;

    /**
     * Student Class
     */

     class Student extends Database{

        public function studentinsert( $name, $email, $cell, $uname ){

            $this -> create(("INSERT INTO student (name, email, cell, uname ) VALUES ('$name','$email','$cell','$uname' ) "));
            
        }

        public function allstudent(){
            return $this -> all('Student','ASC');
        }

        /**
         * Student Delete
         */

         public function deleteStudent($deleteid){
             $this -> delete('student', $deleteid);
         }

         /**
          * View Student
          */

          public function viewStudent($view_id){
              return $this -> find('student',$view_id);
          }
        
     }

?>