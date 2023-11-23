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
        $projects = project::all();
        return view('admin.project.manageIndex',['projects'=>$projects]);
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

		return redirect()->route('project-manage')->with($notification);

    }//end

    function ProjectEdit($id){
    $projects = project::findOrFail($id);
    return view('admin.project.edit',["projects"=>$projects]);
    }

    function ProjectUpdate(Request $request){

        $project_id = $request->id;
		$oldImageThum = $request->old_img_thum;
		$oldImageBanner = $request->old_img_banner;
		unlink($oldImageThum);
		unlink($oldImageBanner);

        $image = $request->file('thumbnail_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/project/thumbnail/'.$name_gen);
    	$save_thumbnai = 'upload/project/thumbnail/'.$name_gen;

        $image = $request->file('details_banner');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/project/banner/'.$name_gen);
    	$save_banner = 'upload/project/banner/'.$name_gen;

		project::findOrFail($project_id)->update([

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
			'message' => 'Project Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('project-manage')->with($notification);

    }


    public function ProjectInactive($id){

		project::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Project Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}//end

	public function ProjectActive($id){
		project::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Project Active',
			  'alert-type' => 'success'
		  );
		  return redirect()->back()->with($notification);
	   } //end

	   public function ProjectDelete($id){
		$projects = project::findOrFail($id);
		unlink($projects->thumbnail_img);
		unlink($projects->details_banner);
		project::findOrFail($id)->delete();

		$notification = array(
		   'message' => 'Project Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method























}
