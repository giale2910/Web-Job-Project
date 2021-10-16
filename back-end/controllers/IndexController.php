<?php
class IndexController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{

		$this->load->model('post');

		$vars['title'] = 'Dynamic title';
		$vars['posts'] = $this->post->getEntries();
		$this->load->view('index', $vars);
	}
}
