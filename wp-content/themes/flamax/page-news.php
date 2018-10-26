<?php
/**
 * Template Name: Новости разводящая
 */
?>
<?
// result modifier

$filterOutput = array(
    "YEAR"=>array(),
    "SUBJ"=>array()
);

$filterInput = array(
    "YEAR"=>empty($_REQUEST["filterYear"]) ? false : $_REQUEST["filterYear"],
    "SUBJ"=>empty($_REQUEST["filterSubj"]) ? false : $_REQUEST["filterSubj"],
);

$outputArray = array();
$inputArray = get_pages(array(
    "child_of"=>B_DATA_ARRAY["BLOCKS"]["NEWS"],
    "sort_order" =>"ASC",
    "sort_column" =>"menu_order",
    "post_type" =>"page",
    "post_status" =>"publish"
));

foreach($inputArray as $key => $thisPage){

    $thisID = $thisPage->ID;

    // filter

    $filterYear = trim(get_the_date("Y", $thisID));
    if(!in_array($filterYear, $filterOutput["YEAR"], false)){
        array_push($filterOutput["YEAR"], $filterYear);
    }



    $filterSubj = trim(get_field('filter_subj', $thisID));
    if(!in_array($filterSubj, $filterOutput["SUBJ"], false)){
        array_push($filterOutput["SUBJ"], $filterSubj);
    }

    $outputArray[] = array(
        "ID"=>$thisID,
        "LINK"=>get_page_link($thisID),
        "TITLE"=>get_post_field('post_title', $thisID),
        "DATE"=>get_the_date("j F Y", $thisID),
        "DATA_YEAR"=>get_the_date("Y", $thisID),
        "IMAGE_MAIN"=>get_field('image_main', $thisID),
        "FILTER_YEAR"=>$filterYear,
        "FILTER_SUBJ"=>$filterSubj
    );

}

sort($filterOutput["SUBJ"]);
rsort($filterOutput["YEAR"]);

//echo '<pre>';var_dump($outputArray);echo'</pre>';exit();

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
                                Новости
                            </h1>
                        </div>
                        <div class="ps-h-right">

                            <div class="is-header-filter" data-is="header-filter-single">
                                <form>
                                    <div class="hf-inner">
                                        <div class="is-select-filter" data-is="field-selectric">
                                            <select name="filterYear">
                                                <option value="">Год</option>
                                                <option value="">Все</option>
                                                <?foreach($filterOutput["YEAR"] as $key => $value):?>
                                                    <option value="<?=$value?>" <?if($filterInput["YEAR"] == $value):?> selected<?endif?>>
                                                        <?=$value?>
                                                    </option>
                                                <?endforeach?>
                                            </select>
                                        </div>

                                        <div class="is-select-filter" data-is="field-selectric">
                                            <select name="filterSubj">
                                                <option value="">Тема</option>
                                                <option value="">Все</option>
                                                <?foreach($filterOutput["SUBJ"] as $key => $value):?>
                                                    <option value="<?=$value?>" <?if($filterInput["SUBJ"] == $value):?> selected<?endif?>>
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

                            <?if($key>49){ break; }?>

                            <? if($filterInput["YEAR"] && $filterInput["YEAR"] !== $value["FILTER_YEAR"]) { continue; } ?>
                            <? if($filterInput["SUBJ"] && $filterInput["SUBJ"] !== $value["FILTER_SUBJ"]) { continue; } ?>


                            <div class="swiper-slide">
                                <a class="ps-cell" href="<?=$value["LINK"]?>">
                                    <img class="ps-cell-blank" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABbCAMAAACyENAeAAAAA1BMVEUAre77YTABAAAAAXRSTlMAQObYZgAAACBJREFUaN7twTEBAAAAwqD1T20ND6AAAAAAAAAAAIBzAyPnAAHHDz4bAAAAAElFTkSuQmCC" />
                                    <div class="full-size img-cover" style="background-image:url('<?=$value["IMAGE_MAIN"]?>')"></div>
                                    <div class="ps-cell-preview">
                                        <div class="ps-c-news-title">
                                            <?=$value["TITLE"]?>
                                        </div>
                                        <div class="ps-c-description">
                                            <?=$value["DATE"]?>
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