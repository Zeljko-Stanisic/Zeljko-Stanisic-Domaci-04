@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <h1 class="text-center mb-5">INFORMACIJE NOVOG VOZILA</h1>
        <form action="/vozilo" method="POST">
            @csrf
            <table class="table text-center table-striped">
                <tr>
                    <td><label for="">Proizvodjac</label></td>
                    <td> <input value="{{ old('proizvodjac')}}" name="proizvodjac" type="text"></td>
                </tr>
                <tr>
                    <td><label for="">Model</label></td>
                    <td> <input value="{{ old('model')}}" name="model" type="text"></td>
                </tr>
                <tr>
                    <td><label for="">Godiste</label></td>
                    <td> <input value="{{ old('godina_proizvodnje')}}" name="godina_proizvodnje" type="number"></td>
                </tr>
                <tr>
                    <td><label for="">Registracija</label></td>
                    <td> <input value="{{ old('registarska_oznaka')}}" name="registarska_oznaka" type="text"></td>
                </tr>
                <tr>
                    <td><label for="">Broj vrata</label></td>
                    <td> <input value="{{ old('broj_vrata')}}" name="broj_vrata" type="number"></td>
                </tr>
                <tr>
                    <td><label for="">Boja</label></td>
                    <td> <input value="{{ old('boja')}}" name="boja" type="text"></td>
                </tr>
                <tr>
                    <td><label for="">Tip pogonskog goriva</label></td>
                    <td> <input value="{{ old('tip_pogonskog_goriva')}}" name="tip_pogonskog_goriva" type="text"></td>
                </tr>
                <tr>
                    <td><label for="">Zapremina motora</label></td>
                    <td> <input value="{{ old('zapremina_motora')}}" name="zapremina_motora" type="number"></td>
                </tr>
                <tr>
                    <td><label for="">Snaga motora</label></td>
                    <td> <input value="{{ old('snaga_motora')}}" name="snaga_motora" type="number"></td>
                </tr>
                <tr class="text-center">
                    <td><input type="submit" class="btn btn-outline-success" value="Sacuvaj"></td>
                    <td><a href="/vozilo" class="btn btn-outline-danger">Otkazi</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection