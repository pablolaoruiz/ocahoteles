<?php
/**
 * Description of BBDD_PDO
 *
 * @author mac
 */
class BBDD_PDO {
    var $link;
    
    function __construct($link_bbdd) {
        $this->link = $link_bbdd;
    }
    
    
    
    public function db_query($sql,$parametros=array()) {
        
      	$query=$this->link->prepare($sql);
        return $query->execute($parametros);
      
    }
    
    public function db_list($sql,$parametros=array()) {
        
        $rows = [];
        $query=$this->link->prepare($sql);

        $query->execute($parametros);
        $rs=$query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $r) {
            $rows[] = $r;
        }
       
        return $rows;
        
    }
    
    public function db_row($sql,$parametros=array()) {
        
        $query=$this->link->prepare($sql);
        $query->execute($parametros);
        $rs=$query->fetchAll(PDO::FETCH_ASSOC);
        $row=[];
        if (count($rs)>0) {
            $row = $rs[0];
        }
        return $row;
        
    }
            
    
    public function db_get_last_id() {
        return $this->link->lastInsertId(); 
    }
}
