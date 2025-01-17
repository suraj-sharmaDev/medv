<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>


    <?php include '../include/cssplugin.php';?>
    <style type="text/css">
.field-icon {
  float: right;
  margin-right: 8px;
  margin-top: -23px;
  position: relative;
  z-index: 2;
  cursor:pointer;
}
.field-icon1 {
  float: right;
  right:32px;
  top: 44%;
  position: absolute;
  z-index: 2;
  cursor:pointer;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  margin: 0;
}
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }
   .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
.radio-item {
  display: inline-block;
  position: relative;
  padding: 0 6px;
  margin: 10px 0 0;
}

.radio-item input[type='radio'] {
  display: none;
}

.radio-item label {
  color: #666;
  font-weight: normal;
}

.radio-item label:before {
  content: " ";
  display: inline-block;
  position: relative;
  top: 5px;
  margin: 0 5px 0 0;
  width: 20px;
  height: 20px;
  border-radius: 11px;
  border: 2px solid #004a8e;
  background-color: transparent;
}

.radio-item input[type=radio]:checked + label:after {
  border-radius: 11px;
  width: 12px;
  height: 12px;
  position: absolute;
  top: 9px;
  left: 19px;
  content: " ";
  display: block;
  background: #24d5e1;
}
.btn-submit{
  background-color: #004a8e;
  color: #24d5e1;
  border-color:#24d5e1; 
  height: 60px;
}
.btn-submit:hover{
  background-color: #24d5e1;
  color: #004a8e;
  border-color:#004a8e;
}
.btn{
  color: #24d5e1;
  font-weight: bold;
}
.btn-address{
  background-color: transparent;
  color: #004a8e;
  border-color:#004a8e;
}
.btn-address:hover{
  background-color: #004a8e;
  color: #24d5e1;
  border-color:#24d5e1;
}
    </style>
</head>
<body>
	<?php include 'header.php';?>
  <?php 
  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => 'http://182.18.157.79/medv/api/customer/CustAddlist?custId='.$_SESSION['custid'],
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER =>  array(
                            'Content-Type: application/json',
                            'Connection: Keep-Alive'
                            )
  
  ));
  $output = curl_exec($ch);
  $addr_data  = json_decode($output,true);
  // $array = json_decode($json, true);
  // echo '<pre>'; 
  // print_r($addr_data);
  // echo '</pre>';
  

  ?>
