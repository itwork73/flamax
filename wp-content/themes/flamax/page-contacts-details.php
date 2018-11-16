<?php
/**
 * Template Name: Контакты детальня
 */
?>


<?
// result modifier

$outputArray = array(
    "OFFICES"=>array(),
    "THIS_OFFICE"=>array()
);

// offices

$inputArray = get_pages(array(
    "child_of"=>B_DATA_ARRAY["BLOCKS"]["OFFICES"],
    "sort_order" =>"ASC",
    "sort_column" =>"menu_order",
    "post_type" =>"page",
    "post_status" =>"publish"
));

foreach($inputArray as $key => $thisPage){
    $thisID = $thisPage->ID;

    $outputArray["OFFICES"][] = array(
        "ID"=>$thisID,
        "TITLE"=>get_post_field('post_title', $thisID),
        "LINK"=>get_page_link($thisID),
        "POST_LINK"=>get_post_field('post_name', $thisID),
        "PREVIEW"=>get_post_field('post_content', $thisID),
        "MAP_LATLNG"=>get_field('map_latlng', $thisID),
        "MAP_ZOOM"=>get_field('map_zoom', $thisID),
        "IMAGE_GALLERY"=>get_field('office_images', $thisID)
    );
}

$thisID = get_the_ID();

$outputArray["THIS_OFFICE"] = array(
    "ID"=>$thisID,
    "TITLE"=>get_post_field('post_title', $thisID),
    "LINK"=>get_page_link($thisID),
    "POST_LINK"=>get_post_field('post_name', $thisID),
    "PREVIEW"=>get_post_field('post_content', $thisID),
    "MAP_LATLNG"=>get_field('map_latlng', $thisID),
    "MAP_ZOOM"=>get_field('map_zoom', $thisID),
    "IMAGE_GALLERY"=>get_field('office_images', $thisID)
);

$tempImageArr = [];

if ($outputArray["THIS_OFFICE"]["IMAGE_GALLERY"]) {
    foreach($outputArray["THIS_OFFICE"]["IMAGE_GALLERY"] as $key => $value){
        $tempImageArr[] = $value["sizes"]["large"];
    }
}

$outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"] = $tempImageArr;

//echo '<pre>';var_dump($outputArray["THIS_OFFICE"]);echo'</pre>';exit();

?>

<?
// custom state
$bCustomState = array(
    "body"=>"",
    "header"=>""
);

get_header();
?>


<div class="page-default">

    <div class="wrapper">


        <div class="is-page-contacts">


            <div class="is-header-layout">
                <div class="hl-left">
                    <h1>
                        Контакты
                    </h1>
                </div>
                <div class="hl-right">
                    <div class="is-tabs-nav" data-is="tabs-nav-active">
                        <a class="is-tabs-link" href="/contacts/">
                            Сотрудники
                        </a>

                        <?foreach($outputArray["OFFICES"] as $key => $value):?>
                            <?
                                $activeClass = "";
                                if(B_DATA_ARRAY["URI_ARRAY"][1] == $value["POST_LINK"]) {
                                    $activeClass = " active";
                                }
                            ?>
                            <a class="is-tabs-link <?=$activeClass?>" href="<?=$value["LINK"]?>">
                                <?=$value["TITLE"]?>
                            </a>
                        <?endforeach?>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

            <div class="is-contacts-map" data-is="contacts-map" <?if($outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"]):?> data-shift="1"<?endif?>>
                <div class="cm-layout">
                    <div class="cm-preview">
                        <div class="cm-preview-content">
                            <?=$outputArray["THIS_OFFICE"]["PREVIEW"]?>
                        </div>
                        <div class="cm-action">
                            <a class="is-button-a" data-gclick="showOrderModal" href="#">
                                Оставить заявку
                            </a>
                        </div>

                        <div class="a-contacts-slider">

                            <div class="a-cs-header">
                                Фотогалерея
                            </div>

                            <?if(count($outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"])>0):?>
                                <div class="is-wide-slider" data-is="wide-slider" data-images='<?=json_encode($outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"])?>'>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">

                                            <?foreach($outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"] as $key => $value):?>

                                                <div class="swiper-slide">
                                                    <div class="ws-cell" data-gclick="showGalleryModal" data-value="<?=$key?>">
                                                        <div class="full-size img-cover" style="background-image:url('<?=$value?>');"></div>
                                                    </div>
                                                </div>

                                            <?endforeach?>

                                        </div>
                                    </div>

                                    <a class="ws-arrow ws-arrow-prev" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                            <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                                        </svg>
                                    </a>

                                    <a class="ws-arrow ws-arrow-next" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                            <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
                                        </svg>
                                    </a>
                                </div>
                            <?endif?>

                        </div>

                    </div>
                    <div class="cm-map">
                        <?
                            $mapArray = explode(",", $outputArray["THIS_OFFICE"]["MAP_LATLNG"]);
                            $mapLat = trim($mapArray[0]);
                            $mapLng = trim($mapArray[1]);
                        ?>
                        <div class="cm-ymap" data-node="cYmap" data-lat="<?=$mapLat?>" data-lng="<?=$mapLng?>" data-zoom="<?=$outputArray["THIS_OFFICE"]["MAP_ZOOM"]?>"></div>
                    </div>



                </div>

            </div>

        </div>


    </div>

</div>

<?if($outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"]):?>

    <div class="is-contacts-drag-image" data-is="contacts-drag-image" data-images='<?=json_encode($outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"])?>'>
        <div class="full-size img-cover" style="background-image:url('<?=$outputArray["THIS_OFFICE"]["IMAGE_GALLERY_URL"][0]?>')"></div>
    </div>
<?endif?>



<?
get_footer();
?>



