<DOCTYPE html=>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta id="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
  </head>

  <body>
    <h1>Contact Form</h1>
    <form>
      <label>Full Name</label>
      <input type="text" id="name" autofocus />
      <span id="nameError" style="color: red; display: none">Name is Required!</span>
      <br><br>
      <label>Mobile Number</label>
      <input type="text" id="number" />
      <span id="numberError" style="color: red; display: none">Mobile Number is Required!</span>
      <br><br>
      <label>Email</label>
      <input type="email" id="email" />
      <span id="emailError" style="color: red; display: none">Email is Required!</span>
      <br><br>
      <label>Subject</label>
      <input type="text" id="subject" />
      <span id="subjectError" style="color: red; display: none">Subject is Required!</span>
      <br><br>
      <label>Message</label>
      <input type="text" id="msg" />
      <span id="messageError" style="color: red; display: none">Message is Required!</span>
      <br><br>
      <input type="button" value="Submit" onclick="submitData()" />
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
      function submitData() {
        let data = {
          name: $('#name').val(),
          number: $('#number').val(),
          email: $('#email').val(),
          subject: $('#subject').val(),
          msg: $('#msg').val()
        }

        $.ajax({
          url: './insert.php',
          method: 'POST',
          data: data,
          success: function(response) {

            // validating the name
            if (response.name == false) {
              $('#nameError').show();
              $('#nameError').attr('style', 'color: red');
              return;
            } else {
              $('#nameError').attr('style', 'display: none');
            }

            // validating the number
            if (response.number == false) {
              $('#numberError').show();
              $('#numberError').attr('style', 'color: red');
              return;
            } else {
              $('#numberError').attr('style', 'display : none');
            }

            // validating the email
            if (response.email == false) {
              $('#emailError').show();
              $('#emailError').attr('style', 'color: red');
              return;
            } else {
              $('#emailError').attr('style', 'display : none');
            }

            // validating the subject
            if (response.subject == false) {
              $('#subjectError').show();
              $('#subjectError').attr('style', 'color: red');
              return;
            } else {
              $('#subjectError').attr('style', 'display : none');
            }

            // validating the message
            if (response.msg == false) {
              $('#messageError').show();
              $('#messageError').attr('style', 'color: red');
              return;
            } else {
              $('#messageError').attr('style', 'display : none');
            }

            // request validation
            if (response.success == true) {
              alert('From Submitted Successfully !');
              window.location.reload();
            } else
              alert('Something Went Wrong !');
          }
        });
      }
    </script>
  </body>

  </html>