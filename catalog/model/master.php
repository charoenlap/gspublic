<?php 
	class MasterModel extends db {
		 public function getPackage(){
            $query = $this->query("SELECT * FROM gs_package"); 
            return $query->rows;
        }
        public function getKai(){
            $query = $this->query("SELECT * FROM gs_content WHERE id_category = 2"); 
            return $query->rows;
        }
        public function getMuay(){
            $query = $this->query("SELECT * FROM gs_content WHERE id_category = 1"); 
            return $query->rows;
        }
        public function blogs(){
            $query = $this->query("SELECT * FROM gs_news ORDER BY id ASC"); 
            return $query->rows;
        }
        public function blogDetail($id){
            $query = $this->query("SELECT * FROM gs_news WHERE id = ".(int)$id); 
            return $query->row;
        }
        public function muayDetail($id){
            $query = $this->query("SELECT * FROM gs_content WHERE id = ".(int)$id); 
            return $query->row;
        }
        public function getMuaySub($id){
            $query = $this->query("SELECT * FROM gs_content_sub WHERE id_content = ".(int)$id." ORDER BY id DESC LIMIT 0,5"); 
            return $query->rows;
        }
        public function getMuaySubDetail($id){
            $query = $this->query("SELECT * FROM gs_content_sub WHERE id = ".(int)$id); 
            return $query->row;
        }
        public function getPackageDetail($id){
            $query = $this->query("SELECT * FROM gs_package WHERE id = ".(int)$id); 
            return $query->row;
        }
        public function insertMember($data=array()){
            $result = '';
            $username = (isset($data['username'])?$data['username']:'');
            $password = (isset($data['password'])?$data['password']:'');
            $username = $this->escape($username);
            $sql_member     = "SELECT * FROM gs_member WHERE username = '".$username."'";
            $result_member  = $this->query($sql_member);
            if($result_member->num_rows == 0){
                $insert = array(
                    'username'      => $username,
                    'password'      => $password,
                    'date_create'   => date('Y-m-n H:i:s')
                );
                $result = $this->insert("member",$insert); 
            }else{
                $result = false;
            }
            return $result;
        }
        public function selectMember($data=array()){
            $result = '';
            $username = (isset($data['username'])?$data['username']:'');
            $password = (isset($data['password'])?$data['password']:'');
            $username = $this->escape($username);
            $sql_member     = "SELECT * FROM gs_member WHERE username = '".$username."' AND password = '".$password."'";
            $result_member  = $this->query($sql_member);
            return $result_member->row;
        }
        public function checkActive($id=0){
            $result = array();
            $sql = "SELECT * FROM gs_member_package WHERE id_member = '".(int)$id."' AND expired_date >= '".date('Y-m-d H:i:s')."'";
            $result = $this->query($sql)->num_rows;
            return $result;
        }
        public function getListBanner($id=0){
            $sql = "SELECT * FROM gs_news WHERE `show` = '1'";
            $query = $this->query($sql); 
            return $query->rows;
        }
        public function getNearEvent(){
            $sql = "SELECT * FROM gs_content_sub WHERE date_start >= '".date('Y-m-d H:i:s')."' ORDER BY date_start ASC LIMIT 0,1";
            $query = $this->query($sql); 
            return $query->row;
        }
	}
?>