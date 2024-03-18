<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonarM;
use App\Models\user;

class DonarC extends Controller
{
    //
    function data(Request $req){
        $donar = new DonarM;
        $donar->name=$req->name;
        $donar->mobile=$req->mobile;
        $donar->donation=$req->donation;
        $donar->address=$req->address;
        $donar->massage=$req->massage;



        $req->validate(
            [
                // 'name'=>'required',
                'mobile'=>'required|min:10|max:13',
                'donation'=>'required',
                'address'=>'required'

            ]
            );

        $donar->save();
        
        // return 'success mil gyi';
        echo '<script>alert("Succesfully submitted")</script>';

      return redirect('/');


    }
    // function vldt(Request $valid){

    //     $valid->validate(
    //         [
    //             'name'=>'required',
    //             'mobile'=>'required|min:10|max:13',
    //             'donation'=>'required',
    //             'address'=>'required'

    //         ]
    //         );
    // }
    // function showData(){
    //     $data = DonarM::all();
    // return view('wms/table',compact('data'));
    // }

    // home
    function showData(){
        $data = DonarM::all();
    return view('/home',compact('data'));
    } 

    // function deleteMe(){
    //     $data = DonarM::find($id);
    //     $data->delete();
    //     return redirect('wms/table');
    // }

    // home

    function deleteMe(){
        $data = DonarM::find($id);
        $data->delete();
        return redirect('/home');
    }
    
    // function showdata1(){
    //         $data= user::all();
    //         return view('/home',compact('data'));
    //      }
    
    
}
