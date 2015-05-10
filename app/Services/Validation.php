<?php namespace App\Services;

use Illuminate\Validation\Validator;

class Validation extends Validator {

	public function validateName($attribute, $value)
	{
		return preg_match('/^[a-z \-]+$/i', $value);
	}

	public function validateAlphaSpaces($attribute, $value)
	{
		return preg_match('/^[\pL\pM\pN ]+$/u', $value);
	}

	public function validatePhone($attribute, $value, $parameters)
	{
		return preg_match("/^([0-9\s\-\+\(\)]*)$/", $value);
	}

}