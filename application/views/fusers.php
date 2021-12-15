<head>
    
<title>Products</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>

<table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>password</th>
      </tr>
    </thead>

<?php
         foreach($user as $row)
{?>
    <tbody>
      <tr>
<td> <?=$row->name?> </td>

<td> <?=$row->email?></td>
  
<td><?=$row->password?></td>
</tbody> </tr>

<?php
}
         ?>  </table></body>