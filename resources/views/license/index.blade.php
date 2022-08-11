@section('content')
    <div class="dashLeft-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="headerWithActions">
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
            <div class="col-lg-12">
                <div class="title flxTitle">
                    <h2>Licenties </h2>
                    <button type="button" class="themebtn ResetPopup" data-bs-toggle="modal" data-bs-target="#lcnt">Nieuwe licentie aanmaken</button>
                </div>
            </div>
            <div class="col-lg-12">
                <form id="searchform">
                    <span>{{ count($licenses) }} {{ (count($licenses) > 1) ? 'resultaten' : 'resultaat' }}</span>
                    <div class="mSb" style="position: relative">
                        <input type="text" id="search-bar" autocomplete="off" placeholder="Zoek op locatie of contact.."/>
                        <ul class="output" style="display:none;"></ul>
                        <button type="submit" id="submit">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z" stroke="#005395" stroke-width="1.35" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 14L11.1 11.1" stroke="#005395" stroke-width="1.35" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="tbl">
                    <table>
                        <thead>
                        <tr>
                            <th>Organisatie</th>
                            <th>Middleware</th>
                            <th>Versie</th>
                            <th>Verval datum</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($licenses as $license)
                            <tr>
                                <td><a href="#">{{ $license['organisation_id'] }}</a></td>
                                <td><a href="#">{{ $license['middleware'] }}</a></td>
                                <td><a href="#">{{ $license['version'] }}</a></td>
                                <td><a href="#">{{ $license['valid_till'] }}</a></td>
                                <td><a href="#"><span class="{{ ($license['status']) ? 'successStatus' : 'dangerStatus' }}">{{ ($license['status']) ? 'actief' : 'inactief' }}</span></a></td>
                                <td>
                                    <div class="tblActions">
                                        <a href="{{ route('admin.license.delete', ['id' => $license['id']]) }}"><img src="{{asset('img/icons/trash.svg')}}" alt="delete"></a>
                                        <a href="{{ route('admin.license.show', ['id' => $license['id']]) }}"><img src="{{asset('img/icons/pen.svg')}}" alt="show"></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @empty($licenses)
                    <div class="not_found_data">
                        <img src="{{asset('img/notFound.png')}}" alt="empty">
                        <span>Er zijn (nog) geen licenties</span>
                    </div>
                    @endempty
                    @if(count($licenses) > 10)
                        <a href="#" class="mdlLink text-center mt-5">Toon meer..</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- dasboard-area ENDED -->


    <!-- PopUp -->
    <div class="modal fade" id="lcnt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="lcntLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 1000px">
            <div class="modal-content">
                <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/close.png')}}" alt=""></button>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.license.store') }}" class="mt-4">
                        @csrf
                        <div class="formSteps firstStep">
                            <div class="step active startStep">
                                <h2>Nieuwe licenties aanmaken</h2>
                                <p>Voeg een nieuwe licentie toe.</p>
                                <label for="organisation">
                                    Organisatie
                                    <select name="organisation">
                                        @foreach($organisations as $organisation)
                                            <option value="{{ $organisation['code'] }}">{{ $organisation['code'] . ' - ' . $organisation['name'] }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label for="valid_till">
                                    Verval datum
                                    <input type="date" name="valid_till">
                                </label>
                            </div>
                            <div class="step endStep">
                                <h2>Licentie instellingen</h2>
                                <p>Geef instellingen mee aan de licentie, deze kunnen later nog aangepast worden.</p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Organisaties</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[organisation_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[organisation_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[organisation_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Gebruikers</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[user_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[user_insert]" />Toevoegen<br/>
                                                <input type="checkbox" name="modules[user_update]" />Wijzigen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Uren</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[hours_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[hours_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[hours_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Varianten</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[variant_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[variant_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[variant_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Locaties</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[branch_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[branch_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[branch_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Lokalen</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[classroom_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[classroom_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[classroom_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Lessen</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[lesson_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[lesson_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[lesson_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Groepen</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[group_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[group_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[group_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Taken</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[task_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[task_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[task_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Licenties</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[license_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[license_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[license_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Dashboard</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[dashboard_statics]" />Weergeven
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Rooster</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[schedule_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[schedule_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[schedule_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="lncFtcr">
                                            <p>Toegang tot <b>Marktplaats</b></p>
                                            <ul>
                                                <input type="checkbox" name="modules[marketplace_show]" />Weergeven<br/>
                                                <input type="checkbox" name="modules[marketplace_store]" />Toevoegen/Wijzigen<br/>
                                                <input type="checkbox" name="modules[marketplace_destroy]" />Verwijderen
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frmActBtns withDots justify-content-end">
                                <div>
                                    <a data-bs-dismiss="modal" aria-label="Close" href="#">Annuleren</a>
                                    <button class="themebtn showSuccess" type="submit">Licentie activeren</button>
                                    <button class="themebtn nextStep" type="button">Instellingen toevoegen</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
