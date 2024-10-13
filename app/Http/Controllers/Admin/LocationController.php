<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations=Location::latest()->get();
        return view("admin.location.list",compact("locations"));
    }

    public function edit($id){
        $location=Location::find($id);
        return view("admin.location.update",compact("location"));
    }

    public function create(){
        return view("admin.location.create");
    }

    public function delete($id){
        $location=Location::destroy($id);
        return to_route("admin.location.list")->with("success","Location delete successfully");
    }

    public function store(Request $request){
        $request->validate([
            "location_name"=> "required",
            "location"=> "required",
            "parsl_name"=> "required",
        ]);

        $location=Location::create($request->all());
        return to_route("admin.location.list")->with("success","Location add successuflly");
    }

    public function update(Request $request,$id){
        $request->validate([
            "location_name"=> "required",
            "location"=> "required",
            "parsl_name"=> "required",
        ]);

        $location=Location::find($id)->update($request->all());
        return to_route("admin.location.list")->with("success","Location update successuflly");
    }
}
