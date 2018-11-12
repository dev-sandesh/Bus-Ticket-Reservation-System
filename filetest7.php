<!DOCTYPE html>
<html>
<head>
  <title> 101 </title>
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style type="text/css">

  * {
    font-size: 14px;
  }

  body {
    background-color: #eee;
    margin-top: 50px;
    font-family: Verdana;
  }

  div.card {
    margin: auto;
    width: 400px;
    height: 190px;
    background-color: white;
    border-radius: 2px;
    box-shadow: 0px 3px 3px silver;
    padding: 25px;
    h1 {
      margin: 0 0 20px 0;
      font-weight: normal;
      color: #03a9f4;
      font-size: 30px;
    }

    label {
      float: left;
      padding: 10px 10px 14px 0;
      width: 175px;
      margin-top: 10px;
      clear: left;
    }

    input {
      float: right;
      border: 2px solid silver;
      padding: 8px 0;
      border-width: 0 0 2px 0;
      width: 200px;
      margin-top: 15px;
      transition: border-color .3s;
      &:focus, &:hover {
        border-color: #03a9f4;
        outline: 0;
      }
      &.warning {
        border-color: #ff9800;
      }

      &.error {
        border-color: #f44336;
      }

      &.valid {
        border-color: #4caf50;
      }

      &[type=submit] {
        border: 0;
        background-color: white;
        color: #03a9f4;
        text-transform: uppercase;
        width: auto;
        cursor: pointer;
      }
    }
  }

</style>
</head>

<body>
  <div class="card">
    <h1>Login</h1>
    <form>
      <label>E-mail address</label>
      <input type="email" name="email" data-validate="required email" placeholder="user@example.com" />
      <label>Password</label>
      <input type="password" data-validate="required" name="password" />
      <input type="submit" name="submit" value="Login" />
    </form>
  </div>


  	</body>
</html>