<section class="mt-5 mb-5 ">
  <div class="container">
    <h5 style="color: #000">Select Address</h5>
    <form method="POST">
    <div class="row">
      <div class="col-md-6">
        <div class="shadow">
          <div class="form-group">
            <?php 
            foreach ($addr_data as $addr) {
            ?>
              <div class="radio-item">
                <div class="row p-3">
                  <div class="col-md-1">
                    <input type="radio" id="<?php echo $addr['AddLabel']; ?>"  name="addtype" value="<?php echo $addr['AddLabel']; ?>" checked="" > <label for="<?php echo $addr['AddLabel']; ?>" ></label>
                  </div>
                  <div class="col-md-9">
                    <b><?php echo $addr['AddLabel']; ?></b><br>
                    <?php echo $addr['Address']; ?>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <!-- <div class="radio-item">
              <div class="row p-3">
                <div class="col-md-1">
                  <input type="radio" id="home"  name="addtype" value="home" checked="" > <label for="home" ></label>
                </div>
                <div class="col-md-9">
                  <b>HOME</b><br>
                  3rd Floor, Shabari Complex, S.M Road, Jalahalli Cross, Bangalore - 560057
                </div>
              </div>
            </div>
            <div class="radio-item">
              <div class="row p-3">
              <div class="col-md-1">
                <input type="radio" id="work"  name="addtype" value="work" > <label for="work" ></label>
              </div>
              <div class="col-md-9">
                <b>OFFICE</b><br>
                3rd Floor, Shabari Complex, S.M Road, Jalahalli Cross, Bangalore - 560057
              </div>
            </div>
            </div> -->
          </div>
        </div>
        <a href="add_address" class="btn btn-address form-control"> + ADD NEW ADDRESS</a>
        <!-- <div class="form-group">
          <textarea name="address" class="form-control" rows="2" placeholder="Door Number,Building Name, Street/Locality"></textarea>
        </div>
        <div class="form-group">
          <input type="text" name="landmark" class="form-control" placeholder="Landmark (optional)">
        </div>
        <div class="form-group">
          <input type="number" name="pincode"max="999999" class="form-control" placeholder="Pincode">
        </div>
        <div class="form-group">
          <input type="text" name="locality" class="form-control" placeholder="Locality">
        </div>
        <div class="form-group">
          <input type="text" name="locality" class="form-control" placeholder="Locality">
        </div>
        <div class="form-group">
          <input type="text" name="city" class="form-control" placeholder="City">
        </div>
        <div class="form-group">
          <input type="text" name="state" class="form-control" placeholder="State">
        </div>
        <div class="form-group">
          <input type="text" name="Name" value="<?php echo $custname;?>" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="text" name="mobile" value="<?php echo $mobNo;?>" class="form-control" placeholder="Mobile">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2 radio-item">
              <input type="radio" id="home"  name="addtype" value="home" checked > <label for="home">HOME</label>
            </div>
            <div class="col-md-2 p-0 radio-item">
              <input type="radio" id="work"  name="addtype" value="work" > <label for="work">WORK</label>
            </div>
            <div class="col-md-2 p-0 radio-item">
              <input type="radio" id="other" name="addtype" value="other" > <label for="other">OTHER</label>
            </div>
          </div>
        </div> -->
      </div>
      <div class="col-md-6">
      <div class="shadow">
      <?php
         foreach ($_SESSION['cart'] as $item_id =>$val) {
                $product=$val['product'];
                $quantity=$val['quantity'];

                echo "<div class='p-3 bg-white rounded'><form class='inner-addon' method='post' action='remove.php'><div class='row'><div class='col-md-2' style='position:relative'>";
                if( $val['type'] == "Capsule/Tablet") {    
                  echo '<img src="../svg/003-drugs.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Drops"){
                  echo '<img src="../svg/013-eye-drops.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Suspension"){
                  echo '<img src="../svg/011-medicine-2.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Injection"){
                  echo '<img src="../svg/007-vaccine.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Syrup"){
                  echo '<img src="../svg/020-syrup.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Capsule"){
                  echo '<img src="../svg/001-pills.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Tablet"){
                  echo '<img src="../svg/006-drug-1.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Cream"){
                  echo '<img src="../svg/005-moisturizer.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Lotion"){
                  echo '<img src="../svg/019-cosmetics.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Other"){
                  echo '<img src="../svg/008-doctor.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "gel"){
                  echo '<img src="../svg/001-gel.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Solution"){
                  echo '<span class="flaticon-potion" style="font-size:40px; vertical-align:text-top"></span>';
                }
                else if($val['type'] == "Liquid"){
                  echo '<img src="../svg/004-patient.svg" style="top:unset; width:65px">';
                }
                else if($val['type'] == "Ointment"){
                  echo '<img src="../svg/017-ointment.svg" style="top:unset; width:65px">';
                }
                echo "</div><div class='col-md-6'><a href='#'>$product</a><br><span style='font-size:13px'>$val[drugDtls]</span></div><div class='col-md-2' style='position:relative;padding-top:15px'><input type='hidden' name='dname' id='dname'  value='$val[product]'><input type='hidden' name='id' id='id'  value='$val[item_id]'><span class='quant'>Qty: $quantity</span><input type='hidden' value='$quantity' name='qty' min='1' max='10'style='width:63%;height:30px;' id='qty' class='child qty' ></div><div class='col-md-2' style='position:relative'></div></div></form></div>";
              }
              ?>
</div>
<div class="form-group text-center" style="padding-top: 25px">
  <input type="submit" class="btn btn-submit form-control" name="submit" value="Request to Quote"><!-- <br>OR<br>
  <input type="reset" class="btn" id="cancel" value="CANCEL"> -->
</div>
      </div>
    </div>
  </form>
  </div>
</section>
<?php  include '../include/footer.php';?>
</body>
<?php include '../include/jsplugin.php';?>
<script src="http://fast.wistia.net/labs/fresh-url/v1.js" async></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>


</html>

