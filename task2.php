<?php
if (isset($_POST['numbers'])) {
    $raw_numbers = $_POST['numbers'];
    $numbers = explode(" ", $raw_numbers);
    rsort($numbers);
} else {
    $numbers = [];
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 2</title>
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
            <div class="card-header">Task 2</div>
            <div class="card-body">
                <div class="container">Write a PHP program that accepts six numbers as input and sorts them in
                    descending order.
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
                                    <label for="numbers">Input consists of six numbers n1, n2, n3, n4, n5, n6 (-100000 = n1, n2, n3,
                                        n4, n5, n6 = 100000). The six numbers are separated by a space</label>
                                    <input type="text" class="form-control" id="numbers" name="numbers"
                                           value="<?php if (isset($raw_numbers)) {
                                               echo $raw_numbers;
                                           } ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Sort</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (count($numbers) > 1){ ?>
    <div class="row justify-content-center">
        <div class="card mx-4 my-2 px-0">
            <div class="card-header">Result</div>
            <div class="card-body">
                <?php
                if (count($numbers) > 6){
                    echo "The numbers is more that six";
                } else {
                    echo "<ul>";
                    foreach ($numbers as $number) {
                        if ((-100000 < $number) && ($number > 100000)) {
                            echo "$number isn't between -100000 and 100000";
                        } else {
                            echo "<li>$number</li>";
                        }
                    };
                    echo "</ul>";
                };?>
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
