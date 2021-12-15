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



</style>
</head>
<body>
  <div class="container">
<table class="table table-hover" >
  <tr>
   <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>mobile</th>
    <th>password</th>
    <th>image</th>
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
  echo "<td>".$row->image."</td>";
  echo "<td><button onclick='hello(".$row->id.")'>Delete</button>
        <a href='getbyid/".$row->id."'>update</a></td>";
  echo "</tr>";
 
  }
   ?>
</table>
</div>
<script>
  function hello(id){
    var c= confirm ("are you sure?");
    if(c == true) {
      window.location.href = "<?= base_url()?>delete?id=" +id;
    }
  }
  </script>
</body>
</html>