<?php

/** 
 * Vráti názov stránky
 * 
 */
function page_name(){
    $page_name = basename($_SERVER['SCRIPT_NAME'],".php");
    if($page_name=="index"){
        return "Domov";
    }else{
        return ucfirst($page_name);
    }    
}
/**
 * Nastaví quote do partials/quote.php
 */
function page_quote(){
    //obycajne pole
    //$quotes = array("Quote domov","Quote kontakt","Quote portfolio","Quote qna" );
    //asociativne pole page => page_quote
    $quotes = array('Domov'=>'Quote domov', 
                    'Kontakt'=>'Quote kontakt',
                    'Portfolio'=>'Quote portfolio',
                    'Qna'=>'Quote qna');  
    $current_page = page_name(); 
    foreach($quotes as $page=>$page_quote){
        if($page==$current_page){
                echo $page_quote;
        }
    }
    
}
/** 
 * Vypíše menu
*/
function page_menu(){    
    $pages = glob('*php');
    foreach($pages as $file){
        $page = basename($file,'.php');
        if($page!=='index'){
            echo '<li><a href="'.$file.'">'.ucfirst($page).'</a></li>';
        }
        if($page=='index'){
            echo '<li><a href="'.$file.'">'.'Domov'.'</a></li>';
        }
        }
    }

/**
 * portfolio 
 * */
function portfolio(){
    //1 4..5,8..9,12,..13,16
    $portfolio_num = 8;            
    for ($i=1;$i<=$portfolio_num;$i++){
        if($i%4==1){
            echo '<div class="row">';
            echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
            echo 'Web stránka '.$i;
            echo '</div>';
        }
        elseif($i%4==0){
            echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
            echo 'Web stránka '.$i;
            echo '</div>';
            echo '</div>';
        }
        else{
        echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
        echo 'Web stránka '.$i;
        echo '</div>';
        }
    }
}

?>