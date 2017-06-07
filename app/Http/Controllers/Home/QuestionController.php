<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{

    public function index(){
        $data['active'] = 'index';

        return view('home.question.index', $data);
    }

    public function hottest(){
        $data['active'] = 'hottest';

        return view('home.question.index', $data);
    }

    public function unanswered(){
        $data['active'] = 'unanswered';

        return view('home.question.index', $data);
    }

    public function create(){
        return view('home.question.create');
    }
    public function store(){
        return 'store';
    }
    public function edit(){
        return 'edit';
    }
    public function update(){
        return 'update';
    }
    public function destroy(){
        return 'destroy';
    }



}
