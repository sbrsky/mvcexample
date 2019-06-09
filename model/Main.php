<?php
/**
 * Class MainClass
 *
 *  Model
 *  DataBase Methods
 *
 *
 */


Class MainClass extends Db_Base {

    protected $nameTable = 'sku';


    public function showPage ()
    {
        $row	=	array();
        $select = $this->baseSelect();

        $row=$this->fetchAll($select);

        return $row;
    }




    /*  read from DB  */
    public function baseSelect ()
    {
        $select = "SELECT ".$this->nameTable.".* 
				FROM `".$this->nameTable."` AS ".$this->nameTable."
				";
        return $select;
    }

    /*   write to DB  */
    public function baseUpdate ($name, $price, $sku, $weight,$size,$h,$w,$l,$type)
    {
        // Check vars before writing to DB
        if ($name == '' ) {$name = 'none'; }
        if ($weight == '' || !ctype_digit($weight)) {$weight = 0; }
        if ($size == '' || !ctype_digit($size)){$size = 0; }
        if ($h == ''|| !ctype_digit($h)) {$h = 0;}
        if ($w == ''|| !ctype_digit($w)) {$w = 0;}
        if ($l == ''|| !ctype_digit($l)) {$l = 0;}


        $sql = "INSERT INTO `sku` (`id`, `name`, `price`, `sku`, `size`, `weight`, `height`,`width`,`length`,`type`) VALUES (NULL, '$name', '$price', '$sku', '$size', '$weight','$h','$w','$l','$type');";

        // Connect to DB via parents class method
        $link = $this->baseConnect();

// Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

// Attempt insert query execution
        if(mysqli_query($link, $sql)){
            header("Location: /");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

// Close connection
        mysqli_close($link);

    }

    /*
	* Delete record
	*
	* @param int Id
	*
	* @return  string result
	*/


    public function deleteRecord( $cid) {

        $link = $this->baseConnect();

        $stack = true;
        $sql = "DELETE FROM `".$this->nameTable."` WHERE id='".$cid."'";

        if(mysqli_query($link, $sql)){
            $stack = true;
        } else{
            $stack = false;
        }

        return $stack;
    }



}
