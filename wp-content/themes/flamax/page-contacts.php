<?php
/**
 * Template Name: Главная страница
 */
?>

<?
// result modifier

$outputArray = array(
    "PERSONAL"=>array(),
    "OFFICES"=>array()
);


// personal
$inputArray = get_pages(array(
    "child_of"=>B_DATA_ARRAY["BLOCKS"]["PERSONAL"],
    "sort_order" =>"ASC",
    "sort_column" =>"menu_order",
    "post_type" =>"page",
    "post_status" =>"publish"
));

foreach($inputArray as $key => $thisPage){
    $thisID = $thisPage->ID;

    $outputArray["PERSONAL"][] = array(
        "ID"=>$thisID,
        "PERSON_NAME"=>get_post_field('post_title', $thisID),
        "PERSON_ROLE"=>get_field('persone_role', $thisID),
        "PERSON_DETAILS"=>get_field('persone_details', $thisID),
        "PERSON_LINKS"=>get_field('persone_links', $thisID),
        "PERSON_PHOTO"=>get_field('persone_photo', $thisID)
    );
}

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
        "PREVIEW"=>get_post_field('post_content', $thisID),
        "MAP_LATLNG"=>get_field('map_latlng', $thisID),
        "MAP_ZOOM"=>get_field('map_zoom', $thisID),
        "IMAGE_GALLERY"=>get_field('office_images', $thisID),
    );
}

//echo '<pre>';var_dump($outputArray["OFFICES"]);echo'</pre>';exit();

?>

<?
// custom state
$bCustomState = array(
    "body"=>"",
    "header"=>"",
    "seoTitle"=>get_field('seo_title', get_the_ID()),
    "seoDescription"=>get_field('seo_description', get_the_ID()),
);

get_header();
?>


    <div class="page-default">

        <div class="wrapper">

            <script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

            <div class="is-page-contacts" data-is="page-contacts">


                <div class="is-header-layout">
                    <div class="hl-left">
                        <h1>
                            Контакты
                        </h1>
                    </div>
                    <div class="hl-right">
                        <div class="is-tabs-nav" data-node="contactsTabs" data-tab-body="tabs-body-a">
                            <a class="is-tabs-link" href="#">
                                Сотрудники
                            </a>

                            <?foreach($outputArray["OFFICES"] as $key => $value):?>
                                <a class="is-tabs-link" href="#">
                                    <?=$value["TITLE"]?>
                                </a>
                            <?endforeach?>
                        </div>
                    </div>
                </div>


                <div class="is-tabs-container tabs-body-a">
                    <div class="is-tabs-wrapper">
                        <div class="is-tabs-tab">

                            <div class="is-personal-list">
                                <div class="is-grid">
                                    <?foreach($outputArray["PERSONAL"] as $key => $value):?>

                                        <div class="grid-item">
                                            <div class="personal-item">
                                                <div class="pi-image">
                                                    <div class="full-size img-cover" style="background-image:url('<?=$value["PERSON_PHOTO"]?>')"></div>
                                                </div>
                                                <div class="pi-preview">
                                                    <div class="pi-name">
                                                        <?=$value["PERSON_NAME"]?>
                                                    </div>
                                                    <div class="pi-role">
                                                        <?=$value["PERSON_ROLE"]?>
                                                    </div>
                                                    <div class="pi-details">
                                                        <?=$value["PERSON_DETAILS"]?>
                                                    </div>
                                                    <div class="pi-links">
                                                        <?=$value["PERSON_LINKS"]?>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    <?endforeach?>
                                </div>
                            </div>

                        </div>

                        <?foreach($outputArray["OFFICES"] as $key => $value):?>
                            <div class="is-tabs-tab">

                                <div class="is-contacts-map">
                                    <div class="cm-layout">
                                        <div class="cm-preview">
                                            <?=$value["PREVIEW"]?>
                                        </div>
                                        <div class="cm-map">
                                            <?
                                                $mapArray = explode(",", $value["MAP_LATLNG"]);
                                                $mapLat = trim($mapArray[0]);
                                                $mapLng = trim($mapArray[1]);
                                            ?>
                                            <div class="cm-ymap" data-node="cYmap" data-lat="<?=$mapLat?>" data-lng="<?=$mapLng?>" data-zoom="<?=$value["MAP_ZOOM"]?>"></div>
                                        </div>

                                        <div style="display:none;">
                                            <?foreach($value["IMAGE_GALLERY"] as $imgKey => $imgValue):?>
                                                <img src="<?=$imgValue["url"]?>" />
                                            <?endforeach?>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        <?endforeach?>


                    </div>
                </div>

            </div>


        </div>

    </div>


<?
get_footer();
?>