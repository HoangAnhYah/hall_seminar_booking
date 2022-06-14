<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Addmember extends Controller
{
    //
    public function insertform(){
        return view('addmember');
        }
    public function insert(Request $request){
            $name_dept = $request->name_dept;
            $full_name = $request->input('full_name');
            $pwd = $request->input('pwd');
            $contact = $request->input('contact');
            $email = $request->input('email');
            DB::insert("exec sp_insert_member'$name_dept', '$full_name', '$pwd', '$contact', '$email'");
            return view('SuccessAddMember');
    }
}
