<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    // ── Public front-end ─────────────────────────
    public function index()
    {
        $careers = Career::orderBy('careerdate', 'desc')->get();
        return view('career', compact('careers'));
    }

    // ── Admin: list all ──────────────────────────
    public function adminIndex()
    {
        $careers = Career::orderBy('careerdate', 'desc')->get();
        return view('admin.careers.index', compact('careers'));
    }

    // ── Admin: show create form ──────────────────
    public function create()
    {
        return view('admin.careers.create');
    }

    // ── Admin: store new career ──────────────────
    public function store(Request $request)
    {
        $request->validate([
            'careername'    => 'required|string|max:255',
            'careerdesc'    => 'required|string|max:255',
            'careerrspec'   => 'nullable|string|max:255',
            'careerbenefit' => 'nullable|integer',
            'careerdate'    => 'required|date',
        ]);

        Career::create($request->all());

        return redirect()->route('admin.careers.index')
                         ->with('success', 'Career posting created successfully.');
    }

    // ── Admin: show edit form ────────────────────
    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    // ── Admin: update ────────────────────────────
    public function update(Request $request, Career $career)
    {
        $request->validate([
            'careername'    => 'required|string|max:255',
            'careerdesc'    => 'required|string|max:255',
            'careerrspec'   => 'nullable|string|max:255',
            'careerbenefit' => 'nullable|integer',
            'careerdate'    => 'required|date',
        ]);

        $career->update($request->all());

        return redirect()->route('admin.careers.index')
                         ->with('success', 'Career posting updated successfully.');
    }

    // ── Admin: delete ────────────────────────────
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('admin.careers.index')
                         ->with('success', 'Career posting deleted.');
    }
}