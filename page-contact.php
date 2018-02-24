<?php
use Timber\Post;

$context = Timber::get_context();
$context['post'] = new Post();

Timber::render('page-contact.twig', $context);
