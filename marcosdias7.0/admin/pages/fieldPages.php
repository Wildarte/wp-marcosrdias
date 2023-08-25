<?php

function cmb2_page_field(){

    //================================ SLIDER BANNER ===========================================
    $cmb2_page = new_cmb2_box([
        'id' => 'img_banner_header',
        'title' => 'Imagem Header',
        'object_types' => 'page',
        'closed' => false
    ]);


    $cmb2_page->add_field( [
        'id' => 'banner_img_page',
        'name' => 'Imagem do cabeçalho',
        'type'    => 'file',
        'desc' => '<strong>OBS:</strong> Dimensões: 1920 x 230',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Imagem' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            //'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            'type' => array(
                 'image/gif',
                 'image/jpeg',
                 'image/png',
             ),
        )
    ]);
    
}
add_action('cmb2_admin_init', 'cmb2_page_field');