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
            <h2>filtre</h2>
            <form action="" method="post">
                @csrf
                <input type="date" name="start-date" id="">
                <input type="date" name="end-date" id="">
                <button type="submit" class="btn btn-success">Filtre</button>
            </form>
        </div>
        <div class="content-boxes">
            <div>
                <h2>Ordonnance</h2>
                <h4>Total <span>14</span></h4>
            </div>
            <div>
                <h2>Certificat</h2>
                <h4>Total <span>12</span></h4>
            </div>
            <div>
                <h2>Consultation</h2>
                <h4>Total <span>8</span></h4>
            </div>
            <div>
                <h2>Fiche_Examen</h2>
                <h4>Total <span>9</span></h4>
            </div>
            <div>
                <h2>Mutuelles</h2>
                    <h4>Total <span>450</span></h4>
                    <h4>Mutuelle <span>150</span></h4>
            </div>
            <div>
                <h2> Impayés</h2>
                    <h4>APS <span>350</span></h4>
                    <h4>RS <span>50</span></h4>
            </div>
            <div>
                <h2>Facture</h2>
                <h4>Total <span>1050</span></h4>
            </div>
            <div>
                <h2>Depense</h2>
                <h4>Total <span>750</span></h4>
            </div>
            <div>
                <h2>RendezVous</h2>
                <h4>Total <span>8</span></h4>
            </div>
            <div>
                <h2>Fiche Patient</h2>
                <h4>Total <span>18</span></h4>
            </div>
        </div>
    </section>
    @yield('content')

@endsection
