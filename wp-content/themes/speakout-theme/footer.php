<?php wp_footer();?>

<?php include 'modal.php';?>

<footer>

<section class="accordion-container">

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <p>Categories</p>
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li><a href="http://speakout/product-category/man/">Man</a></li>

                        <li><a href="http://speakout/product-category/woman/">Woman</a></li>

                        <li><a href="http://speakout/magazine/">Magazine</a></li>
                    </ul>
                </div>
            </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            <p>Support</p>
        </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul>
                    <li><a href="http://speakout/faq/">FAQ</a></li>

                    <li><a href="http://speakout/shipping-returns/">Shipping & Returns</a></li>

                    <li><a href="http://speakout/contact-us/">Contact Us</a></li>

                    <li><a href="http://speakout/create-account/">Create an account</a></li>

                    <li><a href="http://speakout/customer-login/">Login to my account</a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <p>Company</P>
            </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                        <ul>
                            <li><a href="http://speakout/about-us/">About Us</a></li>

                            <li><a href="http://speakout/privacy-policy/">Privacy Policy</a></li>

                            <li><a href="http://speakout/terms-conditions/">Terms & Conditions</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="subscribe-block">

    <section class="media-icons-container">
        <ul>
            <li><a href="#" id="twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </section>

    <form class="form-container">
            <!--<label for="exampleInputEmail1" class="form-label">Email address</label>-->
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <div class="btn-subscribe-container">
                <button type="button" id="btn-footer" class="btn btn-dark"><span>Subscribe</span></button>
            </div>
    </form>

    <!--<div class="fine-print-container">

    <p>I have read and understood the Speak Out Privacy Policy and<span id="dots">... </span><span onclick="myFunction()"id="btn-more">Read More</span><span id="more"> agree to receive personalized communications from Speak Out. You can also unsubscribe at any time by clicking the unsubscribe link in our email. 
    <a href="#">unsubscribe link.</a></span></p>

    <button onclick="myFunction()" id="btn-less">Read less</button>

    </div>-->

</section>

    <hr id=footer-divider>

    <p id="footer-text">©SpeakOut. All rights reserved.</p>

</footer>

</body>
</html>
