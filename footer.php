<?php
$dir = dirname('__FILE__');
$arrowRight = file_get_contents($dir.'/img/arrowRight.svg');

$address = file_get_contents($dir.'/contact/address.html');
$insta = file_get_contents($dir.'/contact/insta.html'); // запрещенная соц сеть в РФ
$vk = file_get_contents($dir.'/contact/vk.html');
$instaIcon = file_get_contents($dir.'/img/insta.svg'); // запрещенная соц сеть в РФ
$vkIcon = file_get_contents($dir.'/img/vk.svg');
$phone = file_get_contents($dir.'/contact/phone.html');
$phoneIcon = file_get_contents($dir.'/img/call-icon.svg');
$whatsapp = file_get_contents($dir.'/contact/whatsapp.html');
$whatsappIcon = file_get_contents($dir.'/img/whatsapp.svg');
$shareIcon = file_get_contents($dir.'/img/share.svg');
$closeIcon = file_get_contents($dir.'/img/closeRed.svg');
$validIcon = file_get_contents($dir.'/img/valid.svg');


$promocode = 'ЖАРА-23';
$month = 'июль';


?>

<footer class="posr thanxBoxInside toTarget" data-target="contact"><div class="content">
<div class="contactsRoute df aj fw">
<h2 class="subHeadlineInitial formTitle cu active appear">свяжитесь с нами</h2>
<h2 class="subHeadlineInitial posr cu lightGrayColo appear">маршрут <?php echo $arrowRight; ?></h2>
</div>
<div class="contactsRouteBoxes">
<div class="contactsRouteBox">
<div class="contacts df jcs fw">
<div class="contact df column jcs">
<div class="addressAndSocs df column jcs">
<div class="address grayColor hr"><?php echo $address; ?></div>
<div class="socs df alice fw">
<a href="https://instagram.com" target="_blank"><?php echo $instaIcon; ?></a>
<a href="https://instagram.com" target="_blank"><?php echo $vkIcon; ?></a>
</div>
</div>
<div class="phoneAndWhatsapp">
<div class="phone fz36 df alice fw"><?php echo $phoneIcon; ?> <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
<a href="<?php echo $whatsapp; ?>" class="waHref df alice fw hr" target="_blank"><?php echo $whatsappIcon; ?> написать в Whatsapp</a>
</div>
<button type="button" class="btnType4 posr clipBoard shareContacts df alice fw asfs"><?php echo $shareIcon; ?> <span>поделиться контактами</span></button>
</div>
<div class="contact df column jcs">
<div class="showAfterFormSent hide tac posr">
<div class="show df column jcs">
<p class="ttu vinousColor cu tellMeWhy">совсем скоро<span class="redColor">*</span> вам позвонит наш специалист</p>
<div class="validIcon"><?php echo $validIcon; ?></div>
<button type="button" class="onMoreTime hb">еще раз</button>
<div class="why hide boxs tal">
<div class="because fz12 hr">
<p>зависит от загруженности Call-центра. Среднее время ожидания - 30 минут.</p>
</div>
</div>
</div>
</div>
<form class="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="requestName">
<div class="inputs posr">
<div class="inputLabel hr grayColor">имя</div>
<input type="text" name="name" class="uppercase" placeholder="Ваше имя">
</div>
<div class="inputs posr">
<div class="inputLabel hr grayColor">телефон</div>
<input type="tel" name="tell" placeholder="Ваше телефон">
</div>
<button type="button" class="request" name="send">отправить заявку</button>
<div class="byClicking fz12 lightGrayColor">нажимая на кнопку «Отправить заявку» вы даете согласие на обработку ваших данных 
согласно нашей <span class="privacy cu">политике конфиденциальности</span>.</div>
</form>
</div>
<div class="contact banner boxs df column jcs posr">
<div class="bannerInner boxs posr vinousColor">
<h3 class="lilHeadline36">от дома до дверей отдела продаж</h3>
<p class="hr">запишитесь <br>на экскурсию <br>до конца июля! <br>Мы вызовем <br>вам такси до <br>отдела продаж <br>за свой счет!
<span>промокод: <br><?php echo $promocode; ?></span>
</p>
<?php echo $arrowRight; ?>
</div>
<div class="promoMonth ttu fz94"><?php echo $month; ?></div>

</div>
</div>
</div>

<div class="contactsRouteBox"><div id="map"></div></div>


