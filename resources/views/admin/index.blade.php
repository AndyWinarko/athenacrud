@extends('layouts.layout')

@section('content')
<section class="content">
    <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a
          fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched
          vertically.</p>
      </div>
      <a href="{{ route('admin.create') }}" class="btn bg-olive margin">Create New Record</a>
  <div class="row">
    <div class="col-md-8">
        <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Admin List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 10px">No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>

                  @foreach($users as $user)
                  <tr>
                    <td>{{ $index++}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>

                    <div class="btn-group">
                        {!! Form::open([ 'method' => 'DELETE', 'route' => ['admin.destroy', $user->id] ]) !!}
                        {!! Form::submit('X', ['class' => 'btn bg-maroon btn-sm btn-danger']) !!}
                        {!! Form::close() !!}

                        <a href="{{ route('admin.edit', $user->id) }}" type="button" class="btn bg-purple btn-sm btn-primary">
                            <span class="glyphicon glyphicon-edit">
                        </a>
                    </div>
                    </td>
                  </tr>
                  @endforeach

                </tbody></table>
              </div>
              <!-- /.box-body -->
              {!! $users->render() !!}
            </div>
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection
