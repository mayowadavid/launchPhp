@section('content')
    <div class="dashLeft-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h5>administrator</h5>
                    <h2>Hello {{$user['name']}}</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="deze-week">
                            <p>Deze week</p>
                            <div class="wkNms">
                                <span class="active">ma <b>2</b></span>
                                <span>di</span>
                                <span>wo</span>
                                <span>do</span>
                                <span>vr</span>
                            </div>
                            <div class="m-sdl">
                                <div class="m-sdl-blk">
                                    <a href="#" class="active">
                                        <span>Teacher</span>
                                        Docent
                                    </a>
                                    <a href="#">
                                        <span>Lesnaam</span>
                                        Groep A
                                    </a>
                                    <a href="#">
                                        <span>Lokaal</span>
                                        11:00 - 15:50
                                    </a>
                                </div>
                                <div class="m-sdl-blk">
                                    <a href="#">
                                        <span>Teacher</span>
                                        P. Foo
                                    </a>
                                    <a href="#">
                                        <span>Lesnaam</span>
                                        Groep A
                                    </a>
                                    <a href="#" class="active">
                                        <span>Lokaal</span>
                                        11:00 - 15:50
                                    </a>
                                </div>
                                <div class="m-sdl-blk">
                                    <a href="#">
                                        <span>Teacher</span>
                                        Docent
                                    </a>
                                    <a href="#">
                                        <span>Lesnaam</span>
                                        Groep A
                                    </a>
                                    <a href="#">
                                        <span>Lokaal</span>
                                        11:00 - 15:50
                                    </a>
                                </div>
                                <div class="m-sdl-blk">
                                    <a href="#">
                                        <span>Teacher</span>
                                        Docent
                                    </a>
                                    <a href="#">
                                        <span>Lesnaam</span>
                                        Groep A
                                    </a>
                                    <a href="#">
                                        <span>Lokaal</span>
                                        11:00 - 15:50
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="adminCounts stskn">
                            <p>Statistieken</p>
                            <div class="adminCountsLeft">
                                <div class="adcBlk">
                                    <span>studenten</span>
                                    <p>{{$statics[0]['students']}}</p>
                                </div>
                                <div class="adcBlk">
                                    <span>groepen</span>
                                    <p>{{$statics[0]['classes']}}</p>
                                </div>
                                <div class="adcBlk">
                                    <span>aanwezigheid</span>
                                    <p>{{$statics[0]['absent']}}</p>
                                </div>
                            </div>
                            <div class="adminCountsLeft">
                                <div class="adcBlk">
                                    <span>medewerkers</span>
                                    <p>{{$statics[1]['employees']}}</p>
                                </div>
                                <div class="adcBlk">
                                    <span>varianten</span>
                                    <p>{{$statics[1]['variants']}}</p>
                                </div>
                                <div class="adcBlk">
                                    <span>aanwezigheid</span>
                                    <p>{{$statics[1]['absent']}}</p>
                                </div>
                            </div>
                            <div class="adminCountsLeft">
                                <div class="adcBlk">
                                    <span>locaties</span>
                                    <p>{{$statics[2]['locations']}}</p>
                                </div>
                                <div class="adcBlk">
                                    <span>lokalen</span>
                                    <p>{{$statics[2]['class_rooms']}}</p>
                                </div>
                                <div class="adcBlk">
                                    <span>bezetting</span>
                                    <p>{{$statics[2]['occupation']}}</p>
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
                            <img class="searchIconItIs" src="assets/img/search.svg" alt="">
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
