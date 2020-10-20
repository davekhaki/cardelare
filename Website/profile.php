<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/Website/styles.css'>
</head>

<body onload="openTab(event, 'details')">
    <?php include "nav.html" ?>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'details')">Profile Details</button>
        <button class="tablinks" onclick="openTab(event, 'rentHistory')">Rent History</button>
        <button class="tablinks" onclick="openTab(event, 'sellHistory')">Sell History</button>
    </div>

    <div id="details" class="tabcontent">
        <?php include "profileTabs/details.php" ?>
    </div>

    <div id="rentHistory" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="sellHistory" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>

<script>
    function openTab(evt, cityName) {

  var i, tabcontent, tablinks;
  
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>

</html>