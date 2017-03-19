<?php
	include 'inc/header.php';
?>
      <div class="container">
         <div class="col-md-5">
          <h3>Find us here</h3>
          <div class="panel panel-default">
            <div class="panel-body">
           <div id="map-container" class="col-md-6"></div>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
             <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
              <script src="http://maps.google.com/maps/api/js?key=AIzaSyBMJ4TqmY8V0K-YGtYmjwIfw5bt94ZhI88&callback=initmap"></script>
     <script> 
 
             function init_map() {
               var var_location = new google.maps.LatLng(27.674366, 85.361925

);
 
              var var_mapoptions =
               {
               center: var_location,
                zoom: 14
               };
 
              var var_marker = new google.maps.Marker({
                position: var_location,
                 map: var_map,
                  title:"Venice"});
 
              var var_map = new google.maps.Map(document.getElementById("map-container"),
                 var_mapoptions);
 
                var_marker.setMap(var_map);  
 
                 }
 
                google.maps.event.addDomListener(window, 'load', init_map);
 
      </script>
    </div>
  </div>
       <h2>Company Information :</h2>

       <p> 500 Lorem Ipsum Dolor Sit,</p>

        <p> 22-56-2-9 Sit Amet, Lorem,</p>

        <p> USA</p>

        <p>Phone:(00) 222 666 444</p>

       <p> Fax: (000) 000 00 00 0</p>
        <p>Email:<u> info@mycompany.com</u></p>
 
     <p>  Follow on: <u>Facebook</u>,<u> Twitter</u></p>
         </div>
         <div class="col-md-7">
         <form>
          <h3> Contact us</h3>
          <div class="form-group">
                <label for="exampleInputEmail1">First name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
          <div class="form-group">
                <label for="exampleInputEmail1">Last name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
             </div>
             <div class="form-group">
                <label for="exampleTextarea">Textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
             </div>
             <div class="form-group">
               <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
               <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
             </div>
           <fieldset class="form-group">
                <legend>Radio buttons</legend>
              <div class="form-check">
                 <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                 </label>
              </div>
           <div class="form-check">
                 <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                </label>
           </div>
           <div class="form-check disabled">
                 <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                   Option three is 1disabled
                 </label>
           </div>
          </fieldset>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
               Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
         </div>
      </div>
        <?php include('inc/footer.php'); ?>