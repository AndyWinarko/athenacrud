<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset('assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo asset('assets/dist/css/print.css'); ?>">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body onload="window.print();">
<div class="wrapper">
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
              <img src="<?php echo asset('assets/dist/img/Logo_Kemen_PPPA.png'); ?>" height="100">
              <small class="pull-right">Date: <?php echo date('Y-m-d H:i:s');?></small>
            </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="col-sm-4 invoice-col">
        <address>
        </address>
      </div>
      <div class="row invoice-info" style="text-align: center;">
        <div class="col-sm-12 invoice-col">
            <strong>KEMENTERIAN PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK REPUBLIK INDONESIA</strong><br>
            <strong>SATKER DEPUTI BIDANG PERLINDUNGAN ANAK</strong>
            <br><br>
            <strong>DAFTAR INVENTARISASI FISIK BMN</strong>

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>No.</th>
              <th>Kode BMN</th>
              <th>Nama BMN</th>
              <th>Merk/Type</th>
              <th>Tahun Perolehan</th>
              <th>No.Urut Pendaftaran</th>
              <th>Jumlah</th>
              <th>Kondisi Barang</th>
              <th>Bukti Kepemilikan</th>
              <th>Penguasaan</th>
              <th>Asal Perolehan</th>
              <th>Total Rupiah</th>
              <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{ $index++ }}</th>
                    <td>{{ $item->id_bmn }}</td>
                    <td>{{ $item->nama_bmn }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->no_urut }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->kondisi }}</td>
                    <td>{{ $item->bukti_kepemilikan }}</td>
                    <td>{{ $item->penguasaan }}</td>
                    <td>{{ $item->asal_perolehan }}</td>
                    <td>{{ $item->total_rupiah }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>
</body>
</html>
