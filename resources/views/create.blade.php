<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Data Mahasiswa</title>
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
                CREATE Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url ('save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" id="nama" name="nama" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="foto">FOTO</label>
                        <input type="file" id="foto" name="foto" class="form-control" accept="image/*" required="">
                    </div>
                    <div class="form-group">
                        <label for="umur">UMUR</label>
                        <input type="text" id="umur" name="umur" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
