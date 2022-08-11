@section('content')
<div class="dashLeft-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="title">
                <h5>administrator</h5>
                <h2>Hello {{$user['name']}}</h2>
            </div>
            <div class="adminCounts">
                <div class="adminCountsLeft">
                    <div class="adcBlk">
                        <span>organisaties</span>
                        <p>{{$statics['organisations']}}</p>
                    </div>
                    <div class="adcBlk">
                        <span>locaties</span>
                        <p>{{$statics['locations']}}</p>
                    </div>
                    <div class="adcBlk">
                        <span>gebruikers</span>
                        <p>{{$statics['users']}}</p>
                    </div>
                </div>
                <div class="adminCountsRight">
                    <div class="adcBlk">
                        <span>week activiteiten</span>
                        <ul>
                            <li>leerlingen <div><b>+</b><span>3</span></div></li>
                            <li class="orange">medewerkers <div><b>-</b><span>3</span></div></li>
                            <li>taken <div><b>+</b><span>3</span></div></li>
                            <li>lessen <div><b>+</b><span>3</span></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="dashRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="dashRight-wrps">
                <h4 class="searchWithDate">
                    <div class="search_bar">
                        <div class="mainSearchBox">
                            <input name='tags' id="searcBard" placeholder='Zoek op trefwoorden bijv: Rooster, Joep'>
                        </div>
                        <img class="searchIconItIs" src="{{asset('img/search.svg')}}" alt="">
                    </div>
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
    </div>
</div>
</div>
@endsection
