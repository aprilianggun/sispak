<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Penyakit</title>
</head>

<body>
    <h1>Create Penyakit</h1>

    <form action="/penyakit/store" method="post">
        <label for="penyakit">Penyakit:</label>
        <input type="text" name="penyakit" required>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
