<h2>Login</h2>

<?php 
	echo form_open('login/authenticate');
	echo "<p>";
	echo "Username: ";
	echo form_input('username', 'Username');
	echo "</p>";
	echo "<p>";
	echo "Password: ";
	echo form_password('password', 'Password');
	echo "</p>";
	echo form_submit('submit', 'Login');
	echo form_close();
?>
