<!DOCTYPE html>
<html>

<head>
    <title>Welcome Email</title>
</head>

<body>
    <h2>Welcome include => Hello {{$user['name']}} Thank you for registering please log in using the below URL</h2>
    <br />
    URL: { login_url }
    Username: { username }
    Password: { password }
</body>

</html>