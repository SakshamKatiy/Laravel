<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbtable;
class CrudController extends Controller
{
    public function index(){
        $getData=dbtable::get();
        return view('first',['getData'=>$getData]);
    }

    public function create(Request $request){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
        ]);
        // dd($request->all());
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('imageFolder'),$imageName);
        // dd($imageName);
        $run = new dbtable;
        $run->name =$request-> name;
        $run->image =  $imageName;
        $run->desc =  $request->desc;
$run->save();
return back();
    }

    public function edit($id){
        $update = dbtable::where('id',$id)->first();
        return view('edit',['update'=>$update]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            // 'image'=>'nullable',
        ]);

        $run = dbtable::where('id',$id)->first();
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('imageFolder'),$imageName);
            $run->image =  $imageName;

        }

        $run->name =$request-> name;
        $run->desc =  $request->desc;
        $run->save();
        return back();
    }

public function delete($id){
    $destroy = dbtable::where('id',$id)->first();
    $destroy->delete();
    return back();
}
}
