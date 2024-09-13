<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BTVN Buổi 1</title>
        <style></style>
    </head>
    <body>
    <?php
    $students = [
        500 => 'Nguyen Van A',
        501 => 'Nguyen Van B',
        3 => 'Nguyen Van C',
        4 => 'Nguyen Van D',
        5 => 'Nguyen Van E'
    ];

    $STT = array_rand($students);
    echo "STT: " . $STT . " Ho và tên: " . $students[$STT];
    ?>
    </body>
</html>