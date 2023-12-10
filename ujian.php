<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KEVIN S. H. NAPITUPULU_50421727_UJIAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #e9ecef; /* Light gray background */
            font-family: 'Open Sans'
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #28a745;
            text-align: center; 
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-primary {
            background-color: #28a745; 
            color: #ffffff; 
        }
    </style>
  </head>
  <body>
    <div class="container">
        <br>
        <h1>Jadwal Ujian</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Ujian</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_ujian as $ujian) : ?>
                    <tr>
                        <td><?= $ujian->tanggal_ujian ?></td>
                        <td><?= $ujian->nama_peserta ?></td>
                        <td><?= $ujian->npm ?></td>
                        <td><?= $ujian->kelas ?></td>
                        <td><?= $ujian->jurusan ?></td>
                        <td>
                            <a href="<?= base_url('edit_data_ujian').'/'.$ujian->id ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?= base_url('delete_data_ujian').'/'.$ujian->id ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_ujian') ?>" class="btn btn-primary">Tambah Data Ujian</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>