# Authenticate-user-and-track-user-session-using-cookies-in-PHP

1.	login.html - Create a form that contains three input fields on it: name, usernameand password. When the form is submitted, it should go to login.php

2.	login.php

If the user provides input for all three fields, store user information (name and username) in session variables (*). Redirect user to welcome.php.
If user input is missing in one of the input fields, redirect user to login.html. You don’t need to display any error messages.

3.	welcome.php

Check if the user has signed in to the system: check if the session variables are set. If they are set, welcome user by using the session variables ‘name’ and ‘username’. Otherwise redirect user to login.html.
