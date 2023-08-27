<?php
namespace App\Fonction;
use Auth;
class Fonction
{
  

    public  function genUniqueID($lenth)
    {
        $is_unique = 0;
        $randID = (new Fonction())->randID($lenth);
        return $randID;
    }


 public   function randID($length)
    {
        $vowels = 'AEUYaeuy0123456789';
        $consonants = 'BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvWwXxZz';
        $idnumber = '';
        $alt = time() % 2;
        for ($i = 0; $i < $length; $i++) {
            if ($alt == 1) {
                $idnumber .= $consonants[(rand() % strlen($consonants))];
                $alt = 0;
            } else {
                $idnumber .= $vowels[(rand() % strlen($vowels))];
                $alt = 1;
            }
        }

        return $idnumber;
    }




    public function  Dollar(){
        return 515;
    }

    public function  XOF(){
        return 2;
    }

    public function CDF()
    {
        return 5;
    }

}






?>