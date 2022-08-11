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
                    <h2>Hello Joshua</h2>
                    <button type="button" class="themebtn ResetPopup" data-bs-toggle="modal" data-bs-target="#FrmMdl">Nieuwe locatie</button>
                </div>
            </div>
            <div class="col-lg-12">
                <form id="searchform">
                    <span>177 resultaten</span>
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
                        <tr>
                            <td><a href="./locatie-a.html">School a</a></td>
                            <td><a href="./locatie-a.html">mailadres@schoolname...</a></td>
                            <td><a href="./locatie-a.html">300</a></td>
                            <td><a href="./locatie-a.html">640</a></td>
                            <td>
                                <div class="tblActions">
                                    <a href="#"><img src="{{asset('img/icons/trash.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="./locatie-a.html">School a</a></td>
                            <td><a href="./locatie-a.html">mailadres@schoolname...</a></td>
                            <td><a href="./locatie-a.html">300</a></td>
                            <td><a href="./locatie-a.html">640</a></td>
                            <td>
                                <div class="tblActions">
                                    <a href="#"><img src="{{asset('img/icons/trash.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="./locatie-a.html">School a</a></td>
                            <td><a href="./locatie-a.html">mailadres@schoolname...</a></td>
                            <td><a href="./locatie-a.html">300</a></td>
                            <td><a href="./locatie-a.html">640</a></td>
                            <td>
                                <div class="tblActions">
                                    <a href="#"><img src="{{asset('img/icons/trash.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="./locatie-a.html">School a</a></td>
                            <td><a href="./locatie-a.html">mailadres@schoolname...</a></td>
                            <td><a href="./locatie-a.html">300</a></td>
                            <td><a href="./locatie-a.html">640</a></td>
                            <td>
                                <div class="tblActions">
                                    <a href="#"><img src="{{asset('img/icons/trash.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="./locatie-a.html">School a</a></td>
                            <td><a href="./locatie-a.html">mailadres@schoolname...</a></td>
                            <td><a href="./locatie-a.html">300</a></td>
                            <td><a href="./locatie-a.html">640</a></td>
                            <td>
                                <div class="tblActions">
                                    <a href="#"><img src="{{asset('img/icons/trash.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                </div>
                            </td>
                        </tr>
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
                <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/icons/close.svg')}}" alt=""></button>
                <div class="modal-body">
                    <form action="#" class="withFrm">
                        <h2>Nieuwe locatie</h2>
                        <p>Maak een nieuwe locatie voor [organisation name] aan.</p>
                        <div class="row">
                            <div class="col-lg-6">
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
                                            <input type="time" value="Open time" name="" id="">
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="#">
                                            sluit
                                            <input type="time" value="Close Time" name="" id="">
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="#">
                                            Telefoon
                                            <input type="text" value="+31 6 12345678" name="" id="">
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="#">
                                            Email
                                            <input type="text" value="email@adress.com" name="" id="">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
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
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="frmActBtns">
                                    <a href="./organisaties.html">Annuleren</a>
                                    <button class="themebtn showSuccess" type="button">Organisatie aanmaken</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="successPopup d-none">
                        <img src="{{asset('img/Illustration.svg')}}" alt="">
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
