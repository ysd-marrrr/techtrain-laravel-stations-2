<?php
namespace App\Http\Controllers;
use App\Movie;

class MovieController extends Controller {
  public function index() {
      $movies = Movie::all();
      return view('getMovies', ['movies' => $movies]);
  }
}