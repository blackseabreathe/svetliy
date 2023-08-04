<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require_once('header.php');
$dir = dirname('__FILE__');


$basePrice = '2.6 млн.'; // квартиры от
$minPriceCalc = 2600000; // мин цена квартиры
$maxPriceCalc = 7600000; // макс цена квартиры
$loanTermDefault = 25; // срок кредита по умолчанию
$initialPaymentDefault = 0; // ПВ по умолчанию
$interestRateDefaultFake = 'от 5,6'; // Процентная ставка строка
$interestRateDefault = 5.6; // Процентная ставка число


$arrowRight = file_get_contents($dir.'/img/arrowRight.svg');
$icon1 = file_get_contents($dir.'/img/icon1.svg');
$icon2 = file_get_contents($dir.'/img/icon2.svg');
$icon3 = file_get_contents($dir.'/img/icon3.svg');
$icon4 = file_get_contents($dir.'/img/icon4.svg');
$icon5 = file_get_contents($dir.'/img/icon5.svg');
$icon6 = file_get_contents($dir.'/img/icon6.svg');
$icon7 = file_get_contents($dir.'/img/icon7.svg');
$icon8 = file_get_contents($dir.'/img/icon8.svg');
$closeIcon = file_get_contents($dir.'/img/closeRed.svg');

$renovation1 = file_get_contents($dir.'/img/renovation1.svg');
$renovation2 = file_get_contents($dir.'/img/renovation2.svg');
$renovation3 = file_get_contents($dir.'/img/renovation3.svg');
$renovation4 = file_get_contents($dir.'/img/renovation4.svg');
$renovation5 = file_get_contents($dir.'/img/renovation5.svg');
$renovation6 = file_get_contents($dir.'/img/renovation6.svg');
$renovation7 = file_get_contents($dir.'/img/renovation7.svg');
$renovation8 = file_get_contents($dir.'/img/renovation8.svg');
$renovation9 = file_get_contents($dir.'/img/renovation9.svg');
$renovation10 = file_get_contents($dir.'/img/renovation10.svg');
$renovation11 = file_get_contents($dir.'/img/renovation11.svg');
$renovation12 = file_get_contents($dir.'/img/renovation12.svg');

?>

<!--main screen-->
<div class="top ovh bgs boxs posr"><div class="content df cc fw">
<!--ветка-->
<img src="img/treeHeaderTopRight.png" alt="ЖК Светлый" class="treeHeaderTopRight">
<!--листья-->
<img src="img/leaf1.png" alt="" class="leaf1">
<img src="img/leaf2.png" alt="" class="leaf2">
<img src="img/leaf3.png" alt="" class="leaf3">
<img src="img/leaf4.png" alt="" class="leaf4">
<img src="img/leaf5.png" alt="" class="leaf5">



<div class="middle tac">
<h1 class="headline appear">ваша новая <span class="vinousColor">квартира</span> с готовым ремонтом <span class="vinousColor"> от <?php echo $basePrice; ?></span> рублей</h1>
<p class="vinousColor">Живите близко к природе, <br>в месте с отличной экологией <br>в 2 км. от Казани</p>
<button type="button" class="calculateMortgage toCalc">рассчитать ипотеку</button>
<div class="coockie hide hr fz12 boxs">
<div class="coockieInner df aj fw">
<p>Пожалуйста, подтвердите согласие на использование файлов cookie. Так сайт
будет работать быстрее. <a href="/coockie.php">Подробнее.</a></p>
<div class="closeCoockie df cc ttu cu">ok</div>
</div>
</div>
</div>
</div></div>

