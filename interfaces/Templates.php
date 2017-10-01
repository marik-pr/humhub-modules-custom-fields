<?php

namespace humhub\modules\hhcf\models;

interface templates {
    /**
     * Returns selected template or open form to make new.
     */
    public function getTemplate(); 
    
     /**
     * Save template.
     */
    public function saveTemplate(); 
    
}
