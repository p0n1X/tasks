<?php

$example_array = [
    [
        'id' => 9,
        'name' => "Ivan"
    ], [
        'id' => 2,
        'name' => "Georgi"
    ], [
        'id' => 7,
        'name' => "Spas"
    ], [
        'id' => 4,
        'name' => "Petar"
    ]
];

$sorted_array = [];
foreach ($example_array as $key => $item) {
    $sorted_array[$example_array[$key]['id']] = $item;
}
$asc_array = $sorted_array;
$desc_array = $sorted_array;
ksort($asc_array);
krsort($desc_array);

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container"><a class="nav-link active" aria-current="page" href="/">Home</a></div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="card mx-4 my-2 px-0">
            <div class="card-header">Task 17</div>
            <div class="card-body">
                <div class="container">Write a PHP program to sort a collection of given arrays or objects by key.
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card mx-4 my-2 px-0">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="container">
                    <pre>
                        <?php print_r($example_array); ?>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card mx-4 my-2 px-0">
            <div class="card-header">Result</div>
            <div class="card-body">
                <h3>ASC by ID</h3>
                <pre>
                        <?php print_r(array_values($asc_array)); ?>
                    </pre>
                <h3>DESC by ID</h3>
                <pre>
                        <?php print_r(array_values($desc_array)); ?>
                    </pre>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
