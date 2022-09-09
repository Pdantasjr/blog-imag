<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiExamsController extends Controller
{
    public function index(Request $request)
    {
        $exams = Exams::all();
        if($exams === null) {
            return response()->json(["erro", "Recurso pesquisado não encontrado"], 400);
        } else {
            return response()->json(
                DB::table('exams')
                    ->where('name', 'LIKE', '%'.$request->term.'%')
                    ->orWhere('synonym', 'LIKE', '%'.$request->term.'%')
                    ->skip(0)
                    ->take(10)
                    ->get(),
            200);
        }
    }
}
