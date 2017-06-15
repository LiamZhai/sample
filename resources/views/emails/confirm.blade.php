<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Confirm link for signup</title>
</head>
<body>
  <h1>Thanks for signup on Kyxx！</h1>

  <p>
    Click on the address below to continue:
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If this is not your own operation, just ignore it.
  </p>
</body>
</html>
