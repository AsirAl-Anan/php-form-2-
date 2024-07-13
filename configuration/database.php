<?PHP 

include 'config.php'; //exports servername, username, password and database name from config.php file

//class for database
class Database{
    //properties
    public $server_name = SERVER;
    public $user_name = USERNAME;
    public $password = PASSWORD;
    public $database_name = DATABASE_NAME;
    public $error;
    public $connection;




    //function for extablishing connection with database
    public function __construct(){
        $this->dbConnect();
    }


    public function dbConnect(){
        $this->connection = mysqli_connect($this->server_name, $this->user_name, $this->password, $this->database_name);
    if($this->connection){
        
        // Nothing is to be returned if connection is established
    }else{
        $this->error = "Database Connection failed";
        return false;
    }
    }
    public function insert($SQL){
        $query = mysqli_query($this->connection, $SQL) or die($this->connection->error.__LINE__);
    if($query){
        return $query;
    }else{
        return false;
    }
    }
}