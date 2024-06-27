<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center mb-4">Update Data Pegawai</h1>
    <div class="container">
        <a href="{{ route('pegawais') }}" type="button" class="btn btn-success">Home</a>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('updatedata', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pegawai</label>
                                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="namaHelp" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                    <option value="Laki - Laki" {{ $data->jenis_kelamin === 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                                    <option value="Perempuan" {{ $data->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor Hp</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" aria-describedby="no_hpHelp" value="{{ $data->no_hp }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamatHelp" value="{{ $data->alamat }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
