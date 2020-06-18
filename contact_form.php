<?php 
    $name = $_POST['name'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $serviceRequest = $_POST['serviceRequest'];
    $message = $_POST['content'];
    $formContent = "From: $name \n Phone: $phone \n companyName: $companyName \n Required Service: $serviceRequest \n Message: $message";
    $recipient = "info@onostarmedia.com.ng";
    $subject = "Contact form from onostar media";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formContent, $mailheader) or die("Error!");
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <meta name='author' content='Onostar media'>
        <meta name='description' content='Onostar Media is a Web development company, Digital marketing experts and SEO professionals. We specialize in building dynamic, responsive and interactive websites that will give you leads, and increase your sales. We develope e-commerce websites, social media websites, blogs, and more for all kinds of organisations. Onostar media always serve up unique Website designs coded with today’s modern technologies, social media campaigns, SEO improvements, and revenue-driving marketing strategies for sales leads and customer acquisition.'>
        <meta name='keywords' content='Website, web development, domain registration, e-commerce websites, blogs, corporate websites, web applications, SEO, digital marketing, responsive web'>
        <title>Onostar media | contact us</title>
        <link rel='icon' href='images/onostar media icon.png' type='image/png' size='32X32'>
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='fontawesome-free-5.12.1-web/css/all.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css'>
        <script src='script.js'></script>
        <script async src='https://www.googletagmanager.com/gtag/js?id=UA-91355012-5'></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
    
            gtag('config', 'UA-91355012-5s')
        </script>
    </head>
    <body>
        <main>
            <section id='topNav'>
                <section id='topSocialMediaLinks'>
                    <a target='_blank' href='https://web.facebook.com/Onostar-media-116560293134823/' title='onostar Media on facebook'><i class='fab fa-facebook'></i></a>
                    <a target='_blank' href='https://twitter.com/onostar' title='onostar Media on twitter'><i class='fab fa-twitter'></i></a>
                    <a target='_blank' href='https://www.linkedin.com/in/kelly-ikpefua-14139ab9/' title='onostar Media on Linkedin'><i class='fab fa-linkedin'></i></a>
                    <a target='_blank' href='https://www.youtube.com/channel/UCllm9VUBdkuL36LlULHMG4A/' title='onostar Media on youtube'><i class='fab fa-youtube'></i></a>
                </section>
                <section id='topContact'>
                    <p><i class='fas fa-phone-alt'></i> +2347068897068</p>
                </section>
            </section>
            <header>
                <section id='mainHeader'>
                    <h1 title='Onostar Media'><a href='index.html' title='Home'><img src='images/onostar media logo white.png' alt='onostar media Logo'></a></h1>
                    <nav id='navigation'>
                        <ul>
                            <li><a href='about.html' title='who we are'>About us</a></li>
                            <li><a href='javascript:void(0);' title='Web Design Services'>Web Design<i class='fas fa-caret-down'></i></a>
                                <ul>
                                    <li><a href='web_development.html' title='Web development and maintenance'>Web Development</a></li>
                                    <li><a href='domain_registration_and_hosting.html' title='Domain Registration and Web Hosting'>Domain Registration & Hosting</a></li>
                                </ul>
                            </li>
                            <li><a href='javascript:void(0);' title='Digital marketing and SEO'>Digital Marketing<i class='fas fa-caret-down'></i></a>
                                <ul>
                                    <li><a href='Email_marketing.html' title='Email and Social Media Marketing'>Email/Social Media Marketing</a></li>
                                    <li><a href='seo.html' title='Searching Engine Optimization'>SEO</a></li>
                                </ul>
                            </li>
                            <li><a href='blog.html' title='Latest Trends'>Blog</a></li>
                            <li class='active'><a href='contact.html' title='Contact us'>Contact</a></li>
                        </ul>
                    </nav>
                    <section id='menu' class='menu' onclick='displayMenu();'><a href='javascript:void(0);' id='menuLink'><i class='fas fa-bars'></i></a></section>
                </section>
            </header>
            <section id='getInTouch'>
                <div class='banner_img'>
                    <img src='images/contact_us.jpg' alt='contact onostar media'>
                </div>
                <div class='taglines'>
                    <h2>Contact Us</h2>
                </div>
            </section>
            <section id='contactUs'>
                <p class='cont'>Make <span style='color:#0b7cac;'>ONOSTAR MEDIA</span> your Digital Agency Partner</p>
                <div id='exist'>
                    <div class='existenceText'>
                        <p>Creating future-proof digital experiences is what we do. Tell us about your needs, we’d love to collaborate with you.</p>
                        <p>Find out more about how we can work together on your next web project.</p>
                        <p><strong>Visit us at:</strong><br>
                        Our headquarters situated at 27 Fatherhilly street of ometan road, Warri, Delta state</p><br>
                        <p><strong>Call us on:</strong><br>
                        2347068897068, 07057456881</p><br>
                        <p><strong>Email:</strong><br>
                            info@onostarmedia.com.ng</p>
                    </div>
                    <div class='existenceText'>
                        <form id='contactForm' name='contactForm' action='contact_form.php' method='POST'>
                            <fieldset>
                                <legend>Send us a message</legend>
                                <label for='name'>Full Name:</label><br>
                                <input type='text' id='name' name='name' placeholder='James Brown' required><br><br>
                                <label for='companyName'>Company Name:</label><br>
                                <input type='text' id='companyName' name='companyName' required><br><br>
                                <label for='email'>Email:</label><br>
                                <input type='email' id='email' name='email' placeholder='mail@example.com' required><br><br>
                                <label for='phone'>Phone Number:</label><br>
                                <input type='number' id='phone' name='phone' placeholder='07012345678' required><br><br>
                                <label for='serviceRequest'>Service requested</label><br>
                            <select name='serviceRequest' id='serviceRequest'>
                                <option selected value=''>Select a service</option>
                                <option value='Web Hosting'>Web Hosting service</option>
                                <option value='Domain management'>Domain management</option>
                                <option value='Seo and digital marketing'>Seo and digital marketing</option>
                                <option value='General complaint'>General inquiry</option>
                            </select><br><br>
                                <textarea col='50' row='10' name='content' placeholder='Tell us about your project'> 
                                </textarea><br>
                                <input type='submit' id='submit' name='submit' value='Send'>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </section>
        </main>  
        <footer>
            <section id='quote'>
                <div id='quotes'>
                    <div class='quoteText'>
                        <h3>Request a Quote</h3>
                        <p>Need a quote on a re-design or a new project? Give us a bit of detail on your project and let us help!</p>
                    </div>
                    <div class='reqBtn'>
                        <button><a href='contact.html' title='Request a quotation'>Request a Quote</a></button>
                    </div>
                </div>
            </section>
            <section id='mainFoot'>
                <section id='contactDetails' class='mainFooter'>
                    <h4>Contact us</h4>
                    <p id='note'>To get a job done or request for a quote, please contact us:</p>
                    <div class='address'>
                        <i class='fas fa-street-view'></i>
                        <p><span>Address:</span><br>
                            27 Father hilly Street off Ometan road, Warri,<br> Delta state</p>
                    </div>
                    <div class='address'>
                        <i class='fas fa-phone-alt'></i>
                        <p><span>Phone:</span><br>+234-706-889-7068<br> +234-705-745-6881</p>
                    </div>
                    <div class='address'>
                        <i class='fas fa-envelope-open-text'></i>
                        <p><span>Email:</span><br>
                            info@onostarmedia.com.ng</p>
                    </div>
                </section>
                <section id='subscribe' class='mainFooter'>
                    <div class='subscription'>
                        <h4>Subscribe to our newsletter</h4>
                        <form name='subscribe' action='subscribe.php' method='post' id='sub'>
                            <input type='email' name='email' id='email' placeholder='Enter your email'>
                            <input type='submit' value='Subscribe' id='subscription'>
                        </form>
                    </div>
                    <div class='working_hours'>
                        <h4>Working Hours</h4>
                        <p>Weekedays: 8:00am - 5:00pm</p>
                        <p>Saturdays: 10:00am - 4:00pm</p>
                        <p>Sundays: 12:00noon - 4:00pm</p>
                    </div>
                </section>
                <section id='bottomSocialMediaLinks' class='mainFooter'>
                    <h4>Follow us</h4>
                    <div id='social'>
                        <li>
                            <a href='https://web.facebook.com/Onostar-media-116560293134823/' title='onostar Media facebook page'><img src='images/facebook.png' alt='Onostar media Facebook Page'></a>
                        </li>
                        <li>
                            <a href='https://twitter.com/onostar' title='onostar Media twitter page'><img src='images/twitter.png' alt='Onostar media Twitter Page'></a>
                        </li>
                        <li>
                            <a href='https://www.linkedin.com/in/kelly-ikpefua-14139ab9/' title='onostar Media Linkedin page'><img src='images/linkedin.png' alt='Onostar media Linkedin Page'></a>
                        </li>
                        <li>
                            <a href='https://www.youtube.com/channel/UCllm9VUBdkuL36LlULHMG4A/' title='onostar Media on youtube'><img src='images/youtube_icon.png' alt='Onostar media Linkedin Page'></a>
                        </li>
                    </div>
                </section>
            </section>
            <section id='bottomFoot'>
                <p>&copy; 2020 Onostar Media. All Rights Reserved</p>
            </section>
            <div id='to_top'><a href='#topNav' title='Go to top'><i class='fas fa-angle-double-up'></i></a></div>
        </footer>
        
    </body>
    </html>";
    echo "<script>alert('Thanks for contactin us!!! \n We will be in touch shortly')</script>";

?>