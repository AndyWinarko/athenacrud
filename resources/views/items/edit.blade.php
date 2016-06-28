@extends('layouts.layout')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Record</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::model($item, [
                'method' => 'PATCH',
                'route' => ['items.update', $item->id]
            ]) !!}
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                    {!! Form::label('title', 'Kode BMN', ['class' => 'control-label']) !!}
                    {!! Form::text('id_bmn', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Nama BMN', ['class' => 'control-label']) !!}
                    {!! Form::text('nama_bmn', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Merk/Type', ['class' => 'control-label']) !!}
                    {!! Form::text('type', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Tahun Perolehan', ['class' => 'control-label']) !!}
                    {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'No Urut Pendafaran', ['class' => 'control-label']) !!}
                    {!! Form::text('no_urut', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Jumlah', ['class' => 'control-label']) !!}
                    {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Kondisi Barang', ['class' => 'control-label']) !!}
                    {!! Form::select('kondisi', ['B' => '(B) Bagus', 'RR' => 'RR', 'RB' => 'Rusak Berat'], null, ['class' => 'form-control'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('title', 'Bukti Kepemilikan', ['class' => 'control-label']) !!}
                    {!! Form::select('bukti_kepemilikan', ['ada' => 'Ada', 'Tidak ada' => 'Tidak Ada'], null, ['class' => 'form-control'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('title', 'Penguasaan', ['class' => 'control-label']) !!}
                    {!! Form::select('penguasaan', ['sendiri' => 'Sendiri', 'pihak III' => 'Pihak III'], null, ['class' => 'form-control'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('title', 'Asal Perolehan', ['class' => 'control-label']) !!}
                    {!! Form::text('asal_perolehan', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Total', ['class' => 'control-label']) !!}
                    {!! Form::text('total_rupiah', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Keterangan', ['class' => 'control-label']) !!}
                    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
              </div>
            </form>
            {!! Form::close() !!}
          </div>
          <!-- /.box -->

        </div>
    </div>
</section>
@endsection
