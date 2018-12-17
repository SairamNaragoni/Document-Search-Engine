<?php  include("includes/connection.php"); ?>
<?php
    $error = "";  
    if (array_key_exists("submit", $_POST)) {
        if (!$_POST['email']) {
            $error .= "*An Email is required<br>";
        } 
        if (!$_POST['password']) {
            $error .= "*A Password is required<br>"; 
        } 
        if ($error == "") {
                    $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($conn, $_POST['email'])."'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result);
                    if (isset($row)) {
                        //$hashedPassword = md5(md5($row['id']).$_POST['password']);
                            if ($_POST['password'] == $row['password']) {
                                session_start();
                                $_SESSION['uid'] = $row['id'];
                                header("Location: index.php");                                
                            } else {                            
                                $error = "That email/password combination could not be found.";                            
                            }
                        /*if($row['active']==1)
                        {
                            $hashedPassword = md5(md5($row['id']).$_POST['password']);
                            if ($hashedPassword == $row['password']) {
                                session_start();
                                $_SESSION['uid'] = $row['id'];
                                header("Location: index.php");                                
                            } else {                            
                                $error = "That email/password combination could not be found.";                            
                            }
                        }
                        else
                        {
                            $error = "Activate Your Account to login.Check your registered email";     
                        } */   
                    } else {                        
                        $error = "That email/password combination could not be found.";                        
                    }                                                
        }        
    }
?>
<?php 
  session_start();
        if(isset($_SESSION['uid']))
        {
            header("Location: index.php"); 
        }
 ?>
   <?php include("includes/header.php"); ?>
     <a href="signin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 60%;" >Sign In</a>
    </div>
  </header>
  <main class="mdl-layout__content">
    </section>
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-2">
    	<div class="mdl-grid" style="padding-top: 12%;">
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
		  	<div class="page-content" >
				<form action="#" method="post">
					<div class="mdl-textfield mdl-js-textfield" style="width: 80%;height: 80px;" >
					    <input class="mdl-textfield__input" type="text" name="email" id="email">
              <label class="mdl-textfield__label" for="email">email</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield" style="width: 80%;height: 80px;" >
              <input class="mdl-textfield__input" type="password" name="password" id="password">
              <label class="mdl-textfield__label" for="password">password</label>
          </div>
          <br>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" id="signin" name="submit" >Sign In</button>
				</form>
        <br>
         <div id="error">
            <?php if ($error!="") {
                echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
             } ?>  
          </div>
		      </div>
		  </div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		</div>
    </section>
    
  </main>
  <footer class="mdl-mini-footer" >
	  <div class="mdl-mini-footer__left-section">
	    <div class="mdl-logo">Title</div>
	    <ul class="mdl-mini-footer__link-list">
	      <li><a href="#">Help</a></li>
	      <li><a href="#">Privacy & Terms</a></li>
	    </ul>
	  </div>
	</footer>
</div>
	<script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>