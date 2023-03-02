<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with('types', 'technologies')->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