<!--mortgage-->
<div class="mortgage toTarget" data-target="mortgage"><div class="content">
<div class="mortgageDevide df jcs fw posr">
<div class="left">
<h2 class="subHeadline appear">ипотечный калькулятор</h2>
<p class="vinousColor">Рассчитайте примерный ежемесячный платеж по ипотеке <br>для покупки квартиры в ЖК «Светлый»</p>
<div class="calc df jcs fw">
<div class="input">
<label class="inputName grayColor hr">стоимость квартиры, ₽</label>
<input type="tel" name="appartmentPrice" data-min="<?php echo $minPriceCalc; ?>" data-max="<?php echo $maxPriceCalc; ?>" class="able" placeholder="от <?php echo $basePrice; ?>" value="<?php echo $minPriceCalc; ?>">
</div>
<div class="input">
<label class="inputName grayColor hr">срок кредита, лет</label>
<input type="tel" name="loanTerm" placeholder="25" value="<?php echo $loanTermDefault; ?>">
<div class="webkitTrackProgress">
<div class="webkitProgress"></div>
<input type="range" min="3" max="30" step="1" value="<?php echo $loanTermDefault; ?>">
</div>
</div>
<div class="input">
<label class="inputName grayColor hr">первоначальный взнос, ₽</label>
<input type="tel" name="initialPayment" placeholder="300 000" value="<?php echo $initialPaymentDefault; ?>">
<div class="webkitTrackProgress">
<div class="webkitProgress"></div>
<input type="range" min="0" max="<?php echo $maxPriceCalc; ?>" step="50000" value="<?php echo $initialPaymentDefault; ?>">
</div>
</div>
<div class="input">
<label class="inputName grayColor hr">процентная ставка, %</label>
<input type="text" name="interestRate" data-rate="<?php echo $interestRateDefault; ?>" disabled class="noBorder" placeholder="от 5,6" value="<?php echo $interestRateDefaultFake; ?>">
</div>


</div>

</div>
<div class="right df column jcs">
<div class="topSide">
<span class="grayColor hr">процент одобрения <br>ипотеки</span>
<div class="mortgageConfirmationPercent df alice fw">
<span class="fz36">96%</span> <img src="img/cool.svg" alt="процент одобрения ипотеки">
</div>
</div>
<div class="bottomSide posr">
<p class="grayColor hr">ежемесячный платеж*</p>
<div class="paymentPerMonth fz36"><span>19 364</span> руб.</div>
<span class="lightGrayColor fz12 hr notRealCalcResults">*расчет носит информационный характер, <br>не является публичной офертой.</span>
<button type="button" class="mortgageBtn" data-title="Рассчитать ипотеку">отправить заявку</button>
</div>


</div>

</div>
<div class="banks df aj fw">
<img src="img/bank1.png" alt="Сбербанк">
<img src="img/bank2.png" alt="ВТБ">
<img src="img/bank3.png" alt="ИнвестТоргБанк">
<img src="img/bank4.png" alt="Ак Барс">
<img src="img/bank5.png" alt="Открытие">
<img src="img/bank6.png" alt="Дом РФ">
<img src="img/bank7.png" alt="Уралсиб">
<img src="img/bank8.png" alt="РосСельхоз Банк">
</div>
</div></div>

<!--apartments-->
<div class="appartments grayBg ovh posr toTarget" data-target="layouts"><div class="content posr">
<div class="tabs">
<ul class="df aj fw tabsList posr boxs">
<li class="appear">планировки</li>
<li class="appear df alice fw">отделка <?php echo $arrowRight; ?></li>
</ul>
<div class="mainTab">
<div class="the_tab posr">
<div class="roomsCounts df alice fw hr fz14">
<span class="active df cc" data-roomes-count="1K">1К</span>
<span class="df cc" data-roomes-count="2K">2К</span>
</div>

