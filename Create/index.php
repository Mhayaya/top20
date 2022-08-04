<?php include("../includes/header.php"); ?>
<div class="create-section">
    <div class="row">

        <div class="col s4">
            <!-- Promo Content 1 goes here -->
        </div>
        <div class="col s4">
            
            <div class="card white darken-1 logincard">
                <h5 style="margin-top: 40px !important; padding-top: 40px !important;" class="center">register</h5>
                <div class="card-content black-text">
                  <div class="row">
                    <form class="col s12" method="POST" action="../action/register.php">
                    
                          <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="fullname" name="name" id="first_name" type="text" class="validate" required>
                            <label for="full_name">Full Name </label>
                            </div>
                            <div class="input-field col s6">
                            <input placeholder="username" name="username" id="user name" type="text" class="validate" required>
                            <label for="user_name">Username</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                            </div>

                            <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                            </div>

                            <div class="col s12 center">
                            <br>
                            <br>
                            <button class="btn waves-effect waves-light center renny" type="submit" name="submit">Submit
                            <i class="material-icons right">send</i>                            </button>
                            <br>
                            <br>
                            <div><span class="center">Have Account<a href="../login/"> login</a></span>
                            </div>

                            <div id="error" style="color: red !important; font-size: 20px; font-weight: bold; margin-top: 20px;"></div>
                            </div>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

<div class="col s4">
    <!-- Promo Content 1 goes here -->
</div>

<?php include("../includes/footer.php");