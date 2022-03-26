<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="maincss.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
  <header class="text-black-600 body-font" style="background-color: #E2E8F0; ">
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

      <section class="text-gray-600 body-font relative" style="margin-top:4%">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
            
          </div>
          <form action="_contact.php" method="post">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name"
                  class="w-full bg-gray-500 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email"
                  class="w-full bg-gray-500 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="phone" class="leading-7 text-sm text-gray-600" >Phone No.</label>
                <input type="number" id="phone" name="phone" size="10"
                  class="w-full bg-gray-500 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message"
                  class="w-full bg-gray-500 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
            <div class="p-2 w-full">
              <button
                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" >Submit</button>
            </div>
            <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP6RFwb4snYZ47Htz_-AEWURi4-SEAs-73-A&usqp=CAU"
                style="height: 20px; width: 20px; margin-left: auto; margin-right: auto;">9016159866
              <img
                src="https://flyclipart.com/thumb2/free-icons-mail-18588.png"
                style="height: 25px; width: 40px; margin-top:5%; margin-left: auto; margin-right: auto;">dhairyarefrigeration2012@gmail.com
            </div>
          </div>
        </div>
    </div>
  </section>
  </form> 

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