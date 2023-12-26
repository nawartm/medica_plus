@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des ordonnances</h1>
        <div style="margin:3em;">
            <button type="button" class="btn btn-primary" id="load1" data-loading-text=" Processing Order"><i
                    class='fa fa-circle-o-notch fa-spin'></i><a href="{{ route('Ordonnance.create') }} " style="color:white"
                    class="btn">Ajouter une Ordonnance</a>
            </button>
        </div>
        <div class="">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom patient</th>
                        <th>Prénom Patient</th>
                        <th>Nom médecin</th>
                        <th>Prénom médecin</th>
                        <th>la Date</th>
                        <th>Description</th>
                        <th>Opérations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Ordonnances as $Ordonnance)
                        <tr>
                            <td>{{ $Ordonnance->id }}</td>
                            <td>{{ $Ordonnance->nom_pat }}</td>
                            <td>{{ $Ordonnance->prenom_pat }}</td>
                            <td>{{ $Ordonnance->nom_med }}</td>
                            <td>{{ $Ordonnance->prenom_med }}</td>
                            <td>{{ $Ordonnance->date }}</td>
                            <td>{{ Str::limit($Ordonnance->description, 6) }}</td>
                            <td>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Ordonnance.Modify', $Ordonnance->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0">modifier</a></button>
                                <button type="button" class="btn btn-warning" id="load1" style="color:white"><a
                                        href="{{ route('Ordonnance.Voir', $Ordonnance->id) }}"
                                        class="btn btn-warning ps-0 py-0 pe-0">voir</a></button>
                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="{{ route('Ordonnance.delete', $Ordonnance->id) }}"
                                        class="btn btn-danger ps-0 py-0 pe-0">supprimer</a></button>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </section>


    <script>
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
    <!-- follow me template -->
    </div>
@endsection
