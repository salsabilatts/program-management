<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Category;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('category')->latest()->paginate(10);
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('programs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
            'start_date' => 'required|date',
        ]);

        Program::create($request->all());

        return redirect()->route('programs.index')->with('success', 'Program created successfully.');
    }

    public function edit(Program $program)
    {
        $categories = Category::all();
        return view('programs.edit', compact('program', 'categories'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $program->update($request->all());

        return redirect()->route('programs.index')->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program deleted.');
    }
}
