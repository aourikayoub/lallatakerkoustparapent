<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <section id="contact-form">
    <div class="form-container">
      <h2>Contact Us</h2>
      <form action="#" method="post">

        <div class="mb-4">
          <label class="form-label" for="name">Full Name:</label>
          <input class="form-control" type="text" id="name" placeholder="Your Full Name" name="name" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="phone">Phone Number:</label>
          <input class="form-control" type="phone" id="Number" placeholder="Your Phone Number" name="phone" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="date">Date of Visit:</label>
          <input class="form-control" type="date" id="date" name="date" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="message">Your Message:</label>
          <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="4"
            required></textarea>
        </div>

        <div class="submit-btn">
          <button type="submit">Send Message</button>
        </div>
      </form>
  </section>
</body>
</html>