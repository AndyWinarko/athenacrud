@extends('layouts.layout')

@section('content')
<section class="content">
    <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a
          fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched
          vertically.</p>
      </div>
      <a href="{{ route('items.create') }}" class="btn bg-olive margin">Create New Record</a>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Data BMN</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
                <th>No.</th>
                <th>Kode BMN</th>
                <th>Nama BMN</th>
                <th>Merk/Type</th>
                <th>Tahun Perolehan</th>
                <th>No Urut Pendaftaran</th>
                <th>Jumlah</th>
                <th>Kondisi Barang</th>
                <th>Bukti Kepemilikan</th>
                <th>Penguasaan</th>
                <th>Asal Perolehan</th>
                <th>Total Rupiah</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>

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
                <td>

                    <a href="{{ route('items.destroy', $item->id) }}" type="button" class="btn bg-maroon btn-sm btn-danger">
                        <span class="glyphicon glyphicon-remove"></span>

                    <a href="{{ route('items.edit', $item->id) }}" class="btn bg-purple btn-sm btn-primary">
                      <span class="glyphicon glyphicon-edit"></span>
                </td>
            </tr>
            @endforeach


          </tbody></table>
        </div>
        {!! $items->render() !!}
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection
