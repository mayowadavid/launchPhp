@section('content')
    <div class="dashLeft-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="headerWithActions withGoBACK">
                    <a href="./locaties.html" class="goback">Return</a>
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
                    <h2>School a</h2>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="lktFrmDts">
                    <form action="#" class="lktAFrm notEditing">
                        <p>
                            Kenmerken
                            <button type="button" class="goToEdit eddt">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button type="button" class="goToEdit themebtn d-none">Opslaan</button>
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="#">
                                    Naam
                                    <input type="text" value="Locatie A" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    open
                                    <input type="text" class="IntoTime" value="Open time" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    sluit
                                    <input type="text" class="IntoTime" value="Close Time" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="#">
                                    Telefoon
                                    <input type="text" value="Phone number" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="#">
                                    Email
                                    <input type="text" value="Email address" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="#">
                                    Straatnaam
                                    <input type="text" value="Street name" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    Huisnummber
                                    <input type="text" value="house number" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    Postcode
                                    <input type="text" value="Zip code" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    Stad
                                    <input type="text" value="city" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    Provincie
                                    <input type="text" value="Provincie" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="#">
                                    Land
                                    <input type="text" value="Country" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="svRBk">Locatie verwijderen</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="lktRt">
                    <nav>
                        <div class="nav" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-Locaties-tab" data-bs-toggle="tab" data-bs-target="#nav-Locaties" type="button" role="tab" aria-controls="nav-Locaties" aria-selected="true">Locaties</button>
                            <button class="nav-link" id="nav-Gebruikers-tab" data-bs-toggle="tab" data-bs-target="#nav-Gebruikers" type="button" role="tab" aria-controls="nav-Gebruikers" aria-selected="false">Gebruikers</button>
                            <button class="nav-link" id="nav-Koppelingen-tab" data-bs-toggle="tab" data-bs-target="#nav-Koppelingen" type="button" role="tab" aria-controls="nav-Koppelingen" aria-selected="false">Koppelingen</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-Locaties" role="tabpanel" aria-labelledby="nav-Locaties-tab">
                            <form id="searchform">
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
                                <span style="display:block;text-align:right;margin-top:5px">177 resultaten</span>
                            </form>
                            <div class="tbl">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Nummer</th>
                                        <th>Plekken</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <div class="not_found_data">
                                    <img src="{{asset('img/notFound.png')}}" alt="">
                                    <span>Er zijn (nog) geen locaties</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-Gebruikers" role="tabpanel" aria-labelledby="nav-Gebruikers-tab">...</div>
                        <div class="tab-pane fade" id="nav-Koppelingen" role="tabpanel" aria-labelledby="nav-Koppelingen-tab">...</div>
                    </div>
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
                <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/icons/close.svg')}}" alt=""></button>
                <div class="modal-body">
                    <form action="#" class="withFrm">
                        <h2>Nieuwe lokaal</h2>
                        <p>Maak een nieuwe lokaal voor [location name] aan.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="#">
                                    Naam
                                    <input type="text" value="Locatie A" name="" id="">
                                </label>
                                <label for="#">
                                    Capaciteit
                                    <input type="text" value="Amount" name="" id="">
                                </label>
                                <div class="switches">
                                    Toegankelijkheid
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="#" class="the_Switch">
                                                Rolstoelvriendelijk
                                                <input type="checkbox" checked>
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="#" class="the_Switch">
                                                Slechtziende
                                                <input type="checkbox" checked>
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="#" class="the_Switch">
                                                Slechthorende
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    Variant
                                    <div class="mainSearchBox">
                                        <input name='tags' id="searcBard" value="variant1,variant2" placeholder='Search variant..'>
                                    </div>
                                </label>
                                <label for="#" class="capacityLabel">
                                    Klassen opstelling
                                    <select name="" id="">
                                        <option value="assets/img/scope.png">0-10</option>
                                        <option value="assets/img/scope2.jpg">10-50</option>
                                        <option value="assets/img/scope3.jpg">50-60</option>
                                    </select>
                                    <img src="{{asset('img/scope.png')}}" alt="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <div class="frmActBtns">
                                    <a href="./organisaties.html">Annuleren</a>
                                    <button class="themebtn showSuccess" type="button">Organisatie aanmaken</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="successPopup d-none">
                        <img src="assets/img/Illustration.svg{{asset('js/searchFilter.js')}}" alt="">
                        <div class="scppErp">
                            <h2>Yay, gelukt!</h2>
                            <p>De locatie is succesvol aangemaakt.</p>
                            <a href="./locatie-a.html" class="themebtn">Sluiten</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/searchFilter.js')}}"></script>
    <script>
        CapacityChange()
        function CapacityChange() {
            let Cpct = document.querySelector('.capacityLabel')
            let select = Cpct.querySelector('select')
            let Img = Cpct.querySelector('img')
            select.addEventListener('change', (e) => {
                Img.src = e.target.value;
            })
        }
    </script>
@endpush
