<?php include("../includes/header.php"); ?>
<div class="create-section">
    <div class="row">

        <div class="col s4">
            <!-- Promo Content 1 goes here -->
        </div>
        <div class="col s4">
            
            <div class="card white darken-1 logincard">
                <h3 style="margin-top: 40px !important; padding-top: 40px !important;" class="center">Login</h3>
                <div class="card-content black-text">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="fullname" id="first_name" type="text" class="validate">
          <label for="full_name">full_name </label>
          <label for="icon_prefix">full Name</label>
        </div>
        <div class="input-field col s6">
        <input placeholder="username" id="user name" type="text" class="validate">
          <label for="user_name">user Name</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
          <div class="row">
                                <div class="col s12 center">
                                    <br>
                                    <br>
                                    <button class="btn waves-effect waves-light center renny" type="submit" name="action">Submit
                                        <i class="material-icons right">comfrim</i>
                                    </button>
        </div>
      </div>
    </form>
  </div>

<?php include("../includes/footer.php");