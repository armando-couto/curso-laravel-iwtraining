<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog/list');
    }

    public function add() {
        return view('blog/add');
    }

    public function delete($id) {
        echo "Excluir $id";
    }

    public function save(Request $request) {
        var_dump($request);
    }
}