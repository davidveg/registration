<?php

class Controller_Contact extends Controller_Template
{

	public function action_index(){
    $data = array();
    $this->template->title = 'Contact';
    $this->template->content = View::forge('contact/index', $data);

	}
}
