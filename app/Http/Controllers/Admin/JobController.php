<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\ApprovedJob;
use App\Models\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs=ApplyJob::latest()->get();
        return view("admin.job.list",compact("jobs"));
    }


    public function approved($id){
        $locations=Location::all();
        return view("admin.job.approved",compact('locations','id'));
    }
    
    public function store_approved_job(Request $request,$id){
        $request->validate([
            "location"=>'required'
        ]);

        $job=ApplyJob::findOrFail($id);

        $approved_job=new ApprovedJob();
        $approved_job->job_id=$id;
        $approved_job->user_id=$job->user_id;
        $approved_job->location_id=$request->location;
        $approved_job->save();


        $job->status='Progress';

        $job->save();

        return to_route('admin.job.list')->with("success","approved successfully");
    }

    public function delete($id){
        ApplyJob::destroy($id);
        return to_route("admin.job.list")->with("success","Job delete successfully");
    }
}