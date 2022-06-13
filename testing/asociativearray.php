<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    table{
        border:1px solid black;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php 
                    $marks= 
                    [
                        "krishna">= [
                            "physics">="79",
                            "chemesitry">="70",
                            "math">="97"
                ],
                    "ram">= [
                        "physics">="89",
                        "chemesitry">="78",
                        "math">="77"
                ],
                    "vijay">= [
                        "physics">="70",
                        "chemesitry">="72",
                        "math">="77"
                    ]
                ];
                   echo "<pre>";
                    print_r($marks); 
                    echo "</pre>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>