@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des rendez-vous</h1>
        <button type="button" class="btn btn-dark-green" id="load1" data-loading-text=" Processing Order">
            <a href="/RDVRDV" style="color:white">Ajouter</a>
        </button>
        <form action="{{ url('RDVSearch') }}" method="post">
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn a btn-green">Recherche</button>
        </form>
        <div>
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th class="table-primary"> Id </th>
                        <th class="table-secondary"> Nom Patient </th>
                        <th class="table-success"> Prénom Patient </th>
                        <th class="table-primary"> Tél Patient </th>
                        <th class="table-warning"> La date </th>
                        <th class="table-info"> L'heure </th>
                        <th class="table-danger"> Opérations </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listR as $RDV)
                        <tr>


                            <td>{{ $RDV['id'] }}</td>
                            <td>{{ $RDV['nom_pat'] }}</td>
                            <td>{{ $RDV['prenom_pat'] }}</td>
                            <td>{{ $RDV['tel_pat'] }}</td>
                            <td>{{ $RDV['date'] }}</td>
                            <td>{{ $RDV['heure'] }}</td>

                            <td>
                                <a href="{{ url('/RDV/' . $RDV->id) }}" title="View RDV"><button class="btn "><i
                                            class="fa fa-eye" aria-hidden="true"></i>
                                    </button></a>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('/edit', $RDV->id) }}" class="btn btn-success ps-0 py-0 pe-0"><i
                                            class="fa-solid fa-pen-to-square"></i></a></button>

                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="\delete?id={{ $RDV['id'] }}" class="btn btn-danger ps-0 py-0 pe-0"><i
                                            class="fa-solid fa-trash"></i></a></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </section>
    <!-- follow me template -->
    <script>
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
@endsection
