<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessLongTask;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        ProcessLongTask::dispatch("Demo task");
        return response()->json(['message'=>'Job added']);
    }
}
