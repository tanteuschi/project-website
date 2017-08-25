<?php include 'config.php' ?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <base href="<?php echo $SITE_URL ?>">
        <?php $title = "News - Open Knowledge Maps"; ?>
        <?php include($COMPONENTS_PATH . 'head_bootstrap.php'); ?>
        <?php include($COMPONENTS_PATH . 'head_standard.php'); ?>
        <?php include($COMPONENTS_PATH . 'head_headstart.php') ?>

    </head>
    <body class="updates">

        <?php include($COMPONENTS_PATH . 'header.php'); ?>


        <div id="news">  

            <div class="background2">
                <div class="team">
                    <p>News</p>
                    <p>You can <a class="underline" href="index#newsletter">sign up for our Newsletter</a> 
                        to receive regular updates. You can also 
                        <a class="underline" href="https://twitter.com/ok_maps" target="_blank">follow us on Twitter</a>.
                    </p>
                </div>
            </div>
            <?php
            $TIMELINE_ID = "842456314890584064";
            $FEEBDACK_TITLE = "Twitter Stream";
            include($COMPONENTS_PATH . 'twitterstream.php');
            ?>

            <div class="newscollection">
                

                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  

                    <a href="https://openknowledgemaps.org/#search" target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/cool.png"></a>
                    <div class="newsitem-text">
                        <time datetime="2017-05-07">12 June 2017</time>
                        <h3 class="newsitem-headline">It all started at #mozsprint...</h3>
                        <p class="newsitem-p">
                                During Mozilla's Global Sprint on June 1st & 2nd, 
                                the Open Knowledge Maps team got together to improve 
                                the quality and usability of our knowledge maps. 
                                The sprint continued into last week and after much polishing, 
                                we have now released the new version on our site. Enhancements 
                                include improved naming and clustering as well as a higher 
                                visibility of open access papers.
                        </p>
                        <a class="newsitem-button" href="https://openknowledgemaps.org/#search" target="_blank">try it out now</a>
                    </div>
                </article>
            </div>
            
            <div class="newscollection">
                <a name="okmaps-joins-aakc" class="anchor"></a>
                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  

                    <div class="newsitem-text">
                        <time datetime="2017-05-07">12 June 2017</time>
                        <h3 class="newsitem-headline">Open Knowledge Maps joins Annotating All Knowledge Coalition</h3>
                        <p class="newsitem-p">
                                We are honored to join Annotating All Knowledge, 
                                a coalition of more than 60 organisations aiming to 
                                create an open annotation layer over all scholarly knowledge. 
                                At Open Knowledge Maps, we support this goal, because we believe 
                                that open and collaborative processes will change the way we explore 
                                and discover research. As a first measure, we have enabled open annotation 
                                of all PDFs within our interface by integrating Hypothes.is into our 
                                "Preview PDF" window.
                        </p>
                        <a class="newsitem-button" href="https://hypothes.is/annotating-all-knowledge/" target="_blank">about the coalition</a>
                    </div>
                </article>
            </div>

            
            
            <div class="newscollection">

                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  

                    <a href="https://re-publica.com/en/17/session/open-knowledge-maps-visual-interface-worlds-scientific-knowledge" target="_blank"><img style="width:100%;" src="./img/newsletter/republica2.png"></a>
                    <div class="newsitem-text">
                        <time datetime="2017-05-07">7 May 2017</time>
                        <h3 class="newsitem-headline">Meet us at re:publica 2017</h3>
                        <p class="newsitem-p">
                                Open Knowledge Maps is coming to Berlin again - this time for #rp17. With more than 8,000 participants from around the world, re:publica is one of 
                                the largest conferences on digital culture. We are looking forward to connecting to a diverse set of communities and to meeting new and old friends.


                                If you're at the conference, don't miss our lightning talk on Monday, May 8 at 4:30pm.

                        </p>
                        <a class="newsitem-button" href="https://re-publica.com/en/17/session/open-knowledge-maps-visual-interface-worlds-scientific-knowledge" target="_blank">our session at re:publica</a>
                    </div>
                </article>
            </div>

            <div class="newscollection">
                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  

                    <a href="https://openknowledgemaps.org" target="_blank"><img style="width:100%;" src="./img/newsletter/baseintegration.png"></a>
                    <div class="newsitem-text">
                        <time datetime="2017-03-22">22 March 2017</time>
                        <h3 class="newsitem-headline">New: Visualize a research topic based on 100 million scientific documents</h3>
                        <p class="newsitem-p">
                            We are happy to announce that Open Knowledge Maps is now connected to one of the largest academic search engines in the world: BASE.<br><br>

                                For the first time you are able to visualize a research topic in any discipline. In addition, you can now search within different types of resources, including datasets and software. We would like to thank the <a href="https://www.base-search.net/about/en/about_team.php?menu=2" target="_blank">BASE team</a> for their outstanding support in making this happen!<br><br>

                                We have also spent a lot of time improving the naming of the sub-areas to make the concepts in a field more visible - which means that this update improves our existing PubMed integration too.<br><br>

                                As always, we welcome any feedback you may have! 

                                </p>
                                <a class="newsitem-button" href="http://openknowledgemaps.org/" target="_blank">Try it out now!</a>
                    </div>
                </article>
            </div>

            <div class="newscollection">
                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  

                    <a href="https://vimeo.com/207449056" target="_blank"><img style="width:100%;" src="./img/newsletter/openscienceconference2017.png"></a>
                    <div class="newsitem-text">
                        <time datetime="2017-03-14">14 March 2017</time>
                        <h3 class="newsitem-headline">Meet us at the Open Science Barcamp &amp; Conference in Berlin</h3>
                        <p class="newsitem-p">
                            Open Knowledge Maps is coming to Berlin this March with a big surprise up the sleeves.<br><br>
                            Make sure to visit our poster during the poster session or talk to us at the barcamp, for which we have proposed a session. 
                            We will be happy to discuss all things OKMaps and to demonstrate 
                            the latest and greatest features. We will also be revealing a big surprise&nbsp;🎉 So join us from March 20 to 22! 

                        </p>
                        <a class="newsitem-button" href="http://www.open-science-conference.eu/" target="_blank">about Open Science Conference 2017</a>
                    </div>
                </article>
            </div>

            <div class="newscollection">
                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  
                    <a href="//openknowledgemaps.org" target="_blank"><img style="width:100%;" src="./img/newsletter/newsthankyou2.jpg"></a>
                    <div class="newsitem-text">
                        <time datetime="2016-12-16">16 Dezember 2016</time>
                        <h3 class="newsitem-headline">A BIG THANK YOU to our community!</h3>
                        <p class="newsitem-p">
                                Great things have happened following our launch of the DOAJ and PubMed 
                                integrations. We saw a broad coverage on the web, including an appearance on the Reddit front 
                                page in early November and an article in c't magazine. More than 44,000 people visited 
                                Open Knowledge Maps in November, and almost 25,000 maps have been created to date.<br><br>
                            We have also introduced Open Knowledge Maps at numerous events including MozFest, OpenCon & OpenCon Berlin, and NetzPat Vienna to name just a few. In total, over 230 people attended our workshops and sessions. The positive feedback was overwhelming and we want to thank our emerging community for their great support. Loads of you have posted great comments, written articles and spread Open Knowledge Maps in your respective communities, posted issues and ideas on Github, or become part of the team and advisory board. A BIG THANK YOU! We are happy to see everyone getting involved and we are also thinking about new ways to make it even easier for you to be part of the Open Knowledge Maps community in the future. Together we can revolutionize discovery!
                        </p>
                    </div>
                </article>
            </div>

            <div class="newscollection">
                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->  
                    <a href="//openknowledgemaps.org/index#search" target="_blank"><img style="width:100%;" src="./img/newsletter/news2-integration.png" ?>"></a>
                    <div class="newsitem-text">
                        <time datetime="2016-11-02">2 November 2016</time>
                        <h3 class="newsitem-headline">PubMed and DOAJ integration is here!</h3>
                        <p class="newsitem-p">
                            Over the summer, we have been working hard to provide you with visualizations that 
                                cover broader content sources. Now, our integration of PubMed and the Directory of 
                                Open Access Journals (DOAJ) is finally here.<br><br>
                            This means that you are now able to search 
                            within more than 28 million articles. In addition, we have completely overhauled our 
                            design and improved the user experience considerably - including the integration of 
                            the open annotation software Hypothes.is in our PDF preview. Try it out and let us 
                            know what you think!  
                        </p>
                    </div>
                </article>
            </div>


        <div class="newscollection">
            <article class="newsitem">
                <!-- CHANGE BG IMAGE HERE-->  
                <a href="https://vimeo.com/186403196" target="_blank"><img style="width:100%;" src="./img/news.png"></a>





                <div class="newsitem-text">
                    <time datetime="2016-10-23">23 October 2016</time>
                    <h3 class="newsitem-headline">Open Knowledge Maps is coming to MozFest 2016
                    </h3>
                    <p class="newsitem-p">
                        Open Knowledge Maps premiered in an exciting session at Mozilla Festival 2015 - and this year we are returning with an action-packed program including demos 
                            and a hands-on session.<br><br>
                        We will demonstrate how you can use OKMaps not only to discover the literature that you need but also to improve your understanding 
                        of the structure of your research area. Join us in London from October 28 to 30!
                    </p>
                    <a class="newsitem-button" href="https://mozillafestival.org/" target="_blank">About Mozfest</a>

                </div>
            </article>
        </div>
            
        <div class="newscollection">


        <article class="newsitem">
            <!-- CHANGE BG IMAGE HERE-->  
            <a href="https://www.meetup.com/de-DE/Open-Knowledge-Oesterreich/events/234317794/" target="_blank"><img style="width:100%;" src="./img/oaw2.png"></a>
            <div class="newsitem-text">
                <time datetime="2016-10-20">20 October 2016</time>
                <h3 class="newsitem-headline">OK Maps Meetup at the Austrian Academy of Sciences
                </h3>
                <p class="newsitem-p">
                    Our very first meetup in cooperation with OK-AT and &Ouml;AW BAS:IS will take place at the historic Austrian Academy of Sciences on October 24 at 18:00 CEST.<br><br> 
                    Join us for an evening of hands-on action with Open Knowledge Maps &amp; a discussion of literature research strategies and the future of discovery.
                </p>

            </div>
        </article>
    </div>
</div>




<?php include($COMPONENTS_PATH . 'newsletter.php'); ?>
<?php include($COMPONENTS_PATH . 'footer.php'); ?>