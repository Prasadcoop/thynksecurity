<!DOCTYPE html>
<html lang="en">

<head>
    <title>This is my Portfolio Website</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./styles.css" /> -->

</head>

<body>

    <!-- Navbar -->
    <!-- <nav class="py-3 navbar navbar-expand-lg fixed-top auto-hiding-navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
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
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Hi,<br>I am John</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta veniam voluptate aliquam deleniti labore quod quis illum, sapiente nam nesciunt magni voluptatibus voluptatem incidunt placeat consequuntur quaerat voluptatum expedita!</p>
                    <button type="button" class="btn btn-dark btn-lg">Book a Skype Call</button>
                </div>
                <div class="col">
                    <img src="..." alt="...">
                </div>
            </div>
            <div class="row cards">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <!-- here is where they add the ICON -->
                            <img src="..." alt="..." class="icon">
                            <h5 class="card-title">Skills</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <!-- here is where they add the ICON -->
                            <img src="..." alt="..." class="icon">
                            <h5 class="card-title">Experience</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <!-- here is where they add the ICON -->
                            <img src="..." alt="..." class="icon">
                            <h5 class="card-title">Projects</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section ends here -->

    <!-- About Us -->
    <section id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <!-- another image can be inserted here -->
                    <img src="..." alt="..." class="img-fluid" />
                </div>
                <div class="col">
                    <h1>About Me</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tenetur reiciendis in quae, rem corporis id sequi debitis aliquam laudantium illum vel unde? Praesentium laboriosam neque eaque architecto maxime nihil?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tenetur reiciendis in quae, rem corporis id sequi debitis aliquam laudantium illum vel unde? Praesentium laboriosam neque eaque architecto maxime nihil?</p>
                    <button type="button" class="btn btn-dark btn-lg">Hire me!</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <!-- Projects section -->
    <div class="container">
        <div class="row align-items-center projects">
            <div class="col">
                <h1>Our Project</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quod aliquam corporis tempore nostrum. Animi rem quisquam deleniti qui ad ipsa quod! Animi corrupti, ex blanditiis dolor error nulla consectetur.</p>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <div class="card mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 1</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Some useful info</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <img src="..." alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 2</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Some useful info</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <img src="..." alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 3</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Some useful info</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Projects Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row align-items-center projects">
                <div class="col">
                    <h1>Contact me</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quod aliquam corporis tempore nostrum. Animi rem quisquam deleniti qui ad ipsa quod! Animi corrupti, ex blanditiis dolor error nulla consectetur.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of contact section -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>