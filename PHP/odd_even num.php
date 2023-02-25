<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        background-color: burlywood;
    }

    button {
        border-radius: 5px;
    }

    label, h4 {
        margin-top: 25px;
    }
</style>
<html>

<head>
    <title>Input a Number</title>
</head>

<body>
    <center>
        <h4> Hello, Enter Number and know whether number is Odd or Even.</h4>
        <form method="post">
            <label for="number">Enter a number :</label>
            <input type="number" name="number" id="number" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            if ($number % 2 == 0) {
                echo $number . " is an even number.";
            } else {
                echo $number . " is an odd number.";
            }
        }
        ?>
    </center>

</body>

</html>