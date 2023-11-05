<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
</head>
<body onload="print()">
    <table class="table table" id="dataTable" border="1">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Kasir</th>
                <th scope="col">Nama Member</th>
                <th scope="col">Sepatu</th>
                <th scope="col">Tanggal Bayar</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        @foreach ($penjualan as $u)
        <tbody>
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->User->name }}</td>
                <td>{{ $u->Member->nama }}</td>
                <td>{{ $u->Sepatu->merk }}</td>
                <td>{{ $u->tgl_bayar}}</td>
                <td>{{ $u->jumlah_bayar}}</td>  
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>