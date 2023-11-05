<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Invoice</title>
</head>
<body onload="print()">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Invoice</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Customer: {{ $penjualan->Member->nama }}</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <h5>Invoice Date: {{ date('Y-m-d') }}</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Shoe Brand: {{ $penjualan->Sepatu->merk }}</p>
                                <p>Shoe Name: {{ $penjualan->Sepatu->nama_sepatu }}</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Amount: 
                                    Rp.{{number_format( $penjualan->jumlah_bayar,2,',','.')}}
                               </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

