
<?php include 'header.php';?>
<style>
	* {box-sizing: border-box;}

/* Style the input container */
.input-container {
  display: flex;
  width: 400px;
  margin-bottom: 15px;
}

/* Style the form icons */
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

/* Style the input fields */
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
	</style>


<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
           
            <!-- Form -->
            <form id="register_sign_up" action="login.php" class="signup_form" method ="POST" autocomplete="off">
                <h2>register here</h2>
               
                <div class="form-group">
                    <label>Username / Email</label>
                    <input type="email" name="username" class="form-control user_name" placeholder="Email Address" requried />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control pass_word" placeholder="Password" requried />
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="phone" name="mobile" class="form-control mobile" placeholder="Mobile" requried />
                </div>
              
                <input type="submit" name="signup" class="btn" value="sign up"/>
            </form>
            <!-- /Form -->
        </div>
    </div>
</div>

<?php include 'footer.php';?>