<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        // return Inertia::render('Faq/Index', [
        //     'questions' => Faq::paginate(10)
        //     ->through(fn ($qt) => [
        //         'id' => $qt->id,
        //         'question' => $qt->question,
        //         'updated_at' => $qt->updated_at,
        //     ])
        // ]);

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
        $slug = $this->setSlug($request->name);

        $question->question = $request->question;
        $question->slug = $slug;
        $question->answer = $request->answer;
        $question->save();

        return Redirect::route('question.index')->with(['toast' => ['message' => "Dúvida cadastrada!"]]);
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
