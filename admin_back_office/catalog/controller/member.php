<?php 
	class MemberController extends Controller {
	    public function index() {
	    	$data = array(); 

	    	$this->view('member/index',$data);
	    }
	    public function add() {
	    	$data = array(); 

	    	$this->view('member/index',$data);
	    }
	}
?>