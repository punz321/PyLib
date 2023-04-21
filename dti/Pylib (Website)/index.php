<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cssstyle/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">PyLib</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>
<!----------------------------------------------------->

<!------------------------------------------------------------------>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="jumbotron">
  <h1 class="display-4">Hello, Coders!</h1>
  <p class="lead">Welcome to the world of libraries.</p>
  <hr class="my-4">
  <p>A library of libraries.</p>
  <button type="button" class="btn btn-primary">Learn more</button>
  
</div>
<!------------------>
<!------------------>
<section id="services">
    <div class="container text-center">
  <p><b>click below to download zip file </b></p>
  <a href="download.php?file=Pylib" >
  Download zip</a>
<div>
</section>
<!  -------------->
<section id="services">
    <div class="container text-center">
        <h1 class="title">What we do ?</h1>
        <div class="row text-center">
            <div class="col-md-4 services">
                <img src="images/services.jpeg" class="service-img">
                <h4>Growth</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt accusantium at earum ipsa, voluptas dolor ullam pariatur illum cum fugiat veritatis ea asperiores sunt esse, molestiae laboriosam dolores nemo minima.</p>
            </div>
            <div class="col-md-4 services">
                <img src="images/services.jpeg" class="service-img">
                <h4>Branding</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt accusantium at earum ipsa, voluptas dolor ullam pariatur illum cum fugiat veritatis ea asperiores sunt esse, molestiae laboriosam dolores nemo minima.</p>
            </div>
            <div class="col-md-4 services">
                <img src="images/services.jpeg" class="service-img">
                <h4>Ads</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt accusantium at earum ipsa, voluptas dolor ullam pariatur illum cum fugiat veritatis ea asperiores sunt esse, molestiae laboriosam dolores nemo minima.</p>
            </div>
        </div>
        <button type="button" class="btn btn-primary">All functions</button>
    </div>
</section>
<!------------------------------------------------------------------------------------------------------->



<div class="bd-code-snippet">
  <div class="bd-clipboard">
   <!------
   <button type="button" class="btn-clipboard">
     <svg class="bi" role="img" aria-label="Copy">
       <use xlink:href="#clipboard"></use>
     </svg>
   </button>---->
 </div>
 <div class="highlight">
   <pre tabindex="0" class="chroma">
     <code class="language-html" data-lang="html">
       <span class="line"><span class="cl"><h4>TOWER OF HANOI</h4>
         <span class="p">def TowerOfHanoi(n , source, destination, auxiliary):
          if n==1:
              print ("Move disk 1 from source",source,"to destination",destination)
              return
          TowerOfHanoi(n-1, source, auxiliary, destination)
          print ("Move disk",n,"from source",source,"to destination",destination)
          TowerOfHanoi(n-1, auxiliary, destination, source)
               
      # Driver code
      n = 4
      TowerOfHanoi(n,'A','B','C')
      </span>
      <span class="line"><span class="cl">
       <span class="s">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"</span> <span class="na">integrity</span><span class="o">=</span><span class="s">"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"</span>
        
      </span>
     </code>
   </pre>
 </div>
</div>




