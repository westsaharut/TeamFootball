<?php
  require("config/connection.php");
  $arrObj = json_decode($_POST['arrObj']);
?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1 class="page-header" align="center">Score</h1>

        <?php
          // $array = array();
          // for ($i=0; $i < count($arrObj) ; $i++) {
          //   for ($j=0; $j < 4 ; $j++) {
          //     if($arrObj[$i]->Name1 != $array[$j]){
          //       array_push($array, $arrObj[$i]->Name1);
          //     }
          //     if($arrObj[$i]->Name2 != $array[$j]){
          //       array_push($array, $arrObj[$i]->Name2);
          //     }
          //   }
          // }
          // $array = array_unique($array);
        ?>

        <?php
          // $score = array('1' => 0, '2' => 0, '3' => 0, '4' => 0);
          for ($i=0; $i < count($arrObj) ; $i++) {
            if($arrObj[$i]->ScoreTeam1 > $arrObj[$i]->ScoreTeam2){
              // for ($m=0; $m < count($array); $m++) {
              //   if($array[$m]==$arrObj[$i]->Name1) {
              //     in_array("Irix", $score)
              //   }
              // }
              echo $arrObj[$i]->Name1 ." Win " . $arrObj[$i]->Name2 ." <label style='color: red'> Team: ".$arrObj[$i]->Name1. " +3 Score</label>". "<br>";
              $arrObj[$i]->totalScore1 = $arrObj[$i]->totalScore1+3;
            }else if($arrObj[$i]->ScoreTeam1 < $arrObj[$i]->ScoreTeam2){
              echo $arrObj[$i]->Name1 ." Lose " . $arrObj[$i]->Name2 ." <label style='color: red'> Team: ".$arrObj[$i]->Name2. " +3 Score</label>". "<br>";
              $arrObj[$i]->totalScore2 = $arrObj[$i]->totalScore1+3;
            }else{
              echo $arrObj[$i]->Name1 ." Draw " . $arrObj[$i]->Name2  ." <label style='color: red'> Team: ". $arrObj[$i]->Name1 ." And ".$arrObj[$i]->Name1. " +1 Score</label>" . "<br>";
              $arrObj[$i]->totalScore1 = $arrObj[$i]->totalScore1+1;
              $arrObj[$i]->totalScore2 = $arrObj[$i]->totalScore2+1;
            }
          }
        ?>
        <!-- <?php print_r($score) ?> -->
      </div>
    </div>
  </div>
</div>
