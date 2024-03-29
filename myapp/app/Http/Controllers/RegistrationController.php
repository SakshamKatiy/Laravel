<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\form;

class RegistrationController extends Controller
{
    public function index(){
        $url = url('/register');
        $title="Registration";
        $data =compact('url','title');
        return view('form')->with($data);

    }

    public function register(Request $request){
        $request->validate(
            [
'name'=>'required',
'email'=>'required|email',
'password'=>'required | confirmed ',
'password_confirmation'=>'required '

            ]
            );
        echo '<pre>';
        print_r($request->all());

        // Insert query through model
        $form = new form;
        $form ->name= $request['name'];
        $form ->email= $request['email'];
        $form ->password= md5($request['password']);
        $form ->password_confirmation= md5($request['password_confirmation']);
        $form->save();
        return redirect('/register/view');
    }
    public function view(){
        $forms = form::all();
        $data = compact('forms');
return view('view')->with($data);
    }

    public function delete($id){
        $form = form::find($id);
        if(!is_null($form)){
            $form -> delete();
        }
        return redirect('register/view');

    }
    public function edit($id){
$form = form::find($id);
if(is_null($form)){
return redirect('register');
}
else{
    $title = "Update Customer";
    $url = url('/register/update').'/'.$id;
    $data = compact('register','url','title');
    return view('form')->with($data);
}
    }
}
