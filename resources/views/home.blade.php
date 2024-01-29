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
            <form action="" method="post">
                @csrf
                <input type="date" name="start-date" id="">
                <input type="date" name="end-date" id="">
                <button type="submit" class="btn btn-success">Filtre</button>
            </form>
        </div><br>
        <div class="content-boxes">
            <div>
                <h2>Ordonnances</h2>
                <h4>Total <span>14</span></h4>
            </div>
            <div>
                <h2>Certificats</h2>
                <h4>Total <span>12</span></h4>
            </div>
            <div>
                <h2>Consultations</h2>
                <h4>Total <span>8</span></h4>
            </div>
            <div>
                <h2>Fiches Examens</h2>
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
                <h2>Factures</h2>
                <h4>Total <span>1050</span></h4>
            </div>
            <div>
                <h2>Dépenses</h2>
                <h4>Total <span>750</span></h4>
            </div>
            <div>
                <h2>Rendez-vous</h2>
                <h4>Total <span>8</span></h4>
            </div>
            <div>
                <h2>Fiches Patients</h2>
                <h4>Total <span>18</span></h4>
            </div>
        </div>
    </section>
    @yield('content')

@endsection
