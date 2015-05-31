<?php
function js_loader($array){
    if(is_array($array)){
        foreach($array as $load){
            echo '<script type="text/javascript" src="'.$load.'"></script>';
        }
    }
}