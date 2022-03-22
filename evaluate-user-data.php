<?php

$totalPoints = 0;


if (isset($_SESSION['page1'])) {

    $post = $_SESSION['page1'];

    echo "\$post = $post<br>";

    if (isset($post['range-slider'])) {

        $valueQuestion1 = $post['range-slider'];

        echo "\$valueQuestion1 = $valueQuestion1<br>";

        $valueQestion1 = intval($valueQuestion1);

        if ($valueQuestion1 > 3) {

            $totalPoints = $totalPoints + 1;
        }
    } else {
        echo "development Error: The requested value is not given in the POST";
    }
}

if (isset($_SESSION['page4'])) {
    $post = $_SESSION['page'];

    if (isset($post['checkboxValues'])) {
        $checkboxValues = $post[$checkboxValues];
        $array = explode ('.', $checkboxValues);
        echo "\$array = $array<br>";
        echo "<pre>";
        echo "<\pre>";
    }
  

}

?>