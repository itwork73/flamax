<?php
/**
 * Template Name: Технология
 */
?>

<?
// result modifier


$thisID = get_the_ID();

$outputArray = array(
    "CONTENT"=>array(
        "CONTENT_PREVIEW"=>get_post_field('post_content', $thisID),
    ),
    "IMAGE_GALLERY"=>get_field('tech_images', $thisID),
    "PARTNERS"=>array()
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

$tempImageArr = [];

if ($outputArray["IMAGE_GALLERY"]) {
    foreach($outputArray["IMAGE_GALLERY"] as $key => $value){
        $tempImageArr[] = $value["sizes"]["large"];
    }
}

$outputArray["IMAGE_GALLERY_URL"] = $tempImageArr;

//echo '<pre>';var_dump($tempImageArr);echo'</pre>';die();

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

    <div class="is-technology-page" data-is="technology-page" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_URL"])?>'>

        <div class="swiper-container ss-container" data-node="swiperMain">
            <div class="swiper-wrapper sw-wrapper-w">

                <?$outputArray["CONTENT"]["CONTENT_PREVIEW"]?>

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
