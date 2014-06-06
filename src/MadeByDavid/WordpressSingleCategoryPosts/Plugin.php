<?php

namespace MadeByDavid\WordpressSingleCategoryPosts;

class Plugin {
    
    const TRANSLATE_DOMAIN = 'madebydavid-wordpresssinglecategoryposts';
    
    function __construct() {
        
        add_action('init', array($this, 'init'), 0);
        
        add_action('admin_footer', array($this, 'changeCategoryCheckboxesToRadios'));
        
            
    }
    
    public function init(){
        
    }    
    
    public function changeCategoryCheckboxesToRadios() {
        echo <<<HTML
            <script type="text/javascript">
                jQuery("#categorychecklist input, #categorychecklist-pop input, .cat-checklist input").each(function(){this.type="radio"});
            </script>
HTML;
        
    }
    
}
