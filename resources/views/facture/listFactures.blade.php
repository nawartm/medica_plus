@extends('nav_Med')
@section('app')
    <section>
        <h1>Gestion des factures</h1>
        <button type="button" class="btn btn-primary btn-lg " id="load1" data-loading-text=" Processing Order"><i
                class='fa fa-circle-o-notch fa-spin'></i><a href="{{ route('facture') }} " style="color:white">+Ajouter </a>
        </button>
        <form action="{{ url('factureSearch') }}" method="get">
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn btn-primary">Recherche</button>
        </form>
        <div>
            <table>
                <thead>
                    <tr>

                        <th> Id</th>
                        <th>Date </th>
                        <th>Tarif de consultation</th>
                        <th> Nom du patient</th>
                        <th> Prénom du patient</th>
                        <th> Opérations </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($listF as $facture)
                        <tr>
                            <td>{{ $facture['id'] }}</td>
                            <td>{{ $facture['date'] }}</td>
                            <td>{{ $facture['tarif_cns'] }}</td>
                            <td>{{ $facture['nom_pat'] }}</td>
                            <td>{{ $facture['prenom_pat'] }}</td>
                            <td>

                                <button type="button" class="btn " id="load1" style=""><a
                                        href="{{ route('/viewF', $facture->id) }}" cl class="btn ">

                                    </a> <i class="fa fa-eye" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('/editF', $facture->id) }}" class="btn btn-success ps-0 py-0 pe-0"><i
                                            class="fa-solid fa-pen-to-square"></i></a></button>

                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="\deleteF?id={{ $facture['id'] }}" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></a></button>
                            </td>
                        <tr>
                    @endforeach

                </tbody>
            </table>
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
@endsection
