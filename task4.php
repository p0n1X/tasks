<?php
$difference = 0;
if (isset($_POST['number'])) {
    $raw_number = $_POST['number'];
    $split_number = str_split($raw_number);
    sort($split_number);
    $small_number = (int)implode($split_number);
    rsort($split_number);
    $big_number = (int)implode($split_number);
    $difference = $big_number - $small_number;
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 4</title>
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
            <div class="card-header">Task 4</div>
            <div class="card-body">
                <div class="container">Write a PHP program to find the difference between the largest integer and
                    the smallest integer which are created by 8 numbers from 0 to 9. The number that
                    can be rearranged shall start with 0 as in 00135668.
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
                    <form method="POST" action="">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="number">The difference between the largest integer and the smallest
                                        integer.</label>
                                    <input type="text" class="form-control" id="number" name="number" maxlength="8"
                                           value="<?php if (isset($raw_numbers)) {
                                               echo $raw_numbers;
                                           } ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Calculate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($difference > 0) { ?>
        <div class="row justify-content-center">
            <div class="card mx-4 my-2 px-0">
                <div class="card-header">Result</div>
                <div class="card-body">
                    <?php
                    echo "Difference between the largest integer and the smallest integer: $difference";

                    ?>
                </div>
            </div>
        </div>
    <?php }; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
