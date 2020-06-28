<!DOCTYPE html>
<html>
 <head>
  <title>Web Application Project</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>

 <nav class="navbar is-link">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <p class=""  alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">Stock Market News</p>
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start" style="margin-top:6px">
      
      <!--  -->
       <button type="button" class="bd-tw-button button is-primary" onclick="location.href = 'rssread.php';">Stock RSS Feed</button> <!--view Rss feed using php -->
        <button type="button" class="bd-tw-button button is-primary" onclick="getDataFromDb()">View Stock using Ajax</button><!--  -->
        <button type="button" class="bd-tw-button button is-primary" onclick="location.href = 'addnew.php';">Insert new Stock details</button><!--  -->
        <button type="button" class="bd-tw-button button is-primary" onclick="location.href = 'filterData.php';">Filter Stock information </button><!--  -->
        <button type="button" class="bd-tw-button button is-primary" onclick="location.href = 'xmlGenerator.php';">Export xml </button><!--  -->
      
    </div>
    <div class="navbar-end" style="margin-top:10px;margin-right:5%">
    <p>IM/2016/087   .</p>
    <p>.   Lalana Chamika</p>
    </div>

    
  </div>
</nav>



  <div align="left" style="min-width:1000px" class="container">
   

      
        <div style="min-width:1000px" id="outputData" >


<br> <br> <br>        </div>
   
  </div>

  <script>
      function getDataFromDb() {
            alert("View all stock data from mongodb using ajax");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("outputData").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getDataFromDB.php", true);
            xhttp.send();
        }
  </script>

  
 </body>
</html>
