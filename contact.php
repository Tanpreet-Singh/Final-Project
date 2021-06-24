<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <!-- Makes website responsive -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact Us</title>

      <link rel="stylesheet" href="css/contact.css">
  </head>

  <body>
  <section class="navbar">
  <div class="menu">
  <ul>
      <li>
          <a href="index.php"> Home Page</a>
          </li>
      </section>
  </div>

  </section>
  <div class="container">

  <form action="mail.php" method="post">

    <label for="name">Your Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    <label for="email">Email</label>

    <input type="email"  name="emailaddress" placeholder="Your email..">
    <br><br>
    <label for="message">Message</label>
    <textarea  name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>

  </div>
  <div id="status"></div>
</section>
    </div>
    </body>
    </html>