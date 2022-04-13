<?php 
	class LoginController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$data['action'] = route('login/submitLogin');
	    	$data['result'] = get('result');
	    	$this->view('login',$data);
	    }
	    public function submitLogin(){
	    	if(method_post()){
	    		$select = array(
	    			'username' => post('username'),
					'password' => post('password'),
	    		);
	    		$result = $this->model('master')->login($select);
	    		if(isset($result['id'])){
	    			$this->setSession('id_admin',$result['id']);
	    			redirect('home');
	    		}else{
	    			redirect('login&result=เข้าสู่ระบบผิดพลาด');
	    		}
	    	}
	    }
	}
?>