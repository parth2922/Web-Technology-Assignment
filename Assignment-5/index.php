<html>
  <head>
    <title>Assignment 2</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script>
    function validateForm()
    {
        var x = document.forms["myForm"]["fname"].value;
        var z = document.forms["myForm"]["lname"].value;
        var y = document.forms["myForm"]["phone"].value;
        if (x == "")
        {
          alert("Name must be filled out");
          return false;
        }
        if (z == "")
        {
          alert("Last Name must be filled out");
          return false;
        }
        else if (isNaN(y))
        {
         alert("Phone must be Number");
         return false;
        }
     }
    </script>
  </head>
  <body>
      <div class="header">

        <h1>Assignment 5</h1>
        <h2>National Workshop on Web Technology.</h2>

      </div>
      <div class="main">
        <form name="myForm" action="register.php" method="post">
          Student:<input type="radio" name="prof" value="Student">
          Faculty:<input type="radio" name="prof" value="Faculty">
          Professional:<input type="radio" name="prof" value="Professional">
          company representatives:<input type="radio" name="prof" value="representatives">
          <table>
            <tr>
              <td>First Name</td>
              <td><input type="text" placeholder="Enter first name" name="fname"></td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td><input type="text" placeholder="Enter last name" name="lname"></td>
            </tr>
            <tr>
              <td>E-mail</td>
              <td><input type="mail" placeholder="Enter email" name="email"></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input type="text" placeholder="Enter Phone no." name="phone"></td>
            </tr>
            <td>Gender</td>
            <td><input type="radio" value="male" name="gen">male</td>
            <td><input type="radio" value="female" name="gen">female</td>
            </tr>
          </table>
          <input type=submit onclick="validateForm()">
        </form>
      </div>
      <p align="right">Parth Goswami(18ce027)</p>
  </body>
  </html>
