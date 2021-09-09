<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Exports\SurveyExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class SurveyController extends Controller
{
    public function index(){
     return view('survey');
    }

    public function save($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6) {
     $survey = Survey::create([
      'nilai1' => $nilai1,
      'nilai2' => $nilai2,
      'nilai3' => $nilai3,
      'nilai4' => $nilai4,
      'nilai5' => $nilai5,
      'nilai6' => $nilai6,
     ]);

     return redirect('/');
    }
    public function export(){

      return Excel::download(new SurveyExport, 'SurveyPolsekRumbai'.Carbon::now()->format('d-F-Y').'.xlsx');
    }
}