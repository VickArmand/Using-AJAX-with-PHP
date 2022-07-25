<?php
class Database{
    private $dbname='phpwithajax';
    private $dbconn;
    private $stmt;
    private $dbhost='localhost';
    private $dbuser='root';
    private $dbpassword='';
    public function __construct(){
        try{
            $this->dbconn=new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpassword);
            $this->dbconn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
            
        }
        catch(Exception $ex){
            return $ex->getMessage();

        }
        return $this->dbconn;


    }
    public function create($email,$content){
        try{
            $sql='INSERT INTO usercontent(email,content) VALUES(:email,:content)';
            $this->stmt=$this->dbconn->prepare($sql);
            $this->stmt->bindParam(':email',$email);
            $this->stmt->bindParam(':content',$content);
            $this->stmt->execute();
           echo "Insert Success";
        }
        catch(Exception $ex){
            $ex->getMessage();
        }
        $this->dbconn=null;
    }
    public function read(){
        try{
            $sql= 'SELECT email,content,time FROM usercontent';
            $this->stmt=$this->dbconn->query($sql);
            // $this->stmt->setfetchMode(PDO::FETCH_ASSOC);
            $val=$this->stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($val as $x){
                echo '<tr>';
                echo '<td>'.$x['email'] .'  </td>';
                echo '<td>'.$x['content'] .'  </td>';
                echo '<td>'.$x['time'] .'  </td>';
                echo '</tr>' ;
            }
         
            // print_r($this->stmt->fetchAll());
        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
        $this->dbconn=null;
    }
    
}


?>