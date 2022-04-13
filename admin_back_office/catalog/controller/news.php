<?php 
	class NewsController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$id_content 		= (int)get('id_content');
	    	$data['id_content'] = $id_content;
	    	$data['result'] = $this->model('master')->getListNews($id_content);
	    	$this->view('news/index',$data);
	    }
	    public function add() {
	    	$data = array(); 
	    	if(method_post()){
	    		$file = $_FILES['cover'];
	    		if(isset($_FILES['cover'])){
		    		$name = time()."_".$_FILES['cover']['name'];
		    		upload( $_FILES['cover'],'../uploads/content/',$name);
		    	}
		    	$insert = array(
		    		'title'			=> post('title'),
					'detail'		=> post('detail'),
					'show'			=> post('show'),
					'date_create' 	=> date('Y-m-d H:i:s')
		    	);
		    	if($name){
		    		$insert['cover'] = $name;
		    	}
		    	$this->model('master')->insertNews($insert);
		    	redirect('news&id_content='.post('id_content'));
	    	}else{
	    		$data['title'] = 'เพิ่ม';
	    		$data['action'] = route('news/add');
	    		$data['id_content'] = (int)get('id_content');
	    		$this->view('news/form',$data);
	    	}
	    }
	    public function edit() {
	    	$data = array(); 
	    	if(method_post()){
	    		$file = $_FILES['cover'];
	    		if(isset($_FILES['cover'])){
		    		$name = time()."_".$_FILES['cover']['name'];
		    		upload( $_FILES['cover'],'../uploads/content/',$name);
		    	}
		    	$id = post('id');
		    	$id_content = post('id_content');
		    	$update = array(
		    		'title'			=> post('title'),
					'detail'		=> post('detail'),
					'show'			=> post('show'),
					'date_create' 	=> date('Y-m-d H:i:s')
		    	);
		    	if(isset($_FILES['cover']['name'])){
		    		if(!empty($_FILES['cover']['name'])){
		    			$update['cover'] = $name;
		    		}
		    	}
		    	$this->model('master')->updateNews($update,$id);
		    	redirect('news&id_content='.$id_content);
	    	}else{
	    		$data['title'] = 'แก้ไข';
	    		$data['id'] = $id = get('id');
	    		$data['id_content'] = $id_content = get('id_content');
	    		$data['action'] = route('news/edit');
	    		$data['detail'] = $this->model('master')->getNews($id);
	    		$this->view('news/form',$data);
	    	}
	    }
	    public function del() {
	    	$data = array();
	    	$id = get('id'); 
	    	$this->model('master')->delNews($id);
	    	$this->json('success');
	    }
	}
?>