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

    protected $nameTable = 'sku';

    // PDO Start
    protected $dsn;
    protected $pdo;
    public function __construct()
    {
        $opt = array(
            PDO::ATTR_ERRMODE => \ PDO::ERRMODE_EXCEPTION
        );
        $this->dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME. ";charset=" . CHARSET;

        $this->pdo = new PDO($this->dsn,DBUSER,DBPASS,$opt);
    }


    public function insertToBase(Card $product,$values = ''){
        $sql = $product->getSql();
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
