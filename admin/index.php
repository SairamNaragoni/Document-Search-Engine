<?php include('includes/header.php'); ?>
<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query = "SELECT * FROM `files` WHERE `id` = $id";
		$result = mysqli_query($conn,$query);
		$row=mysqli_fetch_array($result);
	}
	
?>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
      <div class="page-content">
      	<div class="mdl-grid">
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
		  	<div class="page-content" >
		  		<?php if(isset($_GET['id'])) : ?>
		  			<form enctype="multipart/form-data" id = "uForm">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" name="title" value="<?php echo $row['title']; ?>" id="title" >
					    <label class="mdl-textfield__label" for="title">Title</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <textarea class="mdl-textfield__input" type="text" rows= "3" name="description" id="description" ><?php echo $row['description']; ?></textarea>
					    <label class="mdl-textfield__label" for="description">Description</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <textarea class="mdl-textfield__input" type="text" rows= "2" name="tags" id="tags" ><?php echo $row['tags']; ?></textarea>
					    <label class="mdl-textfield__label" for="tags">Search Tags</label>
					</div>
					<br>
					<div class="form-group">
		              <label for="file">Select new file :</label>
		              <input type="file" name="file" id="file" />
		            </div>
		            <br>
		            <div hidden id="row_id"><?php echo $row['id']; ?></div>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" id="update" >Update</button>
				</form>
				<!--
				<div id="error">
		            <div class="alert alert-danger" role="alert">iuhihdias</div>;
		         </div>-->
		  		<?php else :?>
		  			<form enctype="multipart/form-data" id = "uForm">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" name="title" id="title" >
					    <label class="mdl-textfield__label" for="title">Title</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <textarea class="mdl-textfield__input" type="text" rows= "3" name="description" id="description" ></textarea>
					    <label class="mdl-textfield__label" for="description">Description</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <textarea class="mdl-textfield__input" type="text" rows= "2" name="tags" id="tags" ></textarea>
					    <label class="mdl-textfield__label" for="tags">Search Tags</label>
					</div>
					<br>
					<div class="form-group">
		              <label for="file">Select your file :</label>
		              <input type="file" name="file" id="file" />
		            </div>
		            <br>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" id="upload" >Upload</button>
					</form>
		  		<?php endif; ?>		
		      </div>
		  </div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel " id="scroll-tab-2">
      <div class="page-content">
      	<div class="mdl-grid">
		  <div class="mdl-cell mdl-cell--1-col mdl-cell--3-col-tablet"></div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
		  	<div class="page-content" >
				<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
				  <thead>
				    <tr>
				      <th width="100" class="mdl-data-table__cell--non-numeric">Title</th>
				      <th width="200">Description</th>
				      <th width="200">File Name</th>
				      <th width="150">Type</th>
				      <th width="70">Downloaded</th>
				      <th width="50">Viewed</th>
				      <th width="250">Action</th>
				    </tr>
				  </thead>
				  <tbody id="trows">
				  </tbody>
				</table>
		      </div>
		  </div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
      <div class="page-content">
      	<div class="mdl-grid">
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
		  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
		  	<div class="page-content" >
				<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp" id="adminTable">
				  <thead>
				    <tr>
				      <th width="200" class="mdl-data-table__cell--non-numeric">Username</th>
				      <th width="300">Email</th>
				    </tr>
				  </thead>
				  <tbody id="trows2">
				  </tbody>
<?php include("includes/footer.php"); ?>