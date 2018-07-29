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
            <h2 class="subtitle" style="font-weight: bold;size: 58px;flex:4">stichIt.com</h2><h2 style=" float: left;margin-top: 50px">gintutom</h2>
            <i class="fa fa-user-circle" style="font-size:50px;position: absolute; right: 0;margin-right: 10px"></i></div>
            <h1 class="title" style="font-size:80px">
              Enter your Details
            </h1>
            <h2 class="subtitle">
              
              
              for better fit            </h2>
            </div>
          </div>
        </section>
        <br/> 
        
        <section class="section">
          <div class="container">
            <div style="width: 500px">

          <div class="control">
              <a href="use-default-data.php?neck=<?php echo $_POST['neck']."&sleeve=".$_POST['sleeve']."&remarks=".$_POST['remarks']?>"><button class="button is-link is-danger">Use Default Data</button></a>
            </div><br>
            <label class="label" style="font-size: 30px">Or Add New Data</label>

        <div class="field">
            <label class="label">Chest Circumference</label>
            <div class="control">
              <input class="input" type="text" placeholder="Text input">
            </div>
          </div>
          
          <div class="field">
              <label class="label">Neck Circumference</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>
            </div>
            <div class="field">
                <label class="label">Shoulder Width</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Text input">
                </div>
              </div>
              <div class="field">
                  <label class="label">Arm Length</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Text input">
                  </div>
                </div>
                <div class="field">
                    <label class="label">Bicep Circumference</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Text input">
                    </div>
                  </div>
                  <div class="field">
                      <label class="label">Wrist Circumference</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                      </div>
                    </div>
                    <div class="field">
                        <label class="label">Stomach Circumference</label>
                        <div class="control">
                          <input class="input" type="text" placeholder="Text input">
                        </div>
                      </div>
                      <div class="field">
                          <label class="label">Waistline</label>
                          <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                          </div>
                        </div>
                        <div class="field">
                            <label class="label">Hip Circumference</label>
                            <div class="control">
                              <input class="input" type="text" placeholder="Text input">
                            </div>
                          </div>
          
          
          
          
          
         
          
          <div class="field is-grouped">
              <div class="control">
                  <button class="button is-link is-danger">Submit</button>
                </div>
            <div class="control">
              <button class="button is-text">Cancel</button>
            </div>
          </div>
       
        


        
        
      </div>
    </div>
  </section>

  
  </body>
</html>