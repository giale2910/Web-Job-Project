<?php
abstract class BaseController
{

	protected $_registry;

	protected $load;

	public function __construct()
	{
		$this->_registry = Registry::getInstance();
		$this->load = new Load;
		$this->load->model("user");
	}

	public function baseRenderData(){
		$data["userInfo"] = $this->user->findUserById($_SESSION["user_id"]);
		return $data;
	}

	final public function __get($key)
	{
		if ($return = $this->_registry->$key) {
			return $return;
		}
		return false;
	}
}
