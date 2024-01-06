@extends('nav_Med')
@section('app')
    <section>
        <h1>Gestion des Factures</h1>
        <button type="button" class="btn btn-primary btn-lg " id="load1" data-loading-text=" Processing Order"><i
                class='fa fa-circle-o-notch fa-spin'></i><a href="{{ route('facture') }} " style="color:white"
                class="btn btn-sm me-2">Ajouter une facture</a>
        </button>
        <div >
            <table >
                <thead>
                    <tr>

                        <th> Id</th>
                        <th>Date </th>
                        <th>Tarif de consultation</th>
                        <th> Nom du patient</th>
                        <th> Prénom du patient</th>
                        <th> opération </th>


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
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="\deleteF?id={{ $facture['id'] }}"
                                        class="btn btn-success ps-0 py-0 pe-0">supprimer</a></button>
                                <button type="button" class="btn btn-warning" id="load1" style="color:white"><a
                                        href="{{ route('/editF', $facture->id) }}"
                                        class="btn btn-warning ps-0 py-0 pe-0">modifier</a></button>
                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="{{ route('/viewF', $facture->id) }}"
                                        class="btn btn-danger ps-0 py-0 pe-0">voir</a></button>
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
