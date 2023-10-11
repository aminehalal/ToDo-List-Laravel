<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task ;

class HomeController extends Controller
{
    //
    function index(){
        
        if (auth()->check()){
            $userId = auth()->user()->id;
            $tasks = Task::where('userId', $userId)->get();
        }
        else{
            $tasks = null ;
        }

        return view('home' , [
            'tasks' => $tasks
        ]);
    }

    function signupPage(){
        return view('signup');
    }

    function loginPage(){
        return view('login');
    }

    function createTask(Request $request){
        $taskField = $request->validate([
            'task' => ['required' , 'min:5'],
            'userId' => ['required'] ,
            'endIn' => ['required']
        ]);
        // Format the "endIn" date and time
        $endIn = date('Y-m-d H:i', strtotime($taskField['endIn']));
        $startIn = date('Y-m-d H:i', strtotime(now()));
        $taskField['endIn'] = $endIn;
        $taskField['startIn'] = $startIn;
        Task::create($taskField);
        return back();
    }
}
