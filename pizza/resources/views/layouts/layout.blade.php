<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>

<div class="navbar navCus">
<ul class="nav nav-pills">
  
  <li class="nav-item">
    <a class="nav-link" href="/"style="font-size: 20px;">Pizzahouse</a>
  </li>
</ul>
  <ul class="nav justify-content-end">

 
  <li class="nav-item">
    <a class="nav-link links" href="{{route('register2')}}">Register</a>
  </li>
  @if(!session()->has('logged'))
  <li class="nav-item">
    <a class="nav-link links" href="{{route('login2')}}">Login</a>
  </li>
  @endif
<div class="nav-item dropdown ">
  <button class="hh nav-link links " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" >
    <i class="fa fa-caret-down"></i>
  </button>
  
  <ul class="dropdown-menu">
    
    @if(session()->has('logged'))
    <li><a class="dropdown-item" href="">{{$logged['name']??'logged'}}</a></li>
    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
    @else
    <li><a class="dropdown-item" href="">Not login</a></li>
    @endif
  </ul>
  
</div>

</div>

</ul>
</div>

 
<br /><br />
<!-- HEADER -->

    @yield('contents')


<!-- FOOTER -->    
<br /><br />
<footer class="card text-center footerBackground">
<div class="card-body container">
    <div class="row rowPadding">
        <div class="col-sm"><p><b> About us </b></p>
            <div class="about-us ">
                My name is SUN KIMLENG, I'm from NORTON UNIVERSITY which is located in PHNOMPEN, CAMBODIA. I built this project to test my ability and gain more experiences.
            </div>
        </div>
        <br />
        
        <div class="col-sm contact-us"><p><b> Contact us </b></p>
            <div class="contact-us">
                <div><a class="fbBadge" href="https://www.facebook.com/lenglengDD/" target="_blank"> FACEBOOK <svg xmlns="http://www.w3.org/2000/svg" width="24" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg></a>
                </div>

                <div><a href="https://github.com/Sun-Kimleng" target="_blank" class="gitHubBadge">GITHUB <svg xmlns="http://www.w3.org/2000/svg" width="24" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
        <div class="card-footer" style="margin-top: 20px">
            copyright 2021 <a href="#" class="link-secondary">Sun Kimleng</a>. All rights reserved.
        </div>
</div>
</footer>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95Pdgy
TmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>

</html>