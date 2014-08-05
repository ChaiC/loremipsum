<?php

class paraController extends BaseController {


	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();		
	}

	public function generatePara(){		
		$numberPara = Input::get('numberPara');
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($numberPara);
		return View::make('random')->with('paragraphs', $paragraphs);
	}
}