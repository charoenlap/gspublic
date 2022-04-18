<?php 
	class ApiController extends Controller {
	    public function feed() {
	    	$data = array();
	    	$result = $this->model('master')->getContent();
	    	foreach($result as $val){
	    		$data[] = array(
	    			'title' => $val['title'],
	    			'date' => $val['date_start']
	    		);
	    	}
	    	// var_dump($data);
	    	$this->json($data); 
	    }
	}
?>