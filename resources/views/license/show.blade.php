@section('content')
    <div class="dashLeft-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="headerWithActions withGoBACK">
                    <a href="{{route('admin.license.index')}}" class="goback">Return</a>
                    <div>
                        <div class="search_bar">
                            <div class="mainSearchBox">
                                <input name='tags' id="searcBard" placeholder='Zoek op trefwoorden bijv: Rooster, Joep'>
                            </div>
                            <img class="searchIconItIs hxBtn" src="{{asset('img/search.svg')}}" alt="">
                        </div>
                        <div class="notifHere">
                            <img src="{{asset('img/icons/bell_icon.svg')}}" class="showNotifs hxBtn" alt="">
                            <div class="dashRight-wrps">
                                <h4 class="searchWithDate">
                                    <!-- <div class="search_bar">
                                        <div class="mainSearchBox">
                                            <input name='tags' id="searcBard" placeholder='Zoek op trefwoorden bijv: Rooster, Joep'>
                                        </div>
                                        <img class="searchIconItIs" src="assets/img/search.svg" alt="">
                                    </div> -->
                                    </d> do, 21 Nov 2023
                                </h4>
                                <div class="dashRight-main-wrps">
                                    <div class="clndr">
                                        <div id="datepicker" class="calendar"></div>
                                    </div>
                                    <div class="ntf">
                                        <div class="sideNotifs">
                                            <div class="ntfBlk">
                                                <h5>NOTIFICATIE TYPE</h5>
                                                <p>Melding en redirect naar locatie van zoals rooster en les</p>
                                            </div>
                                            <div class="ntfBlk">
                                                <h5>NOTIFICATIE TYPE</h5>
                                                <p>Melding en redirect naar locatie van zoals rooster en les</p>
                                            </div>
                                            <div class="ntfBlk">
                                                <h5>NOTIFICATIE TYPE</h5>
                                                <p>Melding en redirect naar locatie van zoals rooster en les</p>
                                            </div>
                                            <div class="ntfBlk">
                                                <h5>NOTIFICATIE TYPE</h5>
                                                <p>Melding en redirect naar locatie van zoals rooster en les</p>
                                            </div>
                                        </div>
                                        <a href="#" class="clearAllNtf">Clear all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <b>DO, 18 nov 2023</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="title">
                    <h2 class="d-flex align-items-center">Licentie <span class="{{ ($license['status']) ? 'successStatus' : 'dangerStatus' }}">{{ ($license['status']) ? 'Actief' : 'Inactief' }}</span></h2>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="lktFrmDts lcntDtl">
                    <form action="#" class="lktAFrm notEditing">
                        <p>
                            Details
                            <button type="button" class="goToEdit eddt">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> Bewerken
                            </button>
                            <button type="button" class="goToEdit themebtn d-none">Opslaan</button>
                        </p>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="#">
                                    Organisatie
                                    <input type="text" value="{{ $license['organisation']['name'] }}" readonly>
                                </label>
                                <label for="#">
                                    Verval datum
                                    <input type="date" value="{{ $license['valid_till'] }}" readonly>
                                </label>
                                <label for="#" class="the_Switch">
                                    Status
                                    <input type="checkbox" {{ ($license['status']) ? 'checked' : '' }}>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Organisaties</b></p>
                                            <ul>
                                                <li class="{{ (in_array('organisation_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('organisation_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('organisation_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Gebruikers</b></p>
                                            <ul>
                                                <li class="{{ (in_array('user_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('user_insert', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen</li>
                                                <li class="{{ (in_array('user_update', $modules) ? 'avileable' : 'not_avileable') }}">wijzigen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Uren</b></p>
                                            <ul>
                                                <li class="{{ (in_array('hours_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('hours_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('hours_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Varianten</b></p>
                                            <ul>
                                                <li class="{{ (in_array('variant_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('variant_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('variant_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Locaties</b></p>
                                            <ul>
                                                <li class="{{ (in_array('branch_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('branch_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('branch_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Lokalen</b></p>
                                            <ul>
                                                <li class="{{ (in_array('classroom_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('classroom_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('classroom_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Lessen</b></p>
                                            <ul>
                                                <li class="{{ (in_array('lesson_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('lesson_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('lesson_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Groepen</b></p>
                                            <ul>
                                                <li class="{{ (in_array('group_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('group_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('group_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Taken</b></p>
                                            <ul>
                                                <li class="{{ (in_array('task_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('task_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('task_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Licenties</b></p>
                                            <ul>
                                                <li class="{{ (in_array('license_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('license_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('license_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Dashboard</b></p>
                                            <ul>
                                                <li class="{{ (in_array('dashboard_statics', $modules) ? 'avileable' : 'not_avileable') }}">Statistieken</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Rooster</b></p>
                                            <ul>
                                                <li class="{{ (in_array('schedule_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('schedule_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('schedule_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Marktplaats</b></p>
                                            <ul>
                                                <li class="{{ (in_array('marketplace_show', $modules) ? 'avileable' : 'not_avileable') }}">Weergeven</li>
                                                <li class="{{ (in_array('marketplace_store', $modules) ? 'avileable' : 'not_avileable') }}">Toevoegen/Wijzigen</li>
                                                <li class="{{ (in_array('marketplace_destroy', $modules) ? 'avileable' : 'not_avileable') }}">Verwijderen</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
