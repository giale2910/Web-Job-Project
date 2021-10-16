<?php

class PostModel extends BaseModel
{

	public function getEntries()
	{
		$return = array();
		$return[0] = array('title' => 'hello world');
		$return[1] = array('title' => 'hello universe');

		return $return;
	}
}
