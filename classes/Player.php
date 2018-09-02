<?php

class Player{
  public $player_id;
  public $first_name;
  public $last_name;
  public $age;
  public $keeper_skill;
  public $defending_skill;
  public $crossing_skill;
  public $passing_skill;
  public $scoring_skill;
  public $pm_skill;
  public $sp_skill;




  public function __construct($first_names, $last_names, $ages){
    $this->first_name = $first_names;
    $this->last_name = $last_names;
    $this->age = $ages;
  }
/*
  public function set_player_name($player_first_name){
      $this->first_name = $player_first_name;

  }

  public function set_last_name($player_last_name){
    $this->$last_name = $player_last_name;
  }

*/
}

?>
