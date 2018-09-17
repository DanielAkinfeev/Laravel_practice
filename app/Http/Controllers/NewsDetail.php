<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsDetail extends Controller {
    public function __invoke($id) {
        $new = \DB::table('news')->where('id', '=', $id)->get();
        return view('news_detail', ['new' => $new]);
    }
}
