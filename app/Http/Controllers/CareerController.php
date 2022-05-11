<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Career;

class CareerController extends Controller
{
    //
    function career(Request $req)
    {
        $career = new Career;
        $career->title=$req->input('title');
        $career->jobtype=$req->input('jobtype');
        $career->description=$req->input('description');
        $career->save();
        return $career;
    }

    function careers(Request $req)
    {
        return Career::all();
        return $career;
    }
}
