<?php 

/* Template Name: Home*/

get_template_part('includes/header'); ?>

<?php get_template_part('includes/blocks/bl_hero_slider'); ?>

<?php get_template_part('includes/loops/content', 'vehicles'); ?>

<?php get_template_part('includes/loops/content', 'simplevehicles'); ?>

<?php get_template_part('includes/footer'); ?>