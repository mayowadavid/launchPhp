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
                <h2 class="withSubTitle">Organisatie <a href="{{route('settings.index')}}" style="text-decoration: underline;">Jochem van Amsterdam</a></a></h2>
                <div class="r2btn">
                    <button type="button" class="themebtn themebtn2 mr-15">Creëer een display link</button>
                    <button type="button" class="themebtn themebtn2">Log uit</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="orgLft">
                <p class="kindOfTitle">Gegevens</p>
                <label for="#">
                    Organisatie naam
                    <input type="text" placeholder="Email address" name="" id="">
                </label>
                <div class="alltagWrp">
                    <div class="singleTagWrp">
                        <div class="alltagWrp_top">
                            <p class="kindOfTitle">Gegevens</p>
                            <button type="button" class="themebtn themebtn2" data-bs-toggle="modal" data-bs-target="#tgEdit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <ul class="smTags">
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                        </ul>
                        <div>
                            <button type="button" class="Less_more showMoreLessNow"><span>Meer zien</span><span>Minder zien</span></button>
                        </div>
                    </div>
                    <div class="singleTagWrp">
                        <div class="alltagWrp_top">
                            <p class="kindOfTitle">Materialen <span>12</span></p>
                            <button type="button" class="themebtn themebtn2" data-bs-toggle="modal" data-bs-target="#tgEdit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <ul class="smTags">
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                        </ul>
                        <div>
                            <button type="button" class="Less_more showMoreLessNow"><span>Meer zien</span><span>Minder zien</span></button>
                        </div>
                    </div>
                    <div class="singleTagWrp">
                        <div class="alltagWrp_top">
                            <p class="kindOfTitle">Resourches  <span>12</span></p>
                            <button type="button" class="themebtn themebtn2" data-bs-toggle="modal" data-bs-target="#tgEdit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <ul class="smTags">
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                        </ul>
                        <div>
                            <button type="button" class="Less_more showMoreLessNow"><span>Meer zien</span><span>Minder zien</span></button>
                        </div>
                    </div>
                    <div class="singleTagWrp">
                        <div class="alltagWrp_top">
                            <p class="kindOfTitle">Gegevens</p>
                            <button type="button" class="themebtn themebtn2" data-bs-toggle="modal" data-bs-target="#tgEdit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <ul class="smTags">
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                        </ul>
                        <div>
                            <div>
                                <button type="button" class="Less_more showMoreLessNow"><span>Meer zien</span><span>Minder zien</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="singleTagWrp">
                        <div class="alltagWrp_top">
                            <p class="kindOfTitle">Medewerker types <span>12</span> </p>
                            <button type="button" class="themebtn themebtn2" data-bs-toggle="modal" data-bs-target="#tgEdit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <ul class="smTags">
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                        </ul>
                        <div>
                            <button type="button" class="Less_more showMoreLessNow"><span>Meer zien</span><span>Minder zien</span></button>
                        </div>
                    </div>
                    <div class="singleTagWrp">
                        <div class="alltagWrp_top">
                            <p class="kindOfTitle">Les types <span>12</span> </p>
                            <button type="button" class="themebtn themebtn2" data-bs-toggle="modal" data-bs-target="#tgEdit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.333 2.00004C11.5081 1.82494 11.716 1.68605 11.9447 1.59129C12.1735 1.49653 12.4187 1.44775 12.6663 1.44775C12.914 1.44775 13.1592 1.49653 13.3879 1.59129C13.6167 1.68605 13.8246 1.82494 13.9997 2.00004C14.1748 2.17513 14.3137 2.383 14.4084 2.61178C14.5032 2.84055 14.552 3.08575 14.552 3.33337C14.552 3.58099 14.5032 3.82619 14.4084 4.05497C14.3137 4.28374 14.1748 4.49161 13.9997 4.66671L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00004Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <ul class="smTags">
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                            <li>variant</li>
                        </ul>
                        <div>
                            <button type="button" class="Less_more showMoreLessNow"><span>Meer zien</span><span>Minder zien</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="orgRgt">
                <p class="kindOfTitle">Gegevens</p>
                <div class="mngBlk">
                    <div class="mngBlk-top">
                        <div class="mngBlk-top-left">
                            <img src="{{asset('img/brand.png')}}" alt="">
                            <h5>Exact <span>Boekhouding</span></h5>
                        </div>
                        <div class="mngBlk-top-right">
                            <span class="successStatus">Actief</span>
                            <img class="showMoreLessNow" src="{{asset('img/icons/down-arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="mngBlk-bottom">
                        <h5>Beschrijving <span>koppeling </span></h5>
                        <a href="#javascript:void(0)" data-bs-toggle="modal" data-bs-target="#FrmMdl">Bekijk gegevens</a>
                    </div>
                </div>
                <div class="mngBlk">
                    <div class="mngBlk-top">
                        <div class="mngBlk-top-left">
                            <img src="{{asset('img/brand2.png')}}" alt="">
                            <h5>Visma Nmbrs <span>Boekhouding</span></h5>
                        </div>
                        <div class="mngBlk-top-right">
                            <span class="nonClickble" style="color: #8595B6">Activatie wordt verwerkt</span>
                            <img class="showMoreLessNow" src="{{asset('img/icons/down-arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="mngBlk-bottom">
                        <h5>Beschrijving <span>koppeling </span></h5>
                        <a href="#">Bekijk gegevens</a>
                    </div>
                </div>
                <div class="mngBlk">
                    <div class="mngBlk-top">
                        <div class="mngBlk-top-left">
                            <img src="{{asset('img/brand3.png')}}" alt="">
                            <h5>People Inc <span>Boekhouding</span></h5>
                        </div>
                        <div class="mngBlk-top-right">
                            <button type="button" class="themebtn" data-bs-toggle="modal" data-bs-target="#connects">Activeren</button>
                            <img class="showMoreLessNow" src="{{asset('img/icons/down-arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="mngBlk-bottom">
                        <h5>Beschrijving <span>koppeling </span></h5>
                        <a href="#">Bekijk gegevens</a>
                    </div>
                </div>
                <div class="mngBlk">
                    <div class="mngBlk-top">
                        <div class="mngBlk-top-left">
                            <img src="{{asset('img/brand2.png')}}" alt="">
                            <h5>Visma Nmbrs <span>Boekhouding</span></h5>
                        </div>
                        <div class="mngBlk-top-right">
                            <button type="button" class="themebtn">Activeren</button>
                            <img class="showMoreLessNow" src="{{asset('img/icons/down-arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="mngBlk-bottom">
                        <h5>Beschrijving <span>koppeling </span></h5>
                        <a href="#">Bekijk gegevens</a>
                    </div>
                </div>
                <div class="mngBlk">
                    <div class="mngBlk-top">
                        <div class="mngBlk-top-left">
                            <img src="{{asset('img/brand4.png')}}" alt="">
                            <h5>Magister <span>Boekhouding</span></h5>
                        </div>
                        <div class="mngBlk-top-right">
                            <button type="button" class="themebtn">Activeren</button>
                            <img class="showMoreLessNow" src="{{asset('img/icons/down-arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="mngBlk-bottom">
                        <h5>Beschrijving <span>koppeling </span></h5>
                        <a href="#">Bekijk gegevens</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- dasboard-area ENDED -->


