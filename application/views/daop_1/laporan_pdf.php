<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAOP 1 | Export PDF</title>
    <link rel="icon" type="image/png" sizes="8x16" href="<?= base_url() ?>assets/images/kai_logo.png">
</head><body>
        <center>
            <h3>DAOP 1 | Data Laporan Gangguan</h3>
        </center>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tempat Kejadian</th>
                <th>Tanggal</th>
                <th>Daop / Divre</th>
                <th>Jenis Gangguan</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Lama Gangguan</th>
                <th>Uraian</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($gangguan as $row) : ?>
            <tr>
                <th><?= $no++; ?></th>
                <td><?= $row['tempat_kejadian']; ?></td>
                <td><?= $row['tanggal']; ?></td>
                <td><?= $row['daerah_operasi']; ?></td>
                <td><?= $row['jenis_gangguan']; ?></td>
                <td><?= $row['jam_mulai']; ?></td>
                <td><?= $row['jam_selesai']; ?></td>
                <td><?= $row['lama_gangguan']; ?></td>
                <td><?= $row['uraian']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body></html>