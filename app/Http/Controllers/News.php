<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller {
    public function __invoke() {
        $news = \DB::table('news')->get();
        return view('news', ['news' => $news]);
    }
}
