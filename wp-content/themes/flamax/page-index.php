<?php
/**
 * Template Name: Главная страница
 */
?>

<?
    // result modifier

    $outputArray = array();
    $inputArray = get_pages(array(
        "child_of"=>B_DATA_ARRAY["BLOCKS"]["PROJECTS"],
        "sort_order" =>"ASC",
        "sort_column" =>"menu_order",
        "post_type" =>"page",
        "post_status" =>"publish"
    ));

    foreach($inputArray as $key => $thisPage){
        $thisID = $thisPage->ID;

        // show on index filter
        if (!get_field('show_on_index', $thisID)) { continue; }

        $outputArray[] = array(
            "ID"=>$thisID,
            "LINK"=>get_page_link($thisID),
            "TITLE"=>get_post_field('post_title', $thisID),
            "VOLUME"=>get_field('volume', $thisID),
            "PREVIEW"=>get_field('preview', $thisID),
            "DATE"=>get_field('date', $thisID),
            "CONTENT_UP"=>get_post_field('post_content', $thisID),
            "CONTENT_DOWN"=>get_field('content_down', $thisID),
            "IMAGE_MAIN"=>get_field('image_main', $thisID),
            "IMAGE_GALLERY_ARRAY"=>get_field('image_gallery', $thisID)
        );
    }

    //echo '<pre>';var_dump($outputArray);echo'</pre>';

?>

<?
    // custom state
    $bCustomState = array(
        "body"=>"body-state-index",
        "header"=>"index"
    );

    get_header();
?>


<div class="page-default page-index">

    <div class="is-index-slider" data-is="index-slider">

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <? $arrayCount = count($outputArray); ?>
                <?foreach($outputArray as $key => $value):?>

                    <div class="swiper-slide">
                        <div class="ss-inner">
                            <div class="full-size img-cover" style="background-image:url('<?=$value["IMAGE_MAIN"]?>');"></div>
                            <div class="ss-inner-layout">
                                <div class="wrapper">
                                    <div class="ss-inner-layout-content">
                                        <a class="ss-inner-preview state-link" href="<?=$value["LINK"]?>">
                                            <div class="ss-title">
                                                <div class="ss-title-text">
                                                    <?=$value["TITLE"]?>
                                                </div>
                                                <?if($value["VOLUME"]):?>
                                                    <div class="ss-title-volume">
                                                        <?=$value["VOLUME"]?>
                                                    </div>
                                                <?endif?>
                                            </div>
                                            <div class="ss-description">
                                                <?=$value["PREVIEW"]?>
                                            </div>
                                        </a>
                                        <div class="ss-inner-counter">
                                            <div class="ss-c-current">
                                                <?=($key+1)?>
                                            </div>
                                            <div class="ss-c-count">
                                                /<?=$arrayCount?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?endforeach?>
            </div>
        </div>

        <div class="is-arrows">
            <div class="ss-arrow ss-arrow-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                    <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                </svg>
            </div>
            <div class="ss-arrow ss-arrow-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                    <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
                </svg>
            </div>
        </div>

    </div>

</div>


<?
    get_footer();
?>