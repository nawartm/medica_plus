@extends('nav_Med')
@section('app')
    <section>
        <!--for demo wrap-->
        <h1>Gestion des consultation</h1>
        <button type="button" class="btn btn-primary" id="load1" data-loading-text=" Processing Order"><i
                class='fa fa-circle-o-notch fa-spin'></i><a href="{{ route('Consultation.create') }} " style="color:white"
                class="btn btn-sm me-2">Ajouter </a>
        </button>
        <div class="tbl-header">
            <table cellpadding="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom patient</th>
                        <th>Prenom Patient</th>
                        <th>Nom medcin</th>
                        <th>Prenom medcin</th>
                        <th>motif</th>
                        <th>taille</th>
                        <th>pois</th>
                        <th>tension</th>
                        <th>temperatur</th>
                        <th>examen</th>
                        <th>conclusion</th>
                        <th>date</th>
                        <th>heure</th>
                        <th>Operations</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="1" border="0">
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
                                <button type="button" class="btn btn-success" id="load1" style="color:white"><a
                                        href="{{ route('Consultation.Modify', $Consultation->id) }}"
                                        class="btn btn-success ps-0 py-0 pe-0">edit</a></button>
                                <button type="button" class="btn btn-danger" id="load1" style="color:white"><a
                                        href="{{ route('Consultation.delete', $Consultation->id) }}"
                                        class="btn btn-danger ps-0 py-0 pe-0">delete</a></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </section>
    </div>
    <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
@endsection
