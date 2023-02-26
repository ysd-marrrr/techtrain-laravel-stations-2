<?php
namespace App\Http\Controllers;
use App\Practice;

class PracticeController extends Controller
{
  public function sample() {
    return view('practice');
  }

  public function sample2() {
    $foo = 'practice2';
    return view('practice2', ['testParam' => $foo]);
  }

  public function sample3() {
    return view('practice2', ['testParam' => 'test']);
  }

  public function getPractice() {
    $practices = Practice::all();
    return view('getPractice', ['practices' => $practices]);
  }
}