@extends("layout")
@section("menu","Cast")
@section("submenu","Tambah Cast")
@section("isikonten")
<form action="/cast" method="post">
    @csrf
    <div class="card-body">
        <table>
            <tr>
                <th style="width: 100px; height: 25px;"><label for="exampleInputEmail1">Nama</label></th>
                <td>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </td>
            </tr>
            <tr>
                <th style="width: 100px; height: 100px;"><label for="exampleInputPassword1">Umur</label></th>
                <td>
                    <input type="number" name="umur" class="form-control" placeholder="Umur">
                </td>
            </tr>
            <tr>
                <th style="width: 100px; height: 100px;"><label for="exampleInputPassword1">Bio</label></th>
                <td>
                    <textarea name="bio" cols="30" rows="10" class="form-control"></textarea>
                </td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
