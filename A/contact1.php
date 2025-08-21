<section id="contact" class="contact-us">
  <style>
    .contact-us {
      background: #0d0d0d;
      padding: 60px 20px;
      color: #f5f5f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .contact-us .container {
      max-width: 700px;
      margin: auto;
      background: #1a1a1a;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(255, 255, 255, 0.05);
    }

    .contact-us h2 {
      text-align: center;
      font-size: 32px;
      margin-bottom: 30px;
      color: yellow;
    }

    .contact-us label {
      display: block;
      margin-top: 20px;
      margin-bottom: 8px;
      font-size: 15px;
      color: yellow;
    }

    .contact-us input[type="text"],
    .contact-us textarea {
      width: 100%;
      padding: 12px 15px;
      background-color: #262626;
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 15px;
      transition: border 0.3s ease;
    }

    .contact-us input[type="text"]:focus,
    .contact-us textarea:focus {
      outline: none;
      border: 1px solid yellow;
    }

    .contact-us textarea {
      height: 120px;
      resize: vertical;
    }

    .contact-us input[type="submit"] {
      margin-top: 25px;
      background: yellow;
      color: #0d0d0d;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-us input[type="submit"]:hover {
      background: #e6d600;
    }

    .success-message {
      display: none;
      text-align: center;
      margin-top: 20px;
      color: #98ff98;
      font-weight: bold;
      background-color: #2a2a2a;
      padding: 10px;
      border-radius: 8px;
    }

    @media (max-width: 768px) {
      .contact-us .container {
        padding: 30px 20px;
      }
    }

    * {
      box-sizing: border-box;
    }

    .contact-us .container {
      max-width: 700px;
      width: 95%;
      /* better for small screens */
      margin: auto;
    }

    @media (max-width: 480px) {
      .contact-us h2 {
        font-size: 26px;
      }

      .contact-us input[type="text"],
      .contact-us textarea,
      .contact-us input[type="submit"] {
        font-size: 14px;
        padding: 10px;
      }
    }
  </style>

  <div class="container">
    <h2>Contact Us</h2>
    <form id="contactForm" action="submit_contact_data.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required />

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" placeholder="Enter your number" required />

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

      <input type="submit" name="submit_contact" value="Send Message" />
    </form>
    <div id="success" class="success-message">✔ Message Successfully Sent!</div>
  </div>

  <!-- <script>
    function showSuccessMessage() {
      document.getElementById("success").style.display = "block";
      // Optional: reset the form
      document.getElementById("contactForm").reset();
      // Prevent actual form submission
      return false;
    }
  </script> -->
</section>