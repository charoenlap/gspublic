<?php 
	class MemberController extends Controller {
		public function historyPayment() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('member/historyPayment',$data); 
	    }
	    public function historyView() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('member/historyView',$data); 
	    }
	    public function contentView() {
	    	$id_content = get('id_content');
	    	$id_user = $this->getSession('id_user');
	    	$result_check_payment = $this->model('master')->checkActive($id_user);
	    	if(!$result_check_payment){
	    		redirect('payment&id_package=1&id_content='.$id_content);
	    	}else{
		    	$data = array();
		    	$data['title'] = "";
		    	$data['descreption'] = "";
	 	    	$this->view('member/contentView',$data); 
	 	    }
	    }
	    public function login() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] 	= "";
	    	$data['detail']   		= get('detail');
	    	$data['id_package']  	= get('id_package');
	    	$data['redirect']  	= get('redirect');
	    	$data['action'] = route('member/submitLogin');
 	    	$this->view('member/login',$data); 
	    }
	    public function submitLogin() {
	    	$data = array();
	    	$result = "failed";
	    	$detail = "";
	    	if(method_post()){
	    		$phone 		= post('phone');
				$password 	= post('password');
				$redirect 	= post('redirect');
				$id_package = post('id_package');
				$para = '';
				if($id_package){
					$para .= "&id_package=".$id_package;
					$redirect .= $para;
				}
				$insert = array(
					'username' => $phone,
					'password' => md5($password)
				);
				$result_user = $this->model('master')->selectMember($insert);
				if($result_user){
					$this->setSession('id_user',$result_user['id']);
					$this->setSession('username',$result_user['username']);
					if($redirect){
						redirect($redirect);
					}else{
						redirect('home');
					}
				}else{
					$detail = "หาไม่พบ";
					redirect('member/login&result='.$result.'&detail='.$detail."&redirect=".$redirect."&id_package=".$id_package);
				}
	    	}
	    }
	    public function register() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$data['action'] = route('member/submitRegister');
	    	$data['redirect'] = get('redirect');
	    	$data['detail']   = get('detail');

 	    	$this->view('member/register',$data); 
	    }
	    public function logout() {
	    	$this->setSession('id_user','');
	    	$this->setSession('username','');
	    	$this->redirect('home');
	    }
	    public function submitRegister() {
	    	$data = array();
	    	$result = "failed";
	    	$detail = "";
	    	if(method_post()){
	    		$phone 		= post('phone');
				$password 	= post('password');
				$cPassword 	= post('cPassword');
				$redirect 	= post('redirect');
				if(!empty($password)){
					if($password == $cPassword){
						$insert = array(
							'username' => $phone,
							'password' => md5($password)
						);
						$result_user = $this->model('master')->insertMember($insert);
						if($result_user){
							if($redirect){
								redirect($redirect);
							}else{
								$this->setSession('id_user',$result_user);
								$this->setSession('username',$phone);
								redirect('home');
							}
						}else{
							$detail = "มีในระบบแล้ว";
							redirect('member/register&result='.$result.'&detail='.$detail);
						}
					}else{
						$detail = "รหัสผ่านไม่ตรงกัน";
						redirect('member/register&result='.$result.'&detail='.$detail);
					}
				}else{
					$detail = "รหัสผ่านมีค่าว่าง";
					redirect('member/register&result='.$result.'&detail='.$detail);
				}
	    	}
	    }
	    public function forgot() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('member/forgot',$data); 
	    }
	}
?>