<!-- People Inc -->
<div class="modal fade" id="FrmMdl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="FrmMdlLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/icons/close.svg')}}" alt=""></button>
            <div class="modal-body">
                <form action="#" class="pt-5">
                    <h2>People Inc</h2>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="#">
                                    Aantal keer draaien
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value="">Week 1</option>
                                        <option value="">Week 2</option>
                                        <option value="">Week 3</option>
                                    </select>
                                </label>
                                <nav>
                                    <div class="nav" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-Ontvangen-tab" data-bs-toggle="tab" data-bs-target="#nav-Ontvangen" type="button" role="tab" aria-controls="nav-Ontvangen" aria-selected="true">Ontvangen</button>
                                        <button class="nav-link" id="nav-Verstuurd-tab" data-bs-toggle="tab" data-bs-target="#nav-Verstuurd" type="button" role="tab" aria-controls="nav-Verstuurd" aria-selected="false">Verstuurd</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="nav-Ontvangen" role="tabpanel" aria-labelledby="nav-Ontvangen-tab">
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                        <p><b>label:</b> Input</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-Verstuurd" role="tabpanel" aria-labelledby="nav-Verstuurd-tab">  </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="themeBlk">
                                    <span>LOg activiteiten</span>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                    <p><span>11:00</span> log entree</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mdlLink">Koppeling deactiveren</a>
                    </div>
                </form>
                <div class="successPopup d-none">
                    <img src="{{asset('img/Illustration.svg')}}" alt="">
                    <div class="scppErp">
                        <h2>Yay, gelukt!</h2>
                        <p>De locatie is succesvol aangemaakt.</p>
                        <a href="#" class="themebtn">Sluiten</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit tags -->
