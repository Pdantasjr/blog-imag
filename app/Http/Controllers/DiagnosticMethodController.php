<?php

namespace App\Http\Controllers;

use App\Models\DiagnosticMethod;
use App\Models\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class DiagnosticMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('DiagnosticMethod/Index', [
            'diagnosticMethods' => DiagnosticMethod::all(),
            'methodImage' => asset('storage/'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('DiagnosticMethod/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'diagnosticImage' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $method = New DiagnosticMethod();
        $slug = $this->setSlug($request->name);

        $method->name = $request->input('name');
        $method->slug = $slug;
        $method->image = $request->file('diagnosticImage')->store('Method/'.$slug, 'public');
        $method->save();

        return Redirect::route('diagnostic.index')->with(['toast' => ['message' => "Método cadastrado"]]);
    }

    public function edit($id)
    {
        $method = DiagnosticMethod::find($id);
        return Inertia::render('DiagnosticMethod/Edit', [
            'diagnosticMethod' => [
              'id' => $method->id,
              'name' => $method->name,
              'image' => $method->image,
            ],
            'methodImage' => Storage::url($method->image),
        ]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $method = DiagnosticMethod::find($id);

        if($request->hasFile('diagnosticImage')) {
            Storage::delete('public/'.$method->image);
        }

        $method->name = $request->input('name');
        $method->image = $request->hasFile('diagnosticImage') ? $request->file('diagnosticImage')->store('Method/'.$method->slug, 'public') : $method->image;

        $method->update();
        return Redirect::route('diagnostic.index')->with(['toast' => ['message' => "Método atualizado com sucesso."]]);

    }

    public function destroy($id)
    {
        if(DiagnosticMethod::find($id)->exams()->count() < 1) {
            $method = DiagnosticMethod::find($id);
            Storage::deleteDirectory('public/Method/'. $method->slug);
            $method->delete();
            return Redirect::route('diagnostic.index')->with(['toast' => ['message' => "Método excluído com sucesso!"]]);
        } else {
            return Redirect::route('diagnostic.index')->with(['toast' => ['message' => "Existem exames ligados a este método. Não é possível excluir!"]]);
        }
    }

    private function setSlug($method) {
        $diagnosticName = Str::slug($method);

        $query = DiagnosticMethod::all();

        $t = 0;
        foreach ($query as $method) {
            if (Str::slug($method->name) === $diagnosticName) {
                $t++;
            }
        }
        if ($t > 0) {
            $diagnosticName = $diagnosticName . '-' . $t;
        }

        return $diagnosticName;
    }
}
