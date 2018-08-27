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
    "IMAGE_MAIN"=>get_field('image_main', $thisID),
    "IMAGE_GALLERY_ARRAY"=>get_field('image_gallery', $thisID)
);

//echo '<pre>';var_dump($outputArray);echo'</pre>';

?>

<?
// custom state
$bCustomState = array(
    "body"=>"body-state-projects-list",
    "header"=>"projectsList"
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
                        <a href="/our_projects/">
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
                            <div class="ss-title-volume">
                                <?=$outputArray["VOLUME"]?>
                            </div>
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

            <div class="is-hr"></div>
        </div>

        <div class="is-wide-slider" data-is="wide-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?foreach($outputArray["IMAGE_GALLERY_ARRAY"] as $key => $value):?>

                        <div class="swiper-slide">
                            <div class="ws-cell">
                                <div class="full-size img-cover" style="background-image:url('<?=$value["url"]?>');"></div>
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

                    <div class="pc-item">
                        <div class="pc-value">
                            2016
                        </div>
                        <div class="pc-key">
                            Год строительства
                        </div>
                    </div>

                    <div class="pc-item">
                        <div class="pc-value">
                            02
                        </div>
                        <div class="pc-key">
                            Резервуара –<br/>
                            количество емкостей
                        </div>
                    </div>

                    <div class="pc-item">
                        <div class="pc-value">
                            2200
                        </div>
                        <div class="pc-key">
                            Кубометров –<br/>
                            общий объем
                        </div>
                    </div>

                    <div class="pc-item">
                        <div class="pc-value">
                            20
                        </div>
                        <div class="pc-key">
                            Дней – сроки<br/>
                            выполнения работ
                        </div>
                    </div>

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
                    <a class="is-button-a" href="/h/page-projects.php">
                        Все проекты
                    </a>
                </div>

            </div>

        </div>


    </div>

<?
get_footer();
?>