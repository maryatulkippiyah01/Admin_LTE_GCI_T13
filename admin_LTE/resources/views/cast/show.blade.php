@extends("layout")
@section("menu","Cast")
@section("submenu","Detail Cast")
@section("isikonten")
    <div class="card-body">
        <table>
            @foreach($cast as $c)
            <tr>
                <th><label>Nama</label></th>
                <td>
                    <p>{{$c->nama}}</p>
                </td>
            </tr>
            <tr>
                <th><label>Umur</label></th>
                <td>
                    <p>{{$c->umur}}</p>
                </td>
            </tr>
            <tr>
                <th><label>Bio</label></th>
                <td>
                    <p>{{$c->bio}}</p>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="card-footer">
        <a href="/cast ">
            <button class="btn btn-primary">Back</button>
        </a>
    </div>
@endsection
