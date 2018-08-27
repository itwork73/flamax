<?php
/**
 * Template Name: Документы
 */
?>

<?
    get_header();
?>

<div>
    документы
</div>


<?

$query = new WP_Query();
$all_pages = $query->query(array('post_type' => 'page'));
$parent =  get_page_by_path('projects');
$pages = get_page_children( $parent->ID, $all_pages );

?>

<? foreach($pages as $key => $thisPage):?>

<? $pageID = $thisPage->ID; ?>

<div>
    id: <?=$pageID?><br/>
    title: <?=$thisPage->post_title?><br/>
    content: <?=$thisPage->post_content?><br/>
    show on index: <?=the_field('show_on_index', $pageID); ?><br/>
    preview: <?=the_field('preview', $pageID); ?><br/>
    date: <?=the_field('date', $pageID); ?><br/>
    image_main: <?=the_field('image_main', $pageID); ?><br/>
    image_gallery: <?=the_field('image_gallery', $pageID); ?><br/>
    content_down: <?=the_field('content_down', $pageID); ?><br/>
</div>
<hr/>

<?endforeach?>


<?   echo '<pre>' . print_r( $pages, true ) . '</pre>'; ?>

<?
    get_footer();
?>
