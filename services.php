<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="maincss.css" rel="stylesheet">
    <link rel="stylesheet" href="extracss.css">
    <title>Services</title>
</head>
<body>
    <header class="text-black-600 body-font" style="background-color: #E2E8F0; position:fixed; top:0; width:100%;">
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
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">What We are Offering</h1>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="flex flex-col text-center w-full mb-10">
              <h2 class="sm:text-2xl text-l font-medium title-font text-gray-500">Premium Air Conditioning Services</h2>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <img src="https://sktperfectdemo.com/themepack/airconditioner/wp-content/uploads/2020/11/sec8-icon2.png" style="border-radius: 100%;">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">AC Installation</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Reliable AC Installation with proper Inspection and Checks with meeting all directions specified by Manufacturer.</p>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <img src="https://sktperfectdemo.com/themepack/airconditioner/wp-content/uploads/2020/11/sec8-icon1.png" style="border-radius: 100%;">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">AC Sales</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">We offer all kinds of AC of all Brands and all Types at very Efficient Rates.</p>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <img src="https://sktperfectdemo.com/themepack/airconditioner/wp-content/uploads/2020/11/sec8-icon3.png" style="border-radius: 100%;">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">AC Maintenance</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Reliable AC Repairs, Service and AMCs with Genuine Trust.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="text-gray-600 body-font bg-gray-100">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We offer Reasonable and Reliable Rates as per Market Norms.</p>
          </div>
          <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <table class="table-auto w-full text-left whitespace-no-wrap">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-lg text-gray-900 text-sm bg-gray-300 rounded-tl rounded-bl">Description</th>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-lg text-gray-900 text-sm bg-gray-300">Price (per unit)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">AC Installation</td>
                  <td class="px-4 py-3 text-lg text-gray-900">&#8377; 1500/-</td>
                </tr>
                <tr>
                  <td class="border-t-2 border-gray-200 px-4 py-3">AC Reinstallation</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">&#8377; 2000/-</td>
                </tr>
                <tr>
                  <td class="border-t-2 border-gray-200 px-4 py-3">Service</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">&#8377; 300/-</td>
                </tr>
              </tbody>
            </table>
          </div>
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="document.location='contact.php'">Contact Us</button>
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