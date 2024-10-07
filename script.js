const header = document.querySelector('.navbar');

window.onscroll = function() {
    var top = window.scrollY;
    if(top >=100) {
        header.classList.add('navbarDark');
    }
    else {
        header.classList.remove('navbarDark');
    }
}
// script.js
document.addEventListener("DOMContentLoaded", function() {
    // Fetch and insert the navigation bar HTML
    fetch("navbar.php")
      .then(response => response.text())
      .then(data => {
        document.getElementById("navbar-placeholder").innerHTML = data;
      });
  });

  document.getElementById("showAttendance").addEventListener("click", function(event) {
    event.preventDefault();
    // Replace this with code to show attendance
    console.log("Show Attendance clicked");
});

document.getElementById("studentDetails").addEventListener("click", function(event) {
    event.preventDefault();
    // Replace this with code to show student details
    console.log("Student Details clicked");
});

document.getElementById("logout").addEventListener("click", function(event) {
    event.preventDefault();
    // Replace this with code to logout
    console.log("Logout clicked");
});