<?php

class HomeController extends BaseController {

	    public function getIndex(){

	    	Auth::user();

	    	return View::make('home');
	    }
}