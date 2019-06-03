<?php
/*
 Template Name: Form-Template
 */
get_header(); ?>
<div class="container my-5">
  <div class="row">
    <div class="col-lg-8">
  <form class="" method="post">

  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" placeholder="First name" name="firstName">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" placeholder="Last name" name="lastName">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="myContactSubmit">Submit</button>
</form>
</div>
</div>
</div>
<form>
<?php get_footer(); ?>
