<!-- app/Views/admin/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Gejala</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        @media (max-width: 600px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th,
            td {
                display: block;
                width: 100%;
            }
        }
    </style>

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
    <h1>Table Gejala</h1>
    <a href="<?= site_url('admin/create_gejala') ?>" class="btn btn-primary">Tambah Data</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gejala 1</th>
                <th>Gejala 2</th>
                <th>Gejala 3</th>
                <th>Gejala 4</th>
                <th>Gejala 5</th>
                <th>Gejala 6</th>
                <th>Gejala 7</th>
                <th>Gejala 8</th>
                <th>Gejala 9</th>
                <th>Gejala 10</th>
                <th>Gejala 11</th>
                <th>Gejala 12</th>
                <th>Gejala 13</th>
                <th>Gejala 14</th>
                <th>Gejala 15</th>
                <th>Gejala 16</th>
                <th>Gejala 17</th>
                <th>Gejala 18</th>
                <th>Gejala 19</th>
                <th>Gejala 20</th>
                <th>Gejala 21</th>
                <th>Gejala 22</th>
                <th>Gejala 23</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($gejala as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['G1'] ?></td>
                    <td><?= $value['G2'] ?></td>
                    <td><?= $value['G3'] ?></td>
                    <td><?= $value['G4'] ?></td>
                    <td><?= $value['G5'] ?></td>
                    <td><?= $value['G6'] ?></td>
                    <td><?= $value['G7'] ?></td>
                    <td><?= $value['G8'] ?></td>
                    <td><?= $value['G9'] ?></td>
                    <td><?= $value['G10'] ?></td>
                    <td><?= $value['G11'] ?></td>
                    <td><?= $value['G12'] ?></td>
                    <td><?= $value['G13'] ?></td>
                    <td><?= $value['G14'] ?></td>
                    <td><?= $value['G15'] ?></td>
                    <td><?= $value['G16'] ?></td>
                    <td><?= $value['G17'] ?></td>
                    <td><?= $value['G18'] ?></td>
                    <td><?= $value['G19'] ?></td>
                    <td><?= $value['G20'] ?></td>
                    <td><?= $value['G21'] ?></td>
                    <td><?= $value['G22'] ?></td>
                    <td><?= $value['G23'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>