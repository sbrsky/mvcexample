<?php

Class Model extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertToBase($sql,$values = '')
    {
        $stm = $this->pdo->prepare($sql);
               if ( $stm->execute($values)) {
            header("Location: /");
        }
    }

    public function selectAllFromTable ($table)
    {
        $stmt = $this->pdo->query("select * from $table");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    /**
	* Delete record
	*
	* @param int Id
	* @param string table
	*/
    public function deleteRecord($cid , $table) {
        $sql = "DELETE FROM `".$table."` WHERE id='".$cid."'";
        $this->pdo->exec($sql);
    }


    public  function checkUser(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM  users WHERE username = :username AND password = :password";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":username",$username, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();


        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        /**
         *  If we have response from db , with correct data, we redirect to /
         * and set SESSION .
         *
         *
         */
        if (!empty($res)){
           // $_SESSION['user'] = $_POST['username'];
            return true;

        }else{
            header("Location: /login/error");

        }

    }
}
