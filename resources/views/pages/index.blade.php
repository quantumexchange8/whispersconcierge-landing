<x-app-layout>
    <div>
        <!-- screen loader start -->
        <div class="screen-loader"></div>
        <!-- screen loader end -->

        <!-- preload start -->
        <div id="preload">
            <!-- preload status start -->
            <div id="preload-status"></div>
            <!-- preload status end -->
        </div>
        <!-- preload end -->

        <!-- kenburnsy bg start -->
        <div id="kenburnsy-bg">
            <img alt="Background 1" :src="{{ asset('assets/images/background/1.jpg') }}">
            <img alt="Background 2" :src="{{ asset('assets/images/background/2.jpg') }}">
            <img alt="Background 3" :src="{{ asset('assets/images/background/3.jpg') }}">
            <img alt="Background 4" :src="{{ asset('assets/images/background/4.jpg') }}">
        </div>
        <!-- kenburnsy bg end -->

        <!-- curtains start -->
        <div id="curtains"></div>
        <!-- curtains end -->

        <!-- top shade start -->
        <div id="top-shade"></div>
        <!-- top shade end -->

        <!-- preload content start -->
        <div class="preload-content">
        </div>
        <!-- preload content end -->

        <!-- menu start -->
        <nav class="menu">
            <ul class="mainNav">
                <li class="curr">
                    <a class="menu-state active" href="#" id="fire-home"><span class="navNumber">00</span>
                        <span class="navTitle">Home</span><br>
                        Get started
                    </a>
                </li>
                <li>
                    <a class="menu-state" href="#" id="fire-about"><span class="navNumber">01</span>
                        <span class="navTitle">About</span><br>
                        Who we are
                    </a>
                </li>
                <li>
                    <a class="menu-state" href="#" id="fire-services"><span class="navNumber">02</span>
                        <span class="navTitle">Services</span><br>
                        What we do
                    </a>
                </li>
                <li>
                    <a class="menu-state" href="#" id="fire-difference"><span class="navNumber">03</span>
                        <span class="navTitle">Why Us</span><br>
                        Stand Apart
                    </a>
                </li>
                <li>
                    <a class="menu-state" href="#" id="fire-contact"><span class="navNumber">04</span>
                        <span class="navTitle">Contact</span><br>
                        Get in touch
                    </a>
                </li>
            </ul>
        </nav>
        <!-- menu end -->

        <!-- menu mobile start -->
        <nav class="menu-mobile">
            <ul>
                <li>
                    <ul>
                        <li class="lifting-first">
                            <a class="menu-state active" href="#" id="fire-home-mobile">Home</a>
                        </li>
                        <li class="lifting">
                            <a class="menu-state" href="#" id="fire-about-mobile">About</a>
                        </li>
                        <li class="lifting">
                            <a class="menu-state" href="#" id="fire-services-mobile">Services</a>
                        </li>
                        <li class="lifting">
                            <a class="menu-state" href="#" id="fire-difference-mobile">Why Us</a>
                        </li>
                        <li class="lifting">
                            <a class="menu-state" href="#" id="fire-contact-mobile">Contact</a>
                        </li>
                    </ul>
                    <a class="menu-mobile-trigger" href="#"><span class="menu-icon"></span></a>
                </li>
            </ul>
        </nav>
        <!-- menu mobile end -->

        <!-- upper page start -->
        <div class="upper-page current" id="home">
            <!-- center container start -->
            <div class="center-container-home">
                <!-- center block start -->
                <div class="center-block">
                    <!-- borders start -->
                    <div class="borders"></div>
                    <!-- borders end -->
                    <!-- social icons start -->
                    <div class="social-icons-wrapper">
                        <ul class="social-icons">
                            <!-- <li>
                                <a class="fa fa-twitter-square fa-2x" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-facebook-square fa-2x" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus-square fa-2x" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-youtube-square fa-2x" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin-square fa-2x" href="#"></a>
                            </li> -->

                            <!-- <li>
                                <a class="fa fa-instagram fa-2x" href="https://www.instagram.com/whispersconcierge" target="_blank" title="Instagram"></a>
                            </li>
                            <li>
                                <a class="fa fa-facebook-square fa-2x" href="https://www.facebook.com/whispersconcierge" target="_blank" title="Facebook"></a>
                            </li>
                            <li>
                                <a class="fa fa-tiktok fa-2x" href="https://www.tiktok.com/@whispersconcierge" target="_blank" title="TikTok"></a>
                            </li>
                            <li>
                                <a class="fa fa-whatsapp fa-2x" href="https://wa.me/2126XXXXXXXX" target="_blank" title="WhatsApp"></a>
                            </li> -->

                            <li>
                                <a class="fa-brands fa-instagram fa-2x" href="https://www.instagram.com/whispersconcierge" target="_blank" title="Instagram" style="width: 25px; height: 30px;"></a>
                            </li>
                            <li>
                                <a class="fa-brands fa-facebook fa-2x" href="https://www.facebook.com/whispersconcierge" target="_blank" title="Facebook" style="width: 25px; height: 30px;"></a>
                            </li>
                            <li>
                                <a class="fa-brands fa-tiktok fa-2x" href="https://www.tiktok.com/@whispersconcierge" target="_blank" title="TikTok" style="width: 25px; height: 30px;"></a>
                            </li>
                            <li>
                                <a class="fa-brands fa-whatsapp fa-2x" href="https://wa.me/2126XXXXXXXX" target="_blank" title="WhatsApp" style="width: 25px; height: 30px;"></a>
                            </li>

                        </ul>
                    </div>
                    <!-- social icons end -->
                     
                    <!-- upper content start -->
                    <div class="upper-content">
                        <!-- container start -->
                        <div class="container center">
                            <!-- intro wrapper start -->
                            <div id="intro-wrapper">
                                <div class="eight columns column">
                                    <div id="intro-top-line"></div>
                                </div>
                                <!-- <div class="eight columns column">
                                    <div id="intro-top">
                                        Sample
                                    </div>
                                </div> -->
                                <div class="sixteen columns">
                                    <div id="intro-title">
                                        Whispers Concierge
                                    </div>
                                </div>
                                <!-- <div class="sixteen columns">
                                    <div id="intro-subtitle">
                                        sample name
                                    </div>
                                </div> -->
                                <div class="eight columns column">
                                    <!-- teaser start -->
                                    <div id="teaser">
                                        <div id="teaser-text">
                                            <!-- teaser line 1 start -->
                                            <div class="teaser-text-animation active first">
                                                <h3 style="font-size: 12px; display: flex; flex-direction: column; gap: 4px;">
                                                    <span class="teaser-normal" style="align-self: stretch; text-align: left; line-height: 1.25;">
                                                        “Whispers gave us the best week of our lives in Marrakech. From the villa to the firelit desert dinner, everything was flawless.”
                                                    </span>
                                                    <span style="align-self: flex-end;">— Rami A., London</span>
                                                    <!-- <span class="teaser-highlight" style="align-self: flex-end;">— Rami A., London</span> -->
                                                </h3>
                                            </div>
                                            <!-- teaser line 1 end -->
                                            <!-- teaser line 2 start -->
                                            <div class="teaser-text-animation">
                                                <h3 style="font-size: 12px; display: flex; flex-direction: column; gap: 4px;">
                                                    <span class="teaser-normal" style="align-self: stretch; text-align: left; line-height: 1.25;">
                                                        “They secured a table at La Sqala with 4 hours notice. Nobody else could do that. Class act.”
                                                    </span>
                                                    <span style="align-self: flex-end;">— Fatima B., Casablanca</span>
                                                </h3>
                                            </div>
                                            <!-- teaser line 2 end -->
                                            <!-- teaser line 3 start -->
                                            <div class="teaser-text-animation">
                                                <h3 style="font-size: 12px; display: flex; flex-direction: column; gap: 4px;">
                                                    <span class="teaser-normal" style="align-self: stretch; text-align: left; line-height: 1.25;">
                                                        “What made Whispers different was how personal it felt. They knew what I wanted before I did.”
                                                    </span>
                                                    <span style="align-self: flex-end;">— Julien M., Paris</span>
                                                </h3>
                                            </div>
                                            <!-- teaser line 3 end -->
                                        </div>
                                    </div>
                                    <!-- teaser end -->
                                </div>
                                <div class="eight columns column">
                                    <div id="intro-bottom-line"></div>
                                </div>
                            </div>
                            <!-- intro wrapper end -->
                        </div>
                        <!-- container end -->
                    </div>
                    <!-- upper content end -->
                    <!-- launch countdown start -->
                    <div id="countdown-wrapper">
                        <div id="countdown-wrap">
                            <ul id="countdown">
                                <li>
                                    <span id="days-sub">days</span> <input class="knob" data-fgcolor="#fff"
                                        data-height="140" data-max="366" data-min="0" data-readonly="true"
                                        data-skin="tron" data-thickness="0.1" data-width="140" id="days">
                                </li>
                                <li>
                                    <span id="hours-sub">hours</span> <input class="knob" data-fgcolor="#fff"
                                        data-height="140" data-max="24" data-min="0" data-readonly="true"
                                        data-skin="tron" data-thickness="0.1" data-width="140" id="hours">
                                </li>
                                <li>
                                    <span id="mins-sub">minutes</span> <input class="knob" data-fgcolor="#fff"
                                        data-height="140" data-max="60" data-min="0" data-readonly="true"
                                        data-skin="tron" data-thickness="0.1" data-width="140" id="mins">
                                </li>
                                <li>
                                    <span id="secs-sub">seconds</span> <input class="knob" data-fgcolor="#fff"
                                        data-height="140" data-max="60" data-min="0" data-readonly="true"
                                        data-skin="tron" data-thickness="0.1" data-width="140" id="secs">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- launch countdown end -->
                    <!-- newsletter form start -->
                    <div id="subscribe-form">
                        <h4>
                            Subscribe today to<br>
                            receive the latest news
                        </h4>
                        <div id="subscribe-wrapper">
                            <div id="newsletter">
                                <div class="newsletter">
                                    <form action="subscribe.php" id="subscribe" method="post" name="subscribe">
                                        <label class="mail"> E-mail</label> <input
                                            class="subscriberequiredField subscribeemail" id="subscribeemail"
                                            name="subscribeemail" type="text"> <input id="submit" type="submit"
                                            value="SUBSCRIBE">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- newsletter form end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- center block end -->
        </div>
        <!-- upper page end -->
        <!-- about start -->
        <div class="lower-page" id="about">
            <!-- center container start -->
            <div class="center-container">
                <!-- center block start -->
                <div class="center-block">
                    <!-- lower content start -->
                    <div class="lower-content">
                        <!-- about intro start -->
                        <div class="about-intro">
                            <h1>
                                About Us
                            </h1>
                            <h2>
                                Crafting Moments. Curating Luxury. Whispering the Extraordinary.
                            </h2>
                        </div>
                        <!-- about intro end -->
                        <!-- container start -->
                        <div class="container center">
                            <!-- divider left top start -->
                            <div class="sixteen columns">
                                <div class="divider-left-top"></div>
                            </div>
                            <!-- divider left top end -->
                            <!-- divider right top start -->
                            <div class="sixteen columns">
                                <div class="divider-right-top"></div>
                            </div>
                            <!-- divider right top end -->
                            <!-- about full start -->
                            <div class="sixteen columns about-column-full">
                                <p>
                                    Whispers Concierge is not just a service, it's a way of life. Born in Casablanca and shaped by a passion for refined living, Whispers Concierge was created for individuals who demand more than just convenience; they demand meaning, depth, and unforgettable experiences. Our company was founded on a simple but bold philosophy: true luxury is quiet, precise, and deeply personal. While others shout, we whisper with intent, elegance, and excellence. We operate as a discreet yet powerful extension of your lifestyle. Whether you're an international jet setter seeking hidden gems, a family arriving for a long awaited Moroccan escape, or a high-net-worth client in need of trusted local guidance, we are here — not just to assist, but to anticipate, design, and deliver.
                                </p>
                            </div>
                            <!-- about full end -->

                            <!-- about full start -->
                            <div class="sixteen columns about-column-full">
                                <p class="info">
                                    Our Story
                                </p>

                                <p>
                                    Frustrated by the impersonal, transactional nature of traditional concierge offerings in Morocco, we set out to build something entirely different — a boutique operation combining global service standards with genuine Moroccan hospitality.
                                    <br><br>
                                    With a finger on the pulse of both international luxury and local culture, we have cultivated a network that spans the country’s most elusive experiences: from private riads in Marrakech and fireside dinners under desert skies, to VIP access in Casablanca’s elite social circles.
                                    <br><br>
                                    We are more than just facilitators — we are curators of the Morocco few will ever see.
                                </p>
                            </div>
                            <!-- about full end -->
                            <!-- about column 1 start -->
                            <div class="half column about-column">
                            <!-- <span class="awesome"><span class="fa fa-globe"></span></span> -->
                                <span class="awesome"><span class="fa-solid fa-globe"></span></span>
                                <p class="info">
                                    Our Mission
                                </p>
                                <p>
                                    To design, deliver, and elevate personal experiences that go beyond luxury — experiences that feel seamless, soulful, and tailored entirely to you.
                                </p>
                            </div>
                            <!-- about column 1 end -->
                            <!-- about column 2 start -->
                            <div class="half column about-column">
                            <!-- <span class="awesome"><span class="fa fa-leaf"></span></span> -->
                                <span class="awesome"><span class="fa-solid fa-leaf"></span></span>
                                <p class="info">
                                    Our Vision
                                </p>
                                <p>
                                    To become Morocco's most trusted name in luxury concierge services, known for discretion, creativity, cultural fluency, and a relentless commitment to client satisfaction.
                                </p>
                            </div>
                            <!-- about column 2 end -->

                            <!-- about full start -->
                            <div class="sixteen columns about-column-full">
                                <p class="info">
                                    Our Values
                                </p>

                                <p>
                                    <span style="font-size: 16px; font-weight: 500;"><strong>Exclusivity Without Arrogance</strong></span><br>
                                    We offer rare access and bespoke service, while remaining approachable and warm.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Discretion Above All</strong></span><br>
                                    Privacy is sacred. We operate in silence so that your experience can speak volumes.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Local Heart, Global Standard</strong></span><br>
                                    Our roots are Moroccan; our standards are international.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Anticipation Over Reaction</strong></span><br>
                                    The best service is invisible. We think two steps ahead so you never have to.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Human Connection</strong></span><br>
                                    We invest in people — clients, partners, and team alike. We build trust that lasts.
                                </p>
                            </div>
                            <!-- about full end -->

                            <!-- about full start -->
                            <div class="sixteen columns about-column-full">
                                <p class="info">
                                    Who We Serve
                                </p>

                                <p>
                                    <ul>
                                        <li>
                                            Travellers looking for more than tourist traps — those seeking intimacy, authenticity, and access
                                        </li><br>
                                        <li>
                                            Expats & Executives in need of tailored support for daily life, events, or high-profile guests
                                        </li><br>
                                        <li>
                                            Luxury Property Guests & Owners desiring full-spectrum management and five-star support
                                        </li><br>
                                        <li>
                                            Celebrities, Influencers, and VIPs requiring discretion, security, and flawless execution
                                        </li><br>
                                        <li>
                                            Travel Agencies & International Concierges seeking reliable ground partners in Morocco
                                        </li><br>
                                    </ul>
                                </p>
                            </div>
                            <!-- about full end -->

                            <!-- about full start -->
                            <div class="sixteen columns about-column-full">
                                <p class="info">
                                    Our Edge
                                </p>

                                <p>
                                    We don't copy — we craft. Drawing inspiration from the world's finest concierge companies, we take what works globally and reinterpret it through a uniquely Moroccan lens. Our team lives and breathes service — but not the stiff, scripted kind. Ours is intuitive, intelligent, and above all, human.
                                    <br><br>
                                    With Whispers Concierge, nothing is off the shelf. Everything is yours.
                                </p>
                            </div>
                            <!-- about full end -->

                            <!-- divider left bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-left-bottom"></div>
                            </div>
                            <!-- divider left bottom end -->
                            <!-- divider right bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-right-bottom"></div>
                            </div>
                            <!-- divider right bottom end -->
                        </div>
                        <!-- container end -->
                        <!-- closer start -->
                        <div class="fire-closer">
                            <a class="menu-state" href="#" id="fire-about-closer"><img alt="Closer" src="assets/images/closer.png"></a>
                        </div>
                        <!-- closer end -->
                    </div>
                    <!-- lower content end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- center block end -->
        </div>
        <!-- about end -->
        <!-- services start -->
        <div class="lower-page" id="services">
            <!-- center container start -->
            <div class="center-container">
                <!-- center block start -->
                <div class="center-block">
                    <!-- lower content start -->
                    <div class="lower-content">
                        <!-- services intro start -->
                        <div class="services-intro">
                            <h1>
                                Whispers Concierge: Unveiling Unforgettable Experiences
                            </h1>
                        </div>
                        <!-- services intro end -->
                        <!-- container start -->
                        <div class="container center">
                            <!-- divider left top start -->
                            <div class="sixteen columns">
                                <div class="divider-left-top"></div>
                            </div>
                            <!-- divider left top end -->
                            <!-- divider right top start -->
                            <div class="sixteen columns">
                                <div class="divider-right-top"></div>
                            </div>
                            <!-- divider right top end -->
                            <!-- services full start -->
                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    Our Promise
                                </p>
                                <p>
                                    At Whispers Concierge, we believe luxury is not a product — it is an experience. Rooted in the heart of Casablanca and serving elite clientele across Morocco and beyond, Whispers Concierge is your gateway to a world curated with intention, discretion, and distinction. We exist to deliver the extraordinary — with a personal touch that transcends expectation. Whether you’re visiting for a weekend or living in Morocco year-round, our mission is to simplify your life, enrich your moments, and unlock the rarest experiences the region has to offer.
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        We pride ourselves on:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Uncompromising discretion</li>
                                            <li>Authentic Moroccan and international luxury</li>
                                            <li>Bespoke experiences crafted to your personality and lifestyle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- services full end -->
                             
                            <div class="sixteen columns">
                                <p class="info">Our Comprehensive Suite of Services</p>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    General Concierge Services
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        Our core concierge offering ensures that every aspect of your daily life and travel needs is handled seamlessly:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Lifestyle Management: Scheduling, errands, and day-to-day logistics handled with grace and professionalism</li>
                                            <li>Travel Planning & Coordination: Flights, private jets, ground transport, visa support, and itinerary planning</li>
                                            <li>Event Ticketing: VIP access to concerts, sporting events, galas, and cultural exhibitions</li>
                                            <li>Personal Shopping: From haute couture to rare collectables, we locate and deliver the world's finest</li>
                                            <li>Errand Services: Need something picked up, returned, or managed? We handle it without fuss</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    Exclusive Dining and Nightlife
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        Dine and party like royalty, without lifting a finger:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Priority Restaurant Reservations at Casablanca's and Marrakech's most exclusive venues</li>
                                            <li>Private Dining Experiences curated in secret locations, riads, villas or your holiday home</li>
                                            <li>Nightclub Access & VIP Tables in Morocco's top nightlife destinations — with bottle service, security, and dedicated host</li>
                                            <li>Chef's Table Events with tasting menus, wine pairings, and direct access to top culinary minds</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    Curated Cultural Experiences
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        We introduce clients to the soul of Morocco, with experiences you won't find on TripAdvisor:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Private Tours: Custom-guided excursions through souks, medinas, imperial cities, and UNESCO heritage sites</li>
                                            <li>Gallery & Artisan Access: Studio visits, art walks, and behind-the-scenes sessions with Morocco's top creatives</li>
                                            <li>Authentic Moroccan Activities: Hammam rituals, Moroccan tea ceremonies, cooking classes, and Berber weaving workshops</li>
                                            <li>Spiritual Journeys: Sufi experiences, guided meditations in the mountains, and wellness retreats</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    Adrenaline Experiences
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        For those who seek the thrill of adventure:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Sahara Desert Safaris: Private luxury camps, dune buggies, camel treks, and fire-lit Berber nights</li>
                                            <li>Water Sports: Jet-skiing, yachting, paddleboarding, and deep-sea fishing along the Atlantic coast</li>
                                            <li>Mountain Excursions: Guided hikes, off-road 4x4 adventures, and skiing in the Atlas Mountains</li>
                                            <li>Hot Air Balloon Rides over Marrakesh at sunrise — with Champagne breakfast upon landing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    Premium Vacation Rental and Holiday Homes
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        Access the finest private residences in Morocco — with full-service management:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Exclusive Villas & Riads across Casablanca, Marrakech, Tangier, Rabat, Essaouira, and beyond</li>
                                            <li>Properties with Personality: Each home is vetted for design, comfort, and location — from modern penthouses to traditional palaces</li>
                                            <li>Luxury Amenities: Private pools, spas, staff on hand, secure entry, entertainment systems, and more</li>
                                            <li>Flexible Stays: Short-term, medium-term, or bespoke retreat packages tailored to your travel goals</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    Bespoke Services and Add-ons
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        Enhance your stay or experience with signature lifestyle services:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Private Chefs & Cooks: Daily meals, fine dining events, or local family-style spreads</li>
                                            <li>Wellness & Beauty: On-call masseuse, facialists, hairstylists, and personal trainers</li>
                                            <li>Nannies & Childcare: Fully vetted bilingual nannies, baby gear, and family-friendly activity planning</li>
                                            <li>Security & Drivers: Executive protection, VIP escorts, and multilingual chauffeurs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sixteen columns services-column-full">
                                <p class="info">
                                    We Studied the Best
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        We studied the best! Research and Inspiration from Top Concierge Companies and took note of what makes them shine:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Proactive Service: We anticipate, not just react</li>
                                            <li>Lifestyle Intelligence: We learn your tastes over time for increasingly personal recommendations</li>
                                            <li>Exclusive Partnerships: Like our competitors, we prioritise relationships that open rare doors</li>
                                            <li>Tech Integration: We're building a digital-first concierge experience that meets your needs wherever you are</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- divider left bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-left-bottom"></div>
                            </div>
                            <!-- divider left bottom end -->
                            <!-- divider right bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-right-bottom"></div>
                            </div>
                            <!-- divider right bottom end -->
                        </div>
                        <!-- container end -->
                        <!-- closer start -->
                        <div class="fire-closer">
                            <a class="menu-state" href="#" id="fire-services-closer"><img alt="Closer" src="assets/images/closer.png"></a>
                        </div>
                        <!-- closer end -->
                    </div>
                    <!-- lower content end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- center block end -->
        </div>
        <!-- services end -->

        <!-- why us start -->
        <div class="lower-page" id="difference">
            <!-- center container start -->
            <div class="center-container">
                <!-- center block start -->
                <div class="center-block">
                    <!-- lower content start -->
                    <div class="lower-content">
                        <!-- difference intro start -->
                        <div class="difference-intro">
                            <h1>
                                The Whispers Concierge Difference
                            </h1>
                        </div>
                        <!-- difference intro end -->
                        <!-- container start -->
                        <div class="container center">
                            <!-- divider left top start -->
                            <div class="sixteen columns">
                                <div class="divider-left-top"></div>
                            </div>
                            <!-- divider left top end -->
                            <!-- divider right top start -->
                            <div class="sixteen columns">
                                <div class="divider-right-top"></div>
                            </div>
                            <!-- divider right top end -->
                            <!-- difference full start -->
                            <div class="sixteen columns difference-column-full">
                                <p class="info">
                                    Why Choose Whispers Concierge?
                                </p>

                                <p>
                                    <span style="font-size: 16px; font-weight: 500;"><strong>Local Insight, Global Standard</strong></span><br>
                                    Our team combines intimate Moroccan knowledge with international hospitality excellence — giving clients the best of both worlds.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Access Like No Other</strong></span><br>
                                    From fully booked restaurants to closed-door events, our black book of exclusive contacts opens doors others cannot.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Always Personal, Never Generic</strong></span><br>
                                    We don't just plan your experiences — we design them, tailored to your desires, preferences, and dreams.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>24/7 Availability</strong></span><br>
                                    We're always here when you need us. Whether you're across the globe or around the corner, our team is ready.<br><br>

                                    <span style="font-size: 16px; font-weight: 500;"><strong>Handpicked Network</strong></span><br>
                                    Our trusted network of top-tier suppliers, venues, and service providers guarantees a consistently high-end delivery, every time.
                                </p>
                            </div>
                            <!-- difference full end -->
                             
                            <div class="sixteen columns difference-column-full">
                                <p class="info">
                                    Our Network
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        We have cultivated one of Morocco's most influential luxury networks, including:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>5-star hotels and resorts</li>
                                            <li>Michelin-starred chefs and restaurateurs</li>
                                            <li>Elite private drivers and security teams</li>
                                            <li>Designers, artists, and stylists</li>
                                            <li>Wellness retreats and spa professionals</li>
                                            <li>Real estate partners and luxury villa owners</li>
                                        </ul>
                                    </div>
                                    <p>
                                        This network is your privilege, and we leverage it with discretion and care.
                                    </p>
                                </div>
                            </div>

                            <div class="sixteen columns difference-column-full">
                                <p class="info">
                                    Our Team
                                </p>
                                <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-start;">
                                    <p>
                                        Whispers Concierge is operated by a core team of passionate, bilingual lifestyle managers and hospitality veterans. From event planners and villa specialists to cultural curators and executive assistants, our team is:
                                    </p>
                                    <div style="display: flex; flex-direction: column; align-items: center; width: 100%; padding: 0 16px;">
                                        <ul style="list-style-type: disc; text-align: left; word-break: break-word;">
                                            <li>Multilingual (English, French, Arabic)</li>
                                            <li>Globally trained in service excellence</li>
                                            <li>Culturally aware and locally connected</li>
                                            <li>Passionate about exceeding expectations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- divider left bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-left-bottom"></div>
                            </div>
                            <!-- divider left bottom end -->
                            <!-- divider right bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-right-bottom"></div>
                            </div>
                            <!-- divider right bottom end -->
                        </div>
                        <!-- container end -->
                        <!-- closer start -->
                        <div class="fire-closer">
                            <a class="menu-state" href="#" id="fire-difference-closer"><img alt="Closer" src="assets/images/closer.png"></a>
                        </div>
                        <!-- closer end -->
                    </div>
                    <!-- lower content end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- center block end -->
        </div>
        <!-- why us end -->

        <!-- contact start -->
        <div class="lower-page" id="contact">
            <!-- center container start -->
            <div class="center-container">
                <!-- center block start -->
                <div class="center-block">
                    <!-- lower content start -->
                    <div class="lower-content">
                        <!-- contact intro start -->
                        <div class="contact-intro">
                            <h1>
                                CONTACT
                            </h1>
                        </div>
                        <!-- contact intro end -->
                        <!-- container start -->
                        <div class="container center">
                            <!-- divider left top start -->
                            <div class="sixteen columns">
                                <div class="divider-left-top"></div>
                            </div>
                            <!-- divider left top end -->
                            <!-- divider right top start -->
                            <div class="sixteen columns">
                                <div class="divider-right-top"></div>
                            </div>
                            <!-- divider right top end -->
                            <!-- services full start -->
                             <!-- services full end -->
                            <!-- contact column 1 start -->
                            <div class="one-third column contact-column">
                                <!-- <div class="info-address">
                                    <span class="awesome"><span class="fa fa-map-marker"></span></span>
                                    <p class="info">
                                        Address
                                    </p>
                                    <p>
                                        ex nihilo, Inc.<br>
                                        Touchdown Dr<br>
                                        1176
                                    </p>
                                </div> -->
                                <div class="info-website">
                                    <!-- <span class="awesome"><span class="fa fa-globe"></span></span> -->
                                    <span class="awesome"><span class="fa-solid fa-globe"></span></span>
                                    <p class="info">
                                        Website
                                    </p>
                                    <p>
                                        www.whispersconcierge.com
                                    </p>
                                </div>
                            </div>
                            <!-- contact column 1 end -->
                            <!-- contact column 2 start -->
                            <div class="one-third column contact-column">
                                <div class="info-phone">
                                    <!-- <span class="awesome"><span class="fa fa-phone"></span></span> -->
                                    <span class="awesome"><span class="fa-solid fa-phone"></span></span>
                                    <p class="info">
                                        Telephone
                                    </p>
                                    <p>
                                        +212 (0)6 XX XX XX XX <br>
                                    </p>
                                </div>
                            </div>
                            <!-- contact column 2 end -->
                            <!-- contact column 3 start -->
                            <div class="one-third column contact-column">
                                <div class="info-email">
                                    <!-- <span class="awesome"><span class="fa fa-envelope"></span></span> -->
                                    <span class="awesome"><span class="fa-solid fa-envelope"></span></span>
                                    <p class="info">
                                        E-mail
                                    </p>
                                    <p>
                                        <a href="mailto:hello@whispersconcierge.com">hello@whispersconcierge.com</a>
                                    </p>
                                </div>
                            </div>
                            <!-- contact column 3 end -->

                            <!-- contact form start -->
                            <!-- <div class="sixteen columns">
                                <div id="contact-form">
                                    <form action="contact.php" id="form" method="post" name="send">
                                        <div class="holder">
                                            <div>
                                                <input class="requiredField name" id="name" name="name" placeholder="Name" type="text">
                                            </div>
                                            <div>
                                                <input class="requiredField email" id="email" name="email" placeholder="Email" type="text">
                                            </div>
                                            <div>
                                                <input class="requiredField subject" id="subject" name="subject" placeholder="Subject" type="text">
                                            </div>
                                        </div>
                                        <div class="holder">
                                            <div>
                                                <textarea class="requiredField message" id="message" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div>
                                                <button class="submit white-border" data-hover="Submit" type="submit" value="Submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <!-- contact form end -->

                            <!-- divider left bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-left-bottom"></div>
                            </div>
                            <!-- divider left bottom end -->
                            <!-- divider right bottom start -->
                            <div class="sixteen columns">
                                <div class="divider-right-bottom"></div>
                            </div>
                            <!-- divider right bottom end -->
                        </div>
                        <!-- container end -->
                        <!-- closer start -->
                        <div class="fire-closer">
                            <a class="menu-state" href="#" id="fire-contact-closer"><img alt="Closer" src="assets/images/closer.png"></a>
                        </div>
                        <!-- closer end -->
                    </div>
                    <!-- lower content end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- center block end -->
        </div>
        <!-- contact end -->
        <!-- <div class="s-close" id="customizer">
            <span class="corner"></span>
            <div class="visible" id="options">
                <div class="options-head">Style Switcher</div>
                <div class="options-segment clearfix colors-sel">
                    <div class="color-head">Color Scheme</div>
                    <ul class="color-scheme clearfix">
                        <li class="red"><a class="styleswitch" href="css/colors/red" rel="red"></a></li>
                        <li class="red-2"><a class="styleswitch" href="css/colors/red-2" rel="red-2"></a></li>
                        <li class="green"><a class="styleswitch" href="css/colors/green" rel="green"></a></li>
                        <li class="green-2"><a class="styleswitch" href="css/colors/green-2" rel="green-2"></a></li>
                        <li class="blue"><a class="styleswitch" href="css/colors/blue" rel="blue"></a></li>
                        <li class="blue-2"><a class="styleswitch" href="css/colors/blue-2" rel="blue-2"></a></li>
                        <li class="yellow"><a class="styleswitch" href="css/colors/yellow" rel="yellow"></a></li>
                        <li class="yellow-2"><a class="styleswitch" href="css/colors/yellow-2" rel="yellow-2"></a></li>
                        <li class="orange"><a class="styleswitch" href="css/colors/orange" rel="orange"></a></li>
                        <li class="gold"><a class="styleswitch" href="css/colors/gold" rel="gold"></a></li>
                        <li class="pink"><a class="styleswitch" href="css/colors/pink" rel="pink"></a></li>
                        <li class="purple"><a class="styleswitch" href="css/colors/purple" rel="purple"></a></li>
                        <li class="violet"><a class="styleswitch" href="css/colors/violet" rel="violet"></a></li>
                        <li class="turquoise"><a class="styleswitch" href="css/colors/turquoise" rel="turquoise"></a></li>
                        <li class="brick"><a class="styleswitch" href="css/colors/brick" rel="brick"></a></li>
                        <li class="silver"><a class="styleswitch" href="css/colors/silver" rel="silver"></a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- style switcher end -->

</x-app-layout>