<?php 
    include '../NAVBAR/navbarview.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p class = "text-black" >PANIER SECTION</p>
        <section class="py-12">
        <div class="flex justify-between container mx-auto px-4 mt-10">
        <table class="w-full md:w-2/3 sm:w1/3 text-left shadow-lg rounded-lg">
            <thead class="h-32">
                <tr class="text-xs text-center text-gray-500 bg-gray-50 uppercase border-b">
                    <th class="px-4 py-3">Product</th>
                    <th class="px-4 py-3">Price</th>
                    <th class="px-4 py-3">Quantity</th>
                    <th class="px-4 py-3">Subtotal</th>
                    <th class="px-4 py-3">Remove</th>
                </tr>
            </thead>
            <tbody class="h-28">
                <tr class="text-gray-700 text-center">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-1.5">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full" src="../images/dolip.jpg" alt="product image"/>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Doliprane</p>
                                <p class="text-sm text-gray-500">Description</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">$20.00</td>
                    <td class="px-4 py-3 text-sm">
                        <input type="number" value="2" min="1" class="w-16 text-center rounded border appearance-none">
                    </td>
                    <td class="px-4 py-3 text-sm">$40.00</td>
                    <td class="px-4 py-3 text-sm">
                    <button class="p-2 rounded-full hover:bg-red-100 border border-transparent hover:border-red-500 text-red-500 hover:text-red-600">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                           </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="w-full md:w-1/3 sm:1/3 text-left shadow-lg rounded-lg">
            <thead class="h-16">
            <tr class="text-xs text-center text-gray-500 bg-gray-50 uppercase border-b">
                    <th class="px-4 py-3">Cart totals</th>
                    <th class="px-4 py-3"></th>
            </thead>
            <tbody class="h-28">
                <tr><th class="px-4">Subtotal</th><td>$61.00</td></tr>
                <tr><th class="px-4">total</th><td>$50.00</td></tr>   
                <tr><th class="px-7"><div class="flex flex-col space-y-4">
                  <a href="/sheckout" class="bg-amber-600 text-white font-bold py-2 rounded-full text-center hover:bg-amber-700">
                   Proceed to checkout
                </a>
                   <a href="../PRODUCTS/productsview.php" class="bg-gray-200 text-gray-800 font-bold py-2 rounded-full text-center hover:bg-gray-300">
                   Continue Shopping
                  </a>
                  </div></th></tr>
            </tbody>
        </table>
    </div>
    </section>
</body>
</html>
<?php 
include '../Footer/Footerview.php'
?>