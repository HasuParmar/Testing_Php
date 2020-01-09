<?php
    require 'vendor/autoload.php';
    require 'helper/helper.php';
    $connection = new MongoDB\Client("mongodb://127.0.0.1/");

    $db = $connection->demoadd;

    $db->users->insertOne(
        [
            '_id'=> getNextSequence("userid",$db),
            'name'=> "Hasmukh Parmar",
        ]
    );


    /*function getNextSequence($name,$collection) {
        $cursor = $collection->counters->find(['_id'=>$name]);
        $arr = iterator_to_array($cursor);
        $id =0;
        foreach ($arr as $value) {
            $id = $value['seq'];
        }
        $id += 1;
        $collection->counters->findOneAndUpdate(['_id'=>$name],['$set'=>['seq'=>$id]]);

        return $id;
    }*/
?>
<script>

</script>