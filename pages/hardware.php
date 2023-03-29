<?php
    session_start();
?>
    <?php include '../includes/header.php' ?>
    <div class="carousel">
    <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <a href="#foto"><img src="/images/carouselfotoeng.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <a href="#telo"><img src="/images/carouselkonseng.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#displej"><img src="/images/carouseldisplejeng.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#pamat"></a><img src="/images/carouselpamateng.jpg">
            </div>
            <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#komunikacie"><img src="/images/carouselkomuneng.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-6" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#platforma"><img src="/images/carouselplatformaeng.jpg"></a>
            </div>
            <label for="carousel-6" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-4" class="carousel-control next control-3">›</label>
            <label for="carousel-3" class="carousel-control prev control-4">‹</label>
            <label for="carousel-5" class="carousel-control next control-4">›</label>
            <label for="carousel-4" class="carousel-control prev control-5">‹</label>
            <label for="carousel-6" class="carousel-control next control-5">›</label>
            <label for="carousel-5" class="carousel-control prev control-6">‹</label>
            <label for="carousel-1" class="carousel-control next control-6">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-4" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-5" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-6" class="carousel-bullet">•</label>
                </li>
            </ol>
        </div>
    </div>

    <h1 class="nadpis" id="foto"><?php echo translate("hw1", $localization) ?></h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/fotospecs.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Zadná kamera <b>QUAD</b><br>
                    <small>48 MP, f/2.0, 26mm (wide) <br> 1/2.0", 0.8µm, PDAF <br>
                        12 MP, f/2.2, 123˚ (ultrawide) <br>
                        5 MP, f/2.4, (macro) <br>
                        5 MP, f/2.2, (depth)</small>
                </li>
                <li>Video (Zadná kamera) <br>
                <small>4K@30fps, 1080p@30/120fps</small>
                </li>
                <li>Selfie kamera <b>SINGLE</b><br>
                <small>32 MP, f/2.2, 26mm (wide) <br> 1/2.8", 0.8µm</small>
                </li>
                <li>Video (Selfie kamera) <br>
                <small>4K@30fps, 1080p@30fps</small>    
                </li>
            </ul>
        </div>
    </div>

    <h1 class="nadpis" id="telo"><?php echo translate("hw2", $localization) ?></h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/konsspecs.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Rozmery<br>
                    <small>158.5 x 73.6 x 7.9 mm</small>
                </li>
                <li>Hmotnosť<br>
                <small>172 g</small>
                </li>
                <li>Predné sklo<br>
                <small><b>Gorilla</b> Glass 3</small>
                </li>
                <li>Rám a zadný kryt<br>
                <small>Plast</small>    
                </li>
            </ul>
        </div>
    </div>

    <h1 class="nadpis" id="displej"><?php echo translate("hw3", $localization) ?></h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/display.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Typ<br>
                    <small>Super <b>AMOLED</b></small>
                </li>
                <li>Uhlopriečka<br>
                <small>6.5"</small>
                </li>
                <li>Rozlíšenie<br>
                <small>1080 x 2400 pixelov</small>
                </li>
            </ul>
        </div>
    </div>

    <h1 class="nadpis" id="pamat"><?php echo translate("hw4", $localization) ?></h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/pamat.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Vnútorná pamäť<br>
                    <small>64GB/128GB/256GB</small>
                </li>
                <li>Operačná pamäť<br>
                <small>4GB/6GB/8GB</small>
                </li>
                <li>Card slot<br>
                <small>microSDXC</small>
                </li>
            </ul>
        </div>
    </div>
    
    <h1 class="nadpis" id="komunikacie"><?php echo translate("hw5", $localization) ?></h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/komunikacie.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>WLAN<br>
                    <small>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot</small>
                </li>
                <li>Bluetooth<br>
                <small>5.0, A2DP, LE</small>
                </li>
                <li>GPS<br>
                <small>Áno, s A-GPS, GLONASS, GALILEO, BDS</small>
                </li>
                <li>USB<br>
                    <small>USB Type-C 2.0, USB On-The-Go</small>
                </li>
            </ul>
        </div>
    </div>

    <h1 class="nadpis" id="platforma"><?php echo translate("hw6", $localization) ?></h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/platforma.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>OS<br>
                    <small>Android 12, One UI 4.1</small>
                </li>
                <li>Čipset<br>
                <small>Exynos 9611</small>
                </li>
                <li>CPU<br>
                <small>Octa-core <small>(4x2.3 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53)</small></small>
                </li>
                <li>GPU<br>
                    <small>Mali-G72 MP3</small>
                </li>
            </ul>
        </div>
    </div>
    <a href="#" class="top">⇑</a>
</body>
</html>