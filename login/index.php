<?php include("../includes/header.php"); ?>


<div class="login-section">
    <div class="row">

        <div class="col s4">
            <!-- Promo Content 1 goes here -->
        </div>
        <div class="col s4">
            
            <div class="card white darken-1">
                <h3 style="margin-top: 40px !important; padding-top: 40px !important;" class="center">Login</h3>
                <div class="card-content black-text">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Username</label>
                            </div>
                            <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_telephone" type="password" class="validate">
                            <label for="icon_telephone">Password</label>
                            </div>
                            <a href="../forgetpass/">  <span class="badge renny" style="margin-right: 30px !important; font: size 20px; ">Forget Password?</span></a>
                            <div class="row">
                                <div class="col s12 center">
                                    <br>
                                    <br>
                                    <button class="btn waves-effect waves-light center renny" type="submit" name="action">Login
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <br>
                                    <br>
                                    <div><span class="center">Have No Account?<a href="../register/"> Create</a></span></div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col s4"><p class="line" style="padding-right: 0px !important; "></p></div>

                                <div class="col s4 center">
                                    <p><b>OR LOGIN WITH</b></p>
                                </div>

                                <div class="col s4"><p class="line" style="padding-left: 0px !important;"></p></div>
                             
                            </div>

                            <div class="row">
                                <div class="col s3 center">
                                    
                                </div>

                                <div class="col s3 center">
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="fab fa-google"></i></a>

                                </div>

                                <div class="col s3 center">
                                <a class="btn-floating btn-large waves-effect waves-light blue"><i class="fab fa-facebook"></i></a>

                                </div>
                                <div class="col s3 center">

                                </div>
                                
                             
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
        <div class="col s4">
            <!-- Promo Content 3 goes here -->
        </div>

    </div>

</div>

<?php include("../includes/footer.php");