<div class="roomsCountsTab">
<div class="appartmentsSlider owl-carousel owl-theme">

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="1K" data-quadrature="58,8" data-price="от 3,6 млн." data-mortgage-price="от 27 000" data-promo="https://google.com" data-room-quadrature="19.6" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">1K</div>
<div class="quadrature">58,8 м²</div>
</div>
<div class="appartmentMainImage posr popular ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 27 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="1K" data-quadrature="36,6" data-price="от 2,6 млн." data-mortgage-price="от 17 000" data-promo="https://google.com" data-room-quadrature="13.6" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">1K</div>
<div class="quadrature">36,6 м²</div>
</div>
<div class="appartmentMainImage posr ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 17 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="1K" data-quadrature="32,4" data-price="от 2,3 млн." data-mortgage-price="от 15 500" data-promo="https://google.com" data-room-quadrature="12.7" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">1K</div>
<div class="quadrature">32,4 м²</div>
</div>
<div class="appartmentMainImage posr popular ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 15 500 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="1K" data-quadrature="46,7" data-price="от 3,1 млн." data-mortgage-price="от 24 000" data-promo="https://google.com" data-room-quadrature="24.3" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">1K</div>
<div class="quadrature">46,7 м²</div>
</div>
<div class="appartmentMainImage posr ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 24 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

</div>

</div>

<div class="roomsCountsTab">
<div class="appartmentsSlider owl-carousel owl-theme">

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="2K" data-quadrature="78,8" data-price="от 9,6 млн." data-mortgage-price="от 49 000" data-promo="https://google.com" data-room-quadrature="24.1" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">2K</div>
<div class="quadrature">78,8 м²</div>
</div>
<div class="appartmentMainImage posr popular ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 49 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="2K" data-quadrature="66,6" data-price="от 8,2 млн." data-mortgage-price="от 41 000" data-promo="https://google.com" data-room-quadrature="26.7" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">2K</div>
<div class="quadrature">66,6 м²</div>
</div>
<div class="appartmentMainImage posr ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 41 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="2K" data-quadrature="44,4" data-price="от 3,9 млн." data-mortgage-price="от 36 500" data-promo="https://google.com" data-room-quadrature="18.7" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">2K</div>
<div class="quadrature">44,4 м²</div>
</div>
<div class="appartmentMainImage posr popular ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 36 500 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="2K" data-quadrature="49,3" data-price="от 5,1 млн." data-mortgage-price="от 37 000" data-promo="https://google.com" data-room-quadrature="20.3" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">2K</div>
<div class="quadrature">49,3 м²</div>
</div>
<div class="appartmentMainImage posr ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 37 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="2K" data-quadrature="41,4" data-price="от 4,8 млн." data-mortgage-price="от 29 000" data-promo="https://google.com" data-room-quadrature="17.6" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">2K</div>
<div class="quadrature">41,4 м²</div>
</div>
<div class="appartmentMainImage posr ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 29 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

<div class="item">
<div class="appartmentInfo cu" data-roomsCount="2K" data-quadrature="55,4" data-price="от 7,8 млн." data-mortgage-price="от 31 000" data-promo="https://google.com" data-room-quadrature="22.1" data-youtube="https://www.youtube.com/watch?v=iIRbrFnlGLw">
<div class="appartmentImages hide">
<div class="apartmentImage" data-small="img/flat1-small.jpg" data-large="img/flat1-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat2-small.jpg" data-large="img/flat2-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat3-small.jpg" data-large="img/flat3-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat4-small.jpg" data-large="img/flat4-large.jpg"></div>
<div class="apartmentImage" data-small="img/flat5-small.jpg" data-large="img/flat5-large.jpg"></div>
</div>
<div class="appartmentLayouts hide">
<div class="layout" data-small="img/layout1-small.png" data-large="img/layout1-large.png"></div>
<div class="layout" data-small="img/layout2-small.png" data-large="img/layout2-large.png"></div>
</div>
<div class="appartmentRenovation hide">
<div class="renovation" data-small="img/renovation1-small.png" data-large="img/renovation1-large.png"></div>
<div class="renovation" data-small="img/renovation2-small.png" data-large="img/renovation2-large.png"></div>
<div class="renovation" data-small="img/renovation3-small.png" data-large="img/renovation3-large.png"></div>
</div>


