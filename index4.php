<?php
$host = 'sql';
  $user = 'root';
  $pass = 'admin';
  $db_name = 'intellegent';
  $link = mysqli_connect($host, $user, $pass, $db_name);
  mysqli_set_charset($link, "utf8");
    if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
    }
  $query = "SELECT * FROM users" ;
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
        $rows = mysqli_num_rows($result);
        for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        for ($j = 0 ; $j < 2 ; ++$j)
             {
                    // $rowse = serialize($row[$j]);
                      echo "$row[$j] <br>";

        }
        }

  }
?>
