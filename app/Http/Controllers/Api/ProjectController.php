<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Gate;
//use App\Http\Traits\CanLoadRelationships;

class ProjectController extends Controller
{
//    use CanLoadRelationships;

    private array $relations = ['category', 'tasks','tasks.category'];



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Project::class);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
