<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>KNOW DUCS</title>
    <h1 align = "center"><marquee scrollamount="12">
      ⭐Welcome to DUCS Student Portal⭐</marquee> </h1>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">

        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-box">Queries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login1.php">Login</a>
      </li>
    </ul>

  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/bg-exam.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block h-50 w-100" src="images/r.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block h-50 w-100" src="images/Lab.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section>
  <div>
    <center>
      <h2>About</h2>
     </center>
    <p class="about">
      The Department of Computer Science was established in the year 1981 with the objective of imparting quality education in the field of Computer Science. The Department has modern facilities for teaching, learning and research. The Department offers a wide array of research opportunities and programs of study at undergraduate and postgraduate level.
The Department started 3-year Master of Computer Applications (MCA) programme in the year 1982, which was among the first such programmes in India.
The Department started 2-year M.Sc. Computer Science programme in the year 2004 with the aim to develop core competence in Computer Science and prepare the students to carry out development work, as well as take up challenges in research.
Besides these, the Department offers Doctor of Philosophy (Ph.D.) in Computer Science aimed at producing quality researchers and high-impact interdisciplinary research.
Undergraduate CBCS programmes - B.Sc. (H) Computer Science, B.Sc. Physical / Mathematical Sciences and B.A. Programme (Discipline Courses in Computer Applications) are offered by the University of Delhi through its constituent colleges.
With rapidly evolving technology and the continuous need for innovation, the Department has produced quality professionals holding important positions in the IT industry in India and abroad.
    </p>
  </div>
</section>

<section id="contact">
        <h1 class="mybt">Got query? Contact Us</h1>
        <div id="contact-box">
            <form action="queries.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="user" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email Id</label>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="number" name="phone" placeholder="Enter your phone number">
                </div>
                  <div class="form-group">
                    <label for="name">We will get back to you!</label>
                     <textarea name="message" cols="34" rows="10" placeholder="Write your query"></textarea>
                </div>
                <div>
                <center><button class="btn" type="submit" name="submit">Submit</button></center>
                </div>
                </form>
               </div>
</section>
<section>
  <h6>For More Details: </h6>
  <a href="https://cs.du.ac.in/programmes/">Visit Official Website</a>
</section>

  <footer>
    <h6 class="p-3 bg-dark text-white text-center">@Kalpana & @Palak</h6>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
</html>
