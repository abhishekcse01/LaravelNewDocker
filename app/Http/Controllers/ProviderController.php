<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\RequestValidator\FileUploaderRequest;
use App\Http\Response\SuccessResponse;
use Illuminate\Support\Facades\Storage;

class ProviderController extends Controller
{
    public function getListOfProvider()
    {
       dd("here");
    }
    public function saveImages(Request $request){
        $image = $request->file('input_file');
        $validator =$request->validate([
        'input_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|size:2048|max:3048',
         ]);
        if ($validator->fails()) {
           return response()->json(['error' => $validator->errors()->getMessages()], 400);
        }
        $validator =$request->validate([
             'input_file' => 'dimensions:ratio=4/3'
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->getMessages()], 400);
        }
       if ($request->hasFile('input_file')) {;
        $name = time().'.'.$image->getClientOriginalExtension();
        Storage::disk('local')->put('images/',  $image);
        return back()->with('success','Image Upload successfully');
        }

    }
    public function saveVideos(){
        dd("122");

    }
    public function getUploadedFiles(){

    }
}
