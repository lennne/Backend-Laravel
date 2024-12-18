<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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

    'jobs' =>  [
        [
             'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
           'title' => 'Programmer',
           'salary' => '$10,000'
        ],
        [
            'id' => 3,
           'title' => 'Teacher',
           'salary' => '$40,000'
       ]
    ]
    ]);
});

//This route has a wildcard and it is {id}, so when the route is being accessed it'll appear as "/job/2"
//and the 2 will be extracted as id {id:2}
Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
             'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
           'title' => 'Programmer',
           'salary' => '$10,000'
        ],
        [
            'id' => 3,
           'title' => 'Teacher',
           'salary' => '$40,000'
       ]
        ];
    
       $job = Arr::first($jobs, fn($jobs) => $jobs['id'] == $id);
        
    return view('job', ['job'=> $job]);
});
