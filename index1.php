<?php
function validation ($post){
    $res = [];
    foreach ($post as $key=> $value){
        $res[$key] =  $isEmpty = isEmpty($value);
        if ($isEmpty["isValid"]){
            $function = $key . 'Validation';
            if (function_exists($function)) {
                $res[$key] = $function ( $value );
            }
        } else {
            
        }
    }
    return $res;
}

function isEmpty($data){
    if (empty($data)){
        return ["isValid" =>false, "message"=> " Data can not be empty. "];
    }
    return ['isValid'=>true,'message'=>''];
}

function usernameValidation ($username) {
    if(  strlen($username) < 3) {
        return ['isValid'=>false,'message'=>'the symbols count must be minimum 3'];

    } else {  
        for($i = 0; $i < strlen($username); $i++) {
            if (is_numeric ($username[$i])){
                return ['isValid'=>false,'message'=>'username can not be contain number'];;
            }
        }
        return ['isValid'=>true,'message'=>''];
    }

}

function emailValidation($email){
    $search = strripos( $email, '@');
    if ($search < 1 ){
       $resp = ['isValid'=>false,'message'=>'incorect email'];
    } else {
        $resp = ['isValid'=> true,'message'=>''];
    }
    
    return $resp;
}
function passwordValidation($password){
    if (strlen($password) < 5 ){
        return ["isValid"=>false, "message"=> "the symbols count must be minimum 5"];
    }
    return ['isValid'=> true,'message'=>''];
}
// function repasswordValidation($repass) {
   
// }
function countryValidation($country){
    if ($country == "Select Country"){
        return ['isValid'=>false,'message'=>'not country selectid'];
    }
    return ['isValid'=> true,'message'=>''];
}

if (isset($_POST) && !empty($_POST)){
    $response = validation ($_POST);
    
}
function review($password, $repassword){
    if ($password !== $repassword){
        return "the passwod and repid password should be the same";
    }else{
         return "";
    }
}
?>