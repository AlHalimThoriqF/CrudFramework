<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Tabel Mahasiswa</title>
</head>

<body>
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-body">
                @if (session('pesan'))
                <div class="alert alert-success text-center">
                    {{ session('pesan') }}
                </div>
                @endif

                <h2 class="text-center mb-4">TABEL MAHASISWA</h2>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIM</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">FOTO</th>
                                <th scope="col">UMUR</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">CREATED AT</th>
                                <th scope="col">UPDATED AT</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($dataAll as $datax) {
                                $rowColorClass = ($num % 2 == 1) ?  : '';
                            ?>
                                <tr class="<?= $rowColorClass ?>">
                                    <th scope="row"><?= $num ?></th>
                                    <td><?= $datax->nim ?></td>
                                    <td><?= $datax->nama ?></td>
                                    <td><img src="<?= asset('fotomhs/' . $datax->foto) ?>" alt="Foto Mahasiswa" class="img-thumbnail" width="100"></td>
                                    <td><?= $datax->umur ?></td>
                                    <td><?= $datax->email ?></td>
                                    <td><?= $datax->alamat ?></td>
                                    <td><?= $datax->created_at ?></td>
                                    <td><?= $datax->updated_at ?></td>
                                    <td>
                                        <a href="/update/<?= $datax->nim ?>" onclick="return confirm('Yakin mau diedit/diupdate ?');" class="btn btn-success">Update</a>
                                        <a href="/delete/<?= $datax->nim ?>" onclick="return confirm('Yakin mau dihapus ?');" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php
                                $num++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-4">
                    <a href="/create" class="btn btn-success">Tambah Data</a>
                </div>
            </div>

            <hr>
        </div>
    </div>
</body>

</html>
