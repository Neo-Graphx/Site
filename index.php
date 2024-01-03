<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Graphx - A Power that Shines your Business</title>
    <!--Favicon-->
    <link rel="icon" href="img/favicon.ico">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!--StyleSheet-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/textanimation.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/flipcard.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/animation.css">
    <script src="js/typewriter.js"></script>
</head>
<body onload="myFunction()">
    <div class="loader" id="loader">
        <img src="./img/Logo_ng.png" alt="" class="loader-img">
        <div class="loading" id="loading"></div>
    </div>
    <div class="body aos-animate" id="body" data-aos="fade-up" data-aos-delay="5">
        <div class="nav" aos="slide-left">
            <a href="https://www.neographx.com" class="logo" title="Neo Graphx - A Power that Shines your Business"></a>
            <div class="menu-item" id="menu-item">
                <button class="menu-btn active-menu" onclick="window.location.href='#home'">Home</button>
                <button class="menu-btn" onclick="window.location.href='#about'">About us</button>
                <button class="menu-btn" onclick="window.location.href='#what_we_do'">What we do?</button>
                <button class="menu-btn" onclick="window.location.href='#contact'">Contact us</button>
            </div>
        </div>
        <div class="mobile-nav" data-aos="slide-up">
            <a href="https://www.neographx.com" class="logo" title="Neo Graphx - A Power that Shines your Business"></a>
            <div class="mobile-menu">
                <div class="mobile-menu-item">
                    <a class="mobile-menu-link" href="#home"><button onclick="home()">Home</button></a>
                    <a class="mobile-menu-link" href="#about"><button onclick="about()">About us</button></a>
                    <a class="mobile-menu-link" href="#what_we_do"><button onclick="what_we_do()">What we do?</button></a>
                    <a class="mobile-menu-link" href="#contact"><button onclick="contact()">Contact us</button></a>
                </div>
            </div>
        </div>
        <div class="cont" data-aos="slide-right">
            <div id="home" class="home">
                <div class="row">
                    <div class="col home_cont">
                        <div class="hometxt txt1" data-aos="fade-in">Rev up your marketing game with the perfect trio</div>
                        <div id="wrapper"></div>
                        <script src="js/textanimation.js"></script>
                        <div class="hometxt txt3">Dominate the Online Landscape, Streamline your Efforts & Skyrocket your Success!!</div>
                        <button class="connect btn-animate" onclick="window.location.href='#contact'">Connect with us</button>
                    </div>
                    <div class="col home_slider" data-aos="fade-right">
                        <div class="slider">
                            <img src="#" alt="">
                            <img src="#" alt="">
                            <img src="#" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about" id="about">
                <div class="content">
                    <div class="row">
                        <div class="col">
                            <div class="abt" data-aos='fade-up'>
                                <div class="abt-img">
                                    <img src="img/about.png" alt="About us" class="imgabt">
                                </div>
                                <div class="abt-content">
                                    <div class="abt-head">About us</div>
                                    <div class="txt-cont">At <span class="abt-high">Neo Graphx</span>, we are the architects of digital success. With a passion for innovation and a commitment to excellence, we are your trusted partner for all things digital.</div>
                                    <div class="spacer"></div>
                                    <div class="txt-cont">We're more than just a company, we're your strategic partner in the digital realm. With a rich tapestry of talent, experience, and unwavering dedication, we've been at the forefront of transforming businesses into digital powerhouses.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="our">
                                <div class="our-img">
                                    <img src="img/journey.png" alt="Our Journey" class="imgabt">
                                </div>
                                <div class="our-content">
                                    <div class="our-head">Our Journey</div>
                                    <div class="txt-cont">Founded on the belief that innovation should be at the core of every business, Neo Graphx embarked on this journey. Over the time, we've evolved and experienced with our skills and effort, but our commitment to excellence has remained constant.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="why">
                        <div class="why-img">
                            <img src="img/why.png" alt="Why Choose us?" class="imgabt">
                        </div>
                        <div class="why-content">
                            <div class="why-head">Why Choose us?</div>
                            <div class="spacer"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="tab">
                                        <div>
                                            <div class="tab-head">
                                                <div>Client-Centric</div>
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <div class="tab-spacer"></div>
                                            <div class="tab-cont">Your success is our success. We work hand-in-hand with you, understanding your goals, challenges, and vision to deliver solutions that exceed your expectations.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="tab">
                                        <div>
                                            <div class="tab-head">
                                                <div>Digital Pioneers</div>
                                                <i class="bi bi-pc-display"></i>
                                            </div>
                                            <div class="tab-spacer"></div>
                                            <div class="tab-cont">We stay ahead of industry trends and technology to ensure your business thrives in the ever-evolving digital landscape.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="tab">
                                        <div>
                                            <div class="tab-head">
                                                <div>Creative Excellence</div>
                                                <i class="bi bi-pencil-square"></i>
                                            </div>
                                            <div class="tab-spacer"></div>
                                            <div class="tab-cont">Our dedication to creativity, quality, and precision shines through in every project we undertake.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="what_we_do" id="what_we_do">
                <div class="what-content">
                    <div class="what-head">What we do?</div>
                    <div class="divider"></div>
                    <div class="what-cards">
                        <div class="flipcard dm-flip" title="Digital Marketing">
                            <div class="flip-cont">
                                <div class="flip-front dm">
                                    <div class="flip-head"><span class="fh-dm">Digital Marketing</span></div>
                                    <div class="flip-fcont dm-cont">
                                        Our team of expert's crafts tailored strategies to elevate your online presence, drive traffic, and boost conversions. We're not just marketers; we're growth partners.
                                    </div>
                                </div>
                                <div class="flip-back dm-back">
                                    <div class="flip-head">SERVICES</div>
                                    <div class="what-list">
                                        <div class="what-tab dm-ser">Ad Campaign</div>
                                        <div class="what-tab dm-ser">Branding</div>
                                        <div class="what-tab dm-ser">Consulting Services</div>
                                        <div class="what-tab dm-ser">Conversion Rate Optimization</div>
                                        <div class="what-tab dm-ser">Pay-Per-Click</div>
                                        <div class="what-tab dm-ser">Search Engine Optimization</div>
                                        <div class="what-tab dm-ser">Search Engine Marketing</div>
                                        <div class="what-tab dm-ser">Social Media Marketing</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-card"></div>
                        <div class="flipcard gd-flip" title="Graphic Design">
                            <div class="flip-cont">
                                <div class="flip-front gd">
                                    <div class="flip-head"><span class="fh-gd">Graphic Design</span></div>
                                    <div class="flip-fcont gd-cont">
                                        Creativity is at the heart of what we do. Our design wizards bring your brand to life with visually stunning graphics, logos, and branding solutions that leave a lasting impression.
                                    </div>
                                </div>
                                <div class="flip-back gd-back">
                                    <div class="flip-head">SERVICES</div>
                                    <div class="what-list">
                                        <div class="what-tab gd-ser">Brochure Design</div>
                                        <div class="what-tab gd-ser">Business Card Design</div>
                                        <div class="what-tab gd-ser">Cover Letter / Letter Pad</div>
                                        <div class="what-tab gd-ser">Logo Design</div>
                                        <div class="what-tab gd-ser">Mobile App Design</div>
                                        <div class="what-tab gd-ser">Mock-up Design</div>
                                        <div class="what-tab gd-ser">Social Media Posters</div>
                                        <div class="what-tab gd-ser">Website Design</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-card"></div>
                        <div class="flipcard ss-flip">
                            <div class="flip-cont">
                                <div class="flip-front ss">
                                    <div class="flip-head"><span class="fh-ss">Software Solutions</span></div>
                                    <div class="flip-fcont ss-cont">
                                        From custom software development to cutting-edge tech solutions, we turn your ideas into reality. Our tech gurus are here to simplify complexity.
                                    </div>
                                </div>
                                <div class="flip-back ss-back">
                                    <div class="flip-head">SERVICES</div>
                                    <div class="what-list">
                                        <div class="what-tab ss-ser">Domain Management</div>
                                        <div class="what-tab ss-ser">E-Commerce Solutions</div>
                                        <div class="what-tab ss-ser">Mobile App Development</div>
                                        <div class="what-tab ss-ser">UI/UX</div>
                                        <div class="what-tab ss-ser">User Management</div>
                                        <div class="what-tab ss-ser">Website Development</div>
                                        <div class="what-tab ss-ser">WordPress Development</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
