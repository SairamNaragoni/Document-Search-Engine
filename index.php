<?php 
  session_start();
?>
  <?php include("includes/header.php"); ?>
    <?php if(isset($_SESSION['uid'])): ?>
        <a href="admin/index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 60%;" >Admin</a>
        <a href="signout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 10px;" >SignOut</a>
    <?php else : ?>  
        <a href="signin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 60%;" >Sign In</a>
    <?php endif; ?>

     
    </div>

  </header>
  <main class="mdl-layout__content">
    </section>
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-2">
    	<div class="mdl-grid" style="padding-top: 15%;">
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
		  	<div class="page-content" >
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield" style="width: 80%;height: 80px;" >
					    <input class="mdl-textfield__input" type="text" name="search_bar" id="search_bar">
              <label class="mdl-textfield__label" for="search_bar">Search</label>
               <div class="row" style="padding: 0px;">
        <div class="" style="position: absolute;z-index: 1000;">
          <ul class="list-group" id="search_result" style="color: black;width:200px;"></ul>
        </div> 
      </div>
					</div>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" id="IndexSearch" ><i class="material-icons">search</i></button>
				</form>
		      </div>
		  </div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		</div>
    </section>
    
  </main>
<?php include("includes/footer.php"); ?>