<div id="container">
    <nav>
        <ul>
            <li><a href="#">CabinetMed</a></li>
            <!--*******************G. des Comptabiliteés**************************-->
            <li><a href="#">Gestion des comptabilités</a>
                <!-- First Tier Drop Down -->
                <ul>
                    <li><a href="#">G. des impayees</a>
                        <ul>
                            <li><a href="{{ route('Impayee.create') }}">Ajouter</a></li>
                            <li><a href="{{ route('Impayee.index') }}">Lister</a></li>

                        </ul>
                    </li>
                    <li><a href="#">G. des factures</a>
                        <ul>
                            <li><a href="{{ route('facture') }}">Ajouter</a></li>
                            <li><a href="{{ route('listFactures') }}">Lister</a></li>

                        </ul>
                    </li>
                    <li><a href="#">G. des depenses</a>
                        <ul>
                            <li><a href="{{ route('depense') }}">Ajouter</a></li>
                            <li><a href="{{ route('listDepenses') }}">Lister</a></li>

                        </ul>
                    </li>
                </ul>
            </li>

            <!-- *************************G.des Rdvs**************************-->

            <li><a href="#">Gestion des Rdvs</a>
                <!-- First Tier Drop Down -->
                <ul>
                    <li><a href="{{ route('listRDV') }}">Anciens Rdv</a>
                    <li><a href="{{ route('listRDV') }}">Nouveau Rdv</a>


                </ul>
            </li>
            <li><a href="#">Gestion des fiches patients</a>
                <!-- First Tier Drop Down -->
                <ul>
                    <li><a href="{{ route('Fiche_Patient.index') }}">Anciens Patients</a>
                    <li><a href="{{ route('Fiche_Patient.index') }}">Nouveau Patient</a>


                </ul>
            </li>
        </ul>
    </nav>
    @yield('app')
</div>