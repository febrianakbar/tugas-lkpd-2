<?php
function kategoriUsia(...$usia) { // variadi
    $arrayUsia = [];
    foreach($usia as $key => $value) {
        if($value >= 17) {
            $arrayUsia[$key] = "dewasa";
        } else {
            $arrayUsia[$key] = "anak-anak";
        }
    }

    echo "List Usia " . implode(',', $usia) . "<br>";
    echo "Usia Dewasa " . count(array_keys($arrayUsia, "dewasa")) . "<br>"; // mencari nilai arrayusia
    echo "Usia anak-anak " . count(array_keys($arrayUsia, "anak-anak"));// menghitung suatu data
}

    kategoriUsia(12,15,17,20,25,30,35,40,45,50);
?>