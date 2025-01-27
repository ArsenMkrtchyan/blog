<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        return view('uploadVideo');
    }
    public function upload(Request $request)
    {


        $input = $request->all();
var_dump($input);
        if ($image = $request->file('video')) {
            $destinationPath = 'videos/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

            $input['video'] = "$profileImage";
        }

        Video::create($input);

        return redirect()->route('tractors.index')
            ->with('success','Tractor created successfully.');
    }
//    return redirect()->back()->with('success', 'Video uploaded successfully!');



//return redirect()->back()->with('error', 'Failed to upload video.');
//}


}
