<?php
require_once ( dirname(  __FILE__). '/../functions/connectionClass.php' );
class galleryClass extends connectionClass{
    public function uploadGallery($image,$variable){
        $insert="Insert into gallery (ImageName,AlbumId) values ('$image','$variable')";
        $result=$this->query($insert);
        if($result){
            echo "File is uploaded";
			
        }
        else
        {
            echo "File is not uploaded";
        }
    }
    
    public function listGallery(){
        $select="select * from gallery ";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
    
    public function addAlbum($name){
        $insert="Insert into album (AlbumName) values ('$name')";
        $result=$this->query($insert);
        if($result){
            echo "Album created";
        }
        else
        {
            echo "Album not created";
        }
    }
    
    public function listAlbum(){
        $select="select * from album";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
	
	  public function Albumimg($albumname){
        $select="select   * from  gallery where AlbumId=' ". $albumname. " ' ORDER BY ID DESC LIMIT 1 ";
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
	
	
	public function deleteAlbum($albumname){
		echo $albumname;
		
        $select="DELETE FROM  gallery  WHERE 	AlbumId=' ". $albumname. " ' ";
		$result=$this->query($select);
        
    }
	
	
	
	  public function news($tsin,$ttam,$teng,$sin,$tam,$eng){
        $insert="INSERT INTO `news` (`sinhala`, `english`, `tamil`, `sin`, `eng`, `tm`, `img`) VALUES ('$tsin', '$teng', '$ttam', '$sin', '$tam', '$eng', '$eng' )";
        $result=$this->query($insert);
        if($result){
            echo "news created";
        }
        else
        {
            echo "news not created";
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