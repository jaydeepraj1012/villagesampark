<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  width: 100%;
}

.header img {
  width: 100px;
  height: auto;
}

.nav {
  display: flex;
  justify-content: space-around;
  width: 100%;
  padding: 10px;
}

.nav a {
  text-decoration: none;
  color: black;
  font-weight: bold;
  padding: 10px;
}

.section {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

.content {
  display: flex;
  justify-content: space-between;
  width: 100%;
  padding: 20px;
}

.content-left {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.content-left img {
  width: 200px;
  height: auto;
}

.content-right {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.content-right h1 {
  text-align: center;
}

.table {
  display: flex;
  justify-content: space-between;
  width: 100%;
  padding: 20px;
}

.table-cell {
  text-align: center;
  padding: 10px;
  border: 1px solid black;
  width: 30%;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.footer {
  display: flex;
  justify-content: space-around;
  width: 100%;
  padding: 20px;
}

.footer a {
  text-decoration: none;
  color: black;
  font-weight: bold;
  padding: 10px;
}

.footer img {
  width: 50px;
  height: auto;
}
</style>
</head>
<body>
<div class="container">
  <div class="header">
    <img src="https://i.imgur.com/U4Q4x6y.png" alt="Government of Rajasthan logo">
    <h1>राजस्थान सम्पर्क</h1>
    <h1>RAJASTHAN SAMPARK</h1>
    <img src="https://i.imgur.com/0oQ0H4M.png" alt="Rajasthan logo">
  </div>

  <div class="nav">
    <a href="#">Home</a>
    <a href="#">About Sampark</a>
    <a href="#">Help</a>
    <a href="#">Feedback</a>
    <a href="#">Gallery</a>
    <a href="#">Contact Us</a>
  </div>

  <div class="section">
    <div class="content">
      <div class="content-left">
        <img src="https://i.imgur.com/Q2D9g6z.png" alt="Shri Rajyavardhan Singh Rathore">
        <h3>Shri Rajyavardhan Singh Rathore</h3>
        <p>Hon'ble Minister DoIT&C</p>
      </div>
      <div class="content-right">
        <h1>आपका स्वागत है | WELCOME CITIZENS</h1>
        <p>राजस्थान सम्पर्क जन सामान्य की शिकायतों को दर्ज करने और समस्याओ का निराकरण पाने का अभिनव प्रयास है। इस पर आप पायेगे:</p>
        <ul>
          <li>बिना कार्यालय में उपस्थित हुए समस्याओ को ऑनलाइन दर्ज करने की सुविधा।</li>
          <li>पंचायत समिति एवं जिला स्तर पर राजस्थान सम्पर्क केन्द्रों पर निः शुल्क रूप से शिकायतों को दर्ज कराने की सुविधा।</li>
          <li>सिटीजन कॉल सेंटर (181) पर फ़ोन के माध्यम से शिकायतों को दर्ज कराने व् उसकी सूचना प्राप्त करने की निः शुल्क सुविधा।</li>
        </ul>
        <p>..more</p>
      </div>
    </div>

    <div class="content">
      <div class="content-left">
        <img src="https://i.imgur.com/U95t7tK.png" alt="Shri Bhajan Lal Sharma">
        <h3>Shri Bhajan Lal Sharma</h3>
        <p>Hon'ble Chief Minister of Rajasthan</p>
      </div>
      <div class="content-right">
        <div class="table">
          <div class="table-cell">Toll Free</div>
          <div class="table-cell">181</div>
          <div class="table-cell">Get App</div>
        </div>

        <div class="table">
          <div class="table-cell">Registered</div>
          <div class="table-cell">1.59 Crores</div>
          <div class="table-cell">Grievance Status</div>
        </div>

        <div class="table">
          <div class="table-cell">Disposed</div>
          <div class="table-cell">1.57 Crores</div>
          <div class="table-cell">Disposal</div>
        </div>

        <div class="table">
          <div class="table-cell">98.93%</div>
          <div class="table-cell"><img src="https://i.imgur.com/z4oF34j.png" alt="Mission Niryaatak Bano logo"></div>
          <div class="table-cell"><img src="https://i.imgur.com/3Lq297s.png" alt="Anti Corruption Bureau logo"></div>
        </div>
      </div>
    </div>

    <button class="button">For grievances related to Other States/Government of India Organizations, Click</button>
    <a href="#" class="button">CPGRAMS</a>
  </div>

  <div class="footer">
    <div>
      <img src="https://i.imgur.com/3i7mJ50.png" alt="Lodge your grievance icon">
      <a href="#">LODGE YOUR GRIEVANCE</a>
      <p>शिकायत दर्ज करें</p>
    </div>
    <div>
      <img src="https://i.imgur.com/O72H3m4.png" alt="View grievance status icon">
      <a href="#">VIEW GRIEVANCE STATUS</a>
      <p>शिकायत की स्थिति देखें</p>
    </div>
    <div>
      <img src="https://i.imgur.com/F78iJ31.png" alt="Send reminder icon">
      <a href="#">SEND REMINDER</a>
      <p>शिकायत का पुनर्म्मरण</p>
    </div>
  </div>
</div>
</body>
</html>