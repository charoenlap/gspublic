<?php 
	class PackageController extends Controller {
	    public function index() {
	    	$data = array(); 

	    	$this->view('package/index',$data);
	    }
	    public function add() {
	    	$data = array(); 

	    	$this->view('package/index',$data);
	    }
	}
?>