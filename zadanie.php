<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function findClosestElement($arr, $target) {
        $left = 0;
        $right = count($arr) - 1;
        if ($target >= $arr[$left] && $target <= $arr[$right]) {
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($arr[$mid] == $target) {
                return $arr[$mid]  + 1;
            }
            if ($arr[$mid] > $target) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
    }
        if (abs($target - $arr[$left]) <= abs($arr[$right] - $target)) {
            return $arr[$left];
        } else {
            return $arr[$right];
        }
    }
    $arr = [1, 3, 5, 7, 9];
    $target = 2;
    echo (findClosestElement($arr, $target));
?>
</body>
</html>