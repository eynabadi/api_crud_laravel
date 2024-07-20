<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function index()
    {
        $data=User::all();
        return response()->json($data);
    }

    public function post(Request $request)
    {
        $postdata=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return response()->json($postdata);
    }

    public function put(Request $request ,$id)
    {
        $puttdata= User::find($id);
        $puttdata->name=$request->name;
            $puttdata->email=$request->email;
        $puttdata->password=Hash::make($request->password);
       $puttdata->update();
        return response()->json($puttdata);
    }

    public function delete($id)
    {
        $dalateuser=User::find($id);
        $dalateuser->delete();
        return response()->json($dalateuser);
    }
}
