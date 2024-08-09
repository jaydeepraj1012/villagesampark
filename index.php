<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Village Sampark</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="mediaquery.css">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.css">

</head>

<body>
  <header>
    <h1>Village Sampark</h1>
    <nav>
      <div class="row">
        <ul>

          <li><a href="#home">Home</a></li>
          <li><a href="#Feedback">Feedback</a></li>
          <li><a href="#Gallery">Gallery</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="admin\loginpage.php">Admin</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section class="About">

      <div id="About">
        <div class="row">
          <div class="col-4">
            <div class="content-left">
              <img src="img/bg,jpeg.jpeg">
            </div>
          </div>
          <div class="col-7">
            <div class="content-right">
              <h1>आपका स्वागत है | WELCOME CITIZENS</h1>
              <ol>

                <li>जन सामान्य की शिकायतों को दर्ज करने और समस्याओ का निराकरण पाने का अभिनव प्रयास है। इस पर आप पायेगे:
                </li>
                <li>पंचायत समिति एवं जिला स्तर पर राजस्थान सम्पर्क केन्द्रों पर निः शुल्क रूप से शिकायतों को दर्ज कराने
                <li> बिना कार्यालय में उपस्थित हुए समस्याओ को ऑनलाइन दर्ज करने की सुविधा।</li>
                की सुविधा।</li>
              </ol>



            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="help">
      <div class="row">
        <div class="col-4">
          <div class="text-card">
            <p>शिकायत दर्ज करें</p>
            <a href="registrationpage.php">CLECK HERE</a>
          </div>
        </div>
        <div class="col-4">
          <div class="text-card">

            <p>शिकायत की स्थिति देखें</p>
            <a href="#" onclick="formregopen()">CLICK HERE</a>
          </div>
        </div>
        <div class="col-4">
          <div class="text-card">
            <p>शिकायत का पुनर्म्मरण</p>
            <a href="#">CLECK HERE</a>
          </div>
        </div>
      </div>
    </section>
  </main>



  <div class="popwindow">
    <div class="formwindowclose" id="formwindow">
      <form method="get" action="complaint_status.php" id="form">

        <img src="img/icons.png" class="close-btn" onclick="formregclose()">
        <h1>login</h1>
        <label for="complaint_no">complaint No</label>
        <input type="text" id="complaint_no" name="complaint_no" required>
        
    
        <button class="next-btn"> Next</button>
        
        
        <!-- <label for="otp_verfiy">otp_verfiy</label>
        <input type="otp_verfiy" id="otp_verfiy" name="otp_verfiy" required> -->
        
        
      </form>
    </div>
  </div>
  <footer>

  </footer>
  <script src="js.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
    integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>