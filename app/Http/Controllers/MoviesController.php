<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;
class MoviesController extends Controller
{
    public function Index() {
        $collection
         = (new MongoDB\Client)->CineFast->Movies;
        $movies = $collection->find();  
        return view('Admin.Movies.index', ['movies' => $movies]);
    }

    public function MoviesStore() {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $movies = $collection->find([], [ "limit" => 20, "skip" => ($page - 1) * 20 ]);  
        return view('Movies.index', ['movies' => $movies, "moviesCount" => $moviesCount]);
    }

    public function MoviesDetails($id) {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Movies.Details", ["moviesM" => $moviesM]);
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.details', [ "moviesM" => $moviesM ]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $category = $collection->find();
        return view('Admin.Movies.create', [ "category" => $category ]);
    }

    public function Store() {
        $moviesM = [
            "title" => request("title"),
            "director" => request("director"),
            "year_released" => request("year_released"),
            "category" => request("category"),
        ];
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $insertOneResult = $collection->insertOne($moviesM);
        if ($insertOneResult->getInsertedCount() == 1) 
            return redirect('/admin/movies')->with('mssg', request('title')." was added succesfuly.")->with('alerttype', "success");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.edit', [ "moviesM" => $moviesM ]);
    }

    public function Update() {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesM = [
            "title" => request("title"),
            "director" => request("director"),
            "year_released" => request("year_released"),
            "category" => request("category"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("moviesid"))
        ],[
            '$set' => $moviesM
        ]);

        if($updateOneResult->getModifiedCount() == 1)
            return redirect("/admin/movies/".request("moviesid"))->with('mssg', "Updated succesfuly.")->with("alerttype", "success");
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.delete', [ "moviesM" => $moviesM ]);
    }

    public function Remove() {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $moviesname = request('title');
        $deletOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("moviesid"))
        ]);

        if($deletOneResult->getDeletedCount() == 1)
            return redirect("/admin/movies")->with("mssg", $moviesname." was deleted succesfuly.")->with("alerttype", "success");
    }
}
