<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use Illuminate\Http\Request;
use Validator;

class JobController extends Controller
{
    public function job_list()
    {
        try {
            $jobs = ApplyJob::with('user')->whereUserId(auth()->id())->latest()->get();
            return response()->json(["success" => true, "jobs" => $jobs]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
                "success" => false
            ]);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "from" => "required",
                "to" => "required",
                "date" => "required",
                "time" => "required",
                "description" => "required",
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "message" => $validator->errors()->first(),
                    "success" => false
                ]);
            }
            $job = ApplyJob::create([
                "user_id" => auth()->id(),
                "from" => $request->from,
                "to" => $request->to,
                "date" => $request->date,
                "time" => $request->time,
                "description" => $request->description,
            ]);
            return response()->json([
                "message" => "Job create successfully Admin will response you",
                "success" => true
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
                "success" => false
            ]);
        }
    }
}
