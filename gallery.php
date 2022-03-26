<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="maincss.css" rel="stylesheet">
    <link rel="stylesheet" href="extracss.css">
    <title>Gallery</title>
</head>
<body>
    <header class="text-black-600 body-font" style="background-color: #E2E8F0;position:fixed; top:0; width:100%;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center bg-gray-300" >
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="https://media.istockphoto.com/vectors/air-conditioner-installation-black-glyph-icon-mounting-and-setting-vector-id1260421742?k=20&m=1260421742&s=170667a&w=0&h=eINamv8Yg18jvCA5MZ9qcyBLSwyDV8c5CrtaqvnqN6g=" style="border-radius: 80%; height: 45px; width: 45px;">
            <span class="ml-3 text-xl">Dhairya Refrigeration</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	
          flex flex-wrap items-center text-base justify-center">
          <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
            <a href="aboutus.php" class="mr-5 hover:text-gray-900">About Us</a>
            <a href="services.php" class="mr-5 hover:text-gray-900">Services</a>
            <a href="works.php" class="mr-5 hover:text-gray-900">Works</a>
            <a href="gallery.php" class="mr-5 hover:text-gray-900">Gallery</a>
            <a href="contact.php" class="mr-5 hover:text-gray-900">Contact Us</a>
          </nav>
          <button class="inline-flex items-center bg-indigo-200 border-0 py-1 px-3 
          focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" onclick="document.location='shopnow.html'">Shop Now
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
            stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
        <script src="header.js"></script>
      </header>

      <section class="text-gray-600 body-font" style="margin-top:4%">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-4xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-2">Gallery</h1>
          </div>
          <style>
          #hide {
          display: none;
          }
    
         #myDIV:hover + #hide {
         display: block;
         color: black;
         font-weight: bold;
         font-size: 20px;
         background-color: rgba(150, 146, 135, 0.3);
         text-align: center;
         -webkit-text-stroke-width: 0.2px;
         -webkit-text-stroke-color: white;
         }
         </style>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2" >
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" id="myDIV" src="images\img1.jpg">
                <div id="hide">AC Indoor Unit</div>
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" id="myDIV" src="images\img2.jpg">
                <div id="hide">Spencer X</div>
              </div>
              <div class="md:p-2 p-1 w-full" style="margin-top:3%">
                <img alt="gallery" class="w-full h-full object-cover object-center block" id="myDIV" src="images\img22.jpg">
                <div id="hide">Sample House AC Installation</div>
              </div>
            </div>
            <div class="flex flex-wrap w-1/2" >
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" id="myDIV" src="images\img21.jpg">
                <div id="hide">AC Installation at Lilleria 1038</div>
              </div>
              <div class="md:p-2 p-1 w-1/2" style="margin-top:3%">
                <img alt="gallery" class="w-full object-cover h-full object-center block" id="myDIV" src="images\img3.jpg">
                <div id="hide">Nilamber Bellissimo</div>
              </div>
              <div class="md:p-2 p-1 w-1/2" style="margin-top:3%">
                <img alt="gallery" class="w-full object-cover h-full object-center block" id="myDIV" src="images\img20.jpg">
                <div id="hide">Lab at SVIT, Vasad</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="text-black-600 body-font">
        <div class="bg-gray-500">
          <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-black-800 text-sm text-center sm:text-left">© Copyright by Dhairya Refrigeration — 2022. All rights reserved.
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
             
            </span>
          </div>
        </div>
      </footer>
</body>
</html>