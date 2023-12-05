<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosis Penyakit Kulit</title>
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
    <h1>Masukkan Gejala untuk Diagnosis</h1>
    <form action="/diagnosis/diagnose" method="post">
        <label for="G1">Warna kulit kemerahan(G1)</label>
        <input type="checkbox" name="G1" value="1"><br>

        <label for="G2">Warna kulit memutih(G2)</label>
        <input type="checkbox" name="G2" value="1"><br>

        <label for="G3">Kulit bersisik(G3)</label>
        <input type="checkbox" name="G3" value="1"><br>

        <label for="G4">Ruam kulit berbagai ukuran(G4)</label>
        <input type="checkbox" name="G4" value="1"><br>

        <label for="G5">Bercak di kulit kepala(G5)</label>
        <input type="checkbox" name="G5" value="1"><br>

        <label for="G6">Rambut rontok(G6)</label>
        <input type="checkbox" name="G6" value="1"><br>

        <label for="G7">Terbentuk titik-titik hitam di kepala(G7)</label>
        <input type="checkbox" name="G7" value="1"><br>

        <label for="G8">Terjadi benjolan padat(G8)</label>
        <input type="checkbox" name="G8" value="1"><br>

        <label for="G9">Terasa nyeri(G9)</label>
        <input type="checkbox" name="G9" value="1"><br>

        <label for="G10">Bintik kemerahan(G10)</label>
        <input type="checkbox" name="G10" value="1"><br>

        <label for="G11">Bernanah(G11)</label>
        <input type="checkbox" name="G11" value="1"><br>

        <label for="G12">Rambut rapuh(G12)</label>
        <input type="checkbox" name="G12" value="1"><br>

        <label for="G13">Kulit lembab(G13)</label>
        <input type="checkbox" name="G13" value="1"><br>

        <label for="G14">Terjadi pada wajah, badan, lengan dan tungkai(G14)</label>
        <input type="checkbox" name="G14" value="1"><br>

        <label for="G15">Terjadi lingkaran di permukaan kulit(G15)</label>
        <input type="checkbox" name="G15" value="1"><br>

        <label for="G16">Terjadi pada kulit halus(G16)</label>
        <input type="checkbox" name="G16" value="1"><br>

        <label for="G17">Basah(G17)</label>
        <input type="checkbox" name="G17" value="1"><br>

        <label for="G18">Terjadi gelembung berisi cairan(G18)</label>
        <input type="checkbox" name="G18" value="1"><br>

        <label for="G19">Terjadi di telapak kaki(G19)</label>
        <input type="checkbox" name="G19" value="1"><br>

        <label for="G20">Penebalan Kulit(G20)</label>
        <input type="checkbox" name="G20" value="1"><br>

        <label for="G21">Terjadi Pergelangan Tangan Sampai Jari(G21)</label>
        <input type="checkbox" name="G21" value="1"><br>

        <label for="G22">Kuku Menjadi Rusak(G22)</label>
        <input type="checkbox" name="G22" value="1"><br>

        <label for="G23">Terjadi pada Kuku(G23)</label>
        <input type="checkbox" name="G23" value="1"><br>
        <button type="submit">Diagnosis</button>
    </form>
</body>

</html>