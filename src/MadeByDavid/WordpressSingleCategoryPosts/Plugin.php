<?php

namespace MadeByDavid\WordpressSingleCategoryPosts;

class Plugin {
    
    const TRANSLATE_DOMAIN = 'madebydavid-wordpresssinglecategoryposts';
    
    function __construct() {
        
        add_action('init', array($this, 'init'), 0);
            
    }
    
    public function init(){
        
    }    

}
