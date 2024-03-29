@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des dépenses</h1>
        <button type="button" class="btn btn-dark-green" id="load1">
            <a href="{{ route('depense.create') }}" style="color:white">Ajouter
            </a>
        </button>
        <form>
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn a btn-green">Recherche</button>
        </form>
        <div>
            <table>
                <thead>
                    <tr>
                        <th class="table-primary"> Id </th>
                        <th class="table-secondary">Mois de dépense </th>
                        <th class="table-success"> Motif de dépense </th>
                        <th class="table-primary"> Montant de dépense</th>
                        <th class="table-danger"> Opérations </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($listD as $depense)
                        <tr>


                            <td>{{ $depense['id'] }}</td>
                            <td>{{ $depense['mois_dep'] }}</td>
                            <td>{{ $depense['motif_dep'] }}</td>
                            <td>{{ $depense['montant_dep'] }}</td>
                            <td>
                                <a href="{{ route('depense.show', $depense->id) }}" class="btn">
                                <button type="button" class="btn " id="load1">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('depense.edit', $depense->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0"><i
                                            class="fa-solid fa-pen-to-square"></i></a></button>

                                <form action="{{ route('depense.destroy', $depense->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" id="load1" style="color:white">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
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
