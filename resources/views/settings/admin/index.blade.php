@section('content')
    <div class="dashLeft-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="title flxTitle">
                    <div>
                        <h5>administrator</h5>
                        <h2>Joshua Londen </h2>
                    </div>
                    <button type="button" class="themebtn themebtn2">Log uit</button>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="lktFrmDts">
                    <form action="#" class="lktAFrm notEditing">
                        <p>
                            Gegevens
                            <button type="button" class="goToEdit eddt">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button type="button" class="goToEdit themebtn d-none">Opslaan</button>
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="#">
                                    Voornaam
                                    <input type="text" value="Joshua " name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="#">
                                    Achternaam
                                    <input type="text" value="Londen" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="#">
                                    Email
                                    <input type="text" value="Email address" name="" id="">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="an_a">Verander wachtwoord</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="lktRt">
                    <div class="lktA-topbar">
                        <button type="button">Administrators</button>
                        <button type="button" class="ResetPopup" data-bs-toggle="modal" data-bs-target="#FrmMdl">Nieuwe account</button>
                    </div>
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
                                <th>Naam</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="withResetTheMultiFuncPopup" data-bs-toggle="modal" data-bs-target="#DataMdl">
                                <td><a href="#">Grant Leal</a></td>
                                <td><a href="#">mailadres@schoolname.com</a></td>
                                <td>
                                    <div class="tblActions">
                                        <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="withResetTheMultiFuncPopup" data-bs-toggle="modal" data-bs-target="#DataMdl">
                                <td><a href="#">Grant Leal</a></td>
                                <td><a href="#">mailadres@schoolname.com</a></td>
                                <td>
                                    <div class="tblActions">
                                        <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="withResetTheMultiFuncPopup" data-bs-toggle="modal" data-bs-target="#DataMdl">
                                <td><a href="#">Grant Leal</a></td>
                                <td><a href="#">mailadres@schoolname.com</a></td>
                                <td>
                                    <div class="tblActions">
                                        <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="withResetTheMultiFuncPopup" data-bs-toggle="modal" data-bs-target="#DataMdl">
                                <td><a href="#">Grant Leal</a></td>
                                <td><a href="#">mailadres@schoolname.com</a></td>
                                <td>
                                    <div class="tblActions">
                                        <a href="#"><img src="{{asset('img/icons/pen.svg')}}" alt=""></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="loadMore">Toon meer..</a>
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
        <div class="modal-dialog" style="max-width: 600px">
            <div class="modal-content">
                <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/close.png')}}" alt=""></button>
                <div class="modal-body">
                    <form action="#" class="withFrm">

                        <div class="formSteps firstStep">
                            <div class="step active startStep">
                                <h2>Nieuw account</h2>
                                <p>De gebruiker ontvangt een email met link om het account te activeren via google Authenticator.</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="#">
                                            Naam
                                            <input type="text" value="Locatie A" name="" id="">
                                        </label>
                                        <label for="#">
                                            Email
                                            <input type="text" value="email.." name="" id="">
                                        </label>
                                        <label for="#">
                                            Role Id
                                            <select name="" id="">
                                                <option value="{{asset('img/scope.png')}}">0-10</option>
                                                <option value="{{asset('img/scope2.jpg')}}">10-50</option>
                                                <option value="{{asset('img/scope3.jpg')}}">50-60</option>
                                            </select>
                                        </label>
                                        <label for="#">
                                            Organisation
                                            <select name="" id="">
                                                <option value="{{asset('img/scope.png')}}">0-10</option>
                                                <option value="{{asset('img/scope2.jpg')}}">10-50</option>
                                                <option value="{{asset('img/scope3.jpg')}}">50-60</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="frmActBtns">
                                            <a href="#">Annuleren</a>
                                            <button class="themebtn nextStep" type="button">Organisatie aanmaken</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="successPopup">
                                    <img src="{{asset('img/popup.png')}}" alt="">
                                    <div class="scppErp">
                                        <h2>Yay, gelukt!</h2>
                                        <p>De locatie is succesvol aangemaakt.</p>
                                        <button class="themebtn nextStep" type="button">Sluiten</button>
                                    </div>
                                </div>
                            </div>
                            <div class="step endStep">
                                <div class="successPopup">
                                    <img src="{{asset('img/popup2.png')}}" alt="">
                                    <div class="scppErp">
                                        <h2>Oh nee!</h2>
                                        <p>Er is iets fout gegaan, probeer het opnieuw!</p>
                                        <button class="themebtn" type="button">Opnieuw proberen</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="DataMdl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="DataMdlLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 600px">
            <div class="modal-content">
                <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/close.png')}}" alt=""></button>
                <div class="modal-body">
                    <form action="#" class="withFrm multiFuncStepHere">
                        <div class="dfltStep">
                            <h2>Administrator</h2>
                            <p>Bewerk de informatie of stel een reset van de Google Authenticator in.</p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="#">
                                        Naam
                                        <input type="text" value="Locatie A" name="" id="">
                                    </label>
                                    <label for="#">
                                        Email
                                        <input type="text" value="email.." name="" id="">
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <div class="frmActBtns withBtns">
                                        <div>
                                            <button class="themebtn themebtn2 connectStep2" type="button">Reset inlog</button>
                                            <button class="themebtn" type="button">Opslaan</button>
                                        </div>
                                        <a href="#" class="connectStep3">Administrator verwijderen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="steps2">
                            <div class="textOnlyPopup step2">
                                <p>Weet je zeker dat je de gebruikers inlog wilt resetten? De gebruiker krijgt een email om het account te heractiveren via Google Authenticator.</p>
                                <button class="themebtn themebtn2 connectStep2" type="button">Gebruikers inlog resetten</button>
                                <button class="themebtn" type="button">Annuleren</button>
                            </div>
                            <div class="step2">
                                <div class="successPopup">
                                    <img src="{{asset('img/Illustration.svg')}}" alt="">
                                    <div class="scppErp">
                                        <h2>Yay, gelukt!</h2>
                                        <p>De locatie is succesvol aangemaakt.</p>
                                        <button class="themebtn" type="button">Sluiten</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="steps3">
                            <div class="textOnlyPopup step3">
                                <p>Weet je zeker dat je de administrator <b>[name lastname]</b> wilt verwijderen?</p>
                                <button class="themebtn themebtn2 connectStep3" type="button">Administrator verwijderen</button>
                                <button class="themebtn" type="button">Annuleren</button>
                            </div>
                            <div class="step3">
                                <div class="successPopup">
                                    <img src="{{asset('img/popup3.png')}}" alt="">
                                    <div class="scppErp">
                                        <h2>Het is gelukt!</h2>
                                        <p>De gebruiker is succcesvol verijwiderd</p>
                                        <button class="themebtn" type="button">Sluiten</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
