@extends('layouts.layout')

@section('content')
<section class="content">
    @can('create_data')
      <a href="{{ route('items.create') }}" class="btn bg-olive margin">Create New Record</a>
    @endcan
      <a href="{{ url('print?q='. Request::input('q') .'&searchBy=' . Request::input('searchBy')) }}" class="btn bg-blue margin">Print</a>

  <div class="row">

      <div class="col-md-3">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Search Box</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
                <form method="get">
                    <div class="form-group">
                        {!! Form::label('title', 'Search By', ['class' => 'control-label']) !!}
                        {!! Form::select('searchBy', ['id_bmn' => 'Kode BMN', 'nama_bmn' => 'Nama BMN', 'tahun' => 'Tahun'], null, ['class' => 'form-control'] ) !!}
                    </div>
                <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 260px;">
                          <input type="text" name="q" class="form-control pull-right" placeholder="Search" value="{{ Request::input('q') }}">
                          <div class="input-group-btn">
                              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                  </div>
                </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Data BMN</h3>
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
                <th scope="row">{{ $index++}}</th>
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
                    <div class="btn-group">
                        @can('delete_data')
                            {!! Form::open([ 'method' => 'DELETE', 'route' => ['items.destroy', $item->id] ]) !!}
                            {!! Form::submit('X', ['class' => 'btn bg-maroon btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan

                        @can('edit_data')
                        <a href="{{ route('items.edit', $item->id) }}" type="button" class="btn bg-purple btn-sm btn-primary">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        @endcan

                    </div>

                    <!-- <a href="{{ route('items.destroy', $item->id) }}" type="button" class="btn bg-maroon btn-sm btn-danger">
                        <span class="glyphicon glyphicon-remove"></span>

                    <a href="{{ route('items.edit', $item->id) }}" class="btn bg-purple btn-sm btn-primary">
                      <span class="glyphicon glyphicon-edit"></span> -->
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
