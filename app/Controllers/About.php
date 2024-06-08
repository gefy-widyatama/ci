<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        // return view('about');
        echo view('about');
    }
    
    // public function contact(): string
	// {
	// 	echo view("contact");
	// }
    
    // public function faqs(): string
	// {
	// 	echo view("faqs");
    // }
}
