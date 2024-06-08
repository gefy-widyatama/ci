<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        // return view('about');
        echo view('contact');
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
