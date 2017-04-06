<?php

class Controller_About extends Controller_Template
{

	public function action_index(){
    $data = array();
    $this->template->title = 'About';
    $this->template->content = View::forge('about/index', $data);

	}
}
