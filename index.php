<?php
  require "header.php";
  require("config/connection.php");
?>
<?php require "menu.php" ;?>
  <script>
    $(document).ready(function() {
      $('#btn1').click(function(){
        var team1 = $('#team1').val();
        var team2 = $('#team2').val();
        var team3 = $('#team3').val();
        var team4 = $('#team4').val();

        $.post("list.php",{
          team1: team1,
          team2: team2,
          team3: team3,
          team4: team4
        }, function(data, status){
            $("#output").html(data);
        });
      });
    });
  </script>

    <form  class="form-horizontal" method="post" name="form">
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"></h1>
          </div>
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <form method="post" name="form">
                  Name Team1 : <input type="text" name="team1" id="team1">
                  Name Team2 : <input type="text" name="team2" id="team2">
                  Name Team3 : <input type="text" name="team3" id="team3">
                  Name Team4 : <input type="text" name="team4" id="team4">
                </form><br><br>
                <div class="form-group">
									<div class="col-lg-9 col-lg-offset-5">
										<button id="btn1" type="button" class="btn btn-success btn-sm" name="button">Submit</button>
									</div>
								</div>
              </div>
            </div>
          </div>
        </div>

        <div id="output"></div>

      </div>	<!--/.main-->
  </form>
<?php require"footer.php" ;?>
</body>
</html>
