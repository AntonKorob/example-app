<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'this is my first page';
    }
    public function user($id, $name){
        return 'ID: '. $id . 'Name: '. $name;
    }
    public function index_2(){
        return 'Today is : ';
    }
    public function see($id){
        return 'ID : is '. $id;
    }


}