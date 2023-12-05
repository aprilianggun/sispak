<!-- app/Views/penyakit/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Penyakit</title>

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
    <h1>Table Penyakit</h1>

    <a href="<?= site_url('penyakit/create') ?>" class="btn btn-primary">Tambah Data</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Penyakit</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($penyakit as $key => $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['penyakit'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
