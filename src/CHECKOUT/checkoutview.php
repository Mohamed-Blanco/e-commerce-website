<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style> .poppins {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}
</style>

</head>

<body class="poppins bg-white" style="background-color:white">
  <div class="bg-green-100 p-5">
    <ul id="slidedown" class="flex-rew">
      <li class="text-2xl text-center text-black text-bold mt-5 mb-2">checkout</li>
      <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
            class="fa-solid fa-caret-right"></i> checkout</span></li>
    </ul>
  </div>

  <div class="poppins lg:flex lg:items-center lg:justify-center lg:h-screen max-lg:py-4">
      <div class="bg-gradient-to-br from-gray-200 to-gray-100 p-6 w-full max-w-5xl max-lg:max-w-xl mx-auto rounded-md">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center">Checkout</h2>

        <div class="grid lg:grid-cols-3 gap-6 mt-12">
          <div class="lg:col-span-2">
            <h3 class="text-lg font-bold text-gray-800">Choose your payment method</h3>

            <div class="grid gap-4 sm:grid-cols-2 mt-4">
              <div class="flex items-center">
                <input type="radio" class="w-5 h-5 cursor-pointer" id="card" checked />
                <label for="card" class="ml-4 flex gap-2 cursor-pointer">
                  <img src="https://readymadeui.com/images/visa.webp" class="w-12" alt="card1" />
                  <img src="https://readymadeui.com/images/american-express.webp" class="w-12" alt="card2" />
                  <img src="https://readymadeui.com/images/master.webp" class="w-12" alt="card3" />
                </label>
              </div>

              <div class="flex items-center">
                
              </div>
            </div>

            <form class="mt-8">
              <div class="grid sm:col-span-2 sm:grid-cols-2 gap-4">
                <input type="text" placeholder="Name of card holder"
                  class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                <input type="number" placeholder="Postal code"
                  class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                <input type="number" placeholder="Card number"
                  class="col-span-full px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                <input type="number" placeholder="EXP."
                  class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                <input type="number" placeholder="CVV"
                  class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
              </div>
            </form>
          </div>

          <div class="bg-white p-6 rounded-md">
            <h3 class="text-lg font-bold text-gray-800">Summary</h3>
            <ul class="text-gray-800 mt-4 space-y-2">
              <li class="flex flex-wrap gap-4 text-sm">Discount (20%) <span class="ml-auto font-bold">4.00dh</span></li>
              <li class="flex flex-wrap gap-4 text-sm">Tax <span class="ml-auto font-bold">4.00dh</span></li>
              <hr />
              <li class="flex flex-wrap gap-4 text-base font-bold">Total <span class="ml-auto">468.00dh</span></li>
            </ul>
          </div>
        </div>

        <div class="flex flex-wrap gap-4 mt-8">
          <button type="button"
            class="px-6 py-3.5 text-sm bg-white hover:bg-gray-50 text-gray-800 rounded-md">Pay later</button>
          <button type="button"
            class="px-6 py-3.5 text-sm bg-blue-600 text-white rounded-md bg-green-400 hover:bg-blue-700">Submit</button>
        </div>
      </div>
    </div>
</body>

</html>