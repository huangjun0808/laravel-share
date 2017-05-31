<?php

namespace App\Http\Controllers\Home;

use App\Models\Label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabelController extends Controller
{

    public function index(){

    }

    public function show($name){
        $data = [];
        $label = Label::where('name',$name)->first();
        $data['label'] = $label;
        return view('home.label.show', $data);
    }

}
