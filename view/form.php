<?php
  include "header.php";
?>
<div class="row">
  <?php echo $_GET['startdate'] . " " . $_GET['starttime']; ?>
  <div class="col-md-8">
    <div class="page-header">
      <h1>Samford Community Bank Boardroom/Office Booking Form</h1>
      <p>To book our Boardroom or Meeting Room, please complete and submit this form. One of our staff will then be in contact with you to confirm your booking (subject to availability) and to explain how to access the facility and answer any other questions you may have.</p>
    </div>
    <form action="../controller/bookingprocess.php" method="post">
      <h3>Booking Information:</h3>
      <div>
        <p>Do you wish to book the Boardroom or the Meeting Room?</p>
        <div class="radio">
          <label>
            <input type="radio" name="room" value="boardroom" checked>
            Boardroom
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="room" value="meetingroom">
            Meeting Room
          </label>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Date</label>
        <input type="date" class="form-control" name="startdate">
      </div>
      <div class="form-group">
        <label class="control-label">Time</label>
        <input type="time" class="form-control" name="starttime">
      </div>
      <label>Number of Hours Required</label>
      <select class="form-control" name="bookinglength">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <div>
        <label>Any Additional Information?</label>
        <textarea class="form-control" name="info"></textarea>
      </div>
      <h3>Personal Information:</h3>
      <div class="form-group">
        <label for="name" class="control-label">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="phone" class="control-label">Phone Number</label>
        <input name="phone" type="tel" class="form-control" id="phone" placeholder="Phone Number">
      </div>
      <div>
        <p>Are you a Bendigo Bank Customer</p>
        <div class="radio">
          <label>
            <input type="radio" name="customer" value="yes" checked>
            Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="customer" value="no">
            No
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <div class="col-md-4">
    <?php include "sidebar.php";?>
  </div>

</div>


<?php
  include "footer.php";
?>
