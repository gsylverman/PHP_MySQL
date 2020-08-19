<?php
  include './db.php';

  $query = "SELECT * FROM users";
  $result = mysqli_query($DB, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <title>Document</title>
</head>
<body>
<!-- 1Each time when mysqli_fetch_assoc($result) is accessed, the pointer moves to the next record. At last when no records are found, it returns null which breaks the while condition. -->
  <?php while ($row = mysqli_fetch_assoc($result)) { ?> 
    <div>
      <div>
        <?= 'id: ' . $row['id'] ?>
      </div>
      <div>
        <?= 'Email: ' . $row['user_email'] ?>
      </div>
      <div>
        <?= 'Password: ' . $row['user_password'] ?>
      </div>
      <br>
    </div>
  <?php } ?>
</body>
</html>

<!-- ------------------------------- -->
<script>
  // mysqli_fetch_assoc works somethig like...
  const date = ['a', 'b', 'c', 'd', 'etc'];
  let temp = -1;

  let row;
  while (row = retriveData(date)) {
    console.log(row);
  }

  function retriveData (list) {
    temp++;
    if (temp > list.length -1 ) {
      return null;
    }
    return date[temp];
  }
</script>
<!-- ------------------------------- -->