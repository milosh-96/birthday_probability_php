<?php
$res = 0;
$simulations = 10000;
for($no = 0;$no < $simulations;$no++) {
   // Single Simulation //

   $people = array();

    for($i = 0;$i < 23;$i++) {
        $daterange = mt_rand(0,364);
        $people[] = $daterange;
    }
    //
    $found = 0;
    $values = array();
    //print_r($people);
    
    for($i = 0;$i < count($people);$i++) {
        //print $people[$i] . PHP_EOL;
        $temp = $people;
		//print_r($people);
		//print_r($temp);
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
print "Number of simulations with matches:" . $res . PHP_EOL;
print $res / 10000 * 100 . "%";