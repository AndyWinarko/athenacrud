@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>
                        Some default panel content here. Nulla vitae elit libero,
                        a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </br>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                </div>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
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
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>A.3.06.02.01.004.3623</td>
                      <td>Printer</td>
                      <td>Cannon P-21511</td>
                      <td>2015</td>
                      <td>47</td>
                      <td>2</td>
                      <td>B/RR/RB</td>
                      <td>Tidak ada</td>
                      <td>Pihak III</td>
                      <td>google inc</td>
                      <td>5.000.000</td>
                      <td> - </td>
                      <td>
                          <button type="button" class="btn btn-default btn-sm btn-danger">
                              <span class="glyphicon glyphicon-remove"></span>
                          </button>

                          <button type="button" class="btn btn-default btn-sm btn-primary">
                            <span class="glyphicon glyphicon-edit"></span>
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>A.3.06.02.01.004.3623</td>
                      <td>Printer</td>
                      <td>Cannon P-21511</td>
                      <td>2015</td>
                      <td>47</td>
                      <td>2</td>
                      <td>B/RR/RB</td>
                      <td>Tidak ada</td>
                      <td>Pihak III</td>
                      <td>google inc</td>
                      <td>5.000.000</td>
                      <td> - </td>
                      <td>
                          <button type="button" class="btn btn-default btn-sm btn-danger">
                              <span class="glyphicon glyphicon-remove"></span>
                          </button>

                          <button type="button" class="btn btn-default btn-sm btn-primary">
                            <span class="glyphicon glyphicon-edit"></span>
                          </button>
                      </td>
                    </tr>
                  </tbody>
                  </table>
                  <nav>
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
</div>
@endsection