<div class="bd-code-snippet">
  <div class="bd-clipboard">
   <!------
   <button type="button" class="btn-clipboard">
     <svg class="bi" role="img" aria-label="Copy">
       <use xlink:href="#clipboard"></use>
     </svg>
   </button>---->
 </div>
 <div class="highlight">
   <pre tabindex="0" class="chroma">
     <code class="language-html" data-lang="html">
       <span class="line"><span class="cl"><h4>CALCULATE</h4>
         <span class="p">
          def add(x, y):
              return x + y
          
          # This function subtracts two numbers
          def subtract(x, y):
              return x - y
          
          # This function multiplies two numbers
          def multiply(x, y):
              return x * y
          
          # This function divides two numbers
          def divide(x, y):
              return x / y
          
          
          print("Select operation.")
          print("1.Add")
          print("2.Subtract")
          print("3.Multiply")
          print("4.Divide")
          
          while True:
              # take input from the user
              choice = input("Enter choice(1/2/3/4): ")
          
              # check if choice is one of the four options
              if choice in ('1', '2', '3', '4'):
                  try:
                      num1 = float(input("Enter first number: "))
                      num2 = float(input("Enter second number: "))
                  except ValueError:
                      print("Invalid input. Please enter a number.")
                      continue
          
                  if choice == '1':
                      print(num1, "+", num2, "=", add(num1, num2))
          
                  elif choice == '2':
                      print(num1, "-", num2, "=", subtract(num1, num2))
          
                  elif choice == '3':
                      print(num1, "*", num2, "=", multiply(num1, num2))
          
                  elif choice == '4':
                      print(num1, "/", num2, "=", divide(num1, num2))
                  
                  # check if user wants another calculation
                  # break the while loop if answer is no
                  next_calculation = input("Let's do next calculation? (yes/no): ")
                  if next_calculation == "no":
                    break
              else:
                  print("Invalid Input")
          
      </span>
      <span class="line"><span class="cl">
       <span class="s">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"</span> <span class="na">integrity</span><span class="o">=</span><span class="s">"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"</span>
        
      </span>
     </code>
   </pre>
 </div>
</div>

<div class="highlight">
  <pre tabindex="0" class="chroma">
    <code class="language-html" data-lang="html">
      <span class="line"><span class="cl"><h4>REPETITION</h4>
        <span class="p">import numpy as np

          # number of repetitions => n
          n = 2
          
          # array to perform repetition on
          example = [1, 2,  3, 4]
          
          # calling the repeat() function
          new_arr = np.repeat(example, n)
          
          print(new_arr)
          
     </span>
     <span class="line"><span class="cl">
      <span class="s">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"</span> <span class="na">integrity</span><span class="o">=</span><span class="s">"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"</span>
       
     </span>
    </code>
  </pre>
</div>
</div>

<!-----------------------------Testimonial-------------------------------->
<section id="testimonials">
    <div class="container">
        <h1 class="title text-center">What Clients Say</h1>
        <div class="row offset-1">
            <div class="col-md-3 testimonials">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi pariatur quisquam enim commodi. Adipisci pariatur beatae aliquam, laborum architecto sunt qui quae vero, dolor
                    perspiciatis asperiores dolorem nihil ad quas!
                </p>
                <img src="images/client1.jpeg">
                <p class="user-details"><b>Esh</b></p>
            </div>
            <div class="col-md-3 testimonials">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi pariatur quisquam enim commodi. Adipisci pariatur beatae aliquam, laborum architecto sunt qui quae vero, dolor
                    perspiciatis asperiores dolorem nihil ad quas!
                </p>
                <img src="images/client2.jpeg">
                <p class="user-details"><b>punz</b></p>
            </div>
            <div class="col-md-3 testimonials">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi pariatur quisquam enim commodi. Adipisci pariatur beatae aliquam, laborum architecto sunt qui quae vero, dolor
                    perspiciatis asperiores dolorem nihil ad quas!
                </p>
                <img src="images/client3.jpeg">
                <p class="user-details"><b>soma</b></p>
            </div>
        </div>
    </div>
</section>
<!----------->

<!--
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
------>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Info</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email ID</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments">
        </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>

    </form>
  </div>
</section>
<!--------footer-------------->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-box">
                <h1>pylib</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas culpa dicta placeat sit vel laudantium. Iusto, molestias eligendi deserunt unde alias saepe neque. Quas dolor ipsam illum molestiae eius et.
                </p>

            </div>
            <div class="col-md-4 footer-box">
                <p><b>CONTACT US</b></p>
                <p><i class="fa fa-map-marker"></i>Students</p>
                <p><i class="fa fa-phone"></i>4904793974</p>
                <p><i class="fa fa-envelope-o"></i>xyz@gmail.com</p>

            </div>
        </div>
    </div>

</section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>