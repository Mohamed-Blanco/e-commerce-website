<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Static Template</title>
  <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
  <link href="../output.css" rel="stylesheet">
  <style>
    .carousel-heights {
      height: 400px;
      /* Adjust the height as needed */
    }
  </style>
</head>

<body>

  <div class="mx-auto rounded w-100">
    <div id="default-carousel " class="relative p-5 " data-carousel="static">

      <!-- Apply the carousel-height class here -->
      <div class="relative overflow-hidden carousel-heights ">
        <div class="flex justify-center duration-700 ease-in-out" data-carousel-item>

          
            <div class="hidden md:block">
              <?php include 'Productcard.php' ?>
            </div>
            
         

          <div class="block md:hidden">
            <?php include 'Productcard.php' ?>
          </div>

        </div>

        <div class="flex justify-center duration-700 ease-in-out" data-carousel-item>

         
            <div class="hidden md:block">
              <?php include 'Productcard.php' ?>
            </div>
          

          <div class="block md:hidden">
            <?php include 'Productcard.php' ?>
          </div>

        </div>
        <div class="flex justify-center duration-700 ease-in-out" data-carousel-item>

        
            <div class="hidden md:inline-block">
              <?php include 'Productcard.php' ?>
            </div>
           

          <div class="block md:hidden">
            <?php include 'Productcard.php' ?>
          </div>

        </div>
      </div>



      <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          <span class="hidden">Anterior</span>
        </span>
      </button>
      <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
          class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
          <span class="hidden">Siguiente</span>
        </span>
      </button>
    </div>
  </div>









</body>

</html>