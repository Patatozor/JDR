<?php
function test_titre($string){
    if(preg_match('#[a-z0-9\-, ]#,i',$string)){
        return true;
    }else{
        return false;
    }
}
