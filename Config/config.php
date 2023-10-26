<?php
class Config{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "exam";
    public $con_res;

    public function connect() {
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->con_res;
    }

    public function insert($name,$celebration) {
        $this->connect();
        $qry = "INSERT INTO festival(name,celebration) VALUES ('$name','$celebration');";
       $res =  mysqli_query($this->con_res,$qry);
      return $res;
    }

    public function delete($id){
        $this->connect();
        $qry = "DELETE FROM festival WHERE id = $id;";
        $res = mysqli_query($this->con_res,$qry);
        return $res;
    }

    public function update($name,$celebration,$id) {
        $this->connect();
        $qry = "UPDATE festival SET name='$name',celebration='$celebration' WHERE id=$id;";
        $res = mysqli_query($this->con_res,$qry);
        return $res;
    }

}
?>