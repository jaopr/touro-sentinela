<?php
// Arquivo base do plugin. Aqui entrarão as funções principais no backend.

// Hook para adicionar o menu no admin
add_action('admin_menu', 'touro_sentinela_adicionar_menu');

function touro_sentinela_adicionar_menu() {
    add_menu_page(
        'Touro Sentinela',           
        'Touro Sentinela',           
        'manage_options',            
        'touro-sentinela',           
        'touro_sentinela_pagina_html', 
        'dashicons-shield-alt',      
        56                           
    );
}

function touro_sentinela_pagina_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    echo '<div class="wrap">';
    echo '<h1>Touro Sentinela</h1>';
    echo '<p>Bem-vindo ao painel de monitoramento do plugin Touro Sentinela.</p>';
    echo '</div>';
}