</div>
</div>
<div class="postFooter fz14 hr"><div class="content df jcs fw">
<div class="left">
<div class="footerLogo"><img src="img/footerLogo.svg" alt="ЖК Светлый Куюки"></div>
<p class="fz12">ОАО ДК «Антей»</p>
</div>
<div class="right df column jcs posr">
<div class="footerTop df aj fw">
<div class="footerMenu">
<ul class="df alice fw">
<li class="cu" data-target="mortgage"><span>ипотека</span></li>
<li class="cu" data-target="superiority"><span>преимущества</span></li>
<li class="cu" data-target="layouts"><span>планировки</span></li>
<li class="cu" data-target="reviews"><span>отзывы</span></li>
<li class="cu" data-target="gallery"><span>галерея</span></li>
<li class="cu" data-target="contact"><span>контакты</span></li>
</ul>
</div>
<div class="declarations"><a href="https:google.com" target="_blank">проектные декларации</a></div>
<div class="phoneMobile hide"><div class="phone fz36 df alice fw"><?php echo $phoneIcon; ?> <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div></div>
</div>
<div class="footerBottom df aj fw fz12">
<div class="privacy cu">Политика конфиденциальности</div>
<div class="copyright">© 2013 - <?php echo date('Y'); ?>. <span>Любое копирование и использование материалов сайта запрещено.</span></div>
</div>
</div>


</div></div>
</footer>

<!-- callback -->
<div style="display:none">
<div class="box-modal boxs thanxBoxInside cloudsTop" id="callback">
<div class="modal-close arcticmodal-close df cc"><?php echo $closeIcon; ?></div>
<div class="formTitle boxs subHeadline">мы перезвоним</div>
<p class="formText boxs vinousColor">Заполните заявку в форме ниже</p>
<div class="showAfterFormSent hide tac posr">
<div class="show df column jcs">
<p class="ttu vinousColor cu tellMeWhy">совсем скоро<span class="redColor">*</span> вам позвонит наш специалист</p>
<div class="validIcon"><?php echo $validIcon; ?></div>
<button type="button" class="onMoreTime hb">еще раз</button>
<div class="why hide boxs tal">
<div class="because fz12 hr">
<p>зависит от загруженности Call-центра. Среднее время ожидания - 30 минут.</p>
</div>
</div>
</div>
</div>
<form method="post" enctype="multipart/form-data" class="callbackForm">
<input type="hidden" name="requestName">
<div class="inputs posr">
<div class="inputLabel hr grayColor">имя</div>
<input type="text" name="name" class="uppercase" placeholder="Ваше имя">
</div>
<div class="inputs posr">
<div class="inputLabel hr grayColor">телефон</div>
<input type="tel" name="tell" placeholder="Ваше телефон">
</div>
<button type="button" class="callbackBtn" name="send">отправить заявку</button>
<div class="byClicking fz12 lightGrayColor tac">нажимая на кнопку «Отправить заявку» вы даете согласие на обработку ваших данных 
согласно нашей <span class="privacy cu">политике конфиденциальности</span>.</div>
</form>
</div></div>

<!-- калькулятор форма обратной связи -->
<div style="display:none">
<div class="box-modal boxs thanxBoxInside cloudsTop" id="calcBox">
<div class="modal-close arcticmodal-close df cc"><?php echo $closeIcon; ?></div>
<div class="formTitle boxs subHeadline"></div>
<p class="formText boxs vinousColor">Заполните заявку в форме ниже</p>
<div class="showAfterFormSent hide tac posr">
<div class="show df column jcs">
<p class="ttu vinousColor cu tellMeWhy">совсем скоро<span class="redColor">*</span> вам позвонит наш специалист</p>
<div class="validIcon"><?php echo $validIcon; ?></div>
<button type="button" class="onMoreTime hb">еще раз</button>
<div class="why hide boxs tal">
<div class="because fz12 hr">
<p>зависит от загруженности Call-центра. Среднее время ожидания - 30 минут.</p>
</div>
</div>
</div>
</div>
<form method="post" enctype="multipart/form-data" class="calcForm">
<input type="hidden" name="requestName">
<input type="hidden" name="appartmentPrice">
<input type="hidden" name="loanTerm">
<input type="hidden" name="initialPayment">
<input type="hidden" name="interestRate">
<input type="hidden" name="paymentPerMonth">
<div class="inputs posr">
<div class="inputLabel hr grayColor">имя</div>
<input type="text" name="name" class="uppercase" placeholder="Ваше имя">
</div>
<div class="inputs posr">
<div class="inputLabel hr grayColor">телефон</div>
<input type="tel" name="tell" placeholder="Ваше телефон">
</div>
<button type="button" class="calcBoxBtnSend" name="send">отправить заявку</button>
<div class="byClicking fz12 lightGrayColor tac">нажимая на кнопку «Отправить заявку» вы даете согласие на обработку ваших данных 
согласно нашей <span class="privacy cu">политике конфиденциальности</span>.</div>
</form>
</div></div>

