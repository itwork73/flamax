<?php
/**
 * Template Name: Проекты разводящая
 */
?>

<?
// result modifier

$filterOutput = array(
    "TYPE"=>array()
);

$filterInput = array(
    "TYPE"=>empty($_REQUEST["filterType"]) ? false : $_REQUEST["filterType"]
);

$outputArray = array();
$inputArray = get_pages(array(
    "child_of"=>B_DATA_ARRAY["BLOCKS"]["DOCUMENTS"],
    "sort_order" =>"ASC",
    "sort_column" =>"menu_order",
    "post_type" =>"page",
    "post_status" =>"publish"
));

foreach($inputArray as $key => $thisPage){
    $thisID = $thisPage->ID;

    // filter
    $filterType = trim(get_field('filter_type', $thisID));
    if(!in_array($filterType, $filterOutput["TYPE"], false)){
        array_push($filterOutput["TYPE"], $filterType);
    }


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
        "IMAGE_GALLERY_ARRAY"=>get_field('image_gallery', $thisID),
        "FILTER_TYPE"=>$filterType,
    );

}

sort($filterOutput["TYPE"]);

//echo '<pre>';var_dump($outputArray);echo'</pre>';

?>

<?
// custom state
$bCustomState = array(
    "body"=>"body-state-projects-list"
);

get_header();
?>



    <div class="page-default page-projects">



        <div class="is-project-slider" data-is="project-slider">

            <div class="ps-header">
                <div class="wrapper">
                    <div class="ps-h-layout">
                        <div class="ps-h-left">
                            <h1 class="no-mar">
                                Документы
                            </h1>
                        </div>
                        <div class="ps-h-right">

                            <div class="is-header-filter" data-is="header-filter-single">
                                <form>
                                    <div class="hf-inner">
                                        <div class="is-select-filter" data-is="field-selectric">
                                            <select name="filterType">
                                                <option value="">Тип документа</option>
                                                <option value="">Все</option>
                                                <?foreach($filterOutput["TYPE"] as $key => $value):?>
                                                    <option value="<?=$value?>" <?if($filterInput["TYPE"] == $value):?> selected<?endif?>>
                                                        <?=$value?>
                                                    </option>
                                                <?endforeach?>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="ps-slider-parent">
                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <?foreach($outputArray as $key => $value):?>


                            <? if($filterInput["TYPE"] && $filterInput["TYPE"] !== $value["FILTER_TYPE"]) { continue; } ?>

                            <div class="swiper-slide">
                                <a class="ps-cell" href="<?=$value["LINK"]?>">
                                    <img class="ps-cell-blank" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABbCAMAAACyENAeAAAAA1BMVEUAre77YTABAAAAAXRSTlMAQObYZgAAACBJREFUaN7twTEBAAAAwqD1T20ND6AAAAAAAAAAAIBzAyPnAAHHDz4bAAAAAElFTkSuQmCC" />
                                    <div class="full-size img-cover" style="background-image:url('<?=$value["IMAGE_MAIN"]?>')"></div>
                                    <div class="ps-cell-preview">
                                        <div class="ps-c-title">
                                            <?=$value["TITLE"]?>
                                        </div>
                                        <div class="ps-c-description">
                                            <?=$value["PREVIEW"]?>
                                        </div>

                                        <? /*
                                        <div style="color:#fff;">
                                                type: <?=$value["FILTER_TYPE"]?><br/>
                                                owner: <?=$value["FILTER_OWNER"]?><br/>
                                                year: <?=$value["FILTER_YEAR"]?><br/>
                                            </div>
                                        */ ?>
                                    </div>
                                </a>
                            </div>

                        <?endforeach?>
                    </div>
                </div>

                <div class="wrapper">

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

        </div>

    </div>

<?
get_footer();
?>