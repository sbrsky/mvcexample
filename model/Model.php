<?php
/**
 * Class MainClass
 *
 *  Model
 *  DataBase Methods
 *
 *
 */


Class Model extends Db_Base {



    // PDO Start

    public function __construct()
    {
        parent::__construct();
    }


    public function insertToBase($sql,$values = ''){
        $stm = $this->pdo->prepare($sql);
               if ( $stm->execute($values)){
            header("Location: /");
        }
    }


    // PDO END

    public function selectAllFromTable ($table)
    {
        $stmt = $this->pdo->query("select * from $table");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    /*
	* Delete record
	*
	* @param int Id
	*
	* @return  string result
	*/


    public function deleteRecord($cid , $table) {
        $sql = "DELETE FROM `".$table."` WHERE id='".$cid."'";
        $this->pdo->exec($sql);
    }



}
