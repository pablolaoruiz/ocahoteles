<?php

/**
 * Description of BBDD
 *
 * @author mac
 */
class BBDD {
    var $link;
    
    function __construct($link_bbdd) {
        $this->link = $link_bbdd;
    }
    
    public function db_query($sql,$modo=MYSQLI_STORE_RESULT) {
        return mysqli_query($this->link,$sql,$modo);
    }
    
    public function db_list($sql) {
        
        $rows = [];
        
        if ($result = mysqli_query($this->link, $sql)) {

            /* fetch associative array */
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }

            /* free result set */
            mysqli_free_result($result);
            
        }

    
        return $rows;
        
    }
    
    public function db_row($sql) {
        
        $row=[];
        
        if ($result = mysqli_query($this->link, $sql)) {
            /* fetch associative array */
            $row = mysqli_fetch_assoc($result);

            /* free result set */
            mysqli_free_result($result);
            
        }

     
        return $row;
        
    }
            
    
    public function db_get_last_id() {
        return mysqli_insert_id($this->link);
    }
}
