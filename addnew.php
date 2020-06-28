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
  <div align="center" class="container">

  <br />
   
<!-- <form action="addnewHandle.php" method="post"> -->
  


  <section class="hero is-primary is-fullheight mobile is-mobile is-tablet" style="opacity:0.9">
      <div class="hero-body">
          <div class="container has-text-centered mobile is-mobile is-tablet" style="max-width: 1132px;">
              <div class="column is-4 is-offset-4 mobile is-mobile is-tablet">
                  <h3 class="title ">Add New Stock Details to MongoDB </h3>
                  <hr class="login-hr">

                  <div class="box">
                      <!-- <figure class="avatar">
                          <img src="https://placehold.it/128x128">
                      </figure> -->
                      

                      <form action="addnewHandle.php" method="post">


                        <div class="field">
                          <div class="control">

                              <input   class="input is-medium" id="title" name="title"  placeholder="Enter Title" >
                              

                          </div>
                      </div>

                      <div class="field">
                        <div class="control">

                        <textarea   class="input is-medium" id="description" name="description"  placeholder="Enter description"></textarea >

                        </div>
                      </div>


                      <div class="field">
                        <div class="control">

                        <input type="text" class="input is-medium" id="link" name="link"  placeholder="Enter link">

                        </div>
                      </div>


                      <div class="field">
                            <div class="control">

                            <input type="text" class="input is-medium" id="category" name="category"  placeholder="Enter category">

                            </div>
                      </div>



                      

                       
                        <!-- <div class="image-preview" *ngIf=" imagePreview !== '' && imagePreview && form.get('image').valid">
                          <img [src]="imagePreview" [alt]="form.value.name">
                        </div> -->
                      </div>




                          <button class="button is-block is-primary is-medium is-fullwidth" type="submit">Add Stock Details <i class="fas fas-sign-in" aria-hidden="true"></i></button>
                      </form>


                  </div>
                  <p class="has-text-grey" style="color: #00d1b2;">
                      <a style="color: #00d1b2;" routerLink="/doctorLogin">Login</a> &nbsp;&nbsp;
                      <!-- <a style="color: #00d1b2;" href="../">Forgot Password</a> &nbsp;·&nbsp;
                      <a style="color: #00d1b2;" href="../">Need Help?</a> -->
                  </p><br><br><br>
                  <!-- <p class="subtitle ">Please login to proceed.</p> -->

              </div>
          </div>
      </div>
    </section>
<!-- </form> -->


</div>
   
   </div>
  </body>
 </html>
 