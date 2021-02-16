<?php
    if (isset($_GET['person'])) {
        $name = $_GET['person'];
    } else {
        $name = "Person";
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Handsome Person</title>
</head>

<body>
    <div class="formStyle">
        <form method="GET">
            <input type="text" name="person">
            <button>SUBMIT</button>
        </form>
        <?php echo "<p>$name is a handsome person!</p>" ?>
    </div>

</body>

</html>