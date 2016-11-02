<!DOCTYPE html>
<html>
<head>
        <title>Login</title>
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="js/Remodal-master/dist/remodal.css">
        <link rel="stylesheet" href="js/Remodal-master/dist/remodal-default-theme.css">
		<link rel="stylesheet" href="js/jquery-toast/jquery.toast.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
    <div class="remodal front-modal" id="register-modal" data-remodal-id="register-modal">
	  <button data-remodal-action="close" class="remodal-close"></button>
	  <h2>Register</h2>
	  <form class="form-custom" id="register-form" novalidate valdr-type="PersonRegister">
		  <div valdr-form-group>
		  	<input type="text" id="userName1" name="userName1" ng-model="personregister.userName1" placeholder="Username"/>
		  </div>
		  <div valdr-form-group>
		  	<input type="text" id="email" name="email" ng-model="personregister.email" placeholder="Email"/>
		  </div>
		  <div valdr-form-group>
		  	<input type="password" id="password1" name="password1" ng-model="personregister.password" placeholder="Password"/>
		  </div>
		  <div valdr-form-group>
		  	<input type="password" id="rePassword1" name="rePassword1" ng-model="personregister.rePassword1" placeholder="Re-Password"/>
		  </div>
		  <a data-remodal-action="cancel" class="button button-red" style="display:inline-block;">Cancel</a>
		  <button class="button button-green" ng-click="register()" type="submit">Submit</button>
	  </form>
    </div>
    <div class="remodal front-modal" id="reset-modal" data-remodal-id="reset-modal">
	  <button data-remodal-action="close" class="remodal-close"></button>
	  <h2>Enter new password</h2>
	  <form id="reset-form2" class="form-custom" novalidate valdr-type="Reset">
		<div valdr-form-group>
			<input type="password" id="password4" name="password" ng-model="reset.password" placeholder="Password"/>
		</div>
		<div valdr-form-group>
			<input type="password" id="password5" name="repassword" ng-model="reset.repassword" placeholder="Re-password"/>
		</div>
		  <a data-remodal-action="cancel" class="button button-red"  style="display:inline-block;">Cancel</a>
		  <button class="button button-green" ng-click="resetPassword()">Submit</button>
	  </form>
    </div>
    <div class="remodal front-modal" id="forgot-modal" data-remodal-id="forgot-modal">
	  <button data-remodal-action="close" class="remodal-close"></button>
	  <h2>We will send a reset mail to you</h2>
	  <form id="reset-form" class="form-custom" novalidate valdr-type="ResetPassword">
		  <div valdr-form-group>
		  	<input type="text" id="email3" name="email" ng-model="resetpassword.email" placeholder="Email"/>
		  </div>
		  <a data-remodal-action="cancel" class="button button-red"  style="display:inline-block;">Cancel</a>
		  <button class="button button-green" ng-click="reset()">Submit</button>
	  </form>
    </div>
	<body ng-app="myApp" ng-controller="homeController" class="index" id="front">
		<div id="loading">
			<div class="loading-container">
				<img class="spinner" src="content/spinner9.svg">
			</div>
		</div>
        <div class="container full-height">
            <div class="container-fluid">
                <div id="login-form-container">
                    <form method="post" id="login-form" class="form-custom"  novalidate valdr-type="PersonLogin">
						<div class="logo">
							<img src="content/images/logo.svg">
						</div>
						<div valdr-form-group>
                        	<input type="text" id="userName" name="userName" ng-model="person.username" placeholder="Email or username"/>
						</div>
						<div valdr-form-group>
							<input type="password" id="password" name="password" ng-model="person.password" placeholder="Password"/>
						</div>
                        <a id="left" ng-click="hideLoginPanel()" class="button button-blue block"  >Register</a>
                        <button id="right" ng-click="login()" class="button button-green" type="submit">Login</button>
						<div class="clearfix"></div>
                        <a ng-click="hideLoginPanel2()" class="anchor">Forgot your password?</a>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/Remodal-master/src/remodal.js"></script>
	  	<script type="text/javascript" src="js/angular/angularJs.js"></script>
		<script type="text/javascript" src="js/switch/angular-ui-switch.js"></script>
		<script type="text/javascript" src="js/valdr/valdr.min.js"></script>
		<script type="text/javascript" src="js/valdr/valdr-message.min.js"></script>
		<script type="text/javascript" src="js/v-accordion-master/dist/v-accordion.min.js"></script>
		<script type="text/javascript" src="js/jquery-toast/jquery.toast.min.js"></script>
		<script type="text/javascript" src="js/toastMessages.js"></script>
		<script type="text/javascript" src="js/angular/model.js"></script>
	  	<script type="text/javascript" src="js/angular/controller/homeController.js"></script>
		<script type="text/javascript" src="js/angular/loginRegisterValidation.js"></script>
	</body>

</html>
