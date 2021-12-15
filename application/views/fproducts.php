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

<style>
    th,
    tr,
    td {
        border-left: 1px solid black;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>description</th>
                    <th>action</th>
                </tr>
                <?php

                foreach ($products as $row) { ?>

                    <tr>

                        <td> <?= $row->id ?></td>
                        <div class="row">

                            <td>
                                <div class="col-lg-12">
                                    <a href="<?= base_url() ?>uploads/<?= $row->Pimage ?>"><img width="80" src="<?= base_url() ?>./uploads/<?= $row->Pimage ?>"></a>
                                </div>
                                <div class="col-lg-12">
                                    <strong> <?= $row->Pname ?></strong>
                            </td>
                        </div>

                        <td> <?= $row->Pprice ?></td>

                        <td> <?= $row->Pdesc ?></td>





                        <td> <button class="btn btn-primary" onclick='dlt("<?= $row->id ?>")'>Delete</button></a></td>
                    </tr>

                <?PHP
                }
                ?>
            </table>
        </div>
    </div>
    <script>
        function dlt(id) {
            var c = confirm("are you sure?");
            if (c == true) {
                window.location.href = "<?= base_url() ?>flipkart/deleteproducts?id=" + id;
            }
        }
    </script>

</body>