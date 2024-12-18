<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function __invoke(tag $tag)
    {
        return view("jobs/resault" , ["jobs" => $tag->jobs ]);
    }
}
