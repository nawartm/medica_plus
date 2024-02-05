@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des impayés</h1>
        <button type="button" class="btn btn-dark-green" id="load1" data-loading-text=" Processing Order">
            <a href="{{ route('Impayee.create') }} " style="color:white"
                >Ajouter </a>
        </button>
        <form action="{{ url('ImpayeeSearch') }}" method="post">
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn a btn-green">Recherche</button>
        </form>
        <div >
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom patient</th>
                        <th>Prénom Patient</th>
                        <th>Tél</th>
                        <th>Montant_APS</th>
                        <th>Montant_RS</th>
                        <th>Opérations</th>

                    </tr>

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
                                <a href="{{ route('Impayee.show' , $Impayee->id) }}" title="View Impayee"><button
                                    class="btn "><i class="fa fa-eye" aria-hidden="true"></i>
                                    </button></a>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Impayee.update', $Impayee->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="{{ route('Impayee.destroy', $Impayee->id) }}"
                                        class="btn btn-danger ps-0 py-0 pe-0"><i class="fa-solid fa-trash"></i></a></button>
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
