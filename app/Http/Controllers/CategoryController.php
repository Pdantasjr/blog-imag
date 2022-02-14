<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Category/Index', [
            'categories' => Category::paginate(10)
            ->through(fn ($ctg) => [
                'id' => $ctg->id,
                'name' => $ctg->name,
                'updated_at' => $ctg->updated_at,
            ]),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Category/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        if(!$validated) {
            return Redirect::route('category.create');
        }

        $category = New Category();
        $slug = $this->setSlug($request->name);

        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();

        return Redirect::route('category.index')->with(['toast' => ['message' => "Categoria cadastrado!"]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if($category->id) {
            $category = Category::find($category->id);
            return Inertia::render('Category/Edit', [
                'category' => $category
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($category->id) {
            Category::find($category->id)->update($request->all());
        }
        return Redirect::route('category.index')->with(['toast' => ['message' => "Categoria atualizado com sucesso!"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return Redirect::route('category.index')->with(['toast' => ['message' => "Categoria excluído com sucesso!"]]);
    }

    private function setSlug($category) {
        $titleSlug = Str::slug($category);

        $query = Category::all();

        $t = 0;
        foreach ($query as $category) {
            if (Str::slug($category->name) === $titleSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $titleSlug = $titleSlug . '-' . $t;
        }

        return $titleSlug;
    }
}
