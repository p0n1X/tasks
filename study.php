<?php

function chapter_combination(int $next_chapter, int $chapters, array $chapter_time, int $mid_time, int $time): array
{
    $chapter_combination = [];
    $chapter_on_day = 0;
    for ($i = $next_chapter; $i < $chapters + 1; $i++) {
        if ($chapter_on_day + (int)$chapter_time[$i - 1] <= $mid_time) {
            $chapter_on_day += (int)$chapter_time[$i - 1];
            $chapter_combination[$i] = (int)$chapter_time[$i - 1] * $time;
        } else {
            break;
        }
    }
    return $chapter_combination;
}

function count_combination(array $chapter_time, int $chapters, int $days, int $time): array
{
    $maximum_time = array_sum($chapter_time);
    $mid_time = ceil($maximum_time / $days);
    $combinations = [];
    $counter = 1;
    while ($mid_time <= $maximum_time) {
        if (count($combinations) == 0) {
            $array_chapter_number = 1;
        } else {
            $array_chapter_number = count($combinations);
        }
        if (count($combinations, 1) == 0) {
            $all_array_items_number = 2;
        } else {
            $all_array_items_number = count($combinations, 1);
        }

        $next_chapter = $all_array_items_number - $array_chapter_number;
        for ($j = $array_chapter_number; $j < $days + 1; $j++) {
            $combinations[$j] = chapter_combination($next_chapter, $chapters, $chapter_time, $mid_time, $time);
            $next_chapter = array_key_last($combinations[$j]) + 1;
        }
        if (count($combinations) == $days && (count($combinations, 1) - count($combinations)) == $chapters) {
            break;
        } elseif ($counter > count($combinations)) {
            $mid_time++;
            $combinations = [];
            $counter = 1;
        } else {
            $counter++;
        }
    }
    return $combinations;
}

$combination = [];
if ($_POST &&
    !empty($_POST['days']) &&
    !empty($_POST['time']) &&
    !empty($_POST['chapters']) &&
    !empty($_POST['chapter_time'])) {
    $days = $_POST['days'];
    $chapters = $_POST['chapters'];
    $time = $_POST['time'];
    $chapter_time = explode(" ", $_POST['chapter_time']);
    $combination = count_combination($chapter_time, $chapters, $days, $time);
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studying for a test</title>
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
            <div class="card-header">Studying for a test</div>
            <div class="card-body">
                <div class="container"><pre>
                    Ivan is studying for a test which will be held after 'N' days, And to score good marks he has to
                    study 'M' chapters and the ith chapter requires TIME[i] seconds to study. The day in Ivan’s
                    world has 100^100 seconds. There are some rules that are followed by Ivan while studying.
                    1. He reads the chapter in a sequential order, i.e. he studies i+1th chapter only after he
                    studies ith chapter.
                    2. If he starts some chapter on a particular day he completes it that day itself.
                    3. He wants to distribute his workload over 'N' days, so he wants to minimize the maximum
                    amount of time he studies in a day.
                    Your task is to find out the minimal value of the maximum amount of time for which Ivan
                    studies in a day, in order to complete all the 'M' chapters in no more than 'N' days.
                    For example
                    if Ivan want to study 6 chapters in 3 days and the time that each chapter requires is as follows:
                    Chapter 1 = 30
                    Chapter 2 = 20
                    Chapter 3 = 10
                    Chapter 4 = 40
                    Chapter 5 = 5
                    Chapter 6 = 45
                    Then he will study the chapters in the following order
                    | day 1 : 1 , 2 | day 2 : 3 , 4 | day 3 : 5 , 6 |
                    Here we can see that he study chapters in sequential order and the maximum time to study
                    on a day is 50, which is the minimum possible in this case.
                    Constraints:
                    1 <= T <= 10
                    1 <= N , M <= 10 ^ 4
                    1 <= TIME[i] <= 10 ^ 9
                    It is considered that there are infinite seconds in a day, on the planet where Ivan lives.
                    Time limit: 1 sec.
                    </pre>
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
                                    <label for="days">Input number of days</label>
                                    <input type="number" class="form-control" id="days" name="days">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="chapters">Input number of chapters</label>
                                    <input type="number" class="form-control" id="chapters" name="chapters"
                                           value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="chapter_time">Input number of page for each chapter</label>
                                    <input type="text" class="form-control" id="chapter_time" name="chapter_time"
                                           value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="time">Input time</label>
                                    <input type="number" class="form-control" id="time" name="time"
                                           value="">
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
    if (count($combination) > 0) {
        ?>
        <div class="row justify-content-center">
            <div class="card mx-4 my-2 px-0">
                <div class="card-header">Result</div>
                <div class="card-body">
                    <?php
                    $max_time = 0;
                    foreach ($combination as $day => $chapter) {
                        $all_chapters = implode(', ', array_keys($chapter));
                        $chapters_sum = array_sum($chapter);
                        echo "Day $day : $all_chapters - Time required : $chapters_sum </br> ";
                        if ($max_time < $chapters_sum) {
                            $max_time = $chapters_sum;
                        };
                    }
                    echo "So the maximum time in a day is $max_time.";
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
