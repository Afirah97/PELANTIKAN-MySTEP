<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pelantikan MySTEP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Format Permohonan Pelantikan Personel MySTEP (PMS) Tahun 2023</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('mysteps.create') }}"> Tambah Pelantikan Baru</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="280px">Nama</th>
                    <th width="280px">Alamat</th>
                    <th width="120px">Gelaran Tugas</th>
                    <th>Kadar Upah (Bulanan)</th>
                    <th width="120px">Tarikh Kuatkuasa Kontrak</th>
                    <th width="125px">Tarikh Tamat Kontrak</th>
                    <th width="120px">Tempoh Kontrak (Bulan)</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mysteps as $mystep)
                    <tr>
                        <td>{{ $mystep->nama }}</td>
                        <td>{{ $mystep->alamat }}</td>
                        <td>{{ $mystep->gred }}</td>
                        <td>{{ $mystep->gaji }}</td>
                        <td>{{ $mystep->tarikh_masuk }}</td>
                        <td>{{ $mystep->tarikh_tamat }}</td>
                        <td>{{ $mystep->tempoh }}</td>
                        <td>
                            <form action="{{ route('mysteps.destroy',$mystep->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('mysteps.edit',$mystep->id) }}">Kemaskini</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Padam</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $mysteps->links() !!}
    </div>
</body>
</html>