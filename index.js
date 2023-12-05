function updateBanner() {
    var banner = document.getElementById('welcome-banner');
    var currentDate = new Date();
    var dateString = currentDate.toDateString();
    var timeString = currentDate.toLocaleTimeString();
  
    banner.textContent = "Welcome to the <company_name> website! Today is " + dateString + ", and the time is " + timeString;
  
    var currentPosition = -banner.offsetWidth; // Start the banner off-screen
    var moveAmount = 2; // Adjust the speed of the movement
  
    function moveBanner() {
      currentPosition += moveAmount;
      banner.style.left = currentPosition + 'px';
  
      if (currentPosition > window.innerWidth) {
        currentPosition = -banner.offsetWidth;
      }
  
      requestAnimationFrame(moveBanner);
    }
  
    moveBanner();
  }