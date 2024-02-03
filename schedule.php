<!DOCTYPE html>
<?php
include_once "database.php"
?>

<html>
    <head>
        <title>Просмотр</title>
        <meta charset="utf-8" />
        <meta name="author" content="Arseniy" />
    </head>
    <body>
        <table>
            <caption> <h2> Рассписание </h2> </caption>
            <thead>
                <tr>
                    <th>Название пары</th> <th>Время начала</th> <th>Дата проведения</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM schedule";
            $sql = pg_query($db, $query);
            while ($temp_row = pg_fetch_assoc($sql)){
            ?>
            <tbody>
                <tr>
                    <td><?=$temp_row['subject']?></td>
                    <td><?=$temp_row['_time']?></td>
                    <td><?=$temp_row['_date']?></td>
                </tr>

            <?php 
            }?>
        </table>
    </body>
</html>