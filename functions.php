<?php

if (isset($_REQUEST['analyze'])) {
   
    function word_validation($string){

        if (!empty($string)){
            if (strlen($string) > 2) {
                if (preg_match('/^[A-zšđčćžŠĐČĆŽ]+$/', $string)){
                    //preg_match - performs a regular expression match
                    return 'Regex prošao';
                }else{
                    return 'Reged nije prošao';
                }
            }else{
            return 'Riječ za analizu mora sadržavati najmanje tri slova';
            }
        }else{
            return 'Upišite riječ u polje!';
        }
    }

    function to_uppercase($string){

    }

    function separate_into_letters($string){ 

    }

    function vowels($string){
      

    }
    function consonants($string){

    }

    function cro_letters(string){

    }

    function print($string){

    }
}
// regex - regular expresions - isti su u svakom programskom jeziku


?>

