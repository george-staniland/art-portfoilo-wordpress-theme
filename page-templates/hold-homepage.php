<?php 
/* Template Name: hold-homepage */

get_header('minimal');
$bg_url = get_field('background_image');
?>

<div class="hold-homepage-wrapper d-flex justify-content-center align-items-center flex-column" style="background-image:url(<?php echo $bg_url?>)">
    <div class="title-wrapper px-4 position-relative">
        <h3 class="holding-title">*new website in the works</h3>
        <h4 class="sub-holding-title position-absolute"> coming soon</h4>
    <div>
</div>

<?php

get_footer('minimal');