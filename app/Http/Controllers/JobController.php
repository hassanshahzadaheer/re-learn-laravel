<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(6);
        return view('pages.jobs.index', ['jobs' => $jobs]);
    }

    public function show(Job $job)
    {
        return view('pages.jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'], 'salary' => ['required'], 'shift' => ['required'],
        ]);
        $job = Job::create([
            'title' => request()->title, 'salary' => request()->salary, 'time' => request()->shift, 'employer_id' => 1
        ]);
        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    public function create()
    {
        return view('pages.jobs.create');
    }

    public function edit(Job $job)
    {

        return view('pages.jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required'], 'salary' => ['required'], 'shift' => ['required'],
        ]);

        // authorize (On hold...)

        $job->update([
            'title' => request('title'), 'salary' => request('salary'), 'time' => request('shift'),
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
