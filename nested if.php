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

    label,
    h4 {
        margin-top: 25px;
    }
</style>
<html>

<head>
    <title>Input a Number</title>
</head>

<body>
    <!-- a nested if statement is an if statement that is contained within another if statement. -->
    <center>
        <h4>Enter Score and know your Grade</h4>
        <form method="post">
            <label for="score">Enter Your Score :</label>
            <input type="score" name="score" id="score" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php

        $score = 72;
        if (isset($_POST['score'])) {
            $score = $_POST['score'];
            if ($score >= 80) {
                echo "Your Grade: A";
            } else {
                if ($score >= 65) {
                    echo "Your Grade: B";
                } else {
                    if ($score >= 50) {
                        echo "Your Grade: C";
                    } else {
                        if ($score >= 35) {
                            echo "Your Grade: D";
                        } else {
                            echo "You Failed.";
                        }
                    }
                }
            }
        }
        ?>
    </center>

</body>

</html>