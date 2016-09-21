<?php
$visaPrefixList[] =  "40034490755xxxxx";
$visaPrefixList[] =  "4213644087xxxxxx";
$visaPrefixList[] =  "41213831035xxxxx";
$visaPrefixList[] =  "4366182268xxxxxx";
$visaPrefixList[] =  "4213644046xxxxxx";
$visaPrefixList[] =  "421364404119xxxx";
$visaPrefixList[] =  "498404000657xxxx";
$visaPrefixList[] =  "4147202150xxxxxx";
$visaPrefixList[] =  "414720214xxxxxxx";
$visaPrefixList[] =  "4766870023xxxxxx";
$visaPrefixList[] =  "414720214xxxxxxx";
$visaPrefixList[] =  "426245200080xxxx";
$visaPrefixList[] =  "4262452000xxxxxx";
$visaPrefixList[] =  "486895133085xxxx";
$visaPrefixList[] =  "498404000647xxxx";
$visaPrefixList[] =  "414720215359xxxx";
$visaPrefixList[] =  "4147202153xxxxxx";
$visaPrefixList[] =  "476687002xxxxxxx";
$visaPrefixList[] =  "42136440xxxxxxxx";
$visaPrefixList[] =  "41472021xxxxxxxx";
$visaPrefixList[] =  "42136440473xxxxx";
$visaPrefixList[] =  "421364xxxxxxxxxx";
$visaPrefixList[] =  "414700127754xxxx";
$visaPrefixList[] =  "421364404742xxxx";
$visaPrefixList[] =  "4147202215463xxx";
$visaPrefixList[] =  "4147292148201xxx";
$visaPrefixList[] =  "476684002xxxxxxx";
$visaPrefixList[] =  "476684386xxxxxxx";
$visaPrefixList[] =  "4147202148xxxxxx";
$visaPrefixList[] =  "414772021xxxxxxx";
$visaPrefixList[] =  "4213644047746xxx";
$visaPrefixList[] =  "407707xxxxxxxxxx";
$visaPrefixList[] =  "4766840020xxxxxx";
$visaPrefixList[] =  "47668400239xxxxx";
$visaPrefixList[] =  "47668700xxxxxxxx";
$visaPrefixList[] =  "47668400xxxxxxxx";
$visaPrefixList[] =  "421364404637xxxx";
$mastercardPrefixList[] =  "513625xxxxxxxxxx";
$mastercardPrefixList[] =  "5478540010xxxxxx";
$mastercardPrefixList[] =  "5424181139xxxxxx";
$mastercardPrefixList[] =  "557949xxxxxxxxxx";
$mastercardPrefixList[] =  "5512380448xxxxxx";
$mastercardPrefixList[] =  "5512380448xxxxxx";
$mastercardPrefixList[] =  "5512380455xxxxxx";
$mastercardPrefixList[] =  "5256786026xxxxxx";
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
function credit_card_number($prefixList, $length, $howMany, $tc) {
    for ($i = 0; $i < $howMany; $i++) {
        $ccnumber = $prefixList[ array_rand($prefixList) ];
        $ccnumber =  str_replace("x",'', $ccnumber);
        if($tc == true){
            $result[] = completed_number($ccnumber, $length).", ".rand(1,9)."/".rand(16,23).", ".rand(0,9).rand(0,9).rand(0,9);
        }
        else{
            $result[] = completed_number($ccnumber, $length);
        }
    }
    return $result;
}
function output($title, $numbers) {
    $result[] = implode('<br />', $numbers);
    return implode('<br />', $result);
}

if(isset($_POST['type']) && isset($_POST['tc'])){
    switch (htmlentities($_POST['type'])) {
        case 'master':
            $mastercard = credit_card_number($mastercardPrefixList, 16, 10,strip_tags($_POST['tc']));
            echo output("Mastercard", $mastercard);
            break;

        case 'visa':
            $visa16 = credit_card_number($visaPrefixList, 16, 10,strip_tags($_POST['tc']));
            echo output("VISA 16 digit", $visa16);
            break;
        
        default:
            echo "Invalid Card Type.";
            break;
    }
}
?>