<?php
  require("config/connection.php");

  $array = array();

  array_push($array, $_POST["team1"]);
  array_push($array, $_POST["team2"]);
  array_push($array, $_POST["team3"]);
  array_push($array, $_POST["team4"]);

?>

<script>
  $(document).ready(function() {
    $('#btn2').click(function(){
      var arrObj = [];
      var c=0;
      var d=1;
      for(var i=0 ;i<6;i++){
        arrObj.push(
          {
            Name1: $( '.name1_' + c ).val(),
            Name2: $( '.name2_' + d ).val(),
            ScoreTeam1: $( '.team1_' + c ).val(),
            ScoreTeam2: $( '.team2_' + d ).val(),
            totalScore1: 0,
            totalScore2: 0,
          }
        );
        c = c+2;
        d = d+2;
      }
      arrObj = JSON.stringify(arrObj);
      $.post("score.php",{
        arrObj: arrObj
      }, function(data, status){
          $("#output2").html(data);
      });
    });
  });
</script>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">

        <h1 class="page-header" align="center">Team List</h1>
        <?php
          for ($i=0; $i < count($array) ; $i++) {
        ?>
            <div class="col-md-3" style="border-style: dotted" align="center">
              Team <?= $i+1 ?> : <?= $array[$i] ?><br>
            </div>
        <?php
          }
        ?>
        <br><br><br>
        <h1 class="page-header" align="center">Input Score</h1>
        <form  class="form-horizontal" method="post" name="form">
          <?php
            $c=0;
            $num = 0;
            for ($i=0; $i < count($array) ; $i++) {
              for ($j=0; $j < $i ; $j++) {

          ?>
                <div class="col-md-6" style="border-style: dotted" align="center">
                    <h1><?=$array[$j] . " VS " . $array[$i]?></h1>
                    Score:
                    <input type="text" placeholder="<?=$array[$j]?>" class="team1_<?=$c?>" value="<?=$c?>">
                    <input type="hidden" value="<?=$array[$j]?>" class="name1_<?=$c?>">
                    <?php $c++; ?> &nbsp; : &nbsp;
                    <input type="text" placeholder="<?=$array[$j]?>" class="team2_<?=$c?>" value="<?=$c?>">
                    <input type="hidden" value="<?=$array[$i]?>" class="name2_<?=$c?>">
                    <?php $c++; ?>
                    <br><br>
                </div>
          <?php
              }
            }
          ?>
          <br><br>
          <div class="form-group">
            <div class="col-lg-9 col-lg-offset-5">
              <button id="btn2" type="button" class="btn btn-success btn-sm" name="button">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="output2"></div>
