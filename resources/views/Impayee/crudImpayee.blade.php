@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des impayés</h1>
        <button type="button" class="btn btn-primary" id="load1" data-loading-text=" Processing Order"><i
                class='fa fa-circle-o-notch fa-spin'></i><a href="{{ route('Impayee.create') }} " style="color:white"
                class="btn btn-sm me-2">Ajouter </a>
        </button>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom patient</th>
                        <th>Prénom Patient</th>
                        <th>tél</th>
                        <th>montant_APS</th>
                        <th>montant_RS</th>
                        <th>opérations</th>

                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="1" border="0">
                <tbody>
                    @foreach ($Impayee as $Impayee)
                        <tr>


                            <td>{{ $Impayee->id }}</td>
                            <td>{{ $Impayee->nom_pat }}</td>
                            <td>{{ $Impayee->prenom_pat }}</td>
                            <td>{{ $Impayee->tel_pat }}</td>
                            <td>{{ $Impayee->montant_APS }}</td>
                            <td>{{ $Impayee->montant_RS }}</td>

                            <td>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Impayee.Modify', $Impayee->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0">edit</a></button>
                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="{{ route('Impayee.delete', $Impayee->id) }}"
                                        class="btn btn-danger ps-0 py-0 pe-0">delete</a></button>
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



    </div>
@endsection
