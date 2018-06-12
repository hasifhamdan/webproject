 <?php
    include 'login.php';
?>
  
  <style>
.aaa {
    background-color: #19F8F1;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login LS CIK MUDA</h4>
        </div>
        <div class="modal-body">

        <form method="POST">
          <!-- Text input-->
<div class="row">

<div class="col-md-2"></div>
  <div class="col-md-8">
  <input id="textinput" name="username" type="text" placeholder="USERNAME" class="form-control input-md">
  </div>
  <div class="col-md-2"></div>
</div>

<div class="row"><br></div>
<!-- Password input-->
<div class="row">
<div class="col-md-2"></div>
  <div class="col-md-8">
    <input id="passwordinput" name="password" type="password" placeholder="PASSWORD" class="form-control input-md">
  </div>
  <div class="col-md-2"></div>
</div>


        </div>
        <div class="modal-footer">
          <button type = "submit" value = " Submit " class="btn btn-warning">Login</button>
          <button type="button" class="btn aaa" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
