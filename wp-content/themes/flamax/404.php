<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Flamax
 */



?>


<?
// result modifier


?>

<?
// custom state
$bCustomState = array(
    "body"=>"body-state-index"
);

get_header();
?>


<div class="page-default page-index">

    <div class="is-page-404">
        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg')"></div>

        <div class="hb-content">
            <div class="hb-c-meta-a">
                404
            </div>
            <div class="hb-c-meta-b">
                Страница не найдена
            </div>
            <div class="hb-c-meta-c">
                К сожалению, такой страницы не существует.<br>
                Вероятно был неправильно набран адрес<br>
                или страница была удалена
            </div>
            <div class="hb-c-meta-d">
                <a class="is-button-a" href="/">
                    Перейти на главную страницу ›
                </a>
            </div>

        </div>


        <div class="is-renovartio-logo">
            <a href="http://renovartio.com/" target="_blank" rel="nofollow">
                Разработано в Renovartio
            </a>
        </div>

    </div>

</div>


<?
get_footer();
?>
