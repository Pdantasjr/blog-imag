<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return Inertia::render('Faq/Index');
    }

    public function create()
    {
        return Inertia::render('Faq/Create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
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
