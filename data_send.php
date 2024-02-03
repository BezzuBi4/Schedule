<?php
include_once 'database.php';
if (isset($_POST['send']))
{
    $subject = $_POST['subject'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $query = "INSERT INTO schedule (subject, _time, _date) VALUES ('$subject', '$time', '$date')";
    // $query = "SELECT * FROM schedule";
    if ($result = pg_query($db, $query)){
        echo "Запись добавлена";
    }
    else{
        echo "err";
    }
}