<?php
/*
Plugin Name: Related Posts by Category
Plugin URI: https://github.com/carolpontara/skills-wordpress
Description: Adiciona um shortcode para exibir links relacionados de posts na mesma categoria.
Version: 1.0
Author: Carol Pontara
Author URI: https://github.com/carolpontara
Requires PHP: 7.4
*/

// Evita acesso direto ao arquivo.
if (!defined('ABSPATH')) {
    exit;
}

// Função para gerar os links relacionados
function rpb_category_related_posts($atts) {
    // Obter as configurações atuais do post
    global $post;

    // Retorna vazio se não for um post
    if (!is_single() || !isset($post->ID)) {
        return '';
    }

    // Obter as categorias do post atual
    $categories = wp_get_post_categories($post->ID);

    if (empty($categories)) {
        return '<p>Nenhuma categoria encontrada.</p>';
    }

    // Configurar os argumentos da consulta
    $args = array(
        'category__in' => $categories, // Filtra pelos IDs das categorias
        'post__not_in' => array($post->ID), // Exclui o post atual
        'posts_per_page' => 5, // Limita o número de posts
        'orderby' => 'date', // Ordena por data
        'order' => 'DESC', // Mais recentes primeiro
    );

    // Criar a consulta
    $query = new WP_Query($args);

    // Se não houver posts, retornar mensagem
    if (!$query->have_posts()) {
        return '<p>Nenhum artigo relacionado encontrado.</p>';
    }

    // Gerar a saída
    $output = '<h3>Mais Artigos</h3>';
    $output .= '<ul>';

    while ($query->have_posts()) {
        $query->the_post();
        $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }

    $output .= '</ul>';

    // Restaurar a consulta global
    wp_reset_postdata();

    return $output;
}

// Registrar o shortcode
add_shortcode('related_posts', 'rpb_category_related_posts');