if(!empty($_POST["submit"])){
    $fname = $_POST["fname"];
    $cname = $_POST["cname"];
    $mailid = $_POST["mailid"];
    $phno = $_POST["phno"];
    $typeof = $_POST["typeof"];
    $ymessage = $_POST["ymessage"];
    $toMail = "connect@neographx.com";

    $mailHeader = "Name: " . $fname .
    "\r\n Company Name:" . $cname .
    "\r\n Phone Number:" . $phno .
    "\r\n Mail ID:" . $mailid .
    "\r\n Type of Service / Package:" . $typeof .
    "\r\n Message:" . $ymessage . "\r\n";
    if(mail($toMail, $fname, $mailHeader)){
        $message = "Your Enquiry has been Sumbitted Successfully.";
    }
}
?>
            <div class="contact" id="contact">
                <div class="contact-content">
                    <div class="contact-head">Connect with us</div>
                    <div class="sub-head">Effortlessly your gateway to</div>
                    <div class="sub-head">QUESTIONS<span class="space"></span>&<span class="space"></span>COLLABORATIONS</div>
                    <div class="spacer"></div>
                    <div class="contact-cont row">
                        <form name="contact-form" method="POST" class="cont-form col">
                            <div class="person-info">
                                <input type="text" name="fname" id="fname" class="fname" placeholder="Full Name" required>
                                <input type="text" name="cname" id="cname" class="cname" placeholder="Company Name" required>
                            </div>
                            <div class="spacer"></div>
                            <div class="cont-info">
                                <input type="tel" name="phno" id="phno" class="phno" placeholder="Mobile Number" required>
                                <input type="email" name="mailid" id="mail" class="mail" placeholder="Work Email ID" required>
                            </div>
                            <div class="spacer"></div>
                            <select name="typeof" id="typeof" class="typeof" required>
                                <option value="" default>Type of Services / Package</option>
                                <optgroup label="Digital Marketing">
                                    <option value="Ad Campaign">Ad Campaign</option>
                                    <option value="Branding">Branding</option>
                                    <option value="Consulting Services">Consulting Services</option>
                                    <option value="Conversion Rate Optimization">Conversion Rate Optimization</option>
                                    <option value="Pay-Per-Click">Pay-Per-Click</option>
                                    <option value="SEO - Search Engine Optimization">SEO - Search Engine Optimization</option>
                                    <option value="SEM - Search Engine Marketing">SEM - Search Engine Marketing</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                </optgroup>
                                <optgroup label="Graphic Design">
                                    <option value="Brochure Design">Brochure Design</option>
                                    <option value="Business Card Design">Business Card Design</option>
                                    <option value="Cover Letter / Letter Pad">Cover Letter / Letter Pad</option>
                                    <option value="Logo Design">Logo Design</option>
                                    <option value="Mobile Design">Mobile Design</option>
                                    <option value="Mock-up Design">Mock-up Design</option>
                                    <option value="Poster Design">Poster Design</option>
                                    <option value="Website Design">Website Design</option>
                                </optgroup>
                                <optgroup label="Software Solutions">
                                    <option value="Domain Management">Domain Management</option>
                                    <option value="E-Commerce Solution">E-Commerce Solution</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="UI/UX">UI/UX</option>
                                    <option value="User Management">User Management</option>
                                    <option value="Website Development">Website Development</option>
                                    <option value="WordPress Development">WordPress Development</option>
                                </optgroup>
                                <option value="Package Details">Package Details</option>
                            </select>
                            <div class="spacer"></div>
                            <textarea name="ymessage" id="message" cols="30" rows="10" class="message" placeholder="Your Message"></textarea>
                            <div class="spacer"></div>
                            <input type="submit" value="Submit" name="submit" id="submit" class="submit">
                            <?php if(!empty($message)){?>
                            <div class="success">
                                <strong><?php echo $message ?></strong>
                            </div>
                            <?php } ?>
                        </form>
                        <div class="cont-detls col">
                            <div class="follow-head">Contact us</div>
                            <div class="spacer"></div>
                            <a href="tel:+919840948298" class="detls">
                                <div class="head-contact">
                                    
                                    <i class="bi bi-telephone-fill cicon"></i>
                                    <span class="space"></span>
                                    +91 98409-48298
                                </div>
                            </a>
                            <div class="gap"></div>
                            <a href="mailto:connect@neographx.com" class="detls">
                                <div class="head-contact">
                                    <i class="bi bi-envelope-fill cicon"></i>
                                    <span class="space"></span>
                                    connect@neographx.com
                                </div>
                            </a>
                            <div class="divider"></div>
                            <div class="follow-head">Follow us on</div>
                            <div class="spacer"></div>
                            <div class="sicons">
                                <a href="https://www.facebook.com/neographx24?mibextid=LQQJ4d" class="bi bi-facebook facebook icon" target="_blank"></a>
                                <a href="https://www.instagram.com/neo_graphx?igshid=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr" class="bi bi-instagram instagram icon" target="_blank"></a>
                                <a href="https://x.com/graphxneo?s=21&t=a6x3J4YzRUU168p_Ew_Eog" class="bi bi-twitter-x twitter-x icon" target="_blank"></a>
                                <a href="https://www.linkedin.com/company/neographx/" class="bi bi-linkedin linkedin icon" target="_blank"></a>
                                <a href="https://wa.me/message/U63QK7LYTM26G1" class="bi bi-whatsapp whatsapp icon" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
    </script>
</body>
</html>