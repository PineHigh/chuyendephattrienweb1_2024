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
                    <div class="header">
                        <div class="icon-img">
                            <img src="img/icons8-tools-48.png" alt=""><div class="km-line-sep-fill" style="background:#dddddd;"></div>
                            <div class="line_header"></div>
                        </div>
                        <h2>Repair World News</h2>
                        <p>Dolor amet consectetur elit sed eiusmod tempor incididunt labore dolore</p>
                    </div>
                    <div class="news-container">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="img/phu-nguyen-computer-676640.jpg" alt="Finding a used Smartphone">
                            </div>
                            <div class="item">
                                <h3>Finding a used Smartphone: Checking the Original</h3>
                                <p>We are surrounded possession frequently them. Empliati acable heureuse capitale havresac nul etroites. Tours him route accable ecarter grand.</p>
                            </div>
                        </div>

                        <div class="news-item">
                            <div class="news-image">
                                <img src="img/0807_ky-thuat-lap-rap-may-tinh.jpg" alt="How to Repair iPhone">
                            </div>
                            <div class="item">
                                <h3>How to Repair iPhone: 6 Ways Best Online Guides</h3>
                                <p>Admiration we are surrounded possession frequently them. Empliati acable heureuse capitale havresac nul etroites. Tours him route accable ecarter gran.</p>
                            </div>
                        </div>

                        <div class="news-item">
                            <div class="news-image">
                                <img src="img/dWt1tegCBKUiIdKV-scaled.jpg" alt="Avoid Breaking Glass">
                            </div>
                            <div class="item">
                                <h3>10 Tips: Avoid Breaking Glass of your Smartphone</h3>
                                <p>Femiration we are surrounded possession frequently them. Empliati acable heureuse capitale havresac nul etroites. Tours him route accable ecarter gran.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>