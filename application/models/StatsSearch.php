<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatsSearch extends CI_Model {
	public function getStatsLink($op){
    $arreglo = array();
    $statsLink = "https://www.espn.com/nba/stats";
    if ($op == "Points") {
      $statsLink = "https://www.espn.com/nba/stats/player/_/table/offensive/sort/avgPoints/dir/desc";
    }elseif ($op == "Rebounds") {
      $statsLink = "https://www.espn.com/nba/stats/player/_/table/general/sort/avgRebounds/dir/desc";
    }elseif ($op == "Assists") {
      $statsLink = "https://www.espn.com/nba/stats/player/_/table/offensive/sort/avgAssists/dir/desc";
    }elseif ($op == "Blocks") {
      $statsLink = "https://www.espn.com/nba/stats/player/_/table/defensive/sort/avgBlocks/dir/desc";
    }elseif ($op == "3-Pointers Made") {
      $statsLink = "https://www.espn.com/nba/stats/player/_/table/offensive/sort/avgThreePointFieldGoalsMade/dir/desc";
    }else{ //Steals
      $statsLink = "https://www.espn.com/nba/stats/player/_/table/defensive/sort/avgSteals/dir/desc";
    }
    $arreglo[] = $op;
    $arreglo[] = $statsLink;
  return $arreglo;
	}
}
?>
