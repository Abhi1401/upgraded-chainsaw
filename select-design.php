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
              <h2 class="subtitle" style="font-weight: bold;size: 58px;flex:4"><a href="index.html">stichIt.com</a></h2><h2 style=" float: left;margin-top: 50px">
              <a href="profile.php">
                  <?php

                    $res = mysqli_query($con,"select * from designs");
                    $i=0;

                    if(isset($_SESSION['email']))
                        {
                            echo $_SESSION['name'];
                        }
                        else
                            echo "User";
                        
                  ?>
              </h2>
              <i class="fa fa-user-circle" style="font-size:50px;position: absolute; right: 0;margin-right: 10px"></i></a></div>
            <h1 class="title" style="font-size:80px">
              Select design
            </h1>
            <h2 class="subtitle">
             

 or click here to Upload a new Design
            </h2>
          </div>
        </div>
      </section>

      <section class="section">
      <div class="container">
      <div style="display: flex;flex-wrap: wrap; justify-content: flex-start;">
      
    <?php
      $i=0;
      while($row = mysqli_fetch_assoc($res))
      {
    ?>
        <div class="card" style="width: 400px;margin: 20px">
            <div class="card-content"style='height:290px'>
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['IMG'] ).'" style="width: 370px"/>'; ?>
                <p class="subtitle">
                </p>
            </div>
            <footer class="card-footer">
                <p class="card-footer-item" >
                <a><span id='btn'>
                      Edit
      </span></a>
                </p>
                <a href="selected-design.php?id=<?php echo $row['ID']?>">
                    <p class="card-footer-item">
                        <span>
                          Select
                        </span>
                    </p>
                </a>
            </footer>
        </div>

<?php
      }
?>

        <div class="modal" id="modal" style="display:none">
          <div class="modal-background"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title">Customize Your Design</p>
              <button id="delete" aria-label="close">X</button>
            </header>
            <section class="modal-card-body">
              <!-- Content ... -->
              <div class="field">
                <div class="control">
    <form method="post" action="user-details.php">
  Neck Type
        <select id="neck" name="neck" class="select is-danger">
          <?php
                      $neck_type=array("Classic Collar", "Wide Spread Collar","Buttoned down Collar","Chinese Collar");
                      foreach($neck_type as $type)
                      {
                        echo "<option>".$type."</option>";
                      }
                      ?>
                      </select>
                Sleeve Type
                      <select id="sleeve" name="sleeve" class="field control select is-danger">
                        <option>Short sleeves</option>
                        <option>3/4 sleeve</option>
                        <option>Long Sleeve</option>
                        
                      </select>
                Other Remarks:
                <textarea id="remarks" name="remarks" class="textarea" placeholder="enter your remarks.." rows='4'></textarea>
                
              </section>
              <footer class="modal-card-foot">
                <button type="submit" class="button is-success">Save changes</button>
                <button type="cancel" class="button">Cancel</button>
              </footer>
            </form>
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
        modal.style.display = "flex";

       
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