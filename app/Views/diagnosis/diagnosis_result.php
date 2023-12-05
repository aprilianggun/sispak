<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosis</title>
    <li>
        <a href="<?= site_url('admin/index') ?>" class="btn btn-primary">Gejala</a>
    </li>

    <li>
        <a href="<?= site_url('penyakit/index') ?>" class="btn btn-primary">Penyakit</a>
    </li>

    <li>
        <a href="<?= site_url('diagnosis/index') ?>" class="btn btn-primary">Diagnosis</a>
    </li>
</head>
<body>
    <h1>Hasil Diagnosis</h1>
    <p>Penyakit kulit yang diderita adalah: <?= $penyakit ?></p>
</body>
</html>