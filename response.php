<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="maincss.css" rel="stylesheet">
    <link rel="stylesheet" href="extracss.css">
    <title>Response Recieved</title>
</head>
<body>
    <header class="text-black-600 body-font" style="background-color: #E2E8F0;">
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

      <section class="text-gray-600 body-font bg-indigo-100" style="margin-top:4%">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <svg fill="none" stroke="#85e650" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
            class="text-indigo-500 w-20 h-20 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <br>
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">We Recieved your Request</h1>
            <p class="mb-8 leading-relaxed">We will contact you soon. Thanks for visiting our website.</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="document.location='shopnow.html'">Continue Shopping</button>
              <button class="ml-4 inline-flex text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 hover:text-gray-700 rounded text-lg" onclick="document.location='index.php'">Home</button>
            </div>
          </div>
        </div>
      </section>
      

      <footer class="text-black-600 body-font" style="position:fixed; top:93%; width:100%;">
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