<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer','tags')->latest()->simplePaginate(6);
        $tags = Tag::all();
        return view('pages.home',
            [
                'jobs' => $jobs,
                'tags' => $tags

            ]);
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

        Mail::to($job->employer->user)->queue(
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
