<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;
class NetflixController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $netflix = $collection->find();  
        return view('Admin.Netflix.index', ['netflix' => $netflix]);
    }

    public function NetflixStore() {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $netflixCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $netflix = $collection->find([], [ "limit" => 20, "skip" => ($page - 1) * 20 ]);  
        return view('Netflix.index', ['netflix' => $netflix, "netflixCount" => $netflixCount]);
    }


    public function NetflixDetails($id) {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $netflixM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Netflix.Details", ["netflixM" => $netflixM]);
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $netflixM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Netflix.details', [ "netflixM" => $netflixM ]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $type = $collection->find();
        return view('Admin.Netflix.create', [ "type" => $type ]);
    }

    public function Store() {
        $netflixM = [
            "type" => request("type"),
            "title" => request("title"),
            "duration" => request("duration"),
            "listed_in" => request("listed_in"),
            "description" => request("description"),
        ];
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $insertOneResult = $collection->insertOne($netflixM);
        if ($insertOneResult->getInsertedCount() == 1) 
            return redirect('/admin/netflix')->with('mssg', request('title')." was added succesfuly.")->with('alerttype', "success");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $netflixM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Netflix.edit', [ "netflixM" => $netflixM ]);
    }

    public function Update() {
        $collection = (new MongoDB\Client)->CineFast->Movies;
        $netflixM = [
            "type" => request("type"),
            "title" => request("title"),
            "duration" => request("duration"),
            "listed_in" => request("listed_in"),
            "description" => request("description"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("netflixid"))
        ],[
            '$set' => $netflixM
        ]);

        if($updateOneResult->getModifiedCount() == 1)
            return redirect("/admin/netflix/".request("netflixid"))->with('mssg', "Updated succesfuly.")->with("alerttype", "success");
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->CineFast->Netflix;
        $netflixM = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Netflix.delete', [ "netflixM" => $netflixM ]);
    }

}
