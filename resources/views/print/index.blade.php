@extends('layouts.layout')

@section('content')
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info" style="text-align: center">
        <div class="col-sm-12 invoice-col">

            <strong>KEMENTERIAN PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK REPUBLIK INDONESIA</strong><br>
            <strong>SATKER ASDEP PERLINDUNGAN ABK</strong>
            <br><br>
            <strong>DAFTAR INVENTARISASI FISIK BMN</strong>

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
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
                    <th scope="row">{{ $item->id }}</th>
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



      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ url('printable?q='. Request::input('q')) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
    </section>
@endsection
