@extends('layouts.app')
@section('content')
<h1 class="mb-5 text-center">IZMJENA INFORMACIJA VOZILA</h1>
<div class="row">
    <div class="col-6 offset-3">
        <form action="/vozilo/{{ $vozilo->id }}" method="POST">
            @method('PATCH')
            @csrf
            <table class="table text-center table-striped">
                <tr>
                    <td><label for="">Proizvodjac</label></td>
                    <td> <input name="proizvodjac" type="text" value="{{ $vozilo->proizvodjac }}"></td>
                </tr>
                <tr>
                    <td><label for="">Model</label></td>
                    <td> <input name="model" type="text" value="{{ $vozilo->model }}"></td>
                </tr>
                <tr>
                    <td><label for="">Godiste</label></td>
                    <td> <input name="godina_proizvodnje" type="number" value="{{ $vozilo->godina_proizvodnje }}"></td>
                </tr>
                <tr>
                    <td><label for="">Registarska oznaka</label></td>
                    <td> <input name="registarska_oznaka" type="text" value="{{ $vozilo->registarska_oznaka }}"></td>
                </tr>
                <tr>
                    <td><label for="">Broj vrata</label></td>
                    <td> <input name="broj_vrata" type="number" value="{{ $vozilo->broj_vrata }}"></td>
                </tr>
                <tr>
                    <td><label for="">Boja</label></td>
                    <td> <input name="boja" type="text" value="{{ $vozilo->boja }}"></td>
                </tr>
                <tr>
                    <td><label for="">Tip pogonskog goriva</label></td>
                    <td> <input name="tip_pogonskog_goriva" type="text" value="{{ $vozilo->tip_pogonskog_goriva }}"></td>
                </tr>
                <tr>
                    <td><label for="">Zapremina motora</label></td>
                    <td> <input name="zapremina_motora" type="number" value="{{ $vozilo->zapremina_motora }}"></td>
                </tr>
                <tr>
                    <td><label for="">Snaga motora</label></td>
                    <td> <input name="snaga_motora" type="number" value="{{ $vozilo->snaga_motora }}"></td>
                </tr>
                <tr class="text-center">
                    <td><input type="submit" class="btn btn-outline-success" value="Sacuvaj izmjene"></td>
                    <td><a href="/vozilo" class="btn btn-outline-danger">Otkazi</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection