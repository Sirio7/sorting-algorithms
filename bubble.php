<h2>Bubble Sort</h2>
<p>Il Bubble Sort è un algoritmo usato per ordinare una lista di elementi, ad esempio gli elementi in un array. L'algoritmo confronta due elementi adiacenti e quindi li scambia se non sono ordinati. Il processo è ripetuto finché non sono più necessari scambi.</p>

<h3>Primo Metodo</h3>
<p>
    <?php
    $numbers = [3, 1, 5, 2];
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
</p>
<p>
    <?php
    $n = count($numbers);
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $tmp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $tmp;
                $swapped = true;
            }
        }
    } while ($swapped);
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
</p>
<pre>
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $tmp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $tmp;
                $swapped = true;
            }
        }
    } while ($swapped);
</pre>

<h3>Secondo metodo</h3>
<p>
    <?php
    $numbers = [3, 1, 5, 2];
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
</p>
<p>
    <?php
    $n = count($numbers);
    $swapped = true;
    while ($swapped) {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $tmp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $tmp;
                $swapped = true;
            }
        }
    }
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
</p>
<pre>
$swapped = true;
    while($swapped){
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $tmp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $tmp;
                $swapped = true;
            }
        }
    }
</pre>
<h3>Terzo Metodo</h3>
<p>
    <?php
    $numbers = [3, 1, 5, 2];
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
<p>
    <?php
    $n = count($numbers);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $tmp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $tmp;
            }
        }
    }
    foreach ($numbers as $number) {
        echo $number . ' ';
    }
    ?>
</p>
</p>
<pre>
        $numbers = [3, 1, 5, 2];
        $n = count($numbers);
        for ($i=0; $i < $n - 1 ; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $tmp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $tmp;
            }
        }
    }
</pre>