<?php

//Insert/ CREATE
$collection = (new MongoDB\Client)->CineFast->Movies;

// $insertOneResult = $collection->insertOne([
//     "type" => 'TV Show',
//      "title" => '70 danger animals',
//      "duration" => '1 season',
//      "listed_in" => 'Documentaries',
//      "description" => 'A good TV Show to learn about danger animals',
// ]);

// printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

// var_dump($insertOneResult->getInsertedId());

// require_once __DIR__ . "/vendor/autoload.php";
// $collection = (new MongoDB\Client)->CineFast->Netflix;

// $cursor = $collection->find(
//     [],
//     [
//         'limit' => 5,
//         'sort' => ['pop' => -1],
//     ]
// );
// // var_dump($cursor);
// // print_r($cursor);
// foreach ($cursor as $document) {
//     print_r($document);
// }


// // Read Function
// $table = $collection->find();

// foreach ($table as $record) {
//     echo "<br />";
//     echo "ID: ".$record["_id"]."<br />";
//     echo "Listed_in: ".$record->listed_in."<br />";
//     echo "Description: ".$record["description"]."<br />";
// }

// Update Function

// $updateOneResult = $collection->updateOne([
//     "category" => "drama"
// ],[
//     '$set' => ["description" => "Dramas"]
// ]);

// printf("Matched %d Document(s)<br/>", $updateOneResult->getMatchedCount());
// printf("Updated %d Document(s)<br/>", $updateOneResult->getModifiedCount());

//UPDATE MANY

// $collection->insertOne(['title' => 'X-men', 'category' => 'comedy', 'year_released' => '2010']);
// $collection->insertOne(['title' => 'Harry Potter', 'category' => 'comedy', 'year_released' => '2010']);
// $updateResult = $collection->updateMany(
//     ['year_released' => '2010'],
//     ['$set' => ['category' => 'fantasy']]
// );

// printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
// printf("Modified %d document(s)\n", $updateResult->getModifiedCount());

// Delete Function
$delteResult = $collection->deleteMany([
    "year_released" => "1933",
    

]);

printf("Deleted %d Document(s)<br />", $delteResult->getDeletedCount());


// $collection = (new MongoDB\Client)->FiveCStore->Products;
// $id = new \MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950");
// $product = $collection->findOne([ "_id" => $id]);
// $product = $collection->find();

// var_dump($product);
// print_r($product);

// $collection = (new MongoDB\Client)->FiveCStore->Products;
// $productCount = $collection->count([ "category_id" => "1234"]);

// print_r($productCount);


// $collection = (new MongoDB\Client)->FiveCStore->Products;
//         $comment = [
//             "user_id" => "5ee224c74250884f6c89c94e",
//             "comment" => "Works good enough.",
//             "date" => date("Y-m-d H:i:s")
//         ];
//         $product = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950") ]);
//         $comments = $product->comments;
//         if (count($comments) == 0 || $comments == null || empty($comments)) {
//             $comments = [$comment];
//         } else {
//             $comments = [$comment, ...$comments];
//         }
//         $updateOneResult = $collection->updateOne([
//             "_id" => new MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950")
//         ],[
//             '$set' => [ "comments" => $comments ]
//         ]);

//         $product = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId("5ee227ef4250884f6c89c950") ]);
//         print_r($product->comments);


        //INSERT MANY
      
// $collection = (new MongoDB\Client)->CineFast->Netflix;

// $insertManyResult = $collection->insertMany([
//     [
//         "type" => 'TV Show',
//         "title" => 'Las Chicas del cable',
//         "duration" => '5 seasons',
//         "listed_in" => 'Dramas, Independent Movies, International Movies',
//         "description" => 'A good TV Show to learn about the life of the people in the past, especially womens',
//     ],
//     [
//         "type" => 'Movie',
//         "title" => 'Norbit',
//         "duration" => '102 min',
//         "listed_in" => 'Comedy',
//         "description" => 'Norbit is a boy who was abandoned by his parents in an orphanage shortly after birth. From then on he will have an unhappy life in which he will meet the ruthless Rasputia, whom he will marry.',
//     ],
// ]);

// printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

// var_dump($insertManyResult->getInsertedIds());

//READ FUNCTION
// $collection = (new MongoDB\Client)->CineFast->Netflix;

// $document = $collection->findOne(['_id' => '5f28c8f929c52225b0200de7']);

// var_dump($document);