<?php
include_once "Database.php";
class Students {
    private $table_name = "tbl_students";
    private $id;
    private $full_name;
    private $dob;
    private $contact_number;
    private $document_id;
    private $document_number;
    private $document_image_path;
    private $student_image_path;
    private $address;
    private $faculty = "BCA";
    private $college;
    private $semester = 6;
    private $status = true;

    private $database;
    private $connection;

    public function __construct() {
        $this->database = new Database();
    }

    public function __destruct() {
    }

    public function get_students() {
        return $this->database->get($this->table_name);
    }

    public function get_student_by_id() {
        if($_GET) {
            $id = $_REQUEST['id'];
            if($id){

            } else {
                //Handle with exception
            }  
        } else {
            //Handle with exception
        }
    }

    public function add_student() {
        if($_POST) {
            $id = $_REQUEST['id'];
            if($id) {
                //TODO :: Write Code for Edit
            } else {
                //TODO :: Write code for update
            }
        }
    }
    
    public function delete_student_by_id() {
        if($_GET) {
            $id = $_REQUEST['id'];
            if($id) {
                
            } else {
                //Handle with exception
            }  
        } else {
            //Handle with exception
        }
    }
}