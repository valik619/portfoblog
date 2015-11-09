<?php namespace Modules\Portfolio\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class PortfolioController extends Controller {
	
	public function index()
	{
		return view('portfolio::index');
	}
	
}