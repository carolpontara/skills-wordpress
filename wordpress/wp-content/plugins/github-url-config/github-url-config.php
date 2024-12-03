<?php
/*
Plugin Name: Git Hub Url Config
Plugin URI: https://github.com/carolpontara/skills-wordpress
Description: Adiciona uma página no menu "Configurações" para salvar e exibir a URL do perfil do GitHub como uma meta tag no <head> do site.
Version: 1.0
Author: Carol Pontara
Author URI: https://github.com/carolpontara
Requires PHP: 7.4
*/

// Evita acesso direto ao arquivo.
if (!defined('ABSPATH')) {
    exit;
}

// Adiciona a página de configurações ao menu de "Configurações"
function gcc_add_settings_page() {
    add_options_page(
        'Configuração de URL do GitHub', // Título da página
        'GitHub URL', // Título do menu
        'manage_options', // Capacidade
        'github-url-config', 
        'gcc_settings_page' // Função que exibe o conteúdo da página
    );
}
add_action('admin_menu', 'gcc_add_settings_page');

// Função para exibir a página de configurações
function gcc_settings_page() {
    ?>
    <div class="wrap">
        <h1>Configuração de URL do GitHub</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('gcc_options_group');
            do_settings_sections('github-url-config');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">URL do Perfil GitHub</th>
                    <td>
                        <input type="text" name="github_url" value="<?php echo esc_attr(get_option('github_url')); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
            <?php submit_button('Salvar Mudanças'); ?>
        </form>
    </div>
    <?php
}

// Registra as configurações
function gcc_register_settings() {
    register_setting('gcc_options_group', 'github_url');
}
add_action('admin_init', 'gcc_register_settings');

// Adiciona a meta tag ao cabeçalho do site
function gcc_add_meta_tag() {
    $github_url = get_option('github_url');
    if (!empty($github_url)) {
        echo '<meta name="verify-skills" content="' . esc_url($github_url) . '" />';
    }
}
add_action('wp_head', 'gcc_add_meta_tag');
