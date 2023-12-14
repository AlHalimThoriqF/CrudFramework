<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Data Mahasiswa</title>
</head>

<body class="bg-light">
    <div class="container mt-5 p-4 bg-white rounded shadow">
        <div class="text-center">
            <h2>Data Mahasiswa Berhasil Disimpan</h2>
            <hr />
            <img src="{{ asset('fotomhs/'. $data['foto']) }}" alt='Foto Mahasiswa' class='img-fluid' width='200'>
        </div>
        <center>
            <table class="table mt-4 bg-primary text-white table-hover" style='width:35%;'>
                <tbody>
                    <tr>
                        <td>NIM</td>
                        <td>{{$data['nim']}}</td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>{{$data['nama']}}</td>
                    </tr>
                    <tr>
                        <td>UMUR</td>
                        <td>{{$data['umur']}}</td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td>{{$data['email']}}</td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>{{$data['foto']}}</td>
                    </tr>
                </tbody>
            </table>
        </center>
        <div class="text-center mt-4">
            <a href="/read" class="btn btn-success">Tampilkan Data</a>
        </div>
    </div>
</body>

</html>