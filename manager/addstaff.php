  <style>
    .aaa {
      background-color: #F79716;
      border: none;
      color: white;
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
    <div class="modal-dialog  modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add staff</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <form class="form-horizontal" method="post"> 
            <!-- Text input-->
            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="iduser" name="iduser" type="text" placeholder="ID USER" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="username" name="name" type="text" placeholder="USER NAME" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="address" name="addr" type="text" placeholder="ADDRESS" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="notel" name="notel" type="text" placeholder="No - TEL" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>

            <div class="row">

              <div class="col-md-2"></div>
              <div class="col-md-8">
                <input id="email" name="email" type="text" placeholder="EMAil" class="form-control input-md">
              </div>
              <div class="col-md-2"></div>
            </div>

            <div class="row"><br></div>


            <p style="text-align:left; color:red;">*Fillfull all requiment</p>
          </div>
          <div class="modal-footer">
            <button type="submit" name="add" class="btn btn-info">Add</button>
            <button type="button" class="btn aaa" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
  <?php


  if(isset($_POST['add']))
  {
    $iduser = $_POST['iduser'];
    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $notel = $_POST['notel'];
    $email = $_POST['email'];


    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "INSERT INTO user (`userid`, `name`, `address`, `notel`, `email`, `position`, `password`)
    VALUES ('".$iduser."', '".$name."', '".$addr."', '".$notel."', '".$email."', 'staff', 123456)";

    if (mysqli_query($conn, $sql)) {
      ?>
      <script type="text/javascript">
        alert("Data has been added");
      </script>
      <?php
    } else {
      ?>
      <script type="text/javascript">
        alert("Error");
      </script>
      <?php
    }

    mysqli_close($conn);

  }


  ?>