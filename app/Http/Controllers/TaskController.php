<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Post;
use Illuminate\Support\Facades\Response;

class TaskController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $data = Task::all();

        return Response::json(['data'=>$data]);
    }
}
