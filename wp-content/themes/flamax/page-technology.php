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

            </div>
        </div>

    </div>

    <div class="is-tech-pager"></div>

</div>

<?
    get_footer();
?>
