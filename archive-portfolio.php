<?php
$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$post_type = get_post_type(get_the_ID());

if (is_archive()) {
    $context['title'] = $post_type;
} else {
    $context['title'] = get_the_title(get_option('page_for_posts'));
}

$context['description'] = get_the_archive_description('<div class="archive-description">', '</div>');
$context['pagination'] = Timber::get_pagination([
    'mid_size' => 2,
]);

Timber::render('archive-portfolio.twig', $context);