<div class="infoTop df aj fw fz24">
<div class="roomesCountNum">2K</div>
<div class="quadrature">55,4 м²</div>
</div>
<div class="appartmentMainImage posr ovh">
<div class="countImages fz14 hr"><span></span> фото</div>
<img src="img/flat1.png" alt="1К квартира">
</div>
<div class="appartmentQuadraturePrice fz24">от 31 000 руб./мес</div>
<button type="button" class="btnType3 appartmentInfoBtn">подробнее</button>
</div>
</div>

</div>

</div>

</div>

<div class="the_tab posr">
<div class="renovations grid df jcs fw threePerRow">
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation1; ?>
<p class="vinousColor renovationItemName">Стены отшпаклеваны</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation2; ?>
<p class="vinousColor renovationItemName">Натяжной потолок</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation3; ?>
<p class="vinousColor renovationItemName">Межкомнатные двери</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation4; ?>
<p class="vinousColor renovationItemName">Обои поклеяны</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation5; ?>
<p class="vinousColor renovationItemName">Электричество и освещение</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation6; ?>
<p class="vinousColor renovationItemName">Окна, откосы и подоконники</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>

<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation7; ?>
<p class="vinousColor renovationItemName">ПВХ плинтусы</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation8; ?>
<p class="vinousColor renovationItemName">Кафель и сантехника</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation9; ?>
<p class="vinousColor renovationItemName">Входная металлическая
дверь</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation10; ?>
<p class="vinousColor renovationItemName">Премиум линолиум</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation11; ?>
<p class="vinousColor renovationItemName">Что на кухне?</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>
<div class="renovationItem cu df cc column boxs tac" data-image="img/renovation1.jpg">
<?php echo $renovation12; ?>
<p class="vinousColor renovationItemName">Отопительное оборудование</p>
<div class="renovationText hide"><p>В светлом установлен газовый котел который обогреет вас зимой, и даст возможность импользовать горячую воду круглый год. При всем при этом, вы еще очень существенно экономите на услугах ЖКХ, т.к так вы платите только за то, сколько потребляете. В среднем 1к квартира оплачивает коммунальные платежы на сумму 2.380 рублей.</p></div>
</div>


</div>
</div>

</div></div>



</div>

<div id="appartmentDetail" class="boxs ovh">
<div class="detailTop df jcs fw boxs">
<div class="roomesCountNumQuadrature fz24"><span></span><span></span> м²</div>
<div class="nextAppartment fz14 hr cu df alice fw" data-next=""><span></span><span></span> <?php echo $arrowRight; ?></div>
<div class="detailClose boxs df cc cu arcticmodal-close"><?php echo $closeIcon; ?></div>
</div>
<div class="detailsTabs">
<div class="mainTabs">
<div class="detailsTab ovh">
<div class="roomQuadrature fz12 hr">комната <span></span> м²</div>
<div class="appartmentDetailSlider images owl-carousel owl-theme"></div>
</div>
<div class="detailsTab ovh">
<div class="apartmentFilm gray posr cu" data-youtube=""><div class="play tblrm"></div></div>
</div>
<div class="detailsTab ovh">
<div class="appartmentDetailSlider layouts owl-carousel owl-theme"></div>
</div>
<div class="detailsTab ovh">
<div class="appartmentDetailSlider renovations owl-carousel owl-theme"></div>
</div>
</div>
<ul class="df fw detailsList fz14 hr tac boxs">
<li class="boxs">интерьер</li>
<li class="boxs">видео</li>
<li class="boxs">2D/3D план</li>
<li class="boxs">отделка</li>
</ul>
</div>
<div class="apartmentBaseInfo boxs">
<div class="apartmentBasePrices df fw">
<div class="left">
<div class="ap_basePriceLabel grayColor hr">цена, ₽</div>
<div class="ap_basePrice fz24"></div>
</div>
<div class="right">
<div class="ap_basePriceLabel grayColor hr">в ипотеку</div>
<div class="ap_basePriceMortgage fz24"><span></span> руб./мес</div>
</div>
</div>
</div>
<button type="button" class="apartmentRequest requestBtn" data-title="Узнать подробнее">отправить заявку</button>
<a href="" target="_blank" class="promoPage tac fz14 hr">на промо-страницу планировки</a>





