<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::all();  // 'all' is typically used for fetching all records
        return view('college.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('college.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collegeData = $request->validate([
            'colName' => 'required|string|max:255',
            'colShortName' => 'required|string|max:50',
            'telNo' => 'nullable|string|max:20',
            'localNo' => 'nullable|string|max:20',
            'description' => 'nullable|string|max:500',
            'colLocation' => 'nullable|string|max:255',
        ]);

        College::create($collegeData);

        return redirect()->route('college.index')->with('success', 'College saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(College $college)
    {
        return view('college.show', compact('college'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(College $college)
    {
        return view('college.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, College $college)
    {
        $collegeData = $request->validate([
            'colName' => 'required|string|max:255',
            'colShortName' => 'required|string|max:50',
            'telNo' => 'nullable|string|max:20',
            'localNo' => 'nullable|string|max:20',
            'description' => 'nullable|string|max:500',
            'colLocation' => 'nullable|string|max:255',
        ]);

        $college->update($collegeData);

        return redirect()->route('college.index')->with('success', 'College updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(College $college)
    {
        $college->delete();  // This will perform a soft delete

        return redirect()->route('colleges.index')->with('info', 'College deleted successfully.');
    }

}
