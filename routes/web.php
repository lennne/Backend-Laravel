<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});



//this will return an array which will later be converted into a json object
Route::get('/about', function () {
    //return ['foo'=>'bar']
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs',[

    'jobs' =>  Job::all()
    ]);
});

//This route has a wildcard and it is {id}, so when the route is being accessed it'll appear as "/job/2"
//and the 2 will be extracted as id {id:2}
Route::get('/job/{id}', function ($id) {
    
    //Job is a Model Class that has a static function called find
    $job = Job::find($id);
        
    return view('job', ['job'=> $job]);
});
