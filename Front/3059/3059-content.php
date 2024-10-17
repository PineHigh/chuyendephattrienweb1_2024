<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="news-section">
                    <h2>Our News</h2>
                    <div class="news-container">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="img/blog-01-360x185.jpg" alt="Headphones">
                            </div>
                            <h3>HOW TO CHOOSE HEADPHONES FOR YOUR SMARTPHONE</h3>
                            <p>Praesent sit amet erat ornare, sodales risus quis, tempus risus. Sed leo enim, pharetra vestibulum metus lobortis, ultricies efficitur eros.</p>
                            <div class="news-footer">
                                <div class="news-meta">
                                    <span class="date"><img src="img/icons8-calendar-24.png" alt=""> Dec 9, 2016</span>
                                    <span class="author"><img src="img/icons8-pen-squared-48.png" alt=""> arman</span>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="news-item">
                            <div class="news-image">
                                <img src="img/blog-1-360x185.jpg" alt="Phone and Tablet">
                            </div>
                            <h3>THE TRANSFER OF DATA FROM TABLET TO PHONE</h3>
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam nec blandit magna. Proin hendrerit molestie porttitor.</p>
                            <div class="news-footer">
                                <div class="news-meta">
                                    <span class="date"><img src="img/icons8-calendar-24.png" alt=""> Dec 9, 2016</span>
                                    <span class="author"><img src="img/icons8-pen-squared-48.png" alt=""> arman</span>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="news-item">
                            <div class="news-image">
                                <img src="img/blog-2-360x185.jpg" alt="Phone and Tablet in Hot Countries">
                            </div>
                            <h3>TERMS OF USE OF PHONES AND TABLETS IN HOT COUNTRIES</h3>
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam nec blandit magna. Proin hendrerit molestie porttitor.</p>
                            <div class="news-footer">
                                <div class="news-meta">
                                    <span class="date"><img src="img/icons8-calendar-24.png" alt=""> Dec 9, 2016</span>
                                    <span class="author"><img src="img/icons8-pen-squared-48.png" alt=""> arman</span>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>