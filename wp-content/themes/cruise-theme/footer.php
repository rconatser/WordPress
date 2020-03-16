<footer>
    <div class="container">
        <div class="col-12 col-sm-6 col-md-4">
            <!-- Contact Us Section -->
            <h2>Contact Us</h2>
            <p class="uppercase">Cabot Cruises</p>
            <p><a href="https://goo.gl/maps/EqLHRyjDLYRFdJ9SA" target="_blank"
                    title="Opens Google Maps in a New Tab">23 South Main St. Suite 16 <br />Lexington, VA 24450</a>
            </p>

            <h2>Phone</h2>
            <p><a href="tel:18005551234">1-800-555-1234</a></p>

            <h2>Hours of Operation</h2>
            <p>Monday – Friday: 9am – 4pm</p>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <!-- Newsletter Section -->
            <h2>Newsletter</h2>
            <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>
            <form id="newsletter" type="POST" action="#">
                <label for="email" id="email-label">Your Email</label>
                <input type="text" id="email" placeholder="Your Email" required />
                <input type="submit" value="Subscribe" />
            </form>
        </div>
        <div class="col-12 col-md-4">
            <!-- Why Us Section -->
            <h2>Why Cabot Cruises</h2>
            <p>Cabot Cruises is a travel agency providing the best cruise
                deals on our online travel website. We can help you with all
                inclusive vacaMons including discounted cruises.</p>
            <p>We do not sell travel to residents of Delaware, Iowa,
                Florida, Hawaii and Washington state because those states
                are just wierd. If you are a resident of one of these states,
                call your congressman and tell them to change the
                regulaMons.</p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="social-media">
        <div class="container">
            <!-- Social Media -->
            <div class="icon-set">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="copyright">
        <div class="container">
            <!-- Copyright -->
            <p>&copy; 2020 &bull; Rachel Conatser &bull; dgm3740.rconatser.com</p>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menuToggle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/setActive.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@13.0.1/dist/lazyload.min.js"></script>
<script>
var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy";
});
</script>
<script>
    // CustomEvent micro-polyfill for Internet Explorer
    (function() {
        if (typeof window.CustomEvent === "function") {
            return false;
        }

        function CustomEvent(event, params) {
            params = params || { bubbles: false, cancelable: false, detail: undefined };
            var evt = document.createEvent("CustomEvent");
            evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
            return evt;
        }

        CustomEvent.prototype = window.Event.prototype;
        window.CustomEvent = CustomEvent;
    })();
</script>

<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "TravelAgency",
    "name": "Cabot Cruises",
    "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacaMons including discounted cruises.",
    "openingHours": "Mo-Fr 09:00-16:00",
    "telephone": "+18005551234",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "23 South Main St. Suite 16",
        "addressLocality": "Lexington",
        "addressRegion": "VA"
    },
    "image": "/images/logo-1x.jpg",
    "priceRange": "$450 to $3500"
    }
</script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slick({
            autoplay: true,
            dots: true,
            arrows: false,
            cssEase: 'ease-out',
            speed: 2000,
            autoplaySpeed: 3000
        })
    })
</script>

</body>

</html>