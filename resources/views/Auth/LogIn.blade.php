<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    /* Optional styling for the form */
    form {
      display: flex;
      flex-direction: column;
      width: 300px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ddd;
    }

    label {
      margin-bottom: 5px;
      display: block;
    }

    input[type="email"] , input[type="password"] {
      padding: 10px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
    }

    .button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      margin-top: 10px
    }

    .error {
      color: red;
      font-weight: bold;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Login</h1>

  @if ($errors->any())
    <div class="error">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('Login') }}" method="POST">
    @csrf

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" >

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" >

    <button type="submit" class="button btn btn-primary">Login</button>
  </form>
</body>
</html>
