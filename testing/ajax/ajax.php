<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/jquery/jquery.min.js"></script>
    <style>
        .error-icon {
            color: red;
            background-color: rgba(255, 10, 10, 0.4);
            padding: 2px;
            display: inline-block;
            text-align: center;
            border-radius: 3px;
            height: 28px;
        }
        .success-icon {
            color: green;
            background-color: rgba(10, 255, 10, 0.4);
            padding: 2px;
            display: inline-block;
            text-align: center;
            border-radius: 3px;
            height: 28px;
        }
        .error {
            color: red;
            font-weight: bold;
            font-size: 13px;
            ;
        }
        .error-border {
            border: 1px solid red;
        }
        b {
            border
        }
    </style>
    <?php
    session_start();
    // $_SESSION['username'] = "abc";
    $_SESSION['password'] = "123";
    ?>
</head>
<body>
    <form action="demo.php" method="post" onsubmit="submitLoginForm($(this))" enctype="multipart/form-data">
        <body class="container p-4 bg-light">
            <h1 class="p-2 border-bottom">login</h1>
            <p class="alert" id="formerror"> </p>
            <div class="col">
                <label for="" class="form-label fw-bold">
                    <p><span id="txtHint"></span></p>
                    Name:
                </label>
                <input type="text" class="form-control" autocomplete="off" placeholder="First name" name="name">
                <span class="error" id="first_name_error"></span>
            </div>
            <div class="col">
                <label for="" class="form-label fw-bold">
                    ID_NUMBER:</label>
                <input type="text" class="form-control" placeholder="Number" name="number">
                <span class="error" id="number_error"></span>
            </div>
            <div class="col">
                <label for="" class="form-label fw-bold">
                    password :</label>
                <input type="password" class="form-control" placeholder="password" name="pass">
                <span class="error" id="pass_error"> </span>
            </div>
            <div class=" p-2 col">
                <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
            </div>
            <script>
                // function showHint(str) {
                //     if (str.length == 0) {
                //         document.getElementById("txtHint").innerHTML = " ";
                //         return;
                //     }
                //     const xhttp = new XMLHttpRequest();
                //     xhttp.onload = function() {
                //         console.log(this.responseText);
                //         document.getElementById("txtHint").innerHTML = this.responseText;
                //     }
                //     xhttp.open("GET", "hint.php?name=" + str);
                //     xhttp.send();
                // }
                // $(function() {
                //     $('form').on('submit', function() {
                //         $.ajax({
                //             type: 'post',
                //             url: 'demo.php',
                //             data: $('form').serialize(),
                //             success: function() {
                //                 alert('form was submitted');
                //             }
                //         });
                //         return false;
                //     });
                // });
                function submitLoginForm(form) {
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: 'ajax-login.php',
                        data: form.serialize(),
                        success: function(result) {
                            form.find('input').removeClass('error-border');
                            form.find('span.error').text('');
                            $('#formerror').removeClass('alert-danger alert-success').html('');
                            // if (result.error != undefined) {
                            //     $('#formerror').addClass('alert-danger').html(' <b class="error-icon"> ERROR  </b> ' + result.error);
                            // }
                            // if (result.success != undefined) {
                            //     $('#formerror').addClass('alert-success').html(' <b class="success-icon"> OK </b> ' + result.success);
                            // }
                            if (result.errors != undefined) {
                                $.each(result.errors, function(key, value) {
                                    console.log(key);
                                    form.find('[name="' + key + '"]').addClass('error-border').next('span').text(value);
                                });
                            }
                        },
                        error: function() {
                            alert('404');
                        },
                        complete: function() {
                        }
                    });
                }
            </script>
    </form>
</body>
</html>