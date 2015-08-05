<?php
require_once "api.php";

class mensajes extends api
{

    protected $db;

    public function __construct($db){
        parent::__construct();
        $this->db = $db;
    }
    
    /*
        Muestra todos los mensajes
    */
    protected function index(){
        $query = "SELECT * FROM mensaje";
        $stmt = $this->db->query($query);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $row['id'].", ".$row['api_id'].", ".$row['contacto_id'].", ".$row['texto'];
        }
        return "Hello World";
    }
    
    /*
        Crea un mensaje
    */
    protected function create(){
        return "asdasdasdasd mensajes";
    }
    
    /*
        Muestra un mensaje
    */
    protected function read($id){
        print_r($id);
        return "read";
    }
    
    /*
        Borra un mensaje
    */
    protected function delete($id){
        return "delete";
    }
}
?>
