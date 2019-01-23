<?php
require_once ( dirname(  __FILE__). './connectionClass.php' );
class galleryClass extends connectionClass{
   
	
	  public function news(){
        $select="select   * from  news  ORDER BY nid DESC ";
        $result=$this->query($select);
        $count=$result->num_rows;
		
        if($count< 1){
            
        }
        else
        {
			 
			 
            while ($row = $result->fetch_array()) {
			
                $rows[]=$row;
				
            }
            return  $rows;
        }
    }
	
	
	
	  public function newslist(){
        $select="select   * from  news  ORDER BY nid DESC  ";
        $result=$this->query($select);
        $count=$result->num_rows;
		
        if($count< 1){
            
        }
        else
        {
			 
			 
            while ($row = $result->fetch_array()) {
			
                $rows[]=$row;
				
            }
            return  $rows;
        }
	
	  }

    
}