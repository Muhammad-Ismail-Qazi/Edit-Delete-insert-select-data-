<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formModel;

class formController extends Controller
{
    public function show(Request $request){
        $data = new formModel();  //create a new model 
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->age = $request->age;
        $data->comment = $request->textarea;
        $data->save();
        return view('getDataTableForm');
    }
    public function delete($id){
        formModel::findOrfail($id)->delete();
        return redirect()->back();    }
        public function edit($id){
            $data =  formModel::findOrfail($id)->first();
            return view('edit', compact('data'));
        }
        public function editForm(Request $request, $id){
           $data = formModel::findOrfail($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone_number = $request->phone_number;
            $data->age = $request->age;
            $data->comment = $request->textarea;
            $data->save();
            return redirect()->back();
        }
}
