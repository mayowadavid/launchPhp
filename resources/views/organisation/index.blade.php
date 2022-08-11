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
                    <h2>Organisaties </h2>
                    <button type="button" class="themebtn ResetPopup" data-bs-toggle="modal" data-bs-target="#FrmMdl">Nieuwe organisatie</button>
                </div>
            </div>
            <div class="col-lg-12">
                <form id="searchform">
                    <span>{{ count($organisation) }} {{ (count($organisation) > 1) ? 'resultaten' : 'resultaat' }}</span>
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
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Lokalen</th>
                            <th>Gebruikers</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($organisation as $organisation)
                        <tr>
                            <td><a href="#">{{$organisation['name']}}</a></td>
                            <td><a href="#">{{$organisation['email']}}</a></td>
                            <td><a href="#">{{$organisation['zipcode']}}</a></td>
                            <td><a href="#">{{count($organisation['users'])}}</a></td>
                            <td>
                                <div class="tblActions">
                                    <a href="{{ route('admin.organisation.delete', ['id' => $organisation['id']]) }}"><img src="{{asset('img/icons/trash.svg')}}" alt="delete"></a>
                                    <a href="{{ route('admin.organisation.show', ['id' => $organisation['id']]) }}"><img src="{{asset('img/icons/pen.svg')}}" alt="show"></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- dasboard-area ENDED -->


    <!-- PopUp -->
    <div class="modal fade" id="FrmMdl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="FrmMdlLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/icons/close.svg')}}" alt="close"></button>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.organisation.store') }}" class="withFrm">
                        @csrf
                        <h2>Nieuwe organisatie</h2>
                        <p>Maak een nieuwe organisatie aan. De contactpersoon is de eerste manager van de organisatie.</p>
                        <div class="formSteps firstStep">
                            <div class="step active startStep">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="#">
                                                    Naam
                                                    <input type="text" value="" name="name" id="name">
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="#">
                                                    License ID
                                                    <input type="text" value="" name="code" id="code">
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="#">
                                                    Email
                                                    <input type="text" value="" name="email" id="email">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="#">
                                                    Straatnaam
                                                    <input type="text" value="" name="street" id="street">
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="#">
                                                    Huisnummber
                                                    <input type="text" value="" name="house_number" id="house_number">
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="#">
                                                    Postcode
                                                    <input type="text" value="" name="zipcode" id="zipcode">
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="#">
                                                    Land
                                                    <input type="text" value="" name="country" id="country">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step endStep">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h5>Google</h5>
                                        <label for="#">
                                            Client
                                            <input type="text" value="" name="" id="">
                                        </label>
                                        <label for="#">
                                            Secret
                                            <input type="text" value="" name="" id="">
                                        </label>
                                        <label for="#">
                                            Tenant
                                            <input type="text" value="" name="" id="">
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Azures</h5>
                                        <label for="#">
                                            Client
                                            <input type="text" value="" name="" id="">
                                        </label>
                                        <label for="#">
                                            Secret
                                            <input type="text" value="" name="" id="">
                                        </label>
                                        <label for="#">
                                            Tenant
                                            <input type="text" value="" name="" id="">
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Connector.ID</h5>
                                        <label for="#">
                                            Client
                                            <input type="text" value="" name="" id="">
                                        </label>
                                        <label for="#">
                                            Secret
                                            <input type="text" value="" name="" id="">
                                        </label>
                                        <label for="#">
                                            Tenant
                                            <input type="text" value="" name="" id="">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="frmActBtns withDots">
                                <div>
                                    <ul class="stepDots">
                                        <li class="dt active"></li>
                                        <li class="dt"></li>
                                    </ul>
                                    <button type="button" class="prevNext">Vorige</button>
                                </div>
                                <div>
                                    <a data-bs-dismiss="modal" aria-label="Close" href="#">Annuleren</a>
                                    <button class="themebtn showSuccess" type="submit">Organisatie aanmaken</button>
                                    <button class="themebtn nextStep" type="button">Volgende stap</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if (session()->has('success'))
                        <div class="successPopup d-none">
                            <img src="{{asset('img/Illustration.svg')}}" alt="done">
                            <div class="scppErp">
                                <h2>Yay, gelukt!</h2>
                                @foreach (session('success') as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                                <a data-bs-dismiss="modal" aria-label="Close" href="#" class="themebtn">Sluiten</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
