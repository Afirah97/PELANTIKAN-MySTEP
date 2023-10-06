<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kemaskini Borang MySTEP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Kemaskini</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('mysteps.index') }}" enctype="multipart/form-data">
                        Keluar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('mysteps.update',$mystep->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="nama" value="{{ $mystep->nama }}" class="form-control"
                            placeholder="Nama">
                        @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                            value="{{ $mystep->alamat }}">
                        @error('alamat')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gelaran Tugas:</strong>
                        <input type="text" name="gred" value="{{ $mystep->gred }}" class="form-control"
                            placeholder="Gelaran Tugas">
                        @error('gred')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kadar Upah (Bulanan):</strong>
                        <input type="text" name="gaji" value="{{ $mystep->gaji }}" class="form-control"
                            placeholder="Kadar Upah (Bulanan)">
                        @error('gaji')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tarikh Kuatkuasa kontrak:</strong>
                        <input type="text" name="tarikh_masuk" value="{{ $mystep->tarikh_masuk }}" class="form-control"
                            placeholder="Tarikh Kuatkuasa kontrak">
                        @error('tarikh_masuk')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tarikh Tamat kontrak:</strong>
                        <input type="text" name="tarikh_tamat" value="{{ $mystep->tarikh_tamat }}" class="form-control"
                            placeholder="Tarikh Tamat kontrak">
                        @error('tarikh_tamat')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tempoh Kontrak (Bulan):</strong>
                        <input type="text" name="tempoh" value="{{ $mystep->tempoh }}" class="form-control"
                            placeholder="Tempoh Kontrak (Bulan)">
                        @error('tempoh')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Hantar</button>
            </div>
        </form>
    </div>
</body>

</html>