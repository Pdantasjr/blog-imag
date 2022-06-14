<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamsController extends Controller
{
    public function index(Request $request)
    {
//        dd($request->all());
//        $exams = Exams::all();
        return Exams::query()
            ->with('methods')
            ->where('name', 'LIKE', "%{$request->term}%")
            ->orWhere('synonym', 'LIKE', "%{$request->term}%")
            ->paginate(10);


//        if($exams === null) {
//            return response()->json(["erro" => "Resurso pesquisado não encontrado"], 404);
//        } else {
//            return response()->json(
//                DB::table('exams')
//                    ->where( 'name', 'LIKE', '%'.$request->term.'%')
//                    ->get(),
//                200);
//
//        }
    }
}
