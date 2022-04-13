<?php 
	class MasterModel extends db {
		public function login($data = array()){
			$username = $this->escape(isset($data['username'])?$data['username']:'');
			$password = $this->escape(isset($data['password'])?$data['password']:'');
			$result = $this->query("SELECT * FROM gs_user WHERE username = '".$username."' AND password = '".md5($password)."' ");
			return $result->row;
		}
		public function getKai(){
            $query = $this->query("SELECT * FROM gs_content WHERE id_category = 2"); 
            return $query->rows;
        }
        public function getMuay(){
            $query = $this->query("SELECT * FROM gs_content WHERE id_category = 1"); 
            return $query->rows;
        }
        public function getSubTopic($id=0){
            $query = $this->query("SELECT * FROM gs_content_sub WHERE id_content = ".(int)$id); 
            return $query->rows;
        }
        public function insertContentSub($data=array()){
            $query = $this->insert("content_sub",$data); 
            return $query;
        }
        public function updateContentSub($data=array(),$id=0){
            $query = $this->update("content_sub",$data,"id = '".$id."'"); 
            return $query;
        }
        public function delContentSub($id=0){
            $query = $this->delete("content_sub","id = '".(int)$id."'"); 
            return $query;
        }
        public function getContentSub($id=0){
        	$sql = "SELECT * FROM gs_content_sub WHERE id = '".(int)$id."'";
            $query = $this->query($sql); 
            return $query->row;
        }
        public function insertNews($data=array()){
            $query = $this->insert("news",$data); 
            return $query;
        }
        public function updateNews($data=array(),$id=0){
            $query = $this->update("news",$data,"id = '".$id."'"); 
            return $query;
        }
        public function delNews($id=0){
            $query = $this->delete("news","id = '".(int)$id."'"); 
            return $query;
        }
        public function getNews($id=0){
        	$sql = "SELECT * FROM gs_news WHERE id = '".(int)$id."'";
            $query = $this->query($sql); 
            return $query->row;
        }
        public function getListNews($id=0){
        	$sql = "SELECT * FROM gs_news";
            $query = $this->query($sql); 
            return $query->rows;
        }
	}
?>