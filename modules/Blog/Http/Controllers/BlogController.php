<?php namespace Modules\Blog\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class BlogController extends Controller {
	
	public function index()
	{
		return view('blog::index');
	}
	
}