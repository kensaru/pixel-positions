<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // separates jobv into two collections one for featured = true, the other for filtered = false
        $jobs = Job::all()->groupBy('featured');

        // use View:: facade to render views
        return View::make(
            'jobs.index',
            [
                'featured_jobs' => $jobs[1],
                'jobs' => Job::latest()->paginate(3),
                'tags' => Tag::all(),
                //'jobs' => Job::where('employer_id', request()->employer()->id)->latest()->paginate(4),

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all()); or dd(request()->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        // learn compact data method
        // return View::make(
        //         'users.show',
        //         compact('user')
        //     );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
