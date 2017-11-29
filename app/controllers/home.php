<?php 
	class Home extends Controller
	{
		protected $total_store_in_onepage;

		public function __construct() 
		{
			$this->total_store_in_onepage = 1;
		}

		public function index()
		{
			//$user = $this->model('User'); 
			//$user->name = $name;
			$this->view('home/index');
		}

		public function about()
		{
			$data = $this->model('cfm_model');
			$result = $data->getData();
			$this->view('home/about',$result);
		}

		public function contact()
		{
			$this->view('home/contact');
		}

		public function explore()
		{
			$data = $this->model('cfs_model');
			$result = $data->getData($this->total_store_in_onepage);
			$page = $data->totalPage($this->total_store_in_onepage);
			$result_array = array('store' => $result,
								'page' => $page);
			$this->view('home/explorer', $result_array);
		}

		public function page($page)
		{
			$data = $this->model('cfs_model');
			$result = $data->loadStore($page,$this->total_store_in_onepage);
			$page = $data->totalPage($this->total_store_in_onepage);
			$result_array = array('store' => $result,
								'page' => $page);
			$this->view('home/explorer', $result_array);
		}

		public function result()
		{
			$this->view('home/result');
		}
		
		public function detail_store($id)
		{
			$data = $this->model('cfs_model');
			$result = $data->getStoreById($id);
			$this->view('home/infor',$result);
		}
	}
 ?>