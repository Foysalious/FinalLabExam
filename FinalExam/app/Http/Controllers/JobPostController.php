<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = JobPost::orderBy('id', 'desc')->get();
        return view('backend.pages.contact.manage', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new JobPost();
        $contacts->company_name             = $request->company_name;
        $contacts->job_title             = $request->job_title;
        $contacts->job_location        = $request->job_location;
        $contacts->salary        = $request->salary;
        
        $contacts->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost,$id)
    {
        $jobPost = JobPost::find($id);
        if ( !is_null($jobPost) ){
            return view('backend.pages.edit', compact('jobPost'));
        }
        else{
            return route('manageContact');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        $contacts = new JobPost();
        $contacts->company_name             = $request->company_name;
        $contacts->job_title             = $request->job_title;
        $contacts->job_location        = $request->job_location;
        $contacts->salary        = $request->salary;
        
        $contacts->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost,$id)
    {
        $ContactInfo=JobPost::find($id);
        if ( !is_null($ContactInfo) ){
            $ContactInfo->delete(); 
            

        }
        return redirect()->route('manageContact');
    }
}
