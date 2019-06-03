<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<form class="" action="" method="POST">
		     <div class="form-group">
		      <label for="name">Name</label>
		        <input type="text" class="form-control" name="userName" value=""></div>
		     <div class="form-group"><label for="">Email</label>
		         <input type="email" class="form-control" name="userEmail" value="">
		   </div>
		     <div class="form-group">  <label for="subject">Subject</label>
		        <input type="text" class="form-control" name="userSubjet" value="">
		     </div>
		      <select class="howYouFind form-control" name="howYouFind">
		        <option value="google">GooGle</option>
		        <option value="friend">Friend</option>
		        <option value="random">Random</option>
		      </select>
		     <div class="form-group"> <label for="msgbody" class="form-control">Message Body</label>

		         <textarea name="msgbody" rows="8" cols="80"></textarea>
		       </div>
		       <input type="submit" name="sendEmail" value="Send Message">
		      </form>
		</div>
	</div>
</div>


<?php get_footer(); ?>
