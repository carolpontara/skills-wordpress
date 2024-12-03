<?php
/*
Plugin Name: Custom CSS Class Adder
Plugin URI: https://github.com/carolpontara/skills-wordpress
Description: Adiciona uma classe CSS (custom-class) a todas as tags <p> em posts.
Version: 1.0
Author: Carol Pontara
Author URI: https://github.com/carolpontara
Requires PHP: 7.4
*/

// Função para adicionar a classe CSS customizada a cada tag <p>
function adicionar_classe_css_a_tags_p($content) {
    $content = preg_replace('/<p([^>]*?)>/i', '<p$1 class="custom-class">', $content);
    return $content;
}

// Adiciona a função como um filtro ao conteúdo do post
add_filter('the_content', 'adicionar_classe_css_a_tags_p');
?>