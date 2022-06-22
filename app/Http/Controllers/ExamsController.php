<?php

namespace App\Http\Controllers;

use App\Models\DiagnosticMethod;
use App\Models\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
        return Inertia::render('Exams/Index', [
            'exams' => Exams::with('method')->get(),
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
        return Inertia::render('Exams/Create', [
            'methods' => DiagnosticMethod::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'diagnostics_id' => 'required',
            'name' => 'required|min:3',
            'synonym' => 'required|min:3',
            'what_is' => 'required|min:3',
            'how_it_is_done' => 'required|min:3',
            'average_duration' => 'required|min:2',
            'contraindications_or_relative_restrictions' => 'required|min:3',
            'service_guidelines' => 'required|min:3',
            'achievement_orientation_or_preparation' => 'required|min:3',
            'deadline' => 'required|min:2',
        ];
        $messages = [
            'diagnostics_id.required' => 'Selecione o métodos de diagnóstico!',

            'name.required' => 'O campo Nome é obrigatório!',
            'name.min' => 'O campo Nome deve conter pelo menos 3 caractéres',

            'synonym.required' => 'O campo Sinônimo é obrigatório!',
            'synonym.min' => 'O campo Sinônimo deve conter pelo menos 3 caractéres',

            'what_is.required' => 'O campo O que é/para que serve é obrigatório!',
            'what_is.min' => 'O campo O que é/para que serve deve conter pelo menos 3 caractéres',

            'how_it_is_done.required' => 'O campo Como é realizado é obrigatório!',
            'how_it_is_done.min' => 'O campo Como é realizado deve conter pelo menos 3 caractéres',

            'average_duration.required' => 'O campo Duração média é obrigatório!',
            'average_duration.min' => 'O campo Duração média deve conter pelo menos 2 caractéres',

            'contraindications_or_relative_restrictions.required' => 'O campo Contraindicações | Restrições relativas é obrigatório!',
            'contraindications_or_relative_restrictions.min' => 'O campo Contraindicações | Restrições relativas deve conter pelo menos 3 caractéres',

            'service_guidelines.required' => 'O campo Orientação para o atendimento é obrigatório!',
            'service_guidelines.min' => 'O campo Orientação para o atendimento deve conter pelo menos 3 caractéres',

            'achievement_orientation_or_preparation.required' => 'O campo Orientações para realização | Preparo é obrigatório!',
            'achievement_orientation_or_preparation.min' => 'O campo Orientações para realização | Preparo deve conter pelo menos 3 caractéres',

            'deadline.required' => 'O campo Prazo de entrega do resultado é obrigatório!',
            'deadline.min' => 'O campo Prazo de entrega do resultado deve conter pelo menos 2 caractéres',
        ];
        $validate = Validator::validate($request->all(), $rules, $messages);

        if(!$validate) {
            return Redirect::route('exams.index')->with(['toast' => ['message' => "Erro ao cadastrar exame, verifique os dados e tente novamente."]]);
        }

        $exam = new Exams();
        $slug = $this->setSlug($request->name);

        $exam->diagnostics_id = $request->diagnostics_id;
        $exam->name = $request->name;
        $exam->slug = $slug;
        $exam->synonym = $request->synonym;
        $exam->what_is = $request->what_is;
        $exam->how_it_is_done = $request->how_it_is_done;
        $exam->average_duration = $request->average_duration;
        $exam->contraindications_or_relative_restrictions = $request->contraindications_or_relative_restrictions;
        $exam->service_guidelines = $request->service_guidelines;
        $exam->achievement_orientation_or_preparation = $request->achievement_orientation_or_preparation;
        $exam->deadline = $request->deadline;
        $exam->save();

        return Redirect::route('exams.index')->with(['toast' => ['message' => "Exame cadastrado com sucesso!"]]);
    }

    public function edit($id)
    {
        $exam = Exams::find($id);
        return Inertia::render('Exams/Edit', [
            'exam' => [
                'id' => $exam->id,
                'name' => $exam->name,
                'synonym' => $exam->synonym,
                'what_is' => $exam->what_is,
                'how_it_is_done' => $exam->how_it_is_done,
                'average_duration' => $exam->average_duration,
                'contraindications_or_relative_restrictions' => $exam->contraindications_or_relative_restrictions,
                'service_guidelines' => $exam->service_guidelines,
                'achievement_orientation_or_preparation' => $exam->achievement_orientation_or_preparation,
                'deadline' => $exam->deadline,
            ],
        ]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'name' => 'required|min:3',
            'synonym' => 'required|min:3',
            'what_is' => 'required|min:3',
            'how_it_is_done' => 'required|min:3',
            'average_duration' => 'required|min:2',
            'contraindications_or_relative_restrictions' => 'required|min:3',
            'service_guidelines' => 'required|min:3',
            'achievement_orientation_or_preparation' => 'required|min:3',
            'deadline' => 'required|min:2',
        ];
        $messages = [

            'name.required' => 'O campo Nome é obrigatório!',
            'name.min' => 'O campo Nome deve conter pelo menos 3 caractéres',

            'synonym.required' => 'O campo Sinônimo é obrigatório!',
            'synonym.min' => 'O campo Sinônimo deve conter pelo menos 3 caractéres',

            'what_is.required' => 'O campo O que é/para que serve é obrigatório!',
            'what_is.min' => 'O campo O que é/para que serve deve conter pelo menos 3 caractéres',

            'how_it_is_done.required' => 'O campo Como é realizado é obrigatório!',
            'how_it_is_done.min' => 'O campo Como é realizado deve conter pelo menos 3 caractéres',

            'average_duration.required' => 'O campo Duração média é obrigatório!',
            'average_duration.min' => 'O campo Duração média deve conter pelo menos 2 caractéres',

            'contraindications_or_relative_restrictions.required' => 'O campo Contraindicações | Restrições relativas é obrigatório!',
            'contraindications_or_relative_restrictions.min' => 'O campo Contraindicações | Restrições relativas deve conter pelo menos 3 caractéres',

            'service_guidelines.required' => 'O campo Orientação para o atendimento é obrigatório!',
            'service_guidelines.min' => 'O campo Orientação para o atendimento deve conter pelo menos 3 caractéres',

            'achievement_orientation_or_preparation.required' => 'O campo Orientações para realização | Preparo é obrigatório!',
            'achievement_orientation_or_preparation.min' => 'O campo Orientações para realização | Preparo deve conter pelo menos 3 caractéres',

            'deadline.required' => 'O campo Prazo de entrega do resultado é obrigatório!',
            'deadline.min' => 'O campo Prazo de entrega do resultado deve conter pelo menos 2 caractéres',
        ];
        $validate = Validator::validate($request->all(), $rules, $messages);

        if(!$validate) {
            return Redirect::route('exams.index')->with(['toast' => ['message' => "Erro ao cadastrar exame, verifique os dados e tente novamente."]]);
        }

        $exam = Exams::find($id);

        $exam->name = $request->name;
        $exam->synonym = $request->synonym;
        $exam->what_is = $request->what_is;
        $exam->how_it_is_done = $request->how_it_is_done;
        $exam->average_duration = $request->average_duration;
        $exam->contraindications_or_relative_restrictions = $request->contraindications_or_relative_restrictions;
        $exam->service_guidelines = $request->service_guidelines;
        $exam->achievement_orientation_or_preparation = $request->achievement_orientation_or_preparation;
        $exam->deadline = $request->deadline;
        $exam->update();

        return Redirect::route('exams.index')->with(['toast' => ['message' => "Exame atualizado com sucesso!"]]);
    }

    public function destroy($slug)
    {
        $exam = Exams::where('slug', $slug);
        $exam->delete();
        return Redirect::route('exams.index')->with(['toast' => ['message' => "Exame excluído com sucesso!"]]);
    }

    public function exams(Request $request)
    {
        return response()->json([
            Exams::query()
            ->with('method')
            ->where('name', 'LIKE', "%{$request->term}%")
            ->orWhere('synonym', 'LIKE', "%{$request->term}%")
            ->get()
        ], '200');
    }

    public function examDetail(Request $request)
    {
        return response()->json(
            Exams::query()
            ->where('slug', 'LIKE', "%{$request->slug}%")
            ->first()
        );
    }

    public function methods(Request $request)
    {
        $methods = DiagnosticMethod::where('slug', 'LIKE', "%{$request->slug}%")->with('exams')->get();
        return response()->json($methods);

    }

    private function setSlug($examName) {
        $exam = Str::slug($examName);

        $query = Exams::all();

        $t = 0;
        foreach ($query as $examName) {
            if (Str::slug($examName->name) === $exam) {
                $t++;
            }
        }
        if ($t > 0) {
            $exam = $exam . '-' . $t;
        }

        return $exam;
    }
}
