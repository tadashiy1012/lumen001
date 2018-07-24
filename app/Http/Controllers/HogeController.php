<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller {
    public function get() {
        return 'hoge';
    }

    public function calc(Request $req) {
        $a = $req->input('a');
        $b = $req->input('b');
        return $a + $b;
    }

    public function post(Request $req) {
        return response()->json(['data' => $req->all()]);
    }
}