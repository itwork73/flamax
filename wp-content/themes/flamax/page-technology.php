<?php
/**
 * Template Name: Технология
 */
?>

<?
// result modifier


$thisID = get_the_ID();

$outputArray = array(
    "IMAGE_GALLERY"=>[
            "ENGINEERING"=>get_field('tech_images_engineering', $thisID),
            "PRODUCTION"=>get_field('tech_images_production', $thisID),
            "DELIVERY"=>get_field('tech_images_delivery', $thisID),
            "MOUNTING"=>get_field('tech_images_mounting', $thisID),
            "TESTING"=>get_field('tech_images_testing', $thisID),
            "SERVICES"=>get_field('tech_images_services', $thisID),
            "WHY_FLAMAX"=>get_field('tech_images_why_flamax', $thisID)
    ],
    "IMAGE_GALLERY_COMPLETE"=>[],
    "PARTNERS"=>[]
);

$inputArray = get_pages(array(
    "child_of"=>B_DATA_ARRAY["BLOCKS"]["PARTNERS"],
    "sort_order" =>"ASC",
    "sort_column" =>"menu_order",
    "post_type" =>"page",
    "post_status" =>"publish"
));

foreach($inputArray as $key => $thisPage) {
    $thisID = $thisPage->ID;


    $outputArray["PARTNERS"][] = array(
        "ID"=>'marker'.$thisID,
        "MAP_LATLNG"=>get_field('map_latlng', $thisID),
        "IMAGE_MAIN"=>get_field('image_main', $thisID),
        "TITLE"=>get_post_field('post_title', $thisID),
        "CONTENT"=>get_post_field('post_content', $thisID)
    );
}


if ($outputArray["IMAGE_GALLERY"]) {
    foreach($outputArray["IMAGE_GALLERY"] as $key => $value){
        $outputArray["IMAGE_GALLERY_COMPLETE"][$key] = [];
        foreach($value as $image){
            $outputArray["IMAGE_GALLERY_COMPLETE"][$key][] = $image["sizes"]["extra-1600"];
        }
    }
}


//echo '<pre>';var_dump($outputArray["IMAGE_GALLERY_COMPLETE"]);echo'</pre>';die();

?>

<?
// custom state
$bCustomState = array(
    "body"=>"body-state-technology"
);

get_header();
?>



