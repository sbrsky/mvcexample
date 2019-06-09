<?php
Abstract Class Db_Base {


    /*
    * Get record by $select
    *
    * @param select
    *
    * @return  array
    */
    public function baseConnect(){
        $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        return $link;
    }


    public function fetchRow( $select=null ) {

        $mysqli = $this->baseConnect();

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $row = array();

        if ($select){
            $result	=	mysqli_query($mysqli, $select);
        }

        if ($result->num_rows>0) {
            $row = $result->fetch_object();
        }

        return $row;

    }

    /*
    * Get records
    *
    * @param query
    *
    * @return  array - key number
    */
    public function fetchAll( $select ) {
        $mysqli = $this->baseConnect();
        $records = array();

        if ($select){
            $result	=	mysqli_query($mysqli, $select);
        }
        if ($result->num_rows>0) {
            while ($row = $result->fetch_object()){
                $records[] = $row;
            }
        }
        return $records;
    }



}
?>