</div>

<div id="renovationDetail" class="boxs ovh">
<div class="detailTop df jcs fw boxs">
<div class="renovationName fz24"></div>
<div class="renovationClose boxs df cc cu arcticmodal-close"><?php echo $closeIcon; ?></div>
</div>
<div class="renovationImage ovh"><img src="" alt="Отделка помещений ЖК Светлый"></div>
<div class="renovationTextWrapper boxs ovh">
<div class="renovationTextInner fz14 hr"></div>
</div>

<button type="button" class="renovationRequest fz14 requestBtn" data-title="Запишитесь <br>на экскурсию">записаться на экскурсию</button>
</div>





</div>

<!--top 3 of privileges-->
<div class="privileges posr boxs ovh toTarget" data-target="superiority"><div class="content">
<div class="privilegesTabs">
<div class="privilegesList subHeadlineInitial boxs df aifs jcs fw posr">
<div class="privilegesItem posr df column aifs appear"><span class="posr">индивидуальное <br>отопление <?php echo $arrowRight; ?></span>
<button type="button" class="allOfPrivileges btnType2">все преимущества</button>
</div>
<div class="privilegesItem posr df column aife appear"><span class="posr">низкая <br>плата жкх <?php echo $arrowRight; ?></span>
<button type="button" class="allOfPrivileges btnType2">все преимущества</button>
</div>
<div class="privilegesItem posr df column aife appear"><span class="posr">шумо- <br>изоляция <?php echo $arrowRight; ?></span>
<button type="button" class="allOfPrivileges btnType2">все преимущества</button>
</div>
</div>
</div>
<div class="privilegesBoxes vinousColor">
<div class="privilegesBox df fw cc">
<div class="privilegesBg bgs" data-bg="img/privileges.jpg"></div>
<div class="privilegesInfo ovh tblrm boxs">
<div class="privilegesInfoInner posr">
<p>Благодаря собственной сети котельных, «Светлый» имеет возможность питать дома теплом в любую погоду и  полностью автономен</p>
<p>Установленный газовый котёл помимо отопления помещения, также справляется с функцией подогрева воды, для обеспечения бытовых нужд.</p>
<button type="button" class="allOfPrivilegesMobile hide btnType2">все преимущества</button>
<img src="img/waterHeater.jpg" alt="Водонагреватель" class="privilegesInfoImage">
</div></div></div>
<div class="privilegesBox df fw cc">
<div class="privilegesBg bgs" data-bg="img/privileges2.jpg"></div>
<div class="privilegesInfo ovh tblrm boxs">
<div class="privilegesInfoInner posr">
<p>Низкая плата за ЖКХ ресурсы. Летом 1 000 рублей за все, зимой 2 000 рублей за все.</p>
<p>Все благодаря дешевому газу, газовые плиты, отопление вместе электрических.</p>
<button type="button" class="allOfPrivilegesMobile hide btnType2">все преимущества</button>
<img src="img/waterHeater.jpg" alt="Водонагреватель" class="privilegesInfoImage">
</div></div></div>
<div class="privilegesBox df fw cc">
<div class="privilegesBg bgs" data-bg="img/privileges3.jpg"></div>
<div class="privilegesInfo ovh tblrm boxs">
<div class="privilegesInfoInner posr">
<p>Очень хорошая шумо и вибро изоляция. Вы не услышите соседей.</p>
<p>Специальным профессиональным материалом покрыты все плиты перекрытия, а также стены в доме.</p>
<button type="button" class="allOfPrivilegesMobile hide btnType2">все преимущества</button>
<img src="img/waterHeater.jpg" alt="Водонагреватель" class="privilegesInfoImage">
</div></div></div>


