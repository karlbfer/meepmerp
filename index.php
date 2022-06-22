<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>

    <section class="mainBody">
    <?php
      if (isset($_SESSION["userid"])) {
        echo '<p>Hello there ' . $_SESSION["useruid"] . '</p>';
        echo '<p id="hiddenUser" hidden> '. $_SESSION["useruid"] . '</p>';
      }
      else {      
        // echo '<li class="navRight"><a href="login.php">Login</a></li>';
      }
    ?>

      <h1>Welcome! We pit two Star Wars characters together and task you with deciding the victor of this 1v1 battle.</h1>
      <!-- <section>
        <p>It would be cool to display a video or pre-set version of the api calls to the Smashbros characters. Char vs char with an image that lets us dictate who we think wins in the matchup.</p>
      </section> -->
      <section class="bodyWrap">
        <h1 class="battle">WHO WOULD WIN?</h1>
        <section class="characterSelect">
          <p class="skew"><span class="characterNameOne" id="name">Loading Character... </span></p>
          <p class="skew"><span class="characterNameTwo" id="nameTwo">Loading Character...</span></p>
        </section>
        <section class="buttonsInBody">
          <button id="charOneWin">Winner!</button>
          <button id="characterOne">Pit Two New Characters</button>
          <button id="charTwoWin">Winner!</button> 
        </section>
      </section>

      
  <form action="includes/savePlayer.php" method="POST">

    <input id="winnerOne" type="text" name="firstCharacter" value="mario" hidden>
    <input id="winnerTwo" type="text" name="secondCharacter" value="Luigi" hidden>
    <!-- below is responsible to update username for insertinto statement later on -->
    <input id="profUser" type="text" name="username" value="karlitodudito" hidden> 
    <input id="setWinner" type="text" name="winner" value="3" hidden>
    <input type="submit" name="submit" value="Save Results">
  </form>
  <?php
    if (isset($_GET["error"])){
      if($_GET["error"] == "noUser"){
        echo '<p> Failed to save response. Please log into an account before trying to save results! </p>';
      }      
      if($_GET["error"] == "failedToSelectWinner"){
        echo '<p> Failed to Save response. Please select who will win before saving results! </p>';
      }

      
    }
    if (isset($_GET["status"])){
      if($_GET["status"] == "ResponseSaved"){
        echo '<p> Response Saved Successfully. View History in Profile Page. </p>';
      }
    }
  ?>
  <script>
      var strUser = document.getElementById("hiddenUser").textContent;
      console.log(strUser);
      document.getElementById("profUser").value = strUser; 
  </script>  


<script src="app.js"></script>
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>