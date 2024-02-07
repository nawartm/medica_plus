@extends('nav_Med')
@section('app')
    @if ($errors->any())
        <div class="alert alert-danger col-8 offset-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section>
        <div class="filter">
            <h2>Filtre</h2><br><br>
            <form action="{{ route('filter') }}" method="post">
                @csrf
                <input type="date" name="start_date" id="">
                <input type="date" name="end_date" id="">
                <button type="submit" class="btn btn-success">Filtre</button>
            </form>
        </div><br>
        <div class="content-boxes">
            <div>
                <h2>Ordonnances</h2>
                <h4>Total <span>{{ $ordonnances }}</span></h4>
            </div>
            <div>
                <h2>Certificats</h2>
                <h4>Total <span>{{ $certificat }}</span></h4>
            </div>
            <div>
                <h2>Consultations</h2>
                <h4>Total <span>{{ $consultation }}</span></h4>
            </div>
            <div>
                <h2>Fiches Examens</h2>
                <h4>Total <span>{{ $fiche_examen }}</span></h4>
            </div>
            <div>
                <h2>Mutuelles</h2>
                    <h4>Total <span>{{ $totale_mat }}</span></h4>
                    <h4>Mutuelle <span>{{ $montant_mut }}</span></h4>
            </div>
            <div>
                <h2> Impayés</h2>
                    <h4>APS <span>{{ $impyees_aps }}</span></h4>
                    <h4>RS <span>{{ $impyees_rs }}</span></h4>
            </div>
            <div>
                <h2>Factures</h2>
                <h4>Total <span>{{ $factures }}</span></h4>
            </div>
            <div>
                <h2>Dépenses</h2>
                <h4>Total <span>{{ $depense }}</span></h4>
            </div>
            <div>
                <h2>Rendez-vous</h2>
                <h4>Total <span>{{ $rdv }}</span></h4>
            </div>
            <div>
                <h2>Fiches Patients</h2>
                <h4>Total <span>{{ $patients }}</span></h4>
            </div>
        </div>
    </section>
    @yield('content')

@endsection
