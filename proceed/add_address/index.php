<?php
 session_start();
 // echo '<pre>';
 // print_r($_SESSION);
 // echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">
  <head>


    <?php include '../../include/cssplugin.php';?>
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
  left: 10px;
  content: " ";
  display: block;
  background: #24d5e1;
}
.btn-submit{
  background-color: #004a8e;
  color: #24d5e1;
  border-color:#24d5e1; 
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
    </style>
</head>
<body>
	<?php include '../header.php';?>
<section class="mt-5 mb-5 ">
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <h3 style="color: #000">Add Address</h3>
  </div>
  <div class="container">
    <form id="addr_form" method="POST" >
    <div class="row">
      <div class="col-md-6 shadow pt-3">
        <div class="form-group">
          <textarea name="address" class="form-control" rows="2" placeholder="Door Number,Building Name, Street/Locality"></textarea>
          <input type="hidden" name="address_id" value="0">
        </div>
        <div class="form-group">
          <input type="text" name="landmark" class="form-control" placeholder="Landmark (optional)">
        </div>
        <div class="form-group">
          <input type="number" name="pincode" max="999999" class="form-control" placeholder="Pincode">
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
        </div>
      </div>
      <div class="col-md-6">

<div id="mapholder"></div>

<div class="form-group text-center" style="padding-top: 60px">
  <input type="submit" class="btn btn-submit" name="submit" value="Save Address"><br>OR<br>
  <input type="reset" class="btn" id="cancel" value="CANCEL">
</div>
      </div>
    </div>
  </form>
  </div>
</section>
<?php  include '../../include/footer.php';?>
</body>
<?php include '../../include/jsplugin.php';?>
<script src="http://fast.wistia.net/labs/fresh-url/v1.js" async></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script>
  $(document).ready(function(){

    $('#addr_form').submit(function(event){
      event.preventDefault();
      var url = 'save_address.php';
    //   alert(url);
      $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        data: $(this).serialize(),
        success: function(resp) {
            console.log('success');
            console.log(resp);
            if(resp.result == 1){
              alert('Saved successfully.!!');
              window.location.href = '../index.php';
            }else{
              alert('Something went wrong, please check.');
            }
        }
      });
      console.log('finished');
    });


    $(document).on('click','#cancel',function(){
      window.location.href = '../index.php';
    })

  });
/*var x = document.getElementById("demo");*/
window.onload = function() {
            getLocation();
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        /*x.innerHTML = "Geolocation is not supported by this browser.";*/
    }
}
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=800x400&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
    /*switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }*/
}
</script>
<script type="text/javascript">
   
</script>

</html>

