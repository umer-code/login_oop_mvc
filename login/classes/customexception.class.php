<?php
class customException extends Exception {
	public $errors;
	function __construct($errors){
		$this->errors=$errors;
		return $this->errors;
	}
  }
?>