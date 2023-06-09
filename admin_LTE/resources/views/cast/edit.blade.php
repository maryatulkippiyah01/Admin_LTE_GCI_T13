@extends("layout")
@section("menu","Cast")
@section("submenu","Tambah Cast")
@section("isikonten")
@foreach($cast as $c)
<form action="/cast/{{$c->id}}/update" method="post">
    @csrf
    <div class="card-body">
        <table>
            <tr>
                <th style="width: 100px; height: 25px;"><label for="exampleInputEmail1">Nama</label></th>
                <td>
                    <input type="text" name="nama" class="form-control" value="{{ $c->nama }}">
                </td>
            </tr>
            <tr>
                <th style="width: 100px; height: 100px;"><label for="exampleInputPassword1">Umur</label></th>
                <td>
                    <input type="number" name="umur" class="form-control" placeholder="Umur" value="{{ $c->umur }}">
                </td>
            </tr>
            <tr>
                <th style="width: 100px; height: 100px;"><label for="exampleInputPassword1">Bio</label></th>
                <td>
                    <textarea name="bio" cols="30" rows="10" class="form-control">{{$c->bio}}</textarea>
                </td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endforeach
@endsection
