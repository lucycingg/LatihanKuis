<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: antiquewhite;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    td {
            background-color: whitesmoke;
            border-radius: 10px;
            padding: 10px;
            font-family:Georgia;
            font-size:medium;
        }
    .card {
        background-color: bisque;
        border-radius: 20px;
        padding: 20px;
    }
    table{
        border-spacing:15px;
        border-collapse:separate;
    }
    .d-grid :hover {
        background-color: black;
        color: white;
    }
</style>

<body>
    <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card">
        <h2 style="text-align: center;">What's the <span style="color: red;">s</span><span style="color: orange;">e</span><span style="color: yellow;">a</span><span style="color: green;">s</span><span style="color: blue;">o</span><span style="color: purple;">n</span></span> at that time?</h1>
            <div class="card-body">
                <h5 class="card-title">
                    <table align="center" border="1" cellspacin="10" style="border-color:transparent;">
                        <form action="Latihan.php" method="post">
                            <tr>
                                <td>
                                    <input type="radio" name="bulan" value="January"> January
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="February"> February
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="March"> March
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="April"> April
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="bulan" value="May"> May
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="June"> June
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="July"> July
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="August"> August
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="bulan" value="September"> September
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="October"> October
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="November"> November
                                </td>
                                <td>
                                    <input type="radio" name="bulan" value="December"> December
                                </td>
                            </tr>
                    </table>
                </h5>
                <div class="d-grid gap-1">
                    <button class="btn btn-light" type="submit">See Season</button>
                </div>
</form>
</div>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>   
</body>
</html>