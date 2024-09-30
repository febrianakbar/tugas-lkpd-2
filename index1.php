<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg</title>
</head>
<body>
    <form method="post" action="">
        <label for="text">Masukkan Teks:</label><br>
        <input type="text" name="text"><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];

        $result = preg_replace('/[^0-9]/', '', $text);// buat nyaring karakter jadi angka

        if ($result) {
            $array = str_split($result, 1);// buat misahin string menjadi array
            echo "Nilai yang ada adalah: " . implode(',', $array);
        } else {
            echo "Tidak ada nilai";
        }
    }
    ?>
</body>
</html>