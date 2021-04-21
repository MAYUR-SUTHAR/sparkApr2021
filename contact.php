<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script defer src="scriptC.js"></script>
  </head>
  <body>
  <div class="wrapper">
    <h1>Contact Us</h1>
<div id="error_message"></div>
    <form id="myform" onsubmit="return validation()">
      <div class="input_field">
          <input type="text" placeholder="Name" id="name">
      </div>
      <div class="input_field">
          <input type="text" placeholder="Issue (Optional)" id="issue">
      </div>
      <div class="input_field">
          <input type="text" placeholder="Phone" id="phone">
      </div>
      <div class="input_field">
          <input type="text" placeholder="Email" id="email">
      </div>
      <div class="input_field">
          <textarea placeholder="Message" id="message"></textarea>
      </div>
      <div class="btn">
          <input type="submit">
      </div>
    </form>
  </div>

</div>
      </header>

  </body>
</html>