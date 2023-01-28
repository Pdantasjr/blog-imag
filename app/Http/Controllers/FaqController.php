<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        return Inertia::render('Faq/Index', [
            'questions' => Faq::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Faq/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        if(!$validated) {
            return Redirect::route('question.create');
        }

        $question = New Faq();
        $slug = $this->setSlug($request->question);

        $question->question = $request->question;
        $question->slug = $slug;
        $question->answer = $request->answer;
        $question->save();

        return Redirect::route('question.index')->with(['toast' => ['message' => "Dúvida cadastrada!"]]);
    }

    public function edit($id) {
        if($id) {
            $question = Faq::find($id);
            return Inertia::render('Faq/Edit', [
                'question' => $question
            ]);
        }
    }

    public function update(Request $request, $id) {

        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        
        if(!$validated) {
            return Redirect::route('question.edit');
        }

        Faq::find($id)->update($request->all());

        return Redirect::route('question.index')->with(['toast' => ['message' => "Dúvida atualizada com sucesso!"]]);
    }

    public function destroy($id) {
        $question = Faq::find($id);
        $question->delete();
        return Redirect::route('question.index')->with(['toast' => ['message' => "Dúvida excluída com sucesso."]]);
    }

    private function setSlug($question) {
        $titleSlug = Str::slug($question);

        $query = Faq::all();

        $t = 0;
        foreach ($query as $question) {
            if (Str::slug($question->question) === $titleSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $titleSlug = $titleSlug . '-' . $t;
        }

        return $titleSlug;
    }
}
