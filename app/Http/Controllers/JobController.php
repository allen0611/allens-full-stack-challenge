<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
  public function index(Request $request)
  {
    $query = Job::query()->with('employer'); // Eager loading the employer relationship.
  
    // Apply filters based on query parameters
    if ($request->filled('type')) {
        $query->where('type', $request->input('type'));
    }
  
    if ($request->filled('salary')) {
      // Get the input salary and clean it up
      $inputSalary = preg_replace('/[^\d]/', '', $request->input('salary'));
      
      $query->whereRaw("CAST(REPLACE(REPLACE(salary, '$', ''), ',', '') AS UNSIGNED) >= ?", [$inputSalary]);
    }
  
    if ($request->filled('title')) {
      $query->where('title', 'like', '%' . $request->input('title') . '%');
    }
  
    if ($request->filled('company')) {
        $query->whereHas('employer', function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->input('company') . '%');
        });
    }
  
    if ($request->filled('location')) {
        $query->where('location', 'like', '%' . $request->input('location') . '%');
    }
  
    // Sort by id in descending order to show newest jobs first.
    $jobs = $query->orderBy('id', 'desc')->paginate(18)->appends($request->except('page')); // Looks best, offers better UX, but at cost of performance.
    // $jobs = $query->orderBy('id', 'desc')->simplePaginate(18)->appends($request->except('page'));
    // $jobs = $query->orderBy('id', 'desc')->cursorPaginate(18)->appends($request->except('page')); // Most performant but ugly URL.
  
    return view('jobs.index', [
        'greeting' => 'Dzien dobre',
        'company' => 'Wise Publishing',
        'jobs' => $jobs,
    ]);
  }

  public function create()
  {
    return view('jobs.create');
  }

  public function show(Job $job)
  {
    $employer_id = Employer::find($job->employer_id);
  
    return view('jobs.show', [
      'job' => $job,
      'employer' => $employer_id
    ]);
  }

  public function store()
  {
    request()->validate([
      'title' => ['required'],
      'location' => ['required'],
      'salary' => ['required'],
      'type' => ['required', 'min:3'],
      'description' => ['required'],
      'employer_id' => ['required']
    ]);
    
      Job::create([
        'type' => request('type'),
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
        'location' => request('location'),
        'description' => request('description')
      ]);
    
      return redirect('/jobs');
  }

  public function edit(Job $job)
  {
    $employer_id = Employer::find($job->employer_id);
  
    return view('jobs.edit', [
      'job' => $job,
      'employer' => $employer_id
    ]);
  }

  public function update(Job $job)
  {
    // authorize (on hold..)
  
    request()->validate([
      'title' => ['required'],
      'location' => ['required'],
      'salary' => ['required'],
      'type' => ['required', 'min:3'],
      'description' => ['required']
    ]);
  
    $job->update([
      'type' => request('type'),
      'title' => request('title'),
      'salary' => request('salary'),
      'location' => request('location'),
      'description' => request('description')
    ]);
  
    return redirect('/jobs/' . $job->id);
  }

  public function destroy(Job $job)
  {
    // authorize (on hold..)
  
    $job->delete();
  
    return redirect('/jobs');
  }
}
