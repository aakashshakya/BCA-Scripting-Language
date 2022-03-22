<?php
class Database
{
    private $servername = "localhost";  //Points to the local server
    private $username = "root";  //User name for connecting the database
    private $password = ""; //Password for connection to the database
    private $database_name = "college";  //Name of the database
    private $connection;
    private $sql;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database_name);
        if ($this->connection->connect_error) {
            die("Unable to connect to the database.");
        }
    }

    public function __destruct()
    {
        if ($this->connection) {
            mysqli_close($this->connection);
        }
    }

    public function get($table_name)
    {
        if ($table_name) {
            $this->sql = "SELECT * FROM " . $table_name;
            return $this->convert_to_generic_results(mysqli_query($this->connection, $this->sql));
        } else {
            //Throw exception
        }
    }

    private function convert_to_generic_results($data)
    {
        if (mysqli_num_rows($data) > 0) {
            // output data of each row
            $i = 0;
            // Looping through the results
            $result = new stdClass();
            while ($row = mysqli_fetch_object($data)) {
                $result->$i = $row;
                $i++;
            }
            return $result;
        }
    }

    private function print_data($data)
    {
        echo '<pre>';
        print_r($data);
        exit;
    }
}
?>
