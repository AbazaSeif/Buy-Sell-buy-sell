<?php

class IndexController extends BaseController {

	protected $layout =  "layouts.main";

	public function getIndex(){

		$this->layout->content = View::make('index.index');
	}
}