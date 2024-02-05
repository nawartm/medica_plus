@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des ordonnances</h1>

            <button type="button" class="btn btn-dark-green " id="load1" data-loading-text=" Processing Order">
                <a href="{{ route('Ordonnance.create') }} "
                    >Ajouter </a>
            </button>
        <form action="{{ url('OrdonnanceSearch') }}" method="post">
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn a btn-green">Recherche</button>
        </form>
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
                                        href="{{ route('Ordonnance.show', $Ordonnance->id) }}"
                                        class="btn">
                                <button type="button" class="btn" id="load1" style=""><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Ordonnance.update', $Ordonnance->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                        <form action="{{ route('Ordonnance.destroy', $Ordonnance->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" id="load1" style="color:white">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
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
