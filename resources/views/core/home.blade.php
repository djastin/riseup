@include('baseContent.header')

<body>

<ul id="nav">
    <li class="current"><a href="#section-one">Home</a></li>
    <li><a href="#section-two">BAND</a></li>
    <li><a href="#section-three">EVENT</a></li>
    <li><a href="#section-four">MUZIEK</a></li>
    <li><a href="#sep">CONTACT</a></li>
</ul>

<!--<div class="center-me">
    <div class="equalizer"></div>
</div>-->

<div class="g fullpage main-frame" id="section-one">
    <div class="frame-logo">
        <div class="title text-center animated flipInX">#RISE UP<br />ON THE ROCK</div>
        <div class="event-desc mb text-center">23 JANUARI 2015 20:00 U Xpect/Rise Up</div>
    </div>


</div><!--/.G-->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- img -->
        </div>
    </div><!--/row-->
</div><!--/.container-->

<div class="g fullpage" style="background: white;" id="section-two">
    <div class="container">
        <div class="row">
            <h2 class="mb">BAND</h2>

            <div class="col-md-6">
                <p>
                    Wij zijn een band genaamd
                    Rise Up met de volgende muzikanten: Jacco (gitarist), Daniel (drummer),
                    John (bassist), Tyhia (zangeres), Karen (zangeres) en Djastin (toetsenist).
                    <br /><br />
                    Ons repertoire bestaat uit nummers van Planetshakers en Hillsong Y&F. Wij als coverband
                    proberen deze muziek op dezelfde manier over te brengen door te werken met vette dance
                    en gitaar sounds. Deze vorm van muziek zie je
                    terug in de muziek op tv, radio, internet, festivals en andere evenementen,
                    waardoor we proberen mee te gaan met de hedendaagse muziek.
                    <br /><br />

                </p>
            </div><!--/col-md-6-->
            <div class="col-md-6">
                <p>
                    Als band hebben we ook een visie over wat wij willen bereiken met het uitvoeren van optredens, namelijk
                    jonge mensen te bereiken met het geloof.
                    Een geloof van leven, vrijheid, vrede, liefde
                    en waarheid. <br />Jonge mensen die vanuit hun eigen leven willen laten zien hoe mooi het geloof kan zijn.

                    <br /><br />
                    Wij willen
                    laten zien hoe sterk het geloof is in een wereld waar van alles gebeurt. Om te weten waar je mee bezig bent
                    en waarom je op deze aarde bent en welke toekomst er voor jou is. Door de muziek heen stellen we de vraag
                    aan jongeren: Wat is jouw leven? Welke inhoud heeft het? Is het real?
                    <br /><br />
                    Heb je vragen of wil je ons volgen op social media? Ga dan naar onze <a
                            href="https://www.facebook.com/Rise-Up-105880839746221/?fref=ts">facebookpagina</a>.

                        <div class="logo-zuidpoort-container">
                            <div class="logo-zuidpoort"></div>
                        </div>

                </p>
            </div><!--/col-md-6-->

        </div><!--/row-->
    </div><!--/.container-->
</div><!--/.G-->

<div class="g frame-middle frame-event" id="section-three">
    <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="custom-font">Xpect Event 2016<br />
                <div class="event-desc-detail mb">23 JANUARI 2015 20:00 U - Zuidpoort Vlissingen</div>
            </h1>


        </div>
    </div><!--/row-->
</div><!--/.G-->


<div class="g fullpage" style="background: #EFEEEA;" id="section-four">
    <div class="container">
        <div class="row">
            <h2 class="mb text-center">MUZIEK</h2>

            <div class="row centered">
                <div class="col-md-8 col-md-offset-2">

                    <p>Psalm 33:3<br />
                        <i>Zing voor hem een nieuw lied,<br />
                        speel en zing met overgave <br />(NBV)</i>
                        <br /><br />

                        <i>Sing to him a new song<br />
                        play skillfully, and shout for joy <br />(NIV)</i>
                        <br /><br />

                    </p>

                    <p>In september hebben we het nummer Alive van Hillsong Y&F opgenomen met de band.<br /><br /></p>
                </div>
            </div>


            <!-- Audio player -->
            <div class="ap" id="ap">
                <div class="ap-inner">
                    <div class="ap-panel">
                        <div class="ap-item ap--playback">
                            <button class="ap-controls ap-prev-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </button>
                            <button class="ap-controls ap-toggle-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff"  height="30" viewBox="0 0 24 24" width="30" class="ap--play">
                                    <path d="M8 5v14l11-7z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="30" viewBox="0 0 24 24" width="30" class="ap--pause">
                                    <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </button>
                            <button class="ap-controls ap-next-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </button>
                        </div>
                        <div class="ap-item ap--track">
                            <div class="ap-info">
                                <div class="ap-title">Unknown</div>
                                <div class="ap-time">
                                    <span class="ap-time--current">--</span>
                                    <span> / </span>
                                    <span class="ap-time--duration">--</span>
                                </div>

                                <div class="ap-progress-container">
                                    <div class="ap-progress">
                                        <div class="ap-bar"></div>
                                        <div class="ap-preload-bar"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ap-item ap--settings">
                            <div class="ap-controls ap-volume-container">
                                <button class="ap-volume-btn">
                                    <svg fill="#ffffff" height="48" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" class="ap--volume-on">
                                        <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="48" viewBox="0 0 24 24" width="24" class="ap--volume-off">
                                        <path d="M7 9v6h4l5 5V4l-5 5H7z"/>
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                    </svg>
                                </button>
                                <div class="ap-volume">
                                    <div class="ap-volume-progress"><div class="ap-volume-bar"></div></div>
                                </div>
                            </div>
                            <button class="ap-controls ap-repeat-btn">
                                <svg fill="#ffffff"  height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z"/>
                                </svg>
                            </button>
                            <button class="ap-controls ap-playlist-btn">
                                <svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 6H3v2h12V6zm0 4H3v2h12v-2zM3 16h8v-2H3v2zM17 6v8.18c-.31-.11-.65-.18-1-.18-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3V8h3V6h-5z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



        </div><!--/row-->
    </div><!--/.container-->
</div><!--/.G-->



<div id="sep">
    <div class="container sep-container">
        <div class="row centered">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="custom-font">empowering generations<br /> to win generations</h1>
            </div>
        </div><!--/row-->
    </div><!--/container-->
</div><!--/.sep-->

@include('baseContent.footer')
@include('baseContent.scripts')


</body>
</html>
