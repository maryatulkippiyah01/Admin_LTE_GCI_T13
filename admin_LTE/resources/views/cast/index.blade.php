@extends("layout")
@section("menu","Cast")
<!-- @section("submenu","Data Tables") -->
@push("script")
<script src="{{asset('adminLTE-3.2.0plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminLTE-3.2.0plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable();
    });
</script>
@endpush
@section("isikonten")
<div class="card">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Cast</h3>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-2">
                <a href="/cast/create">
                    <button type="button" class="btn btn-block btn-success">+ Tambah</button>
                </a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($cast as $c)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$c->nama}}</td>
                    <td>{{$c->umur}}</td>
                    <td>{{$c->bio}}</td>
                    <td>
                        <a href="/cast/{{$c->id}}" class="btn btn-warning btn-sm m-b-10 m-l-5">Lihat</a>
                        <a href="/cast/{{$c->id}}/edit" class="btn btn-success btn-sm m-b-10 m-l-5">Edit</a>
                        <a href="/cast/{{$c->id}}/delete" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')">Hapus</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot> -->
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
