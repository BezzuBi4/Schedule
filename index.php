<!DOCTYPE html>
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
        echo "<script> alert('Запись добавлена') </script>";
    }
    else{
        echo "err";
    }
}
?>

<html>

<head>
    <title>Заполнение</title>
    <meta charset="utf-8" />
    <meta name="author" content="Arseniy" />
</head>

<body>
    <h1> Добавьте новую пару в рассписание </h1>
    <form method="post">

    <p> 
        <label for="subject">Название предмета: </label>
        <select id="subject" name="subject">
            <option> Выберите из списка </option>
            <?php
                $sql = pg_query($db, "SELECT subject FROM subject_name");
                while ($temp_row = pg_fetch_assoc($sql)){
                    echo '<option value= "' . $temp_row['subject'] . '">' . $temp_row['subject'] . '</option>';
                }
            ?>
    </p>

    <p> 
        <label for="time">Время начала: </label>
        <input type="time" id="time" name="time"/>
    </p>
    <p> 
        <label for="date">Дата проведения занятия: </label>
        <input type="date" id="date" name="date"/>
    </p>

    <input type="submit" name="send" value="Сохранить" />
    

    </form>

    <form action="schedule.php" target="_blank">
        <button>Посмотреть рассписание</button>
    </form>

</body>

</html>