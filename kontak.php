<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info Kontak</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.750010382657!2d110.82432497585256!3d-7.563932594553509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a177000000000%3A0xabcdef1234567890!2sKustati%20Islamic%20General%20Hospital!5e0!3m2!1sen!2sid!4v1678888888888!5m2!1sen!2sid"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="info-kontak">
      <h1>Info Kontak</h1>
      <div class="details">
        <div class="alamat">
          <h2>ALAMAT</h2>
          <p>Jl. Kapten Mulyadi No.249, Ps. Kliwon, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57118</p>
        </div>
        <div class="kontak">
          <h2>KONTAK</h2>
          <p>📞 (0271) 2937111 (IGD)</p>
          <p>📞 (0271) 643013 ext 1100 (IGD)</p>
          <p>📞 0813 1717 0505 (HOME VISIT)</p>
        </div>
        <div class="pengaduan">
          <h2>LAYANAN PENGADUAN</h2>
          <p>📞 0813 2688 3336</p>
          <p>📧 rsuikustati@yahoo.com</p>
        </div>
        <div class="sosmed">
          <h2>IKUTI SOSIAL MEDIA KAMI</h2>
          <div class="icons">
            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="chat-button">
      <button>Tanya Kami</button>
    </div>
  </div>

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.map {
  width: 100%;
  margin-bottom: 20px;
}

.info-kontak {
  text-align: left;
  width: 100%;
}

h1 {
  font-size: 32px;
  margin-bottom: 20px;
}

.details {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.details > div {
  flex: 1 1 calc(50% - 20px);
  min-width: 300px;
}

h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

p {
  margin: 5px 0;
}

.icons a {
  margin-right: 10px;
}

.icons img {
  width: 30px;
  height: 30px;
}

.chat-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
}

.chat-button button {
  background-color: #00c853;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 50px;
  cursor: pointer;
  font-size: 16px;
}

.chat-button button:hover {
  background-color: #00a944;
}

  </style>
</body>
</html>
