<html>
<head>
<title>user data</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
 
}
.container{margin-left: 400px;}
</style>
</head>
 
<body>
  <div class="container">
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
   <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>mobile</th>
    <th>password</th>
    <th>action</th>
  </tr>
  <?php
 
  foreach($users as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->username."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->mobile."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td><a href='delete?id=".$row->id."'>Delete</a>
        <a href='getbyid/".$row->id."'>update</a></td>";
  echo "</tr>";
 
  }
   ?>
</table>
</div>
</body>
</html>