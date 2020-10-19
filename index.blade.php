@extends('layouts.app')
@section('content')
<h1 class="text-center mb-5">LISTA VOZILA</h1>
<table class="table table-striped">
    <thead>
            <th scope="col">Proizvodjac</th>
            <th scope="col">Model</th>
            <th scope="col">Godiste</th>
            <th scope="col">Registarska oznaka</th>
            <th scope="col">Broj vrata</th>
            <th scope="col">Boja</th>
            <th scope="col">Tip goriva</th>
            <th scope="col">Zapremina motora</th>
            <th scope="col">Snaga motora</th>
            <th scope="col">Izmjena</th>
            <th scope="col">Brisanje</th> 
    </thead>
    <tbody>@foreach($vozila as $vozilo)
        <tr>
                <td>{{ $vozilo->proizvodjac }}</td>
                <td>{{ $vozilo->model }}</td>
                <td>{{ $vozilo->godina_proizvodnje }}</td>
                <td>{{ $vozilo->registarska_oznaka }}</td>
                <td>{{ $vozilo->broj_vrata }}</td>
                <td>{{ $vozilo->boja }}</td>
                <td>{{ $vozilo->tip_pogonskog_goriva }}</td>
                <td>{{ $vozilo->zapremina_motora }}</td>
                <td>{{ $vozilo->snaga_motora }}</td>
                <td><a href="vozilo/{{ $vozilo->id }}/edit"><i class="ml-3 fa fa-edit" style="text-decoration: none;
                    color: #3c5096;"></i></a></td>
                <td>
                    <form action="/vozilo/{{ $vozilo->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border: none; background: none;">
                        <i class="ml-3 fa fa-primary fa-window-close" style="text-decoration:none; color:#db0d0d"></i>
                        </button>
                        </label>
                    </form>
                 </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    <a href="/vozilo/create" class="btn btn-outline-primary">Dodajte novo vozilo</a>
</div>
@endsection