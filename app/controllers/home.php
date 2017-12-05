<?php 
	class Home extends Controller
	{
		protected $total_store_in_onepage;

		public function __construct() 
		{
			session_start();
			$this->total_store_in_onepage = 6;
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

		public function login()
		{
			$this->view('home/login');
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

		public function detail_store($id)
		{
			$data = $this->model('cfs_model');
			$update = $data->updateViewById($id);
			$result = $data->getStoreById($id);
			$comment = $data->getComment($id);
			$some_images = $data->getSomeImages($result[0]['name']);
			$menu = $data->getMenu($result[0]['name']);
			$errorcmt = FALSE;
			$errormenu = FALSE;
			if($comment == FALSE || $menu == FALSE || $some_images == FALSE) 
			{
				if($comment == FALSE)
				{
					$comment = '<div id="no_information" class="comment">';
					$comment .= '<div class="content">';
                    $comment .= '<div class="text">';
                    $comment .= 'Has not comment yet ! Be the frist one !';
                    $comment .= '</div></div></div>';
                    $errorcmt = TRUE;                
				}

				if($menu == FALSE)
				{
					$menu = '<div class="ui black segment">We will update soon!</div>';
					$errormenu = TRUE;
				}

				$result_array = array('detail' => $result,
								'some_images' => $some_images,
								'menu' => $menu,
								'cmt' => $comment,
								'errorcmt' => $errorcmt,
								'errormenu' => $errormenu);

				$this->view('home/infor',$result_array);
			}
			else {
				$result_array = array('detail' => $result,
								'some_images' => $some_images,
								'menu' => $menu,
								'cmt' => $comment,
								'errorcmt' => FALSE,
								'errormenu' => FALSE);
				$this->view('home/infor',$result_array);
			}
		}

		public function doSearch()
		{
			$name = $_POST['search'];
			$data = $this->model('cfs_model');
			$result = $data->getStore($name);
			if($result != FALSE){
				echo $result;
			}
		}

		public function doExplorePopular()
		{
			$data = $this->model('cfs_model');
			$result = $data->getResultView($this->total_store_in_onepage);
			$page = $data->totalResultView($this->total_store_in_onepage);
			$result_array = array('store' => $result,
								'page' => $page);
			$this->view('home/explorepopular', $result_array);
		}

		public function doExplorePopularPage($page)
		{
			$data = $this->model('cfs_model');
			$result = $data->loadStoreResultView($page,$this->total_store_in_onepage);
			$page = $data->totalResultView($this->total_store_in_onepage);
			$result_array = array('store' => $result,
								'page' => $page);
			$this->view('home/explorepopular', $result_array);
		}

		public function doLogin()
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$data = $this->model('cfs_model');
			$result = $data->getUser($email,$password);
			$result = count($result);
			if($result == 1)
			{
				$_SESSION['login_user'] = $email;
				$result = $_SESSION['login_user'];
				$this->view('home/success_login');
			}
		}

		public function doLogout()
		{
			if(session_destroy())
			{
				$this->view('home/success_logout');
			}
		}

		public function doComment()
		{
			$email = $_POST['user_email'];
			$content = $_POST['content'];
			$id_store = $_POST['store'];

			$data = $this->model('cfs_model');
			$id_user = $data->getUserID($email);

			$data = $data->insertComment($content,$id_user[0]['id'],$id_store);

			echo json_encode($data);
		}

		public function doResult()
		{
			$data = $this->model('cfs_model');
			if(isset($_REQUEST['submit']))
			{	
				$search = addslashes($_GET['search_text']);
				if(empty($search))
				{
					$content = '<div class="ui black segment">Not Found In Data !</div>';
					$result_array = array('error' => $content);
				}
				else
				{
					$result = $data->getResultStore($search,$this->total_store_in_onepage);
					$page = $data->totalResultStore($search,$this->total_store_in_onepage);
					if($result == FALSE || $page == FALSE)
					{
						$content = '<div class="ui black segment">Not Found In Data !</div>';
						$result_array = array('error' => $content);
					}
					else {
						$result_array = array('store' => $result,
									'page' => $page,
									'search' => $search);
					}
				}
				$this->view('home/result',$result_array);
			}	
		}

		public function doResultPage($search,$page)
		{
			$data = $this->model('cfs_model');
			$result = $data->loadStoreResultStore($search,$page,$this->total_store_in_onepage);
			$page = $data->totalResultStore($search,$this->total_store_in_onepage);
			$result_array = array('store' => $result,
					'page' => $page,
					'search' => $search);
			$this->view('home/result', $result_array);
		}
	}
 ?>