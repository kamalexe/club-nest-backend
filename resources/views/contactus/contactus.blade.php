@extends('layout.app')

@section('content')
    <!-- ***** About Us Page ***** -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Are You Looking For A Venue?</h2>
                    <span>Check out our venues, pick your choice and fill the reservation application.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="rent-venue-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul>
                                            <li><a href='#tabs-1'>Madison Square Garden</a></li>
                                            <li><a href='#tabs-2'>Radio City Musical Hall</a></a></li>
                                            <li><a href='#tabs-3'>Royce Hall</a></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="main-dark-button">
                                            <a href="https://www.paytmbank.com/">Purchase Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Madison Square Garden</h4>
                                                <p>ClubNest Event Template is brought to you by Tooplate website and it
                                                    included total 7 HTML pages.
                                                    These are <a href="/">Homepage</a>, <a
                                                        href="{{ route('about') }}">About</a>,
                                                    <a href="#">Rent a venue</a>, <a href="#">shows &amp;
                                                        events</a>,
                                                    <a href="{{ route('events.index') }}">event details</a>, <a
                                                        href="{{ route('tickets.index') }}">tickets</a>, and <a
                                                        href="#">ticket details</a>.
                                                    You can feel free to modify any page as you like. If you have any
                                                    question, please visit our <a href="https://www.tooplate.com/contact"
                                                        target="_blank">Contact page</a>.

                                                    <br><br>If you need the latest HTML templates, you may visit <a
                                                        href="https://www.toocss.com/" target="_blank">Too CSS</a> website
                                                    that features a great collection of templates in different categories.
                                                </p>
                                                <ul class="list">
                                                    <li>Madison Square Garden</li>
                                                    <li>$2,840 per day</li>
                                                    <li>860 Guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7405.690436500271!2d-43.289281240686606!3d-23.00173786750551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd6d13e950037%3A0x2c49dc1b12837f3f!2sPedra%20da%20G%C3%A1vea!5e1!3m2!1sen!2sth!4v1630941277488!5m2!1sen!2sth"
                                                    width="100%" height="240px" frameborder="0" style="border:0"
                                                    allowfullscreen="" loading="lazy"></iframe>
                                                <h5>Any Question?</h5>
                                                <p>Tumeric air affogato sare torial waistcoat denim stumber.</p>
                                                <div class="text-button">
                                                    <a href="#">Need Direction? <i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Radio City Musical Hall</h4>
                                                <p> Aliquam tempor, purus vitae ullamcorper rhoncus, quam nunc imperdiet
                                                    sem, sed placerat purus dui in lorem. Donec ornare at risus in varius.
                                                    In at magna ante. Curabitur at metus sed purus pretium ullamcorper. Cras
                                                    vitae sapien bibendum urna pulvinar faucibus. Aliquam sed dui in orci
                                                    tincidunt cursus quis non tellus. Vestibulum a placerat ex, ac cursus
                                                    dui.</p>
                                                <ul class="list">
                                                    <li>Radio City Musical Hall</li>
                                                    <li>$4,750 per day</li>
                                                    <li>1,100 Guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14678.414668643849!2d-43.19038460753291!3d-22.96913839717705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd54579a5956b%3A0xa102deeaffcb3e3!2sCopacabana%20Beach!5e1!3m2!1sen!2sth!4v1630941170951!5m2!1sen!2sth"
                                                    width="100%" height="240px" frameborder="0" style="border:0"
                                                    allowfullscreen="" loading="lazy"></iframe>
                                                <h5>Any Question?</h5>
                                                <p>Tumeric air affogato sare torial waistcoat denim stumber.</p>
                                                <div class="text-button">
                                                    <a href="#">Need Direction? <i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Royce Hall</h4>
                                                <p> Maecenas ut pharetra felis. Interdum et malesuada fames ac ante ipsum
                                                    primis in faucibus. Sed ut nisi quis tellus vulputate posuere. Aenean
                                                    consectetur quam et quam fringilla, nec aliquam diam congue. Nulla dui
                                                    arcu, aliquam sed mattis non, euismod vitae libero. </p>
                                                <ul class="list">
                                                    <li>Madison Square Garden</li>
                                                    <li>$5,860 per day</li>
                                                    <li>1,250 Guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3106.724034173435!2d-43.27685374322357!3d-23.003403908758767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd6cbe74edde3%3A0x14e89f87adc702cc!2sMirante%20Ciclovia%20Sao%20Conrado!5e1!3m2!1sen!2sth!4v1630941324692!5m2!1sen!2sth"
                                                    width="100%" height="240px" frameborder="0" style="border:0"
                                                    allowfullscreen="" loading="lazy"></iframe>
                                                <h5>Any Question?</h5>
                                                <p>Tumeric air affogato sare torial waistcoat denim stumber.</p>
                                                <div class="text-button">
                                                    <a href="#">Need Direction? <i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rent-venue-application">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="heading-text">
                        <h4>We’re Here to Help</h4>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone-number" type="text" id="phone-number"
                                            placeholder="Phone Number*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="course" type="text" id="course" placeholder="Course*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="branch" type="text" id="branch" placeholder="Branch*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject*"
                                            required="">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Write your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-dark-button">Submit
                                            Request</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
