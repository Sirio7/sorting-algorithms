<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Algorithms</title>
</head>

<body>
    <h1>Sorting Algorithms</h1>
    <button onclick="openClose('bubble')">Bubble Sort</button>
    <button onclick="openClose('selection')">Selection Sort</button>
    <button onclick="openClose('insertion')">Merge Sort</button>

    <div id="bubble"  style="display:none">
        <?php require './bubble.php' ?>
    </div>
    <div id="selection"  style="display:none">
        <?php require './selection.php' ?>
    </div>
    <div id="insertion"  style="display:none">
        <?php require './insertion.php' ?>
    </div>

    <script>
        function openClose($value) {
            var bubble = document.getElementById($value);
            if(bubble.getAttribute("style")=="display:none"){
                bubble.setAttribute("style","");
            } else {
                bubble.setAttribute("style","display:none");
            }
        }
    </script>
</body>

</html>