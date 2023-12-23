@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des depenses</h1>
        <button type="button" class="btn btn-primary btn-lg " id="load1" data-loading-text=" Processing Order"><i
                class='fa fa-circle-o-notch fa-spin'></i><a href="\depense" style="color:white" class="btn btn-sm me-2">Ajouter
                une depense</a>
        </button>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th class="table-primary"> Numero </th>
                        <th class="table-secondary">Mois de depense </th>
                        <th class="table-success"> Motif de depense </th>
                        <th class="table-primary"> Montant de depense</th>
                        <th class="table-danger"> action </th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="1" border="0">
                <tbody>
                    @foreach ($listD as $depense)
                        <tr>


                            <td>{{ $depense['id'] }}</td>
                            <td>{{ $depense['mois_dep'] }}</td>
                            <td>{{ $depense['motif_dep'] }}</td>
                            <td>{{ $depense['montant_dep'] }}</td>
                            <td>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('/editD', $depense->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0">edit</a></button>
                                <button type="button" class="btn btn-warning" id="load1" style="color:white"><a
                                        href="{{ route('/viewD', $depense->id) }}"
                                        class="btn btn-warning ps-0 py-0 pe-0">see</a></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
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
@endsection
