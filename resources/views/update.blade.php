<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    @if ($errors->any())
    <div style="color: red" class="container mt-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container mt-4">
        @if(session('status') )
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card shadow">
            <div class="card-header text-center font-weight-bold bg-primary text-light">
                UPDATE Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="update-blog-post-form" id="update-blog-post-form" method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" required="" value="{{$data->nim}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" id="nama" name="nama" class="form-control" required="" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="foto">FOTO</label> <br>
                        <img id="foto-preview" src="{{ asset('fotomhs/'. $data['foto']) }}" alt='Foto Mahasiswa' width='100'>
                        <input type="text" class="form-control" value="{{ $data->foto }}" readonly>
                        <input type="file" id="foto" name="foto" class="form-control" onchange="previewImage(this)">
                    </div>
                    <div class="form-group">
                        <label for="umur">UMUR</label>
                        <input type="text" id="umur" name="umur" class="form-control" required="" value="{{$data->umur}}">
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" class="form-control" required="" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control" required="">{{$data->alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            var preview = document.getElementById('foto-preview');
            var fileName = input.value.split('\\').pop();
            input.previousElementSibling.value = fileName;

            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            if (input.files.length > 0) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
