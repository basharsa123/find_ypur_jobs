<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Http\Requests\StorejobRequest;
use App\Http\Requests\UpdatejobRequest;
use App\Models\tag;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            "jobs.job",
            [
                "jobs" => job::latest()->get()->all(),
                "tags" => tag::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request::validate([
            "title" => ["required"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", Rule::in(["Part Time", "Full Time"])],
            "url" => ["required", "active_url"],
            "tags" => ["nullable"]  
        ]);
        $attributes["featured"] = $request::has("featured");
        $job = Auth::user()->employer->jobs()->create(
            Arr::except($attributes, "tags")
        );
        if ($attributes["tags"] ?? false):
            foreach( explode(',' , $attributes["tags"]) as $tag ):
            $job->tag($tag);
            endforeach;
        endif;
        return redirect("/");
    }
}
