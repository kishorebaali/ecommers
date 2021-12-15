<!DOCTYPE html>
<html lang="en">

<head>

    <title>Task</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <form action="<?= base_url() ?>.Mytask/register" method="post">
        <label>user name</label>
        <input type="text" placeholder="enter user name" name="name" class="form-control">
        <label>email</label>
        <input type="email" placeholder="enter email" name="email" class="form-control">
        <label>mobile</label>
        <input type="tel" placeholder="enter mobile number" name="mobile" class="form-control">
        <label>password</label>
        <input type="password" placeholder="enter password" name="password" class="form-control">
        <button type="submit" class="btn btn-success">register</button>
    </form>

    <form action="<?= base_url() ?>.Mytask/login">
        <label>user name</label>
        <input type="text" placeholder="enter user name" class="form-control">
        <label>password</label>
        <input type="password" placeholder="enter password" class="form-control">
        <button type="submit" class="btn btn-success">Login</button>
    </form>
</body>