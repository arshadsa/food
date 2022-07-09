<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use App\Models\Answare;

class AnswareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function question(Request $request) {
    $user = Auth::user()->id;
        if($request->topic1 == 1) {
            $topic1 = 1;
            $answer1 = Answare::where('user_id',$user)->select('answare1','file1')->first();
        }else{
            $topic1 = 0; 
            $answer1 = '';
        }
        if($request->topic2 == 1) {
            $topic2 = 1;
            $answer2 = Answare::where('user_id',$user)->select('answare2','file2')->first();
        }else{
            $topic2 = 0; 
            $answer2 = '';
        }
        if($request->topic3 == 1) {
            $topic3 = 1;
            $answer3 = Answare::where('user_id',$user)->select('answare3','file3')->first();
        }else{
            $topic3 = 0;  
            $answer3 = '';
        }
        if($request->topic4 == 1) {
            $topic4 = 1;
            $answer4 = Answare::where('user_id',$user)->select('answare4','file4')->first();
        }else{
            $topic4 = 0; 
            $answer4 = '';
        }
        if($request->topic5 == 1) {
            $topic5 = 1;
            $answer5 = Answare::where('user_id',$user)->select('answare5','file5')->first();
        }else{
            $topic5 = 0; 
            $answer5 = '';
        }
        if($request->topic6 == 1) {
            $topic6 = 1;
            $answer6 = Answare::where('user_id',$user)->select('answare6','file6')->first();
        }else{
            $topic6 = 0; 
            $answer6 = '';
        }
        if($request->topic7 == 1) {
            $topic7 = 1;
            $answer7 = Answare::where('user_id',$user)->select('answare7','file7')->first();
        }else{
            $topic7 = 0; 
            $answer7 = '';
        }
        if($request->topic8 == 1) {
            $topic8 = 1;
            $answer8 = Answare::where('user_id',$user)->select('answare8','file8')->first();
        }else{
            $topic8 = 0; 
            $answer8 = '';
        }
        if($request->topic9 == 1) {
            $topic9 = 1;
            $answer9 = Answare::where('user_id',$user)->select('answare9','file9')->first();
        }else{
            $topic9 = 0; 
            $answer9 = '';
        }
        return view('form', compact('topic1','topic2','topic3','topic4','topic5','topic6','topic7','topic8','topic9','answer1','answer2','answer3','answer4','answer5','answer6','answer7','answer8','answer9'));

    }

    public function answare_store(Request $request)
    {
    //    dd($request->all());
        $user_id = Auth::user()->id;
        $answare = Answare::where('user_id',$user_id)->first();
        if(!empty($answare)) {
            $answ = Answare::findOrFail($answare->id);
            if($request->answare1 != ''){
                $answ->answare1 = $request->answare1;
            }
            $image1 = $request->file1;
            if($image1 != '')
            {
                $imagename1 = pathinfo($image1->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image1->getClientOriginalExtension();
                $image1->move(public_path('/uploads/file'), $imagename1);
                $answ->file1 = $imagename1;
            }
            if($request->answare2 != ''){
                $answ->answare2 = $request->answare2;
            }
            $image2 = $request->file2;
            if($image2 != '')
            {
                $imagename2 = pathinfo($image2->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image2->getClientOriginalExtension();
                $image2->move(public_path('/uploads/file'), $imagename2);
                $answ->file2 = $imagename2;
            }
            if($request->answare3 != ''){
                $answ->answare3 = $request->answare3;
            }
            $image3 = $request->file3;
            if($image3 != '')
            {
                $imagename3 = pathinfo($image3->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image3->getClientOriginalExtension();
                $image3->move(public_path('/uploads/file'), $imagename3);
                $answ->file3 = $imagename3;
            }
            if($request->answare4 != ''){
                $answ->answare4 = $request->answare4;
            }
            $image4 = $request->file4;
            if($image4 != '')
            {
                $imagename4 = pathinfo($image4->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image4->getClientOriginalExtension();
                $image4->move(public_path('/uploads/file'), $imagename4);
                $answ->file4 = $imagename4;
            }
            if($request->answare5 != ''){
                $answ->answare5 = $request->answare5;
            }
            $image5 = $request->file5;
            if($image5 != '')
            {
                $imagename5 = pathinfo($image5->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image5->getClientOriginalExtension();
                $image5->move(public_path('/uploads/file'), $imagename5);
                $answ->file5 = $imagename5;
            }
            if($request->answare6 != ''){
                $answ->answare6 = $request->answare6;
            }
            $image6 = $request->file6;
            if($image6 != '')
            {
                $imagename6 = pathinfo($image6->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image6->getClientOriginalExtension();
                $image6->move(public_path('/uploads/file'), $imagename6);
                $answ->file6 = $imagename6;
            }
            if($request->answare7 != ''){
                $answ->answare7 = $request->answare7;
            }
            $image7 = $request->file7;
            if($image7 != '')
            {
                $imagename7 = pathinfo($image7->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image7->getClientOriginalExtension();
                $image7->move(public_path('/uploads/file'), $imagename7);
                $answ->file7 = $imagename7;
            }
            if($request->answare8 != ''){
                $answ->answare8 = $request->answare8;
            }
            $image8 = $request->file8;
            if($image8 != '')
            {
                $imagename8 = pathinfo($image8->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image8->getClientOriginalExtension();
                $image8->move(public_path('/uploads/file'), $imagename8);
                $answ->file8 = $imagename8;
            }
            if($request->answare9 != ''){
                $answ->answare9 = $request->answare9;
            }
            $image9 = $request->file9;
            if($image9 != '')
            {
                $imagename9 = pathinfo($image9->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image9->getClientOriginalExtension();
                $image9->move(public_path('/uploads/file'), $imagename9);
                $answ->file9 = $imagename9;
            }

            $answ->update();


            return redirect('/user/profile')->with('success', 'Data updated successfully');

        }else{
        $image1 = $request->file1;
		if($image1 != '')
		{
			$imagename1 = pathinfo($image1->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image1->getClientOriginalExtension();
			$image1->move(public_path('/uploads/file'), $imagename1);
		}else{
			$imagename1="";
		}
        $image2 = $request->file2;
		if($image2 != '')
		{
			$imagename2 = pathinfo($image2->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image2->getClientOriginalExtension();
			$image2->move(public_path('/uploads/file'), $imagename2);
		}else{
			$imagename2="";
		}
        $image3 = $request->file3;
		if($image3 != '')
		{
			$imagename3 = pathinfo($image3->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image3->getClientOriginalExtension();
			$image3->move(public_path('/uploads/file'), $imagename3);
		}else{
			$imagename3="";
		}
        $image4 = $request->file4;
		if($image4 != '')
		{
			$imagename4 = pathinfo($image4->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image4->getClientOriginalExtension();
			$image4->move(public_path('/uploads/file'), $imagename4);
		}else{
			$imagename4="";
		}
        $image5 = $request->file5;
		if($image5 != '')
		{
			$imagename5 = pathinfo($image5->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image5->getClientOriginalExtension();
			$image5->move(public_path('/uploads/file'), $imagename5);
		}else{
			$imagename5="";
		}
        $image6 = $request->file6;
		if($image6 != '')
		{
			$imagename6 = pathinfo($image6->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image6->getClientOriginalExtension();
			$image6->move(public_path('/uploads/file'), $imagename6);
		}else{
			$imagename6="";
		}
        $image7 = $request->file7;
		if($image7 != '')
		{
			$imagename7 = pathinfo($image7->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image7->getClientOriginalExtension();
			$image7->move(public_path('/uploads/file'), $imagename7);
		}else{
			$imagename7="";
		}
        $image8 = $request->file8;
		if($image8 != '')
		{
			$imagename8 = pathinfo($image8->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image8->getClientOriginalExtension();
			$image8->move(public_path('/uploads/file'), $imagename8);
		}else{
			$imagename8="";
		}
        $image9 = $request->file9;
		if($image9 != '')
		{
			$imagename9 = pathinfo($image9->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image9->getClientOriginalExtension();
			$image9->move(public_path('/uploads/file'), $imagename9);
		}else{
			$imagename9="";
		}


        \DB::table('answare')->insert([
            'user_id' => $user_id,
            'answare1' => $request->answare1,
            'answare2' => $request->answare2,
            'answare3' => $request->answare3,
            'answare4' => $request->answare4,
            'answare5' => $request->answare5,
            'answare6' => $request->answare6,
            'answare7' => $request->answare7,
            'answare8' => $request->answare8,
            'answare9' => $request->answare9,
            "file1" => $imagename1,
            "file2" => $imagename2,
            "file3" => $imagename3,
            "file4" => $imagename4,
            "file5" => $imagename5,
            "file6" => $imagename6,
            "file7" => $imagename7,
            "file8" => $imagename8,
            "file9" => $imagename9,
        ]);

        return redirect('/user/profile')->with('success', 'Data inserted successfully');
    }
    }
    public function ckimgupload(Request $request)
    {
        if($request->hasFile('upload')) {
            $origin_Name = $request->file('upload')->getClientOriginalName();
            $File_Name = pathinfo($origin_Name, PATHINFO_FILENAME);
            $extension_Name = $request->file('upload')->getClientOriginalExtension();
            $File_Name = $File_Name.'_'.time().'.'.$extension_Name;
        
            $request->file('upload')->move(public_path('/uploads/file/'), $File_Name);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/uploads/file/'.$File_Name); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }


    public function user_profile()
    {
         $users = Auth::user();
         if($users->user_type != 2) {
             $answares = Answare::where('user_id',$users->id)->first();
         }else{
             $answares = Answare::all();
         }
        return view('profile', compact('users','answares'))->with('no',1);
    }

    public function answare_delete($id)
    {
        $users = Auth::user();
        $answares = Answare::where('user_id',$users->id)->first();
        if($id==1) {
            $answares->answare1 = null;
            $answares->file1 = null;
        }elseif($id==2) {
            $answares->answare2 = null;
            $answares->file2 = null;
        }elseif($id==3) {
            $answares->answare3 = null;
            $answares->file3 = null;
        }elseif($id==4) {
            $answares->answare4 = null;
            $answares->file4 = null;
        }elseif($id==5) {
            $answares->answare5 = null;
            $answares->file5 = null;
        }elseif($id==6) {
            $answares->answare6 = null;
            $answares->file6 = null;
        }elseif($id==7) {
            $answares->answare7 = null;
            $answares->file7 = null;
        }elseif($id==8) {
            $answares->answare8 = null;
            $answares->file8 = null;
        }elseif($id==9) {
            $answares->answare9 = null;
            $answares->file9 = null;
        }
        $answares->update();

        return redirect('/user/profile')->with('success','Your answar is successfully deleted!');
    }

}
