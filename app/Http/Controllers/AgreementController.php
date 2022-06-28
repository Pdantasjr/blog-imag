<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Agreement/Index', [
            'agreements' => DB::table('agreements')->orderBy('created_at', 'DESC')->get(),
            'agreementImage' => asset('storage/'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Agreement/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' =>  'required|min:3',
            'brand' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ];
        $message = [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo Nome deve conter pelo menos 3 caractéres',
            'brand.required' => 'Você precisa adicionar o logotipo do convênio',
            'brand.image' => 'O logotipo deve ser uma imagem em um dos formatos: jpeg, jpg, png, gif, svg',
            'brand.mimes' => 'Formato não aceito. Favor inserir em um dos formator: jpeg, jpg, png, gif, svg',
            'brand.max' => 'Imagem muito grande. Inserir imagem de no máximo 2MB',
        ];
        Validator::validate($request->all(), $rules, $message);

        $agreement = New Agreement();
        $slug = $this->setSlug($request->name);

        $brandDefault = 'Agreements/default/agreement_default.svg';

        $agreement->name = $request->name;
        $agreement->slug = $slug;
        $agreement->brand = $request->file('brand') ? $request->file('brand')->store('Agreements/'.$slug, 'public') : $brandDefault;
        $agreement->save();

        return Redirect::route('agreement.index')->with(['toast' => ['message' => $request->name." foi cadastrado!"]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function edit(Agreement $agreement)
    {
        return Inertia::render('Agreement/Edit', [
            'agreement' => $agreement,
            'agreementImage' => Storage::url($agreement->brand),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agreement $agreement)
    {
        $rules = [
            'name' =>  'required|min:3',
        ];
        $message = [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo Nome deve conter pelo menos 3 caractéres',
        ];
        Validator::validate($request->all(), $rules, $message);

        $brand = $agreement->brand;
        $brandDefault = 'Agreements/default/agreement_default.svg';

        if($request->hasFile('brand')) {
            $brand != $brandDefault ? Storage::delete('public/'.$agreement->brand) : null;
            $brand = $request->file('brand')->store('Agreements/'.$agreement->slug, 'public');
        }

        $agreement->name = $request->input('name');
        $agreement->brand = $brand;

        $agreement->update();

        return Redirect::route('agreement.index')->with(['toast' => ['message' => "Caonvênio atualizado com sucesso!"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agreement $agreement)
    {
        Storage::deleteDirectory('public/Agreements/'.$agreement->slug);
        $agreement->delete();
        return Redirect::route('agreement.index')->with(['toast' => ['message' => "Convênio excluído com sucesso!"]]);
    }

    private function setSlug($agreement) {
        $nameSlug = Str::slug($agreement);

        $query = Agreement::all();

        $t = 0;
        foreach ($query as $agreement) {
            if (Str::slug($agreement->name) === $nameSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $nameSlug = $nameSlug . '-' . $t;
        }
        return $nameSlug;
    }
}
