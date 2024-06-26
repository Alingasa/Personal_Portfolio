
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8">
     <title>Register</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="" name="keywords">
     <meta content="" name="description">
 
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">
 
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
     
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href={{asset("my_dashboard/lib/owlcarousel/assets/owl.carousel.min.css")}} rel="stylesheet">
     <link href={{asset("my_dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")}} rel="stylesheet" />
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href={{asset("my_dashboard/css/bootstrap.min.css")}} rel="stylesheet">
 
     <!-- Template Stylesheet -->
     <link href={{asset("my_dashboard/css/style.css")}} rel="stylesheet">
 </head>
 
 <body>
     <div class="container-xxl position-relative bg-white d-flex p-0">
         <!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
             <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                 <span class="sr-only">Loading...</span>
             </div>
         </div>
         <!-- Spinner End -->
 
 
         <!-- Sign Up Start -->
         <div class="container-fluid">
             <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                 <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                     <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                         <div class="d-flex align-items-center justify-content-between mb-3">
                             <a href="{{route('register')}}" class="">
                                 <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Sign Up</h3>
                             </a>
                          
                         </div>
                         <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                         <div class="form-floating mb-3">
                            
                             <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{old('first_name')}}" id="floatingText" name="first_name" >
                             <label for="floatingText">First Name</label>
       
                         </div>
                       
                         <div class="form-floating mb-3">
                             <input type="text" class="form-control @error('middle_name') is-invalid @enderror" value="{{old('middle_name')}}" id="floatingInput" name="middle_name" >
                             <label for="floatingInput">Middle Name</label>
                         </div>
                         <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{old('last_name')}}" id="floatingInput" name="last_name" >
                            <label for="floatingInput">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="floatingInput" name="email" >
                            @error('email')
                            <p class="text-danger">{{$message}}</p> 
                             @enderror
                            <label for="floatingInput">Email</label>
                        </div>
                         <div class="form-floating mb-4">
                             <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" id="floatingPassword" name="password" >
                             <label for="floatingPassword">Password</label>
                         </div>
                         @error('password')
                        <p class="text-danger">{{$message}}</p> 
                         @enderror
                         <div class="form-floating mb-4">
                            <input type="password" class="form-control @error('confirmation') is-invalid @enderror" id="floatingPassword" name="password_confirmation" >
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                         <div class="d-flex align-items-center justify-content-between mb-4">
                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                             </div>
                             <a href="">Forgot Password</a>
                         </div>
                         <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                         <p class="text-center mb-0">Already have an Account? <a href="{{route('login')}}">Sign In</a></p>
                     </div>
                    </form>
                 </div>
             </div>
         </div>
         <!-- Sign Up End -->
     </div>
 
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src={{asset("my_dashboard/lib/chart/chart.min.js")}}></script>
     <script src={{asset("my_dashboard/lib/easing/easing.min.js")}}></script>
     <script src={{asset("my_dashboard/lib/waypoints/waypoints.min.js")}}></script>
     <script src={{asset("my_dashboard/lib/owlcarousel/owl.carousel.min.js")}}></script>
     <script src={{asset("my_dashboard/lib/tempusdominus/js/moment.min.js")}}></script>
     <script src={{asset("my_dashboard/lib/tempusdominus/js/moment-timezone.min.js")}}></script>
     <script src={{asset("my_dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}></script>
 
     <!-- Template Javascript -->
     <script src={{asset("my_dashboard/js/main.js")}}></script>
 </body>
 
 </html>