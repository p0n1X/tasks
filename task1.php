<?php
$initial = 100000;
if (isset($_POST['months'])) {
    $months = $_POST['months'];

    for ($i = 0; $i <= $months; $i++) {
        $initial = ceil(($initial * 1.05) / 1000) * 1000;
    }
} else {
    $months = null;
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 1</title>
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
            <div class="card-header">Task 1</div>
            <div class="card-body">
                <div class="container">Write a PHP program to compute the amount of the debt in n months. The
                    borrowing amount is $100,000 and the loan adds 5% interest of the debt and
                    rounds it to the nearest 1,000 above month by month.
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
                                    <label for="months">Enter number of months</label>
                                    <input type="text" class="form-control" id="months" name="months"
                                           value="0">
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
    if (($months >= 0) && ($months <= 100)) { ?>
        <div class="row justify-content-center">
            <div class="card mx-4 my-2 px-0">
                <div class="card-header">Result</div>
                <div class="card-body">
                    <?php
                    echo "Amount of debt: $initial";
                    ?>
                </div>
            </div>
        </div>
    <?php } else {
        echo "Range of the months must be between 0 and 100";
    }; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
