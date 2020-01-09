<?php

    function getNextSequence($name,$collection) {
        $cursor = $collection->counters->find(['_id'=>$name]);
        $arr = iterator_to_array($cursor);
        $id =0;
        foreach ($arr as $value) {
            $id = $value['seq'];
        }
        $id += 1;
        $collection->counters->findOneAndUpdate(['_id'=>$name],['$set'=>['seq'=>$id]]);

        return $id;
    }
?>