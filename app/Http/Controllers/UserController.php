<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function setAddYourFavourite(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all());
        $file = $request->file('fav-pic');

        //Display File Name
        $file->getClientOriginalName();

        //Display File Extension
        $file->getClientOriginalExtension();

        //Display File Real Path
        $file->getRealPath();

        //Display File Size
        $file->getSize();

        //Display File Mime Type
        $file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath, date("YmdHis") . $file->getClientOriginalName());
        $favData = array(
            'userId' => 1,
            'favName' => $request->input('add-your-fav-name'),
            'favComment' => $request->input('comment'),
            'favImage' => "uploads/" . date("YmdHis") . $file->getClientOriginalName(),
        );

        $response = DB::table('favourite')->insert($favData);

        if ($response) {
            return redirect()->action('UserController@index');
        }
    }

    public function getFavPosts()
    {
        $response = DB::table('favourite')->get();
        echo json_encode(array("posts" => $response));
    }
}