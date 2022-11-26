<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
  <div class="header">
    <div class="header-logo">Progate</div>
    <div class="header-list">
      <ul>
        <li>Tentang</li>
        <li>Pelajaran</li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="copy-container">
      <h1>HELLO WORLD<span>.</span></h1>
      <h2>Ayo belajar coding</h2>
    </div>

    <div class="contents">
      <h3 class="section-title">Pelajaran</h3>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg">
        <p>HTML & CSS</p>
      </div>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
        <p>PHP</p>
      </div>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
        <p>Ruby</p>
      </div>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
        <p>Swift</p>
      </div>
    </div>

    <div class="contact-form">
      <form action="welcome.php" method="POST">
        <h3 class="section-title">Hubungi kami</h3>
        <p>
          <label> First Name: </label>
          <input type="text" name="firstname" placeholder="Your First Name..." />
        </p>
        <p>
          <label> Last Name: </label>
          <input type="text" name="lastname" placeholder="Your Last Name..." />
        </p>
        <p>
          <label> Email: </label>
          <input type="email" name="email" placeholder="Your Email Name..." />
        </p>
          <input class="contact-submit" type="submit">
        </p>
      </form>
    </div>
  </div>

  <div class="footer">
    <div class="footer-logo">Progate</div>
    <div class="footer-list">
      <ul>
        <li>Tentang</li>
        <li>Karier</li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
  </div>
</body>

</html>