<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'links.php'; ?>
    <style>
        body {
            color: #fff;
            background: #19aa8d;
            font-family: 'Rubik', sans-serif;
        }

        .copyright a {
            text-decoration: none;
        }

        .copyright {
            font-size: 20px;
        }
    </style>

</head>

<body>
    <center>
        <div class="container">
            <form id="contact" action="" method="post">
                <h3>Palindrome Checker</h3>
                <h4>
                    <?php
                    if (isset($_POST['submit'])) {
                        $word = $_POST['palin'];
                        $reverse = strrev($word);
                        if ($word == $reverse) {
                            echo "Yeah!! the word you entered is PALINDROME";
                        } else {
                            echo "Oops!! the word you entered is NOT PALINDROME";
                        }
                    }
                    ?>
                </h4>
                <fieldset class="form-group">
                    <input placeholder="Type your word..." name="palin" id="" required></input>
                </fieldset>
                <fieldset class="form-group">
                    <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Submit</button>
                </fieldset>
                <p class="copyright">Designed by<a href="" target="_blank" title="Colorlib">&nbsp Prads@18</a></p>
            </form>
        </div>
    </center>
</body>

</html>