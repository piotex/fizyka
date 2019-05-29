<?php
echo '<h1>'.$data['title'].'</h1>';

for ($i = 0; $i < count($data['question']); $i++) 
{
    echo '<a href="'.$link['home'].'?'.$data['number'].'='.($i+1).'">
            <div class="navi_cat_main">
                <div class="navi_cat_zad"> Zadanie '.($i+1).'</div>
                <div class="navi_cat_txt"> '.$data['question'][$i].' </div>
            </div>             
         </a>' ;
}