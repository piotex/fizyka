<?php
$link['base'] = 'http://localhost/fizyka/';
$link['home'] = $link['base']."index.php";

//$link['base'] = 'http://localhost/fizyka/';
//$link['home'] = $link['base']."index.php";


function dump($var)
{
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
function firstKey($var)
{
	foreach($var as $key => $unused) 
    {
        return $key;
    }
}

function getPath($var) {
    global $link;
    $module = 'layouts/Start';
    
    if(array_key_exists('cat', $var)) {
        $module = 'Navi/'.$var['cat'];
    } 
    //zwrot nazwaDziału/numerZadania
    {
        if(array_key_exists('f1', $var)) {
            $module = 'Fizyka/RuchPostepowy/'.$var['f1'];
        } 
        if(array_key_exists('f2', $var)) {
            $module = 'Fizyka/Sila/'.$var['f2'];
        }
        if(array_key_exists('f3', $var)) {
            $module = 'Fizyka/PracaMocEnergia/'.$var['f3'];
        } 
        if(array_key_exists('f4', $var)) {
            $module = 'Fizyka/Hydrostatyka/'.$var['f4'];
        }
        if(array_key_exists('f5', $var)) {
            $module = 'Fizyka/Grawitacja/'.$var['f5'];
        } 
        if(array_key_exists('f6', $var)) {
            $module = 'Fizyka/BrylaSztywna/'.$var['f6'];
        }
        if(array_key_exists('f7', $var)) {
            $module = 'Fizyka/Fale/'.$var['f7'];
        } 
        if(array_key_exists('f8', $var)) {
            $module = 'Fizyka/Termodynamika/'.$var['f8'];
        }
        if(array_key_exists('f9', $var)) {
            $module = 'Fizyka/Elektrostatyka/'.$var['f9'];
        } 
        if(array_key_exists('f10', $var)) {
            $module = 'Fizyka/PradStaly/'.$var['f10'];
        }
        if(array_key_exists('f11', $var)) {
            $module = 'Fizyka/Elektromagnetyzm/'.$var['f11'];
        } 
        if(array_key_exists('f12', $var)) {
            $module = 'Fizyka/Optyka/'.$var['f12'];
        }
        if(array_key_exists('f13', $var)) {
            $module = 'Fizyka/Dualizm/'.$var['f13'];
        }
    }
    return $module.'.php';
}



































