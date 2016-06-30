@extends('layouts.layout')

@section('content')
<section class="content">
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::model($user, [
                'method' => 'PATCH',
                'route' => ['admin.update', $user->id]
            ]) !!}
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                    {!! Form::label('title', 'Username', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'password', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control password']) !!}
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  {!! Form::submit('Update Record', ['class' => 'btn btn-primary']) !!}
              </div>
            </form>
            {!! Form::close() !!}
          </div>
          <!-- /.box -->

        </div>
    </div>
</section>
@endsection
