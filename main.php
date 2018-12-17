<?php 
  session_start();
?>
  <?php include("includes/header.php"); ?>
	<form action="#" style="padding-left: 250px;">
	  <div class="mdl-textfield mdl-js-textfield" style="padding-right: 50px;">
	    <input class="mdl-textfield__input" type="text" name="search_bar" id="search_bar">
	    <label class="mdl-textfield__label" for="search_bar" id="search_label">Search</label>
      <div class="row" style="padding: 0px;">
        <div class="" style="position: absolute;z-index: 1000;">
          <ul class="list-group" id="search_result" style="color: black;width:200px;">
            <!--<li class="list-group-item">here <button id="search" style="margin-left: 100px;">he</button></li></ul>-->
        </div> 
      </div>
	  </div>
	  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" id="search"><i class="material-icons">search</i></button>
	</form>
    <?php if(isset($_SESSION['uid'])): ?>
        <a href="admin/index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 20%;" >Admin</a>
        <a href="signout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 10px;" >SignOut</a>
    <?php else : ?>  
        <a href="signin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" style="margin-left: 20%;" >Sign In</a>
    <?php endif; ?>

    </div>
    <!-- Tabs -->
    <!-- Left aligned menu below button -->
    
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect" >
      <a href="#scroll-tab-1" class="mdl-layout__tab is-active" id="all">All</a>
      <a href="#scroll-tab-2" class="mdl-layout__tab" id="images">Images</a>
      <a href="#scroll-tab-3" class="mdl-layout__tab" id="pdf">pdfs</a>
      <a href="#scroll-tab-4" class="mdl-layout__tab" id="txt">txt</a>
      <a href="#scroll-tab-5" class="mdl-layout__tab" id="ppts">ppts</a>
      <a href="#" class="mdl-layout__tab" id="ChangeTheme">Change Theme</a>
    </div>
  </header>

  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
      <div class="page-content">
      	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">Nothing to Search...</h2>
		  </div>
		  <div class="mdl-card__supporting-text">Enter text in the search Field</div>
		</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2">
      <div class="page-content">
      	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">Nothing to Search...</h2>
		  </div>
		  <div class="mdl-card__supporting-text">Enter text in the search Field</div>
		</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
      <div class="page-content">
      	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">Nothing to Search...</h2>
		  </div>
		  <div class="mdl-card__supporting-text">Enter text in the search Field</div>
		</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-4">
      <div class="page-content">
      	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">Nothing to Search...</h2>
		  </div>
		  <div class="mdl-card__supporting-text">Enter text in the search Field</div>
		</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-5">
      <div class="page-content">
      	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">Nothing to Search...</h2>
		  </div>
		  <div class="mdl-card__supporting-text">Enter text in the search Field</div>
		</div>
      </div>
    </section>
  </main>
  <?php include("includes/footer.php"); ?>