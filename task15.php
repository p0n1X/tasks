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


function get_item(array $input_array, string $key): array
{
    $new_array = [];
    foreach ($input_array as $item) {
        $new_array[] = $item[$key];
    };

    return $new_array;
};

$test = [];
if (isset($_POST['key'])) {
    $input_key = $_POST['key'];

    $test = get_item($example_array, $input_key);
}


?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 15</title>
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
            <div class="card-header">Task 15</div>
            <div class="card-body">
                <div class="container">Write a PHP program to retrieve all of the values for a given key.
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
                    <form method="POST" action="">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="key">Enter key "id/name"</label>
                                    <input type="text" class="form-control" id="key" name="key" value="">
                                </div>
                                <button type="submit" class="btn btn-primary">Print</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php  if (count($test) > 1){ ?>
    <div class="row justify-content-center">
        <div class="card mx-4 my-2 px-0">
            <div class="card-header">Result</div>
            <div class="card-body">
                <pre>
                        <?php print_r($test); ?>
                    </pre>
            </div>
        </div>
    </div>
    <?php };?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
