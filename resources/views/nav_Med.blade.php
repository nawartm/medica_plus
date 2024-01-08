<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url({{ asset('assets/subtle-prism.png') }});
        }
    </style>
    <title></title>
</head>

<body>
    @auth
        <nav>
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/Green Medical Logo (1).png') }}" alt="Medica+" srcset="">
                <span>Medica+</span>
            </a>
            <ul>

                <!--***************************************Gestion du dossier medical************************************** -->

                <li><a href="{{ route('Ordonnance.index') }}"><i class="fa-regular fa-paste"></i><span data-visible="true">
                            Ordonnances</span></a>
                </li>
                <li><a href="{{ route('Certificat.index') }}"><i class="fa-regular fa-newspaper"></i><span
                            data-visible="true"> Certificats</span></a>
                </li>
                <li><a href="{{ route('Consultation.index') }}"><i class="fa-solid fa-user-doctor"></i><span
                            data-visible="true"> Consultations</span></a>
                </li>
                <li><a href="{{ route('Fiche_Examen.index') }}"><i class="fa-solid fa-stethoscope"></i><span
                            data-visible="true"> Examens</span></a>
                </li>
                <li><a href="{{ route('FicheMut.index') }}"><i class="fa-solid fa-hospital-user"></i><span
                            data-visible="true"> Mutuelles</span></a>
                </li>

                <!-- **************Gestion des comptabilités *****************-->
                <li><a href="{{ route('Impayee.index') }}"><i class="fa-solid fa-file-invoice-dollar"></i><span
                            data-visible="true"> Impayés</span></a>
                </li>
                <li><a href="{{ route('listFactures') }}"><i class="fa-solid fa-comments-dollar"></i><span
                            data-visible="true"> factures</span></a>
                </li>
                <li><a href="{{ route('listDepenses') }}"><i class="fa-solid fa-comment-dollar"></i><span
                            data-visible="true"> dépenses</span></a>
                </li>


                <!-- *************************G.des Rdvs**************************-->

                <li><a href="{{ route('listRDV') }}"><i class="fa-regular fa-calendar-check"></i><span data-visible="true">
                            Gestion des rendez-vous</span></a>
                    <!-- First Tier Drop Down -->
                </li>
                <!-- ******************************Gestion des fiches patients************************************ -->
                <li><a href="{{ route('Fiche_Patient.index') }}"><i class="fa-solid fa-bed-pulse"></i><span
                            data-visible="true"> Gestion des fiches patients</span></a>
                    <!-- First Tier Drop Down -->
                </li>


            </ul>
            <ul>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span data-visible="true">
                            {{ Auth::user()->name }}
                        </span>
                    </a>
                </li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        {{-- {{ __('quit') }} --}}
                        <i class="fa-solid fa-power-off"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    @endauth
    @yield('app')
    <script>
        let btn = document.getElementById('menu');
        const allSpans = document.querySelectorAll('span');

        btn.addEventListener("click", () => {
            for (let i = 0; i < allSpans.length; i++) {
                const span = allSpans[i];
                const visibility = span.getAttribute('data-visible');

                if (visibility === "true") {
                    span.setAttribute("data-visible", "false");
                } else {
                    span.setAttribute("data-visible", "true");
                }

            }
        });
    </script>
</body>

</html>
