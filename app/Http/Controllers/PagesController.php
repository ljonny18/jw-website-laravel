<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index() {
    	// return "index";
    	$title = "INDEX PAGE!";
    	return view("pages.index")->with('title', $title);
    }

    public function profile() {
    	// $title = "PROFILE PAGE!";
    	$data = array(
    		'title' => "PROFILE PAGE!",
    		'abstract' => "Proin quis dui massa. Morbi scelerisque iaculis orci sed dictum. Suspendisse condimentum laoreet justo. Fusce imperdiet leo a dui rutrum, ac sollicitudin leo rutrum. Ut nec sapien ac turpis rhoncus fringilla non iaculis dolor. Morbi convallis purus nec elementum finibus. Morbi nisi ligula, interdum vitae est venenatis, accumsan efficitur leo. Donec dapibus nulla non lorem ullamcorper, quis rutrum erat hendrerit.",
    		'skills' => ['rails', 'github', 'mysql', 'laravel', 'seo', 'bla']
    	);
    	// return view("pages.profile", compact('title'));
    	
    	// return view("pages.profile")->with('title', $title);
    	return view("pages.profile")->with($data);
    }
}
