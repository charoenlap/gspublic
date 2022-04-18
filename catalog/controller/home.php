<?php 
	class HomeController extends Controller {
		public function index() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$data['blogs'] = $this->model('master')->blogs();
	    	$data['banners'] = $this->model('master')->getListBanner();
	    	$data['event'] = $this->model('master')->getNearEvent();
 	    	$this->view('home',$data); 
	    }
	    public function page() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$id = (int)get('id');
	    	$result = $this->model('master')->muayDetail($id);
	    	$data['title'] 	= $result['title'];
	    	$data['detail'] = $result['detail'];
	    	$data['cover'] 	= $result['cover'];
	    	$data['banner'] 	= $result['banner'];
	    	$data['muay'] = $this->model('master')->getMuay();
	    	$data['muays'] = $this->model('master')->getMuaySub($id);
 	    	$this->view('page',$data); 
	    }
	    public function pageDetail() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$id = get('id');
	    	$data['detail'] = $this->model('master')->getMuaySubDetail($id);
 	    	$this->view('pageDetail',$data); 
	    }
	    public function blog() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$data['blogs'] = $this->model('master')->blogs();
 	    	$this->view('blog',$data); 
	    }
	    public function blogDetail() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$id = get('id');
	    	$data['blog'] = $this->model('master')->blogDetail($id);
 	    	$this->view('blogDetail',$data); 
	    }
	    public function terms() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('terms',$data); 
	    }
	    public function privacy() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('privacy',$data); 
	    }
	    public function contact() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('contact',$data); 
	    }
	    public function package() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
	    	$id_package = get('id_package');
	    	$data['detail'] = $this->model('master')->getPackageDetail($id_package);
 	    	$this->view('package',$data); 
	    }
	    public function about() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('about',$data); 
	    }
	    public function calendar() {
	    	$data = array();
	    	$data['title'] = "";
	    	$data['descreption'] = "";
 	    	$this->view('calendar',$data); 
	    }
	}
?>