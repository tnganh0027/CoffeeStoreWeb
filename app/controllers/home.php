<?php 
	class Home extends Controller
	{
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
			$result = $data->getData();
			$this->view('home/explorer', $result);
		}
	}
 ?>