<div class="page-default page-technology">


    <script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

    <div class="is-technology-page" data-is="technology-page">

        <div class="swiper-container ss-container" data-node="swiperMain">
            <div class="swiper-wrapper ss-wrapper">

                <div class="swiper-slide ss-slide ss-slide-black" data-title="Пожарные резервуары">
                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp7.jpg')"></div>

                    <div class="wrapper">

                        <div class="is-tech-layout-a">
                            <div class="l-left">
                                <div class="l-header">
                                    Пожарные резервуары<br/>
                                    FLAMAX
                                </div>
                                <div class="l-row mar-30">
                                    <div class="l-col">
                                        Компания FLAMAX поставляет наземные сборные резервуары с гидроизолирующей мембраной для пожарного запаса воды объемом от 100 до 3000 кубических метров.
                                    </div>
                                    <div class="l-col">
                                        Уникальность технологии сборных стальных резервуаров состоит в том, что на место установки доставляется готовый к монтажу продукт в виде комплектующих, изготовленных в заводских условиях и прошедших двойной заводской контроль качества.
                                    </div>
                                </div>
                                <div class="l-row">
                                    <div class="l-col">
                                        Пожарные емкости предназначены для хранения регламентируемого запаса воды значительного объема на тех объектах, где отсутствует возможность подачи этого объема по магистральным водоводам
                                    </div>
                                    <div class="l-col">
                                        Данная технология изготовления и сборки пожарных резервуаров FLAMAX значительно повышает качество готового продукта по сравнению с емкостями, которые изготавливаются непосредственно на строительных площадках.
                                    </div>
                                </div>
                            </div>
                            <div class="l-right">
                                <div class="l-video" data-gclick="showYoutubeModal" data-value="qBxsq8b3KnA">
                                    <i></i>
                                    Смотреть<br/>
                                    видео-презентацию
                                </div>
                            </div>

                            <div class="is-mouse-play-icon"></div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide ss-slide" data-title="Производство<br/>и монтаж">
                    <div class="wrapper">
                        <div class="is-tech-layout-b">
                            <div class="l-left">
                                <div class="l-header">
                                    производство<br/>
                                    и монтаж
                                </div>
                                <div class="l-preview-parent" data-node="swiperProductionPreview"></div>
                                <div class="is-arrows">
                                    <div class="ss-arrow ss-arrow-prev" data-click="swipePrev" data-value='{"target":"swiperProduction"}'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                            <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                                        </svg>
                                    </div>
                                    <div class="ss-arrow ss-arrow-next" data-click="swipeNext" data-value='{"target":"swiperProduction"}'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                            <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="l-right">
                                <div class="swiper-container" data-node="swiperProduction">
                                    <div class="swiper-wrapper sw-wrapper-h">
                                        <div class="swiper-slide">
                                            <div class="hidden-content js-preview">
                                                <div class="l-counter" data-node="swiperProductionCounter">
                                                    01
                                                </div>
                                                <div class="l-sub-header" data-node="swiperProductionHeader">
                                                    Проектирование
                                                </div>
                                            </div>
                                            <div class="l-right-inner" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["ENGINEERING"])?>'>
                                                <div class="l-col-image">
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="0">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp8.jpg');"></div>
                                                    </div>
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp9.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="l-col-text">
                                                    <div class="l-text-group">
                                                        <div class="l-text">
                                                            Комплексныи&#774; подход к&nbsp;проектированию пожарных резервуаров дает возможность сэкономить заказчику деньги и&nbsp;время. Стальнои&#774; резервуар необходимого объема подбирается из&nbsp;перечня готовых проектов с&nbsp;учетом индивидуальных требовании&#774; в&nbsp;течении 1&ndash;3 днеи&#774;. Проектирование производится в&nbsp;строгом соответствии с&nbsp;нормативнои&#774; документациеи&#774;, допусками и&nbsp;сертификациеи&#774;.
                                                        </div>
                                                        <div class="l-text">
                                                            При проектировании решаются вопросы с&nbsp;расчетом расходов, выбором площадки размещения, составом оборудования. Производится поддержка и&nbsp;корректировка проектнои&#774; документации при согласовании в&nbsp;органах государственнои&#774; экспертизы и&nbsp;местных контролирующих организациях.
                                                        </div>
                                                        <div class="l-text">
                                                            Мы&nbsp;всегда готовы к&nbsp;сотрудничеству с&nbsp;проектными организациями и&nbsp;оказываем всестороннюю поддержку с&nbsp;самого начала разработки проекта до&nbsp;момента завершения экспертизы проектнои&#774; документации.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hidden-content js-preview">
                                                <div class="l-counter" data-node="swiperProductionCounter">
                                                    02
                                                </div>
                                                <div class="l-sub-header" data-node="swiperProductionHeader">
                                                    Изготовление
                                                </div>
                                            </div>
                                            <div class="l-right-inner" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["PRODUCTION"])?>'>
                                                <div class="l-col-image">
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="2">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp10.jpg');"></div>
                                                    </div>
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="3">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp11.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="l-col-text">
                                                    <div class="l-text-group">
                                                        <div class="l-text">
                                                            Корпус сборного пожарного резервуара выполняется из стальных листов стандартного прокатного размера 2500x1250 мм.
                                                        </div>
                                                        <div class="l-text">
                                                            Стальные листы для корпуса производятся в Европе на высокотехнологичном оборудовании и проходят двойной контроль качества.
                                                        </div>
                                                        <div class="l-text">
                                                            Толщина стальных листов и количество болтовых соединений подбираются в зависимости от ветровых, снеговых и сейсмических нагрузок на пожарный резервуар при дальнейшей эксплуатации.
                                                        </div>
                                                        <div class="l-text">
                                                            Базу бака формирует высокопрочная армированная ПВХ-мембрана, изготовленная на заводе как цельное изделие под индивидуальные размеры конкретного резервуара. Использо- вание ПВХ-мебраны обеспечивает идеальную герметичность и отсутствие контакта воды с металлическим корпусом.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hidden-content js-preview">
                                                <div class="l-counter" data-node="swiperProductionCounter">
                                                    03
                                                </div>
                                                <div class="l-sub-header" data-node="swiperProductionHeader">
                                                    Доставка
                                                </div>
                                            </div>
                                            <div class="l-right-inner" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["DELIVERY"])?>'>
                                                <div class="l-col-image l-image-link">
                                                    <div class="l-image" data-gclick="showGalleryModal" data-value="0">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp14.jpg');"></div>
                                                    </div>
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp12.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="l-col-text">
                                                    <div class="l-text">
                                                        Быстрая и экономичная доставка сборных резервуаров для пожарного запаса воды на место установки осуществляется  за счет компактной упаковки комплектующих. К примеру, для транспортировки двух резервуаров общим объемом 1000 м3 достаточно всего одной стандартной еврофуры.
                                                    </div>
                                                    <div class="l-text">
                                                        Доставка сборных стальных резервуаров FLAMAX с легкостью осуществляется в труднодоступные регионы.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hidden-content js-preview">
                                                <div class="l-counter" data-node="swiperProductionCounter">
                                                    04
                                                </div>
                                                <div class="l-sub-header" data-node="swiperProductionHeader">
                                                    Монтаж
                                                </div>
                                            </div>
                                            <div class="l-right-inner" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["MOUNTING"])?>'>
                                                <div class="l-col-image l-image-link">
                                                    <div class="l-image" data-gclick="showGalleryModal" data-value="0">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp14.jpg');"></div>
                                                    </div>
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp12.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="l-col-text">
                                                    <div class="l-text-group">
                                                        <div class="l-text">
                                                            Применение прочных болтовых соединений и современной технологии сборки позволяет производить монтаж пожарных резервуара в любое время года и в максимально короткие сроки (1000 м3 за 5-7 дней) минимальным составом бригады монтажников. Это значительно экономит и время, и деньги заказчика.
                                                        </div>
                                                        <div class="l-text">
                                                            Мы используем систему синхронного подъема элементов корпуса резервуаров, поэтому при монтаже не применяем высотных и сварочных работ и не привлекаем в работу тяжелую спецтехнику.
                                                        </div>
                                                        <div class="l-text">
                                                            Пожарные резервуары могут быть установлены как на улице, так и внутри здания/сооружения на небольшом по площади участке.
                                                        </div>
                                                        <div class="l-text">
                                                            Резервуары FLAMAX могут быть демонтированы и повторно собраны на новом месте.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hidden-content js-preview">
                                                <div class="l-counter" data-node="swiperProductionCounter">
                                                    05
                                                </div>
                                                <div class="l-sub-header" data-node="swiperProductionHeader">
                                                    Испытания
                                                </div>
                                            </div>
                                            <div class="l-right-inner" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["TESTING"])?>'>
                                                <div class="l-col-image l-image-link">
                                                    <div class="l-image" data-gclick="showGalleryModal" data-value="0">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp14.jpg');"></div>
                                                    </div>
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp12.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="l-col-text">
                                                    <div class="l-text-group">
                                                        <div class="l-text">
                                                            Гидравлическое испытание сборного резервуара осуществляется путем налива воды до проектного уровня и выдерживанием её в течение суток.
                                                        </div>
                                                        <div class="l-text">
                                                            Сначала резервуар наполняется до отметки технического минимума и отстаивается от 6 часов и более. Это позволяет проверить нижнюю часть корпуса на предмет протечек, особенно в местах установки гидростатического манометра, узла забора воды, дренажного узла, узла для сообщающегося трубопровода (при наличии), люка доступа.
                                                        </div>
                                                        <div class="l-text">
                                                            Затем, если по истечении 6 часов протечек не выявлено, пожарный резервуар заполняется полностью и отстаивается не менее 12 часов. Если по истечении 12 часов протечек не выявлено, резервуар становится пригодным к вводу в эксплуатацию.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hidden-content js-preview">
                                                <div class="l-counter" data-node="swiperProductionCounter">
                                                    06
                                                </div>
                                                <div class="l-sub-header" data-node="swiperProductionHeader">
                                                    Гарантия и&nbsp;сервисное обслуживание
                                                </div>
                                            </div>
                                            <div class="l-right-inner" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["SERVICES"])?>'>
                                                <div class="l-col-image l-image-link">
                                                    <div class="l-image" data-gclick="showGalleryModal" data-value="0">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp14.jpg');"></div>
                                                    </div>
                                                    <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp12.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="l-col-text">
                                                    <div class="l-text-group">
                                                        <div class="l-text">
                                                            Мы предоставляем гарантию на исправное функционирование пожарных резервуаров в течение 60 месяцев, начиная с даты поставки комплектующих на объект. Гарантия распространяется на все металлоконструкции, а также ПВХ мембрану, обеспечивающую герметичность резервуара. Гарантия на все сменные части составляет 12 месяцев, начиная с даты ввода в эксплуатацию или 18 месяцев с даты окончания работ по сборке резервуаров.
                                                        </div>
                                                        <div class="l-text">
                                                            Специалисты сервисного центра FLAMAX оказывают полный перечень услуг: от простого технического обследования резервуаров, насосных станций и др. оборудования до сложной замены отдельных узлов и систем.
                                                        </div>
                                                        <div class="l-text">
                                                            Сервисная стратегия нашей компании начинается с обеспечения необходимого качества оборудования еще при вводе его в работу, а также в последующем контроле состояния оборудования в процессе эксплуатации, максимальном участии в профилактическом и ремонтном обслуживании наших систем на месте их установки.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide ss-slide ss-slide-gray" data-title="Варианты<br/> планировки">
                    <div class="wrapper">
                        <div class="is-tech-layout-c">
                            <div class="l-left">

                                <div class="l-header">
                                    Варианты<br/>
                                    планировки
                                </div>
                                <div class="l-preview">
                                    Сборные стальные резервуары FLAMAX пожарного запаса воды могут располагаться на объекте тремя различными способами. Размещение пожарных резервуаров зависит от исходных данных объекта и от требований заказчика
                                </div>
                            </div>
                            <div class="l-right">

                                <div class="l-item">
                                    <div class="l-item-image" data-gclick="showGalleryModal" data-value="2">
                                        <img src="/assets/img/temp/temp15.jpg" />
                                    </div>
                                    <div class="l-item-details">
                                        Отдельно стоящие резервуары и насосная станция: это клас-сическое архитектурное решение.
                                    </div>
                                </div>

                                <div class="l-item">
                                    <div class="l-item-image" data-gclick="showGalleryModal" data-value="3">
                                        <img src="/assets/img/temp/temp16.jpg" />
                                    </div>
                                    <div class="l-item-details">
                                        Пожарные резервуары могут быть пристроены к насосной станции или к другому зданию на объекте: это экономит площадь застройки, повышает комфорт эксплуатации основных узлов, не требует обогрева водозаполненных трубопроводов в холодное время года.
                                    </div>
                                </div>

                                <div class="l-item">
                                    <div class="l-item-image" data-gclick="showGalleryModal" data-value="0">
                                        <img src="/assets/img/temp/temp17.jpg" />
                                    </div>
                                    <div class="l-item-details">
                                        Размещение резервуаров внутри здания или сооружения позволяет значительно снизить их итоговую стоимость ввиду отсутствия ветровых и снеговых нагрузок на корпус.
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-slide ss-slide" data-title="Почему Flamax">

                    <div class="wrapper">
                        <div class="is-tech-layout-d" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_COMPLETE"]["WHY_FLAMAX"])?>'>
                            <div class="l-left">
                                <div class="l-header">
                                    Почему Flamax
                                </div>
                                <div class="l-preview-parent" data-node="swiperFlamaxPreview"></div>

                                <div class="is-arrows">
                                    <div class="ss-arrow ss-arrow-prev" data-click="swipePrev" data-value='{"target":"swiperFlamax"}'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                            <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                                        </svg>
                                    </div>
                                    <div class="ss-arrow ss-arrow-next" data-click="swipeNext" data-value='{"target":"swiperFlamax"}'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                            <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="l-right">

                                <div class="swiper-container" data-node="swiperFlamax">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        01
                                                    </div>
                                                    <div class="l-preview">
                                                        В области систем пожаротушения наша компания работает с 2008 года. За это время был накоплен высокий уровень компетенции в этой сфере: нами было реализовано 79 систем пожаротушения и установлено более 100 резервуаров на 57 объектах. Это, в свою очередь, гарантирует вам соответствие нашего технического решения всем установленным нормам пожарной безопасности.
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="0">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp4.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        02
                                                    </div>
                                                    <div class="l-preview">
                                                        Мы предоставляем полный спектр услуг и реализацию проекта «под ключ»: от разработки индивидуального проекта пожарного резервуара до его монтажа и проведения гидравлических испытаний. При необходимости проект может быть доукомплектован утепленной кровлей, внутренней  и /или внешней теплоизоляцией стенок и дна резервуара, нагревательными элементами или иными источниками тепла.
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp18.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        03
                                                    </div>
                                                    <div class="l-preview">
                                                        Все комплектующие для резервуаров FLAMAX изготавливаются в заводских условиях в Европе на высокотехнологичном оборудовании и проходят двойной контроль качества
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp18.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        04
                                                    </div>
                                                    <div class="l-preview">
                                                        Продукция FLAMAX имеет необходимые отечественные и международные аккредитации, сертификаты и разрешения. Кроме того, наши резервуары соответствуют требованиям FM Global, международной компании по промышленно имущественному страхованию. 
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp18.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        05
                                                    </div>
                                                    <div class="l-preview">
                                                        Сборка резервуаров осуществляется непосредственно на объекте строительства в максимально короткие сроки (от 7 дней) бригадой из 6 человек в любое время года. Также сборка возможна в стесненных условиях внутри зданий и сооружений.
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp18.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        06
                                                    </div>
                                                    <div class="l-preview">
                                                        У нас работают только опытные специалисты! Мы никогда не использовали и не будем использовать для выполнения монтажных и технических работ низкоквалифицированную рабочую силу.
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp18.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="l-right-inner">
                                                <div class="hidden-content js-preview">
                                                    <div class="l-counter">
                                                        07
                                                    </div>
                                                    <div class="l-preview">
                                                        Для безотказной работы оборудования и увеличения срока его эксплуатации специалисты компании FLAMAX предоставляют своим заказчикам квалифицированное гарантийное и постгарантийное сервисное обслуживание.
                                                    </div>
                                                </div>
                                                <div class="l-image l-image-link" data-gclick="showGalleryModal" data-value="1">
                                                    <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp18.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-slide ss-slide" data-title="Видео-презентация">
                    <div class="wrapper">
                        <div class="is-tech-layout-e">

                            <div class="l-middle">
                                <div class="l-video-parent">
                                    <div class="is-video-player" data-is="video-player">
                                        <div class="hp-inner">
                                            <div class="full-size hp-poster">
                                                <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg');"></div>
                                                <div class="hp-play"></div>
                                            </div>
                                            <video class="full-size hp-video" controls preload="none">
                                                <source type="video/mp4" src="/assets/img/temp/temp24.mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>

                                <div class="l-action">

                                    <a class="l-button" href="#" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-10px;" width="51" height="62" viewBox="0 0 51 62">
                                            <path d="M34.7 9.9c2.2-2.62 3.67-6.27 3.27-9.9-3.15.13-6.97 2.08-9.23 4.7-2.02 2.32-3.8 6.03-3.32 9.59 3.51.27 7.1-1.77 9.29-4.39zm7.9 23.04c-.08-7.85 6.46-11.61 6.76-11.8-3.68-5.33-9.41-6.06-11.46-6.15-4.87-.48-9.51 2.85-11.99 2.85-2.47 0-6.29-2.77-10.33-2.7a15.35 15.35 0 0 0-12.96 7.77C-2.9 32.4 1.21 46.46 6.59 54.15c2.63 3.77 5.77 8 9.89 7.85 3.96-.16 5.46-2.54 10.26-2.54s6.14 2.54 10.34 2.46c4.27-.08 6.97-3.84 9.58-7.62 3.02-4.37 4.27-8.6 4.34-8.82-.1-.04-8.32-3.16-8.4-12.54z"></path>
                                        </svg>
                                        <span>
                                            Apple iPad
                                        </span>
                                    </a>

                                    <a class="l-button" href="#" target="_blank">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 88 88">
                                            <path d="m0 12.402 35.687-4.8602.0156 34.423-35.67.20313zm35.67 33.529.0277 34.453-35.67-4.9041-.002-29.78zm4.3261-39.025 47.318-6.906v41.527l-47.318.37565zm47.329 39.349-.0111 41.34-47.318-6.6784-.0663-34.739z"></path>
                                        </svg>
                                        <span>
                                            Windows PC
                                        </span>
                                    </a>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="swiper-slide ss-slide" data-title="Наши клиенты">

                    <div class="wrapper">
                        <div class="is-tech-layout-f">

                            <div class="l-middle">
                                <div class="l-row-top">

                                    <div class="l-col-preview">
                                        <div class="l-header">
                                            Наши клиенты
                                        </div>
                                        <div class="l-action">
                                            <a class="is-button-a" href="/projects/">
                                                Открыть все проекты
                                            </a>
                                        </div>
                                    </div>

                                    <div class="l-col-map">
                                        <div class="ymap" data-node="ymap"></div>
                                    </div>

                                </div>
                                <div class="l-row-bottom">

                                    <div class="is-partners-slider">
                                        <div class="swiper-container" data-node="swiperPartners">
                                            <div class="swiper-wrapper">
                                                <?foreach($outputArray["PARTNERS"] as $key => $value):?>

                                                    <?
                                                        $mapArray = explode(",", $value["MAP_LATLNG"]);
                                                        $mapLat = trim($mapArray[0]);
                                                        $mapLng = trim($mapArray[1]);
                                                    ?>

                                                    <div class="swiper-slide">
                                                        <div class="ps-partner-cell" data-node="partnerItem" data-click="showPartnerOnMap" data-value='<?=json_encode(array(
                                                                "id"=>$value["ID"],
                                                                "lat"=>$mapLat,
                                                                "lng"=>$mapLng,
                                                                "image"=>$value["IMAGE_MAIN"],
                                                                "title"=>$value["TITLE"],
                                                                "preview"=>$value["CONTENT"]
                                                        ))?>'>
                                                            <img src="<?=$value["IMAGE_MAIN"]?>" />
                                                        </div>
                                                    </div>

                                                <?endforeach?>
                                            </div>
                                        </div>

                                        <a class="ws-arrow ws-arrow-prev" href="#" data-node="swiperPartnersPrev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                                <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                                            </svg>
                                        </a>

                                        <a class="ws-arrow ws-arrow-next" href="#" data-node="swiperPartnersNext">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                                <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
                                            </svg>
                                        </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="is-tech-pager"></div>

</div>

<?
    get_footer();
?>
