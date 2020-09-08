<?php

namespace App\Http\Controllers;

use App\Job;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('employee.index')->with('jobs', $jobs);
    }

    public function create()
    {

        return view('employee.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'salary' => 'required'
        ]);

        $job = new Job();
        $job->company = $request->company;
        $job->title = $request->title;
        $job->location = $request->location;
        $job->salary = $request->salary;

        $job->save();

        return redirect('employee');
    }
    public function edit($id)
    {
        $job = Job::find($id);
        return view('employee.edit')->with('job', $job);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'salary' => 'required'
        ]);

        $job = new Job();
        $job->company = $request->company;
        $job->title = $request->title;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->save();
        return redirect('employee');
    }

    public function delete($id)
    {
        $job = Job::find($id);
        return view('employee.delete')->with('job', $job);
    }
    public function destroy($id)
    {
        Job::destroy($id);
        return redirect('employee');
    }
}