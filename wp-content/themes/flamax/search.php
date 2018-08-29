<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Flamax
 */

?>


<?

$outputArray = array();

global $wp_query;
$inputArray = $wp_query->posts;



foreach($inputArray as $key => $thisPage){
    $thisID = $thisPage->ID;

    $outputArray[] = array(
        "ID"=>$thisID,
        "LINK"=>get_page_link($thisID),
        "TITLE"=>get_post_field('post_title', $thisID),
        "PREVIEW"=>strip_tags(get_post_field('post_content', $thisID))
    );

}

//echo '<pre>';var_dump($outputArray);echo'</pre>';exit;


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

            <div class="wrapper-a is-style-list is-style-image">


                <h3>
                    Результаты поиска
                </h3>

                <div class="is-search-tools" data-is="search-tools">
                    <form data-node="searchToolsForm" action="/" method="get">
                        <div class="st-search-inner">
                            <a class="st-search-submit" href="#" data-gclick="submitClosestForm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                    <path d="M1 10a9 9 0 0 1 18 0 9 9 0 0 1-18 0zm25 14l-8-8a10 10 0 1 0-18-6 10 10 0 0 0 16 8l8 8z"></path>
                                </svg>
                            </a>
                            <div class="st-search-input">
                                <input data-node="searchToolsInput" value="<?=$_REQUEST["s"]?>" autocomplete="off" type="text" name="s" placeholder="Поиск по сайту">
                            </div>
                        </div>
                    </form>
                </div>



                <?if(count($outputArray) > 0):?>

                    <div>
                        Найдено <?=count($outputArray)?> страниц
                    </div>

                    <?foreach($outputArray as $key => $value):?>
                        <?if($key>25){ break; }?>
                        <div>
                            <div>
                                <a href="<?=$value["LINK"]?>">
                                    <?=$value["TITLE"]?>
                                </a>
                            </div>
                            <div>
                                <?=$value["PREVIEW"]?>
                            </div>
                        </div>

                    <?endforeach?>
                <?else:?>
                    <div>
                        результатов не найдено
                    </div>
                <?endif?>

            </div>
        </div>
    </div>

<?
get_footer();
?>