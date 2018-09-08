<?php
/**
 * Template Name: Проект детальная
 */
?>


<?
// result modifier

$thisID = get_the_ID();

$outputArray = array(
    "ID"=>$thisID,
    "LINK"=>get_page_link($thisID),
    "TITLE"=>get_post_field('post_title', $thisID),
    "VOLUME"=>get_field('volume', $thisID),
    "PREVIEW"=>get_field('preview', $thisID),
    "DATE"=>get_field('date', $thisID),
    "CONTENT_UP"=>get_post_field('post_content', $thisID),
    "CONTENT_DOWN"=>get_field('content_down', $thisID),
    "CONTENT_COUNTERS"=>get_field('content_counters', $thisID),
    "IMAGE_MAIN"=>get_field('image_main', $thisID),
    "IMAGE_GALLERY_ARRAY"=>get_field('image_gallery', $thisID)
);


$tempImageArr = [];

if ($outputArray["IMAGE_GALLERY_ARRAY"]) {
    foreach ($outputArray["IMAGE_GALLERY_ARRAY"] as $key => $value) {
        $tempImageArr[] = $value["url"];
    }
}

$outputArray["IMAGE_GALLERY_URL"] = $tempImageArr;

//echo '<pre>';var_dump($outputArray);echo'</pre>';

?>

<?
// custom state
$bCustomState = array(
    "body"=>"body-state-projects"
);

get_header();
?>



    <div class="is-project-lead-overlay"></div>


    <div class="page-default page-projects-list">


        <div class="is-project-lead">
            <div class="full-size img-cover" style="background-image:url('<?=$outputArray["IMAGE_MAIN"]?>')"></div>
            <div class="project-lead-inner">
                <div class="wrapper">


                    <div class="project-lead-back">
                        <a href="/projects/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                                <path d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                            </svg>
                            Все проекты
                        </a>
                    </div>

                    <div class="project-lead-content">

                        <div class="ss-title">
                            <div class="ss-title-text">
                                <?=$outputArray["TITLE"]?>
                            </div>
                            <?if($outputArray["VOLUME"]):?>
                                <div class="ss-title-volume">
                                    <?=$outputArray["VOLUME"]?>
                                </div>
                            <?endif?>
                        </div>
                        <div class="ss-description">
                            <?=$outputArray["PREVIEW"]?>
                        </div>
                    </div>



                    <div class="project-lead-nav">
                        <a href="#" data-gclick="navTo" data-value='<?=json_encode(array(
                                "target"=>"description",
                                "shift"=>"-30"
                            )
                        )?>'>
                            Описание проекта
                        </a>
                        <a href="#" data-gclick="navTo" data-value='<?=json_encode(array(
                                "target"=>"counters",
                                "shift"=>"50"
                            )
                        )?>'>
                            Проект в цифрах
                        </a>
                        <a href="#" data-gclick="navTo" data-value='<?=json_encode(array(
                                "target"=>"similar",
                                "shift"=>"-30"
                            )
                        )?>'>
                            Похожие проекты
                        </a>
                    </div>

                </div>
            </div>
            <div class="is-mouse-play-icon" data-gclick="navTo" data-value='<?=json_encode(array(
                    "target"=>"description",
                    "shift"=>"-30"
                )
            )?>'></div>
        </div>

        <div class="wrapper is-style-list" data-nav-target="description">

            <?=$outputArray["CONTENT_UP"]?>

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

            <?=$outputArray["CONTENT_DOWN"]?>

            <div class="is-hr"></div>

            <div class="is-project-counters" data-nav-target="counters">

                <div class="pc-header">
                    <h2>
                        Проект в цифрах
                    </h2>
                </div>

                <div class="pc-list">

                    <?=$outputArray["CONTENT_COUNTERS"]?>

                </div>
            </div>

            <div class="is-project-similar" data-nav-target="similar">

                <h2>
                    Похожие проекты
                </h2>

                <div class="pr-similar-list">
                    <div class="is-grid">

                        <div class="grid-item">
                            <a class="pr-similar-cell" href="/h/page-project-details.php">
                                <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg')"></div>
                                <div class="ps-cell-preview">
                                    <div class="ps-c-title">
                                        Leroy Merlen
                                    </div>
                                    <div class="ps-c-description">
                                        Пожарный запас воды
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="grid-item">
                            <a class="pr-similar-cell" href="/h/page-project-details.php">
                                <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg')"></div>
                                <div class="ps-cell-preview">
                                    <div class="ps-c-title">
                                        Leroy Merlen
                                    </div>
                                    <div class="ps-c-description">
                                        Пожарный запас воды
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>


                <div class="pr-simial-action">
                    <a class="is-button-a" href="/projects/">
                        Все проекты
                    </a>
                </div>

            </div>

        </div>


    </div>

<?
get_footer();
?>