<?php
/**
 * Template Name: Документ детальная
 */
?>


<?
// result modifier

$thisID = get_the_ID();

$outputArray = array(
    "ID"=>$thisID,
    "TITLE"=>get_post_field('post_title', $thisID),
    "DATE"=>get_the_date("j F Y", $thisID),
    "CONTENT_UP"=>get_post_field('post_content', $thisID),
    "CONTENT_DOWN"=>get_field('content_down', $thisID),
    "IMAGE_GALLERY_ARRAY"=>get_field('image_gallery', $thisID),
    "NEWS_FILE"=>get_field('file_main', $thisID),
);


$tempImageArr = [];

if ($outputArray["IMAGE_GALLERY_ARRAY"]) {
    foreach ($outputArray["IMAGE_GALLERY_ARRAY"] as $key => $value) {
        $tempImageArr[] = $value["sizes"]["large"];
    }
}

$outputArray["IMAGE_GALLERY_URL"] = $tempImageArr;

//echo '<pre>';var_dump($outputArray);echo'</pre>';

?>

<?
// custom state
$bCustomState = array(
    "body"=>""
);

get_header();
?>

<div class="page-default">

    <div class="wrapper">
        <div class="wrapper-a">
            <h3>
                <?=$outputArray["TITLE"]?>
            </h3>

            <div class="is-news-date">
                <?=$outputArray["DATE"]?>
            </div>

            <div class="is-style-list is-style-image">

                <?=$outputArray["CONTENT_UP"]?>
            </div>
        </div>

    </div>

    <?if(count($outputArray["IMAGE_GALLERY_URL"])>0):?>
        <div class="is-wide-slider" data-is="wide-slider" data-images='<?=json_encode($outputArray["IMAGE_GALLERY_URL"])?>'>
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?foreach($outputArray["IMAGE_GALLERY_URL"] as $key => $value):?>

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


    <div class="wrapper">
        <div class="wrapper-a">

            <div class="is-style-list is-style-image">
                <?=$outputArray["CONTENT_DOWN"]?>
            </div>

            <div class="is-news-action">
                <a class="is-button-a na-item" href="/documents/">
                    Все документы
                </a>
                <?if($outputArray["NEWS_FILE"]):?>
                    <a class="is-file-download na-item" href="<?=$outputArray["NEWS_FILE"]["url"]?>" download>
                        <div class="fd-label">
                            Скачать документ
                        </div>
                        <div class="fd-ext">
                            <?=mb_strtoupper($outputArray["NEWS_FILE"]["subtype"])?>, <?=round(($outputArray["NEWS_FILE"]["filesize"]/1000000), 2)?> Мб
                        </div>

                        <span>

                    </span>
                    </a>
                <?endif?>
            </div>

        </div>


    </div>

</div>


<?
get_footer();
?>