<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: antiquewhite;
    }
</style>

<body>
    <?php
    $tangkapbulan = $_POST["bulan"];

    if($tangkapbulan == "December" || $tangkapbulan == "January" || $tangkapbulan == "February"){
        ?>
        <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 100%; background-color: bisque; border-radius: 10px;">
        <table>
        <tr>
            <td><img src="winter.png" alt="Tampilan Musim Dingin" class="rounded float-start" style="width: 90%; padding: 10px; float: left;"></td>
            <td>
            <h2 class="card-title">It's <strong style="color:rgba(9, 110, 99, 0.98); ">Winter</strong> Time!</h2>
            <p style="font-style: italic; color: grey;">December - February</p>
                    <p class="card-text">Winter serves as a time for reflection and<br>introspection, where the silence of snow offers<br>us a chance to contemplate the warmth within our hearts.</p>
                    <a href="Latihankuis.php" class="btn btn-primary">Back to Menu</a>
            </td>
        </tr>
    </table>
</body>

<body>
<?php
    }else if($tangkapbulan == "March" || $tangkapbulan == "April" || $tangkapbulan == "May"){
        ?>
        <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 100%; height: auto; background-color: bisque; border-radius: 10px;">
        <table>
        <tr>
            <td><img src="spring.png" alt="Tampilan Musim Semi" class="rounded float-start" style="width: 90%; padding: 10px; float: left;"></td>
            <td>
            <h2 class="card-title">It's <strong style="color: rgb(8, 115, 60);">Spring</strong> Time!</h2>
            <p style="font-style: italic; color: grey;">March - May</p>
                    <p class="card-text">Spring sysmbolizes hope and renewal<br>reminding us that life always finds a way to<br>return with each blooming flower.</p>
                    <a href="LatihanKuis.php" class="btn btn-primary">Back to Menu</a>
            </td>
        </tr>
    </table>
</body>

<body> 
<?php
    }else if($tangkapbulan == "June" || $tangkapbulan == "July" || $tangkapbulan == "August"){
        ?>
        <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 100%; height: auto; background-color: bisque; border-radius: 10px;">
        <table>
        <tr>
            <td><img src="summer.png" alt="Tampilan Musim Panas" class="rounded float-start" style="width: 90%; padding: 15px; float: left;"></td>
            <td>
            <h2 class="card-title">It's <strong style="color:rgb(43, 55, 225);">Summer</strong><br> Time!</h2>
            <p style="font-style: italic; color: grey;">June - August</p>
                    <p class="card-text">Summer marks a time of energy and freedom,<br>where the shining sun encourages us to<br>celebrate life and our presence in this word.</p>
                    <a href="Latihankuis.php" class="btn btn-primary">Back to Menu</a>
            </td>
        </tr>
    </table>
</body>

<body>
<?php
    }else if($tangkapbulan == "September" || $tangkapbulan == "October" || $tangkapbulan == "November"){
        ?>
        <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 100%; background-color: bisque; border-radius: 10px;">
        <table>
        <tr>
            <td><img src="autumn.png" alt="Tampilan Musim Gugur" class="rounded float-start" style="width: 90%; padding: 10px; float: left;"></td>
            <td>
            <h2 class="card-title">It's <strong style="color:rgb(250, 174, 43);">Autumn</strong><br> Time!</h2>
            <p style="font-style: italic; color: grey;">September - November</p>
                    <p class="card-text">Autumn invites us to reflect on the cycles of<br>life, as the falling leaves teach us the art of<br>letting go and embracing change.</p>
                    <a href="Latihankuis.php" class="btn btn-primary">Back to Menu</a>
            </td>
        </tr>
    </table>
</body>

<?php
    }
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>

</html>