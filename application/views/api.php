<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <p id="demo">
    </p>

    <!-- <tbody id="demo">


        </tbody>

    </table> -->
    <script>
        public
        let file = "http://localhost/mini_project/flipkart/new"

        fetch(file)

            .then(x => x.new())
            .then(y => document.getElementById("demo").innerHTML = y);

        // const obj = JSON.parse('file');
        // .then(x => x.text())
        // .then(y => document.getElementById("demo").innerHTML = y);
        // document.getElementById("demo").innerHTML = file;
        // for (x in data) {
        //     txt += "<tr>";
        //     txt += "<td>" + data[x].id + "</td>";
        //     txt += "<td>" + data[x].name + "</td>";
        //     txt += "<td>" + data[x].email + "</td>";
        //     txt += "<td>" + data[x].gender + "</td>";
        //     txt += "<td>" + data[x].status + " </td>";
        //     txt += "</tr>";
        // };

        // document.getElementById("demo").innerHTML = file;
    </script>