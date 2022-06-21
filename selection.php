<div>
    <h2>Selection Sort</h2>
    <p>
        <?php
        $numbers = [34, 72, 25, 1, 5, 6, 9];
        $n = count($numbers);

        foreach ($numbers as $number) {
            echo $number . ' ';
        }
        ?>
    </p>
    <?php
    for($i=0;$i<$n-1;$i++){
        for($j=$i;$j<$n-1;$j++){
            if($numbers[$i]>$numbers[$j+1]){
                $tmp = $numbers[$i];
                $numbers[$i] = $numbers[$j+1];
                $numbers[$j+1] = $tmp;
            }
        }
    }
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
</div>