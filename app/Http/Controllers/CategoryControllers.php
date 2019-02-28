<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryControllers extends Controller
{
    public function store(Request $request) {
		$categories =json_decode($request->categories[0], TRUE);
		return view('categories', ['categories' => $categories['cats']]);
    }
}
