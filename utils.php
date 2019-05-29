<?php
$link['base'] = 'http://localhost/fizyka/';
$link['base'] = 'http://fizyka.cba.pl/';
$link['home'] = $link['base']."index.php";

//$link['base'] = 'http://localhost/fizyka/';
//$link['home'] = $link['base']."index.php";

$data['titles'] = array(
                        'f1'=> 'Ruch Postępowy',
                        'f2'=> 'Siła',
                        'f3'=> 'Praca, Moc, Energia',
                        'f4'=> 'Hydrostatyka',
                        'f5'=> 'Grawitacja',
                        'f6'=> 'Bryła sztywna',
                        'f7'=> 'Fale',
                        'f8'=> 'Termodynamika',
                        'f9'=> 'Elektrostatyka',
                        'f10'=> 'Prąd stały',
                        'f11'=> 'Elektromagnetyzm',
                        'f12'=> 'Optyka',
                        'f13'=> 'Dualizm',
                        );
$data['f1'] = array(
                    '1'=> array(
                                'question'=>'Janek wyrusza o 1, o której wróci?',
                                'answer'=> "f1"
                                ),
                    '2'=> array(
                                'question'=>'Janek wyrusza o 2, o której wróci?',
                                'answer'=> "f2"
                                ),
                    '3'=> array(
                                'question'=>'Janek wyrusza o 3, o której wróci?',
                                'answer'=> "f3"
                                ),
                    '4'=> array(
                                'question'=>'Janek wyrusza o 4, o której wróci?',
                                'answer'=> "f4"
                                ),
                    
                   );
$data['f2'] = array(
                    '1'=> array(
                                'question'=>'Janek wyrusza o 14, o której wróci?',
                                'answer'=> "O 14:00, jak dobrze pujdzie."
                                ),
                    '2'=> array(
                                'question'=>'Janek wyrusza o 14, o której wróci?',
                                'answer'=> "O 14:00, jak dobrze pujdzie."
                                ),
                    '3'=> array(
                                'question'=>'Janek wyrusza o 14, o której wróci?',
                                'answer'=> "O 14:00, jak dobrze pujdzie."
                                ),
                    '4'=> array(
                                'question'=>'Janek wyrusza o 14, o której wróci?',
                                'answer'=> "O 14:00, jak dobrze pujdzie."
                                ),
                    
                   );


function dump($var)
{
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
function dumpe($var)
{
	dump($var);
    exit();
}
function firstKey($var)
{
	foreach($var as $key => $unused) 
    {
        return $key;
    }
}
function getData($var) 
{
    global $data;
    $ret['path'] = 'layouts/Start.php';
    {
        if(array_key_exists('f1', $var)) 
        {
            $section = 'f1';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f2', $var)) 
        {
            $section = 'f2';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f3', $var)) 
        {
            $section = 'f3';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f4', $var)) 
        {
            $section = 'f4';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f5', $var)) 
        {
            $section = 'f5';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f6', $var)) 
        {
            $section = 'f6';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f7', $var)) 
        {
            $section = 'f7';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f8', $var)) 
        {
            $section = 'f8';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f9', $var)) 
        {
            $section = 'f9';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f10', $var)) 
        {
            $section = 'f10';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f11', $var)) 
        {
            $section = 'f11';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f12', $var)) 
        {
            $section = 'f12';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f13', $var)) 
        {
            $section = 'f13';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
    }
    if(array_key_exists('cat', $var)) 
    {
        $ret['question'] = array();
        $section = $var;
        $ret['title'] = $data['titles'][$section['cat']];
        foreach ($data[$section['cat']] as &$value) 
        {
            array_push($ret['question'], $value['question']);
        }
        $ret['path'] = 'Fizyka/categories.php';
        $ret['number'] = $var['cat'];
    } 
    return $ret;
}



