<div class="modal fade" id="tgEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tgEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/icons/close.svg')}}" alt=""></button>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Materialen</h2>
                            <p>Beheer alle materialen die bij de lokalen toegevoegd kunnen worden.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="#">
                                    <p class="kindOfTitle m-0">Nieuwe toevoegen</p>

                                    <div class="NieuweToevoegen">
                                        <input type="text" value="Locatie a" name="" id="">
                                        <button class="themebtn" type="button">Opslaan</button>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <p class="kindOfTitle mb-1 mt-2">Materialen <span>12</span></p>
                                <label for="#" class="tgsSrc">
                                    <input type="text" name="" id="">
                                    <img src="{{asset('img/search.svg')}}" alt="">
                                </label>
                                <div class="tgdWithEdit">

                                    <ul class="smTags">
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            variant <img src="{{asset('img/icons/pen.svg')}}" alt="">
                                            <div class="tgEditBlk">
                                                <input type="text" value="variant" name="" id="">
                                                <button class="themebtn themebtn2 dlt">Opslaan</button>
                                                <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 4H3.33333H14" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.33301 3.99992V2.66659C5.33301 2.31296 5.47348 1.97382 5.72353 1.72378C5.97358 1.47373 6.31272 1.33325 6.66634 1.33325H9.33301C9.68663 1.33325 10.0258 1.47373 10.2758 1.72378C10.5259 1.97382 10.6663 2.31296 10.6663 2.66659V3.99992M12.6663 3.99992V13.3333C12.6663 13.6869 12.5259 14.026 12.2758 14.2761C12.0258 14.5261 11.6866 14.6666 11.333 14.6666H4.66634C4.31272 14.6666 3.97358 14.5261 3.72353 14.2761C3.47348 14.026 3.33301 13.6869 3.33301 13.3333V3.99992H12.6663Z" stroke="#4E4C59" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete
                                                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Connection -->
<div class="modal fade" id="connects" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="connectsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close-this-popup" data-bs-dismiss="modal" aria-label="Close">sluiten <img src="{{asset('img/icons/close.svg')}}" alt=""></button>
            <div class="modal-body">
                <form action="#">
                    <h2>Activeer koppeling</h2>
                    <p>Vul de benodigde gegevens in om de koppelling met te activeren.</p>
                    <label for="#ckb" class="withCheckBox">
                        Accepteer voorwaarden
                        <input type="checkbox" name="" id="ckb">
                        <span></span>
                    </label>
                    <label for="#" class="slct">
                        Upload verwerkingsdocument
                        <select name="" id="">
                            <option value=""></option>
                            <option value="">opt 1</option>
                            <option value="">opt 2</option>
                            <option value="">opt 3</option>
                        </select>
                    </label>
                    <div class="frmActBtns">
                        <div>
                            <a href="#">Annuleren</a>
                            <button class="themebtn" type="button">Koppeling activeren</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
