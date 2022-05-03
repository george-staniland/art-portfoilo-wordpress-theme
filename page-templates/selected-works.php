<?php 
/* Template Name: Selected Works */

get_header();
$image_collection = get_field('image_gallery');

$images = '';
foreach ($image_collection as $image) {
    $url = $image['url'];
    $title = $image['title'];
    $images .= <<<HTML
        <div class="single-img-wrapper col-12 ps-lg-0" >
            <img class="single-image" src="$url" alt="$title" />
        </div>
    HTML;
}

?>

<div class="selected-works-wrapper container">
    <div class="row">
        <?php echo $images ?>
    </div>
</div>


<?php
get_footer();
