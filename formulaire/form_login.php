
<form name="loginform" id="loginform" action="<?php echo $login_url; ?>"  method="post">


  <div class = "form_login">
			<div class="login-username">
			
			<div>
			<label for="user_login" class = "link-light">
    
        Identifiant ou adresse e-mail</label>
             </div>

			 <div>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" />
             </div>
</div>

			<div class="login-password">
			<div>	
			<label for="user_pass " class = "link-light">Mot de passe</label>
           </div>

		      <div>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
              </div>
</div>
			
			<div class="login-remember"> <label class = "link-light"/> <input name="rememberme" type="checkbox" id="rememberme" value="forever"  > Se souvenir de moi</label>
		
			<div>
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Se connecter" />
               </div>

			   <div>
				<input type="hidden" name="redirect_to" value="<?php echo $index?>" />
</div>
</div>

<div>

 <a href = "<?php echo $forget_pass ?>"> mot de pass oublié </a>

</div>

			
		</form>