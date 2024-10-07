<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'head.php'; ?>
</head>
<body>
  <div id="navbar-placeholder"></div>
<style>
body{
  background-image: url("background.jpg");
}  
</style>

<section class="bgimage" id="home">
  <div class="container-fluid">
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
      </div>
      </div>
  </div>
</section>
  <button id="attendance-button" class="rectangle-button">Mark Your Attendance</button> 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#attendance-button").click(function () {
        console.log("Button clicked!");
        $.ajax({
          url: "/open-webcam",
          type: "GET",
          success: function (response) {
            console.log("Webcam opened successfully.");
          },
          error: function (error) {
            console.error("Error opening webcam:", error);
          },
        });
      });
    });
  </script>
  <script src="script.js"></script>
</body>
</html>


