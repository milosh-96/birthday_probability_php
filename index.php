<?php
$res = 0;
for($no = 0;$no < 1000;$no++) {
   // Single Simulation //

   $people = array();

    for($i = 0;$i < 100;$i++) {
        $daterange = mt_rand(820454400,823132800);
        $people[] = $daterange;
    }
    //
    $found = 0;
    $values = array();
    //print_r($people);
    
    for($i = 0;$i < count($people);$i++) {
        //print $people[$i] . PHP_EOL;
        $temp = $people;
        unset($temp[$i]);

        if(in_array($people[$i],$temp)) {
            $found++;
            $values[] = $people[$i];
            break;
           // print "OK";
        }
    }

    //print "found:" . $found . PHP_EOL;

    

    if($found > 0) {
        $res++;
    }
}
print $res . PHP_EOL;
print $res / 1000 * 100 . "%";