<?php include('Server.php'); ?>
<html>
    <head>
        <style>
        #success_message{ display: none;}
        </style>



    </head>

    <body>
      <div class="container">

        <form class="well form-horizontal" action="Server.php" method="POST"  id="">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Add User Form</legend>
        
        <!-- Text input-->
        
        <div class="form-group">
          <label class="col-md-4 control-label">Name</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="Name" placeholder="Name" class="form-control"  type="text"    required>
            </div>
          </div>
        </div>
        
        
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Email</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="Email" placeholder="EMail Address" class="form-control"  type="text"     required>
            </div>
          </div>
        </div>
        
        
        <!-- Text input-->
               
        <div class="form-group">
          <label class="col-md-4 control-label">Phone #</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="Phone" placeholder="(845)555-1212" class="form-control" type="tel"    required>
            </div>
          </div>
        </div>
        
        <!-- Text input-->
              
        <div class="form-group">
          <label class="col-md-4 control-label">Address</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="Address" placeholder="Address" class="form-control" type="text"    required>
            </div>
          </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Photo</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>

                    <input type="file" accept="image/*" onchange="loadFile(event)">
                    <p><img id="output" width="200"/></p>
                </div>
            </div>
</div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >submit <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>
        
        </fieldset>
        </form>
        </div>
  </div><!-- /.container -->
    </body>
</html>