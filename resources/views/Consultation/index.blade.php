@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des consultations</h1>
        <button type="button" class="btn btn-dark-green" id="load1"  >
            <a href="{{ route('Consultation.create') }} "
                style="color:white">Ajouter </a>
        </button>
        <form action="{{ url('ConsultationSearch') }}" method="get">
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn a btn-green">Recherche</button>
        </form>
        <div class="tbl-header">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom patient</th>
                        <th>Prénom Patient</th>
                        <th>Nom médecin</th>
                        <th>Prénom médecin</th>
                        <th>Motif</th>
                        <th>Taille</th>
                        <th>Poids</th>
                        <th>Tension</th>
                        <th>Températur</th>
                        <th>Examen</th>
                        <th>Conclusion</th>
                        <th>La date</th>
                        <th>L'heure</th>
                        <th>Opérations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Consultation as $Consultation)
                        <tr>
                            <td>{{ $Consultation->id }}</td>
                            <td>{{ $Consultation->nom_pat }}</td>
                            <td>{{ $Consultation->prenom_pat }}</td>
                            <td>{{ $Consultation->nom_med }}</td>
                            <td>{{ $Consultation->prenom_med }}</td>
                            <td>{{ $Consultation->motif }}</td>
                            <td>{{ $Consultation->taille }}</td>
                            <td>{{ $Consultation->pois }}</td>
                            <td>{{ $Consultation->tension }}</td>
                            <td>{{ $Consultation->temperatur }}</td>
                            <td>{{ $Consultation->examen }}</td>
                            <td>{{ $Consultation->conclusion }}</td>
                            <td>{{ $Consultation->date }}</td>
                            <td>{{ $Consultation->heure }}</td>

                            <td>
                                <a href="{{ route('Consultation.show' , $Consultation->id) }}" title="View Consultation"><button
                                        class="btn "><i class="fa fa-eye" aria-hidden="true"></i>
                                    </button></a>
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Consultation.edit', $Consultation->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0"><i
                                            class="fa-solid fa-pen-to-square"></i></a></button>
                                            <form action="{{ route('Consultation.destroy', $Consultation->id) }}" method="POST">
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
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
@endsection
