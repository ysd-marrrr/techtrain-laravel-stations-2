<?php
namespace App\Http\Controllers;
use App\Movie;

class AdminMovieController extends Controller {
  public function index() {
      $movies = Movie::all();
      return view('admin/getMovies', ['movies' => $movies]);
  }
}