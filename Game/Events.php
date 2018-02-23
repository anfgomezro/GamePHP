<?php
namespace Game;

class Events{

  public static function echoEvent($attacker,$defender, $match_stage){
    if($match_stage == "first"){
      echo "<p class='logs'>".$attacker->whoAmI(). ' is attacking '.$defender->whoAmI(). ' with life: '. $defender->getLife()."</p>";
    }
    else{
          echo "<p class='logs'>".$defender->whoAmI()." has now ".$defender->getLife().' life points'."</p>";
      }

  }

  public static function fight($attacker,$defender ){
      self::echoEvent($attacker, $defender, "first");
      $global = $attacker->attackProduce() - $defender->defenseRating();
      if ($global > 0){
          $defender->setLife($defender->getLife()-$global);
      }elseif($global < 0){
          $attacker->setLife($attacker->getLife()+($global/2));
      } else {
          $attacker->setLife($attacker->getLife() - 100);
          $defender->setLife($defender->getLife() - 100);    }
      self::echoEvent($attacker, $defender, "last");
  }


}
 ?>