<!-- типичные заявки на обратную связь -->
<div style="display:none">
<div class="box-modal boxs thanxBoxInside cloudsTop" id="requestBox">
<div class="modal-close arcticmodal-close df cc"><?php echo $closeIcon; ?></div>
<div class="formTitle boxs subHeadline"></div>
<p class="formText boxs vinousColor">Заполните заявку в форме ниже</p>
<div class="showAfterFormSent hide tac posr">
<div class="show df column jcs">
<p class="ttu vinousColor cu tellMeWhy">совсем скоро<span class="redColor">*</span> вам позвонит наш специалист</p>
<div class="validIcon"><?php echo $validIcon; ?></div>
<button type="button" class="onMoreTime hb">еще раз</button>
<div class="why hide boxs tal">
<div class="because fz12 hr">
<p>зависит от загруженности Call-центра. Среднее время ожидания - 30 минут.</p>
</div>
</div>
</div>
</div>
<form method="post" enctype="multipart/form-data" class="requestForm">
<input type="hidden" name="requestName">
<div class="inputs posr">
<div class="inputLabel hr grayColor">имя</div>
<input type="text" name="name" class="uppercase" placeholder="Ваше имя">
</div>
<div class="inputs posr">
<div class="inputLabel hr grayColor">телефон</div>
<input type="tel" name="tell" placeholder="Ваше телефон">
</div>
<button type="button" class="requestBtnSend" name="send">отправить заявку</button>
<div class="byClicking fz12 lightGrayColor tac">нажимая на кнопку «Отправить заявку» вы даете согласие на обработку ваших данных 
согласно нашей <span class="privacy cu">политике конфиденциальности</span>.</div>
</form>
</div></div>

<!-- youtube -->
<div style="display:none">
<div class="box-modal boxs" id="apartmentFilmWrapper">
<div class="modal-close arcticmodal-close df cc"><?php echo $closeIcon; ?></div>
<div class="apartmentFilmPlaceholder"></div></div></div>
<!--3д тур-->
<div style="display:none">
<div class="box-modal boxs" id="tour3dWrapper">
<div class="modal-close arcticmodal-close df cc"><?php echo $closeIcon; ?></div>
<div class="Tour3dPlaceholder"></div>
</div></div>
<!--политика-->
<div style="display:none">
<div class="box-modal boxs" id="privacy">
<div class="modal-close arcticmodal-close df cc"><?php echo $closeIcon; ?></div>
<div class="modal-content-box">
<div class="pol">
<h3 class="headline">политика <br>конфиденциальности</h3>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">1. Термины</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">2. Сбор и обработка персональных данных</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">3. Порядок обработки персональных данных</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">4. Изменение персональных данных</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">5. Защита персональных данных</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">6. Персональные данные третьих лиц, используемые пользователями</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">7. Иные положения</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
<div class="spread posr">
<div class="spreadTitle hb fz32 cu">8. Контактная информация оператора</div>
<div class="spreadOut hide">
<p>1.1. К настоящей Политике конфиденциальности и отношениям между Пользователем и Оператором, возникающим в связи с применением Политики конфиденциальности, подлежит применению право Российской Федерации.</p>
<p>1.2. Все возможные споры, вытекающие из настоящего Соглашения, подлежат разрешению в соответствии с действующим законодательством по месту регистрации Оператора. Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию составляет 7 (семь) рабочих дней.</p>
<p>1.3. Если по тем или иным причинам одно или несколько положений Политики конфиденциальности будут признаны недействительными или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных положений Политики конфиденциальности.</p>
<p>1.4. Оператор имеет право в любой момент изменять Политику конфиденциальности, полностью или частично, в одностороннем порядке, без предварительного согласования с Пользователем. Все изменения вступают в силу на следующий день после размещения на Сайте.</p>
<p>1.5. Пользователь обязуется самостоятельно следить за изменениями Политики конфиденциальности путем ознакомления с актуальной редакцией.</p>
</div>
</div>
</div></div></div></div>
<!--Google библиотека-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--owl-->
<script src="js/owl.carousel.min.js"></script>
<!--fancybox-->
<script src="js/jquery.fancybox.min.js?v=<? include('cache_v.html'); ?>"></script>
<!--scripts-->
<script src="js/main.js?v=<? include('cache_v.html'); ?>"></script>
<!--modal-->
<script src="modal/js/modal.js"></script>
<link rel="stylesheet" type="text/css" href="modal/css/modal.css">
<!--ymaps-->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=880b9632-42f8-4cf6-96ff-21717497cdac" type="text/javascript"></script>
</body></html>