</div>






</div></div>


<!--reviews-->
<div class="reviews grayBg toTarget" data-target="reviews">
<div class="whiteLine boxs"><div class="content"><h2 class="subHeadline appear">отзывы жителей</h2></div></div>
<div class="content">
<div class="reviewSlider owl-carousel owl-theme">
<div class="item">
<div class="reviewInfo cu" data-youtube="https://www.youtube.com/watch?v=0okuAwqTHs0">
<div class="name fz24">Артем и Гузель</div>
<div class="photo ovh posr"><img src="img/review1.jpg" alt="Отзывы ЖК Светлый"><div class="play tblrm"></div></div>
<p class="hr">« ...Чувствуем, что это наш дом, наше безопасное место, так много пространства, и та самая природа прямо за дверью... »</p>
</div></div>
<div class="item">
<div class="reviewInfo cu" data-youtube="https://www.youtube.com/watch?v=0okuAwqTHs0">
<div class="name fz24">Лида и Кармелла</div>
<div class="photo ovh posr"><img src="img/review2.jpg" alt="Отзывы ЖК Светлый"><div class="play tblrm"></div></div>
<p class="hr">« ...Чувствуем, что это наш дом, наше безопасное место, так много пространства, и та самая природа прямо за дверью... »</p>
</div></div>
<div class="item">
<div class="reviewInfo cu" data-youtube="https://www.youtube.com/watch?v=0okuAwqTHs0">
<div class="name fz24">Майкл и Алиса</div>
<div class="photo ovh posr"><img src="img/review3.jpg" alt="Отзывы ЖК Светлый"><div class="play tblrm"></div></div>
<p class="hr">« ...Чувствуем, что это наш дом, наше безопасное место, так много пространства, и та самая природа прямо за дверью... »</p>
</div></div>
<div class="item">
<div class="reviewInfo cu" data-youtube="https://www.youtube.com/watch?v=0okuAwqTHs0">
<div class="name fz24">Максим и Анна</div>
<div class="photo ovh posr"><img src="img/review1.jpg" alt="Отзывы ЖК Светлый"><div class="play tblrm"></div></div>
<p class="hr">« ...Чувствуем, что это наш дом, наше безопасное место, так много пространства, и та самая природа прямо за дверью... »</p>
</div></div>
<div class="item">
<div class="reviewInfo cu" data-youtube="https://www.youtube.com/watch?v=0okuAwqTHs0">
<div class="name fz24">Роза и Данис</div>
<div class="photo ovh posr"><img src="img/review2.jpg" alt="Отзывы ЖК Светлый"><div class="play tblrm"></div></div>
<p class="hr">« ...Чувствуем, что это наш дом, наше безопасное место, так много пространства, и та самая природа прямо за дверью... »</p>
</div></div>

</div>

</div></div>

<!--photo gallery-->
<div class="gallery grayBg posr toTarget" data-target="gallery"><div class="content">
<div class="galleryAndTour df aj fw posr">
<h2 class="subHeadlineInitial appear cu lightGrayColor active">фотогалерея</h2>
<h2 class="subHeadlineInitial appear cu lightGrayColor posr">3D-тур <?php echo $arrowRight; ?></h2>
</div>
<div class="photoBoxes">
<div class="photoBox"><div class="albums df jcs fw">
<div class="album cu df column">
<div class="seasonName fz24">весна</div>
<div class="seasonImage ovh"><img src="img/spring.jpg" alt="Весна"></div>
<div class="albumImages hide">
<div class="albumImage" data-large="img/spring1.jpg"></div>
<div class="albumImage" data-large="img/spring2.jpg"></div>
</div>

