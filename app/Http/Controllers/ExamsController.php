<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Exams/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Exams $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Exams $exams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Exams $exams
     * @return \Illuminate\Http\Response
     */
    public function edit(Exams $exams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Exams $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exams $exams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Exams $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exams $exams)
    {
        //
    }

    public function exams(Request $request)
    {
        return Exams::query()
            ->with('methods')
            ->where('name', 'LIKE', "%{$request->term}%")
            ->orWhere('synonym', 'LIKE', "%{$request->term}%")
            ->get();
    }

    public function exam(Request $request)
    {
        return response()->json(
            Diagnostic::query()
                ->with('exams')
                ->where('slug', 'LIKE', "%{$request->slug}%")
                ->get()
        );
    }
}
