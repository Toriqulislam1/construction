<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\project;
use carbon\carbon;

class projectController extends Controller
{
    function projecView(){
        return view('admin.project.index');
    }//end
    function projectManage(){
        return view('admin.project.manageIndex');
    }//end

    function ProjectStore(Request $request){

        $image = $request->file('thumbnail_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/project/thumbnail/'.$name_gen);
    	$save_thumbnai = 'upload/project/thumbnail/'.$name_gen;

        $image = $request->file('details_banner');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/project/banner/'.$name_gen);
    	$save_banner = 'upload/project/banner/'.$name_gen;

		project::insert([
			'thum_project_name' => $request->thum_project_name,
			'thum_project_title' => $request->thum_project_title,
			'details_banner' => $request->details_banner,
			'category_name' => $request->category_name,
			'customer_name' => $request->customer_name,
			'start_date' => $request->start_date,
			'end_date' => $request->end_date,
			'rating' => $request->rating,
			'details_title' => $request->details_title,
			'long_desc' => $request->long_desc,
			'thumbnail_img' =>$save_thumbnai,
			'details_banner' =>$save_banner,
			'status' => 1,
      		'created_at' => Carbon::now(),
		]);

		$notification = array(
			'message' => 'Project Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-content')->with($notification);

    }//end
}
