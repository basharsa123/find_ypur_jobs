<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $q = job::where("title", "LIKE", "%" . request("search") . "%")->get();
        return view("jobs/resault", [
            "jobs" => $q
        ]);
    }
}
