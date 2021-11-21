<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validate;
use Illuminate\Http\Request;
use App\Investor;

class InvestorController extends Controller
{
    public function index(){
        $i = Investor::orderByRaw('name, address')->get();
        return view('investors.index', ['investors'=>$i]);
    }

    public function create(){
        return view('investors.create');
    }

    public function new(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'investment'=>'required'

        ]);

        Investor::create([
            'name'=> $request['name'],
            'address'=> $request['address'],
            'phone'=> $request['phone'],
            'investment'=> $request['investment']
        ]);

        return redirect('/investors')->with('info', 'A new Investor has been created.');

    
        }    
}
