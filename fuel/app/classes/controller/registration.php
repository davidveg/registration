<?php

class Controller_Registration extends Controller_Template {

	public function action_index(){
		$countries = Model_Country::find('all');
		$data = array('countries' => $countries);
		$view = View::forge('registration/index', $data);

		$val = $this->createValidation();

		if(Input::post('send')) {
			if ($val->run()) {
				$address = new Model_Address();
				$address->country = Model_Country::find((int) Input::post('country'));
				$address->user = new Model_User();

				$address->user->firstname = Input::post('firstname');
				$address->user->lastname = Input::post('lastname');
				$address->user->password = password_hash(Input::post('password'), PASSWORD_DEFAULT);
				$address->user->email = Input::post('email');
				$address->user->phone_number = Input::post('phone_number');
				$address->user->social_number = Input::post('nif');
				$address->street_address = Input::post('street_address');
				$address->location = Input::post('location');
				$address->zipcode = Input::post('zipcode');

				$address->save();

				Session::set_flash('success','Client submited successfully !');
				Response::redirect('registration');
			}else{
				Session::set_flash('error','Ops, something goes wrong ! Check the error(s) below !');
			}
		}


		$view->val = $val;
		$this->template->title = 'Registration';
		$this->template->content = $view;
	}

	public function createValidation() {
		$val = Validation::forge();
		$val->add_callable('Customvalidation');// custom validation class
		$val->add('firstname', 'First Name')
			->add_rule('required')
			->add_rule('valid_string', 'alpha')
			->add_rule('min_length', 2)
			->add_rule('max_length', 50);
		$val->add('lastname', 'Last Name')
			->add_rule('required')
			->add_rule('valid_string', 'alpha')
			->add_rule('min_length', 3)
			->add_rule('max_length', 50);
		$val->add('email', 'Email')
			->add_rule('required')
			->add_rule('max_length', 255)
			->add_rule('valid_email');
		$val->add('confirm_email', 'Confirm Email')
			->add_rule('required')
			->add_rule('valid_email')
			->add_rule('match_field', 'email');
		$val->add('password', 'Password')
			->add_rule('required')
			->add_rule('valid_string', array('alpha', 'numeric'))
			->add_rule('min_length', 5)
			->add_rule('max_length', 50);
		$val->add('confirm_password', 'Confirm Password')
			->add_rule('required')
			->add_rule('min_length', 5)
			->add_rule('max_length', 50)
			->add_rule('match_field', 'confirm_password');
		$val->add('street_address', 'Street Address')
			->add_rule('required');
		$val->add('country', 'Country')
				->add_rule('required');
		$val->add('location', 'Location')
			->add_rule('required');
		$val->add('phone_number', 'Phone Number')
			->add_rule('required')
			->add_rule('phone_number', (int) Input::post('country'));
		$val->add('zipcode', 'Zip Code')
			->add_rule('required');
		$val->add('nif', 'NIF')
			->add_rule('required')
			->add_rule('exact_length', 9)
			->add_rule('nif');// custom validation rule

		return $val;
	}

}