</div>
<div class="album cu df column">
<div class="seasonName fz24">лето</div>
<div class="seasonImage ovh"><img src="img/summer.jpg" alt="Лето"></div>
<div class="albumImages hide">
<div class="albumImage" data-large="img/summer1.jpg"></div>
<div class="albumImage" data-large="img/summer2.jpg"></div>
</div>
</div>
<div class="album cu df column">
<div class="seasonName fz24">осень</div>
<div class="seasonImage ovh"><img src="img/autumn.jpg" alt="Осень"></div>
<div class="albumImages hide">
<div class="albumImage" data-large="img/autumn1.jpg"></div>
<div class="albumImage" data-large="img/autumn2.jpg"></div>
</div>
</div>
<div class="album cu df column">
<div class="seasonName fz24">зима</div>
<div class="seasonImage ovh"><img src="img/winter.jpg" alt="Зима"></div>
<div class="albumImages hide">
<div class="albumImage" data-large="img/winter1.jpg"></div>
<div class="albumImage" data-large="img/winter2.jpg"></div>
</div>
</div>
</div></div>
<div class="photoBox">
<div class="tour3D posr df cc cu">
<div class="playBtnBig posr"></div>
</div>

</div>
</div>


</div></div>


<!--superiorities-->
<div class="superiorities posr" class="ovh"><div class="content">
<div class="superioritiesTitles df aj fw">
<div class="superiorityTitle subHeadline appear">преимущества</div>
<a href="https://google.com" target="_blank" class="superiorityTitle subHeadlineInitial posr appear">больше <?php echo $arrowRight; ?></a>
</div></div>
<div class="superioritiesGrid grayBg posr">
<div class="content df jcs fw tac fourPerRow">
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon1; ?></div>
<span class="fz20 maxTwoLinesText">-50% стоимости <br>жилья</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon2; ?></div>
<span class="fz20 maxTwoLinesText">заезжай <br>и живи</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon3; ?></div>
<span class="fz20 maxTwoLinesText">низкая стоимость <br>услуг жкх</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon4; ?></div>
<span class="fz20 maxTwoLinesText">благоприятная <br>экология</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon5; ?></div>
<span class="fz20 maxTwoLinesText">малоэтажные <br>надежные дома</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon6; ?></div>
<span class="fz20 maxTwoLinesText">безопаность <br>для всех</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon7; ?></div>
<span class="fz20 maxTwoLinesText">развитая <br>инфраструктура</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
<div class="superiority df cc column cu boxs">
<div class="icon"><?php echo $icon8; ?></div>
<span class="fz20 maxTwoLinesText">образование <br>и досуг</span>
<div class="hiddenText hide">
<p>В светлом, стоимость земли для строительства ниже,
чем в городе. Именно это - главная причина того, что стоимость жилья ниже, чем если бы вы собрались покупать квартиру
в самой Казани.</p>
<p>Еще один миф, что если стоимость жилья недорогая, то и качество - плохое! Это совершенно не так. Мы строим дома только из качественных материалов по российскому ГОСТ’у, 
в чем вы сами можете убедится, записавшись на экскурсию.
Кстати, мы вызовем вам такси за свой счет</p>
</div>

</div>
</div>

<div id="superiorityDetail" class="boxs df column">
<div class="sdTop boxs fz24 df jcs fw">
<div class="sdName"></div>
<div class="sdClose cu boxs df cc cu arcticmodal-close"><?php echo $closeIcon; ?></div>
</div>
<div class="sdIcon df cc"></div>
<div class="sdText fz14 hr boxs ovh posr">
<div class="sdTextInner"></div>
</div>
<div class="sdBtns df aj fw boxs">
<form action="https://google.com" target="_blank"><button type="submit" class="btnType4 allOfSuperiorities">все преимущества</button></form>
<button type="button" class="excursion requestBtn" data-title="Запишитесь <br>на экскурсию">записаться на экскурсию</button>
</div>
</div>


</div>


<div class="knowMore hide grayColor tac fz10 hr">узнайте о преимуществах на собственном опыте. <span class="vinousColor requestBtn" data-title="Запишитесь <br>на экскурсию">Запишитесь <br>на экскурсию</span></div>
</div>



<?php require_once('footer.php'); ?>