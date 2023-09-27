const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');

const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.post('/send-email', (req, res) => {
  const { name, phone, email, message } = req.body;

  const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'yuukiissad@gmail.com', // Replace with your Gmail address
      pass: 'BFFANS36' // Replace with your Gmail password
    }
  });

  const mailOptions = {
    from: email,
    to: 'yuukiissad@gmail.com', // Replace with your email address
    subject: 'Contact Form Submission',
    text: `Name: ${name}\nPhone: ${phone}\nEmail: ${email}\nMessage: ${message}`
  };

  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      return res.json({ success: false, error: error.message });
    }
    return res.json({ success: true, message: 'Email sent successfully!' });
  });
});

const PORT = process.env.PORT || 3000;

app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
