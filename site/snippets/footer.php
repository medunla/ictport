  <footer class="footer cf" role="contentinfo">
	<div class="container">
	    <p class="by"><strong>Powered by <a class="a-footer" href="<?= url() ?>" title="WEB ICT:SILPAKORN #9" alt="WEB ICT:SILPAKORN #9">WEB ICT:SILPAKORN #9</a></strong></p>
	    <p>
	    	<a class="a-footer" href="?tag=WebStudio1" title="Web Studio I Project" alt="Web Studio I Project">Web Studio I Project</a> |
	    	<a class="a-footer" href="?tag=WebStudio2" title="Web Studio II Project" alt="Web Studio II Project">Web Studio II Project</a> |
	    	<a class="a-footer" href="?tag=UI" title="User Interface Project" alt="User Interface Project">User Interface Project</a> |
	    	<a class="a-footer" href="?tag=WebPro" title="Web Programming Project" alt="Web Programming Project">Web Programming Project</a> |
	    	<a class="a-footer" href="?tag=WebStudio3" title="Web Studio III Project" alt="Web Studio III Project">Web Studio III Project</a> |
	    	<a class="a-footer" href="?tag=WebAdvance" title="Advance Web Project" alt="Advance Web Project">Advance Web Project</a>
	    </p>
	</div>
  </footer>


	<script type="text/javascript">
	  function updateClock()
	      {
	      var currentTime    = new Date();
	      var currentDay     = currentTime.getDate();
	      var currentMonth   = currentTime.getMonth();
	      var currentYear    = currentTime.getFullYear();
	      var currentHours   = currentTime.getHours();
	      var currentMinutes = currentTime.getMinutes();
	      var currentSeconds = currentTime.getSeconds();

	      var month = new Array();
			month[0] = "January";
			month[1] = "February";
			month[2] = "March";
			month[3] = "April";
			month[4] = "May";
			month[5] = "June";
			month[6] = "July";
			month[7] = "August";
			month[8] = "September";
			month[9] = "October";
			month[10] = "November";
			month[11] = "December";
	      for (var i = 0; i <12; i++) {
	      	if (currentMonth == i) {
	      		currentMonth = month[i];
	      	};
	      };

	      // Pad the minutes and seconds with leading zeros, if required
	      currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
	      currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
	   
	      // Choose either "AM" or "PM" as appropriate
	      var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
	   
	      // Convert the hours component to 12-hour format if needed
	      currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
	   
	      // Convert an hours component of "0" to "12"
	      currentHours = ( currentHours == 0 ) ? 12 : currentHours;
	   
	      // Compose the string for display
	      var currentTimeString = currentDay + " " + currentMonth + " " + currentYear + " - " + currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
	       
	       
	      $("#clock").html(currentTimeString);
	           
	   }
	   
	  $(document).ready(function()
	  {
	     setInterval('updateClock()', 1000);
	  });
	</script>
</body>
</html>