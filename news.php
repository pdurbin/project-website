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
            <div class="headerimage"><img src="./img/newsbg-mobil.png"></div>
            <div class="background2">
                <div class="team">
                    <p>News</p>
                    <p>You can <a class="underline" href="#newslettersignup">sign up for our Newsletter</a> 
                        to receive regular updates. You can also 
                        <a class="underline" href="https://twitter.com/ok_maps" target="_blank">follow us on Twitter</a> and <a class="underline" href="https://facebook.com/OKMaps" target="_blank">Facebook</a>.
                    </p>
                </div>
            </div>
            
            <div class="newscollection">


                <article class="newsitem">
                    <a name="know-center-joins-okmaps-as-team-member" class="anchor"></a>

                    <img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/knowcenter.jpg">
                    <div class="newsitem-text">
                        <time datetime="2017-02-20">20 February 2018</time>
                        <h3 class="newsitem-headline">Know-Center joins the Open Knowledge Maps core team</h3>
                        <p class="newsitem-p">
                            We are happy to announce that <a href="https://know-center.at/" class="underline" target="_blank">Know-Center</a> has joined the <a href="https://openknowledgemaps.org/team#team/" class="underline" target="_blank">Open Knowledge Maps core team</a> as our very first organizational member. Know-Center will support Open Knowledge Maps with a considerable contribution allowing us to cover our operational costs and grow as an independent organization. This is the next step in what has been a longstanding partnership between the two organizations. Peter Kraker, founder and chairman of Open Knowledge Maps, laid the foundations for the organization whilst at Know-Center, and Know-Center has been a strong partner and advocate ever since.
                            <br>
                            <br>Stefanie Lindstaedt, CEO of Know-Center, says: 
                                <blockquote>"At Know-Center, knowledge transfer is a key part of our mission. Open Knowledge Maps is a revolutionary tool in this regard, a window into science. Through this window, researchers, practitioners and citizens can explore the wealth of scientific knowledge in a much better way than before. We are excited to be a part of this unique open science endeavor."</blockquote>
                        </p>
                        <p class="newsitem-p">
                        Peter Kraker, founder and chairman of Open Knowledge Maps, adds: 
                                <blockquote>"We are thrilled to take our partnership with Know-Center to the next level. If recent market entrances are any indication, discovery will be one of the key areas of the digital research infrastructure. Having Know-Center on board goes a long way in making Open Knowledge Maps a sustainable building block of the open science ecosystem."</blockquote>
                        </p>
                        <p class="newsitem-p">
                            In our joint effort to become ever more open, we have also agreed to switch the license of the open source knowledge mapping framework <a href="https://github.com/OpenKnowledgeMaps/Headstart" class="underline" target="_blank">Head Start</a> from LGPL to MIT.</p>
                        </p>
                        <a class="newsitem-button" href="https://know-center.at/" target="_blank">about Know-Center</a>
                    </div>
                </article>
            </div>

            <?php
            $TIMELINE_ID = "842456314890584064";
            $FEEBDACK_TITLE = "Twitter Stream";
            include($COMPONENTS_PATH . 'twitterstream.php');
            ?>
            
             <div class="newscollection">


                <article class="newsitem">
                    <a name="stayupdated" class="anchor"></a>

                    <a href="https://www.openknowledgemaps.org/" 
                       target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/happynewyear.png"></a>
                    <div class="newsitem-text">
                        <time datetime="2017-01-09">9 January 2018</time>
                        <h3 class="newsitem-headline">How to stay up-to-date in your research field</h3>
                        <p class="newsitem-p">
                            2.5 million new research papers are published each year. That makes staying up-to-date a hard task - and it keeps you from doing actual research.
                            <br>
                            <br>But did you know that you can easily keep yourself updated using Open Knowledge Maps? Just select the option “Most recent” in the “Refine your search” section. Our award-winning software then creates a knowledge map based on the 100 most recent documents for your search term. That way you get an instant overview of the hottest topics in your field.
                            <br>
                            <br><a href="https://openknowledgemaps.org" target="_blank"><img src="https://openknowledgemaps.org/img/newsletter/mostrecent.png" alt="Screen shot of how to select the most recent publications"></a>
                            <br>
                            <br>Let Open Knowledge Maps help you get a head start on your literature research in 2018.
                        </p>
                        <a class="newsitem-button" href="https://www.openknowledgemaps.org/" target="_blank">Get started now!</a>
                    </div>
                </article>
            </div>

            <div class="newscollection">


                <article class="newsitem">
                    <!-- CHANGE BG IMAGE HERE-->
                    <div class="newsitem-text">
                        <time datetime="2017-01-09">9 January 2018</time>
                        <h3 class="newsitem-headline">Open Knowledge Maps joins two important open science networks</h3>
                        <p class="newsitem-p">
                            We're proud to announce that we have become a member of the Leibniz Research Alliance Science 2.0 and the Open Access Network Austria!
                            <br>
                            <br>The <a href="http://leibniz-science20.de" class="underline" target="_blank">Leibniz Research Alliance Science 2.0</a> examines the effects of Science 2.0 and open science on science and society. The Research Alliance is incorporated in the Leibniz Association and coordinated by ZBW – Leibniz Information Centre for Economics. Its mission is currently advanced by 37 association partners from different disciplines.
                            <br>
                            <br>The <a href="http://oana.at" class="underline" target="_blank">Open Access Network Austria (OANA)</a> develops recommendations for open access and open science activities of Austrian research institutions, funding organisations and research policies. OANA has over 60 member organisations and is a joint activity under the organisational umbrella of the Austrian Science Fund (FWF) and Universities Austria (UNIKO).
                            <br>
                            <br>"By joining OANA and the Research Alliance Science 2.0 we're showing our ongoing commitment to supporting and advancing open science," says Peter Kraker, founder and chairman of Open Knowledge Maps.
                        </p>
                        <a class="newsitem-button" href="https://openknowledgemaps.org/team#networks" target="_blank">Our network memberships</a>
                    </div>
                </article>
            </div>

                <div class="newscollection">


                    <article class="newsitem">
                        <a name="oaweek2017" class="anchor"></a>

                        <a href="https://www.oaweek.org/" 
                           target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/oaweek.png"></a>
                        <div class="newsitem-text">
                            <time datetime="2017-10-23">23 October 2017</time>
                            <h3 class="newsitem-headline">Meet us at FORCE2017 &amp; other #OAWeek events</h3>
                            <p class="newsitem-p">
                                In celebration of the <a href="http://openaccessweek.org/" class="underline" target="_blank">International Open Access Week</a>, OKMaps team members will participate in various events centered around open science and open knowledge - and we would love to meet you there!
                                <br>
                                <br>Join us at <a href="https://www.force11.org/event/force2017-berlin-oct-25-27" class="underline" target="_blank">FORCE2017</a>, where we will host a demo on Thursday and a scientific scavenger hunt on Friday. Or catch up with our workshop at <a href="https://eca.usal.es/" class="underline" target="_blank">Ecosystems of Open Knowledge (ECA 2017)</a>, the largest library-related event in Spain, at University of Salamanca.
                                <br>
                                <br>In addition, you will find us at <a href="https://www.wikidata.org/wiki/Wikidata:WikidataCon_2017" class="underline" target="_blank">WikidataCon</a> and <a href="https://mozillafestival.org/" class="underline" target="_blank">MozFest</a>. We are looking forward to discussing open science and discovery of research findings with you.
                            </p>
                            <a class="newsitem-button" href="https://www.oaweek.org/" target="_blank">about Open Access Week</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">


                    <article class="newsitem">
                        <!-- CHANGE BG IMAGE HERE-->
                        <div class="newsitem-text">
                            <time datetime="2017-10-23">23 October 2017</time>
                            <h3 class="newsitem-headline">Thank you for support!</h3>
                            <p class="newsitem-p">
                                In the past months, many of you have supported us in a wide variety of ways: by promoting Open Knowledge Maps in your communities, by posting maps on social media, or by providing feedback and suggestions in our survey (107 responses!). As a result, Open Knowledge Maps is growing and reaching more and more people around the world. We were also honored to receive the Open Minds Award by the Austrian open source community.
                                <br>
                                <br>
                                Thank you so much for your outstanding support and keep spreading the word of open discovery!
                            </p>
                            <a class="newsitem-button" href="https://openknowledgemaps.org/index#supportus" target="_blank">How to support OKMaps</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">


                    <article class="newsitem">
						<a name="openminds-award" class="anchor"></a>

                        <a href="https://www.openminds.at/" 
                           target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/openmindsaward.png"></a>
                        <div class="newsitem-text">
                            <time datetime="2017-09-27">27 September 2017</time>
                            <h3 class="newsitem-headline">Open Knowledge Maps wins Open Minds Award</h3>
                            <p class="newsitem-p">
                                We are honored to announce that Open Knowledge Maps has won the Open Minds Award, 
                                the Austrian Open Source Award, in the category Open Software 🎉
                                <br><br>The award considers open source projects, which enable widespread participation and collaboration.
                                The jury of <a href="https://www.linuxwochen.at" href="_blank" style="text-decoration: underline">Linuxwochen Austria</a> acknowledged Open Knowledge Maps especially for 
                                enabling users to see the big picture of scientific findings.
                                <br><br>Peter Kraker, founder and chairman of Open Knowledge Maps, accepted the award 
                                on behalf of the project team on Tuesday evening. In his acceptance speech, Peter emphasized the 
                                collaborative and voluntary nature of the project and thanked the international Open Knowledge Maps community - our team, 
                                advisors, partners, and users  - for their incredible effort and support.

                                <br><br>A big shout out to all our supporters - THANK YOU!
                            </p>
                            <a class="newsitem-button" href="https://www.openminds.at/" target="_blank">about Open Minds Award</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">


                    <article class="newsitem">
                        <!-- CHANGE BG IMAGE HERE-->  

                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMwTfyoIUCHHtYeyD5k-yfi3Hb_Uaza3R4pY3XvnKMwl8lBg/viewform" 
                           target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/survey.png"></a>
                        <div class="newsitem-text">
                            <time datetime="2017-09-18">18 September 2017</time>
                            <h3 class="newsitem-headline">Your feedback on Open Knowledge Maps</h3>
                            <p class="newsitem-p">
                                We want to improve your experience with Open Knowledge Maps - and for that, we need your feedback! We invite you to fill in a short survey (5-9 mins), which we have created in collaboration with FH JOANNEUM - University of Applied Sciences in Graz, Austria.
                                <br>
                                <br>
                                Please click the button below to get to the survey and have your say in the future development of Open Knowledge Maps.
                            </p>
                            <a class="newsitem-button" href="https://docs.google.com/forms/d/e/1FAIpQLSeMwTfyoIUCHHtYeyD5k-yfi3Hb_Uaza3R4pY3XvnKMwl8lBg/viewform" target="_blank">
                                Take our survey</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">
                    <a name="okmaps-joins-aakc" class="anchor"></a>
                    <article class="newsitem">
                        <!-- CHANGE BG IMAGE HERE-->  

                        <div class="newsitem-text">
                            <time datetime="2017-09-18">18 September 2017</time>
                            <h3 class="newsitem-headline">Nomination for the Open Minds Award</h3>
                            <p class="newsitem-p">
                                We are honored to be nominated for the Open Minds Award, the Austrian Open Source Award. 
                                The award considers open source projects, which enable widespread participation and collaboration. Thanks to you, the Open Knowledge Maps team &amp; community, for your continued support!
                            </p>
                            <a class="newsitem-button" href="https://www.openminds.at/" target="_blank">about Open Minds Award</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">


                    <article class="newsitem">
                        <!-- CHANGE BG IMAGE HERE-->  

                        <a href="https://openknowledgemaps.org/#search" target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/sharing.png"></a>
                        <div class="newsitem-text">
                            <time datetime="2017-09-06">06 September 2017</time>
                            <h3 class="newsitem-headline">Share your favorite maps with the world</h3>
                            <p class="newsitem-p">
                                A major update to Open Knowledge Maps makes it much easier for you to share your favorite maps with others and jointly discover amazing research. It's simple: click on the share buttons next to each map to post it to a social media service of your choice - including a snapshot of the actual map.
                                <br>
                                <br>
                                In addition, we've improved the quality of our maps and the usability of our website. So we invite you to visit the all-new Open Knowledge Maps to re-search old favorites and investigate new topics!

                            </p>
                            <a class="newsitem-button" href="https://openknowledgemaps.org/#search" target="_blank">create and share</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">
                    <a name="okmaps-joins-aakc" class="anchor"></a>
                    <article class="newsitem">
                        <!-- CHANGE BG IMAGE HERE-->  

                        <div class="newsitem-text">
                            <time datetime="2017-09-06">06 September 2017</time>
                            <h3 class="newsitem-headline">Open Knowledge Maps signs Memorandum of Understanding with Citizen Science Network Austria</h3>
                            <p class="newsitem-p">
                                We are honored to partner with Citizen Science Network Austria to 
                                support citizen science as an inclusive approach to knowledge creation. 
                                This emphasizes our strong commitment to improving visibility of scientific 
                                findings for science and society alike.
                            </p>
                            <a class="newsitem-button" href="http://citizen-science.at" target="_blank">about Citizen Science Network Austria</a>
                        </div>
                    </article>
                </div>

                <div class="newscollection">


                    <article class="newsitem">
                        <!-- CHANGE BG IMAGE HERE-->  

                        <a href="https://openknowledgemaps.org/#search" target="_blank"><img style="width:100%;" src="https://openknowledgemaps.org/img/newsletter/cool.png"></a>
                        <div class="newsitem-text">
                            <time datetime="2017-06-12">12 June 2017</time>
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
                            <time datetime="2017-06-12">12 June 2017</time>
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



            <span class="anchor" id="newslettersignup"></span>
            <?php include($COMPONENTS_PATH . 'newsletter.php'); ?>
            <?php include($COMPONENTS_PATH . 'footer.php'); ?>