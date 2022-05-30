<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD CODE IGNITER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel=”icon” href=”nama_file_gambarnya”>
    <style>
        body {
            background-color: whitesmoke;
        }

        .card {
            position: absolute;
            width: 70rem;
            box-shadow:
                0 1px 2.2px rgba(0, 0, 0, 0.011),
                0 2.4px 5.3px rgba(0, 0, 0, 0.016),
                0 4.5px 10px rgba(0, 0, 0, 0.02),
                0 8px 17.9px rgba(0, 0, 0, 0.024),
                0 15px 33.4px rgba(0, 0, 0, 0.029),
                0 36px 80px rgba(0, 0, 0, 0.04);
            
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn {
            margin-top: 2px;
            margin-bottom: 5px;
            /* margin-right: 7px; */
            /* align-content: flex; */
      
        }

        /* footer {
            position: relative;
            bottom: -12%;
            margin-left: 41%;

        } */

        

        </style>

    <?= $this->renderSection('Css'); ?>

</head>

<body>

    <div class="card border-light">
        <div class="card-body">
            <div class="judul">
                <?= $this->renderSection('judulform'); ?>
            </div>
            <?= $this->renderSection('content'); ?>
        </div>
    </div>



    <?= $this->renderSection('Js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>