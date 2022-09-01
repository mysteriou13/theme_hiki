
<form name="loginform" id="loginform" action="<?php echo $login_url; ?>"  method="post">


  <div class = "d-flex  justify-content-end">
			<div class="login-username">
				<label for="user_login" class = "link-light">
    
        Identifiant ou adresse e-mail</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" />
</div>

			<div class="login-password">
				<label for="user_pass " class = "link-light">Mot de passe</label>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
</div>
			
			<div class="login-remember"> <label class = "link-light"/> <input name="rememberme" type="checkbox" id="rememberme" value="forever"  > Se souvenir de moi</label>
		
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Se connecter" />
				<input type="hidden" name="redirect_to" value="<?php echo $index?>" />
</div>

<div>

 <a href = "<?php echo $forget_pass ?>"> mot de pass oublié </a>

</div>

			
		</form>