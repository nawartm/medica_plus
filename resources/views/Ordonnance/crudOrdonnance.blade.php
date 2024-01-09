@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des ordonnances</h1>

        <div style="margin:3em;">
            <button type="button" class="btn btn-primary " id="load1" data-loading-text=" Processing Order"><i
                    class='fa fa-circle-o-notch fa-spin'></i><a href="{{ route('Ordonnance.create') }} " style="color:white"
                    >+Ajouter </a>
            </button>
        </div>
        <div class="">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom patient</th>
                        <th>Prénom Patient</th>
                        <th>Nom médecin</th>
                        <th>Prénom médecin</th>
                        <th>La date</th>
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
                                <a
                                        href="{{ route('Ordonnance.Voir', $Ordonnance->id) }}"
                                        class="btn">
                                <button type="button" class="btn" id="load1" style=""><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Ordonnance.Modify', $Ordonnance->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="{{ route('Ordonnance.delete', $Ordonnance->id) }}"
                                        class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></button>
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
