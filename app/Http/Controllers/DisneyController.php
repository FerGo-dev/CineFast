<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class DisneyController extends Controller
{
    
    public function Index() {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $disney = $collection->find();  
        return view('Admin.Disney.index', ['disney' => $disney]);
    }

    public function DisneyStore() {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $disneyCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $disney = $collection->find([], [ "limit" => 20, "skip" => ($page - 1) * 20 ]);  
        return view('Disney.index', ['disney' => $disney, "disneyCount" => $disneyCount]);
    }

    public function DisneyDetails($id) {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $disneyM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Disney.Details", ["disneyM" => $disneyM]);
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $disneyM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Disney.details', [ "disneyM" => $disneyM ]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $genre = $collection->find();
        return view('Admin.Disney.create', [ "genre" => $genre ]);
    }

    public function Store() {
        $disneyM = [
            "movie_title" => request("movie_title"),
            "release_date" => request("release_date"),
            "genre" => request("genre"),
            "mpaa_rating" => request("mpaa_rating"),
        ];
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $insertOneResult = $collection->insertOne($disneyM);
        if ($insertOneResult->getInsertedCount() == 1) 
            return redirect('/admin/disney')->with('mssg', request('movie_title')." was added succesfuly.")->with('alerttype', "success");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $disneyM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Disney.edit', [ "disneyM" => $disneyM ]);
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->CineFast->Disney;
        $disneyM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Disney.delete', [ "disneyM" => $disneyM ]);
    }

}
