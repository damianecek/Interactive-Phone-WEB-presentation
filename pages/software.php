<?php
    session_start();
?>
    <?php include '../includes/header.php' ?> 
    <div class="carousel">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <a href="#knox"><img src="/images/carouselknox.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#bixby"><img src="/images/carouselbixby.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#game"><img src="/images/carouselgame.jpg"></a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <a href="#one"><img src="/images/carouselone.jpg"></a>
            </div>
            <label for="carousel-4" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-4" class="carousel-control next control-3">›</label>
            <label for="carousel-3" class="carousel-control prev control-4">‹</label>
            <label for="carousel-1" class="carousel-control next control-4">›</label>
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
            </ol>
        </div>
    </div>

    <h1 class="nadpis" id="knox">Knox</h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/knox.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Chránené s Knox<br>
                    <small>Bezpečnostná platforma Knox je zabudovaná do zariadení Samsung a zabezpečuje ich od chvíle, keď ich rozbalíte a zapnete</small>
                </li>
                <li>Izolácia dát <br>
                <small>Vďaka zabudovaniu do každého komponentu môžu byť vaše citlivé údaje úplne izolované na bezpečnom mieste</small>
                </li>
                <li>Šifrovanie dát <br>
                <small>Vďaka bezpečnostnej platforme Knox sú vaše údaje uložené a zostávajú v zašifrovanom stave aj v prípade krádeže alebo straty</small>
                </li>
                <li>Ochrana počas chodu <br>
                <small>Zariadenie Samsung vždy beží v bezpečnom stave a v reálnom čase blokuje akýkoľvek neoprávnený prístup k jadru telefónu</small>    
                </li>
            </ul>
        </div>
    </div>
    <h1 class="nadpis" id="bixby">Bixby</h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/bixby.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Hlasový asistent<br>
                    <small>Bixby vám dáva kontrolu nad rôznymi funkciami a natívnymi službami zariadenia Galaxy. Môžete si tak intuitívne a pohodlne užívať rozmanité vlastnosti zariadenia</small>
                </li>
                <li>Bixby + SmartThings <br>
                <small>Spravujte inteligentné zariadenia iba pomocou hlasu. Ak sú zariadenia pripojené k aplikácii SmartThings, Bixby je pripravený počúvať a vykonávať vaše požiadavky</small>
                </li>
                <li>Bixby Vision <br>
                <small>Bixby Vision ponúka rôzne funkcie, ktoré vám uľahčia spoznávanie sveta okolo vás</small>
                </li>
                <li>Vision aj pre zrakovo postihnutých <br>
                    <small>Bixby Vision ponúka možnosti zjednodušenia ovládania, ktoré pomáhajú zrakovo postihnutým. Bixby Vision sa ľahko nastavuje a má jednoduché rozhranie. Slovne opisuje to, čo vidí, takže používatelia lepšie pochopia svet naokolo</small>
                </li>
            </ul>
        </div>
    </div>
    <h1 class="nadpis" id="game">Game Booster</h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/controller.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Výkon<br>
                    <small>Softwárové riešenie Game Booster zaisťuje čo najefektívnejšie využitie hardwarových komponentov na optimalizáciu výkonu, vďaka čomu budete mať ešte lepší zážitok z hry</small>
                </li>
                <li>Optimálne využitie pamäte <br>
                <small>Game Booster sa takisto postará o vašu pamäť, čoho výsledkom je vyšší výkon</small>
                </li>
                <li>Teplota a výdrž batérie<br>
                <small>Vďaka Game Boosteru sa už nemusíte trápiť s prehrievaním zariadenia alebo so sledovaním batérie, o všetko sa postará</small>
                </li>
                <li>Informačný panel <br>
                    <small>Všetky potrebné informácie o zariadení, teplota, stav pamäte a stav batérie nájedete v tomto paneli, takisto aj iné informácie ako napríklad čas strávený pri hraní</small>
                </li>
            </ul>
        </div>
    </div>
    <h1 class="nadpis" id="one">One UI</h1>

    <div class="container">
        <div class="specsimage">
            <img src="/images/one.png" alt="">
        </div>
        <div class="aside">
            <ul class="specs">
                <li>Radosť z používania<br>
                    <small>Používateľské rozhranie One UI je tak intuitívne a príjemné, ako je to len možné. Vďaka perfektnej spolupráci hardvéru a softvéru bude práca s telefónom ešte príjemnejšia a rýchlejšia</small>
                </li>
                <li>Rýchlosť <br>
                <small>Určite vás poteší ušetrený čas zaistený intuitívnosťou One UI, vďaka množstvu režimov a funkcií upravených pre rôzne situácie</small>
                </li>
                <li>Práca <br>
                <small>One UI je výnimočne presvedčivé v oblasti osobnej optimalizácie a uľahčuje vám každodennú prácu tým, že vám umožňuje jednoducho vybavovať veci vo všetkých zariadeniach Galaxy</small>
                </li>
                <li>Prispôsobenie <br>
                    <small>Prispôsobte si prostredie Galaxy tak, ako sa vám páči, a navrhnite ho tak, aby ste sa mohli vyjadriť končekmi prstov</small>
                </li>
            </ul>
        </div>
    </div>
    <a href="#" class="top">⇑</a>
</body>
</html>