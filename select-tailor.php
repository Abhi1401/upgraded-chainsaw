<?php
    include_once "dbconnect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StichIt</title>
    <link rel="stylesheet" href="bulma.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 
    
      <section class="hero is-primary is-danger is-bold" style="padding: 2vh">
        <div class="hero-body">
          <div class="container">
            <div style="display: flex;">
              <h2 class="subtitle" style="font-weight: bold;size: 58px;flex:4"><a href="index.html">stichIt.com</a></h2><h2 style=" float: left;margin-top: 50px">gintutom</h2>
              <i class="fa fa-user-circle" style="font-size:50px;position: absolute; right: 0;margin-right: 10px"></i></div>
            <h1 class="title" style="font-size:80px">
              Select tailor
            </h1>
            <h2 class="subtitle">
             

  our algorithm has crunched your favorite tailors for you.
            </h2>
          </div>
        </div>
      </section>

      <section class="section">
      <div class="container">
      <div style="display: flex;flex-wrap: wrap; justify-content: flex-start;">
      

<?php
  $string = "select * from tailors";
  $query = mysqli_query($con, $string);
  while($result =  mysqli_fetch_assoc($query))
  {
?>
        <div class="card" style="width: 400px;margin: 20px">
          <div class="card-content"style='height:290px'>
            <p class="subtitle">
              <?php echo $result['NAME'];
echo '            </p>
            <br/>
            <b>Rating : 
            '.$result['RATING'];
            ?>
        </b>
      </div>
          <footer class="card-footer">
            <p class="card-footer-item" id='btn'>
              <span >
                Find out more
              </span>
            </p>
            <p class="card-footer-item">
              <span>
                <a href="checkout.php?user_id=<?php echo $_GET['user_id']."&tailor_id=".$result['ID'];?>">Go with this Tailor</a>
              </span>
            </p>
          </footer>
        </div>
<?php
  }
  ?>
  
        <div id="modal" class="modal">
          <div class="modal-background"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title">Modal title</p>
              <button id="delete" aria-label="close">X</button>
            </header>
            <section class="modal-card-body">
              <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
              <button class="button is-success">Save changes</button>
              <button class="button">Cancel</button>
            </footer>
          </div>
        </div>


        
        
      </div>
    </div>
  </section>

  <script>
    // Get the modal
    var modal = document.getElementById('modal');
    console.log(modal)
    
    // Get the button that opens the modal
    var btn = document.getElementById("btn");
    console.log(btn)
    // Get the <span> element that closes the modal
    var span = document.getElementById("delete");
    console.log(span)
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
  </body>
</html>