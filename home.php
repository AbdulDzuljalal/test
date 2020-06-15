<?php

$page_title = 'Home';
include ('includes/signupheader.html');
?>
		
		<div id="home" class="home-text">
			<h2>Welcome!</h2><br/>
			<p align='center'>Great recipe for Share A Recipe. Everyone has a recipe that deserves to be shared.</p>
			<p align='center'>Cooking is great! Don't keep it to yourself.Do you have a wonderful recipe that you'd like to share? We would love for you to upload it for the community!</p> 
			<p align='center'>Sign Up Now to share your recipes with others.</p>
			<br/><br/>
			
				<div id='signup'>
					<form action="signup.php" method="post">
						<h3> SIGN UP NOW </h3>
						<br/>
						<p>User Name <input type="text" name="user_name" size="15" maxlength="20" /></p>
						<p>Email Address <input type="text" name="email" size="20" maxlength="60" /> </p>
						<p>Password <input type="password" name="password1" size="10" maxlength="20" /></p>
						<p>Confirm Password <input type="password" name="password2" size="10" maxlength="20" /></p><br/>
						<div align="center"> <p><input type="submit" name="submit" value="Sign me up!" /> </p></div>
					</form>
				</div>		
		</div><br/>
			<div align="center">
				<table id="homes" align="center">
					<div>
					
						<tr>
							<td align="left"><b>Western</b></td>
							<td align="left"><b>Traditional</b></td>
							<td align="left"><b>Cakes</b></td>
							<td align="left"><b>Asian Classic</b></td>
						
						</tr>
					</div>
				
			
						<div>
							<tr>
								<td align="left"><img src ="includes/cikeng.jpg" width = "400" height = "400"/></td>			
								<td align="left"><img src ="includes/sikmok.jpg" width = "400" height = "400"/></td>
								<td align="left"><img src ="includes/cake.jpg" width = "400" height = "400" /></td>
								<td align="left"><img src ="includes/meegoreng.jpg" width = "400" height = "400" /></td>
								
							</tr>
						</div>
				</table>	
			</div>
		
		<br/>
		<br/>
<?php include ('includes/footer.html'); ?>
