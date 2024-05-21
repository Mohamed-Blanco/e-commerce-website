<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        input[type=range]::-webkit-slider-thumb {
            background: #1D4ED8;
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            cursor: pointer;
        }
        input[type=range]::-moz-range-thumb {
            background: #1D4ED8; 
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            cursor: pointer;
        }
        input[type=range]::-ms-thumb {
            background: #1D4ED8;
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            cursor: pointer;
        }
        .custom-tag-button {
            background-color: #D1D5DB;
            border-radius: 15px;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s;
        }
        .custom-tag-button:hover {
            background-color: #1D4ED8; 
            color: white;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex justify-center p-4">
        <div class="w-full max-w-6xl p-4 bg-white shadow-md">
            <div class="flex flex-col md:flex-row">
                <div class="p-4 mb-4 border border-gray-200 rounded-md bg-gray-50 md:mb-0 md:w-1/3">
                    <h2 class="mb-4 text-2xl font-semibold">Product categories</h2>
                    <ul class="mb-8 space-y-2">
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Category 1</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Category 2</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Category 3</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Category 4</a></li>
                    </ul>
                    <div class="p-4 border border-gray-200 rounded-md bg-gray-50">
                        <h3 class="mb-2 text-xl font-semibold">Filter by Price</h3>
                        <input type="range" min="0" max="1000" step="10" class="w-full h-2 mb-2 bg-blue-500 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-sm">
                            <span>$0</span>
                            <span>$1000</span>
                        </div>
                        <button class="px-20 py-2 mt-4 text-white bg-blue-500 rounded-full">Filter</button>
                    </div>
                    <div class="p-4 border border-gray-200 rounded-md bg-gray-50">
                        <h3 class="mb-2 text-xl font-semibold">Product Brands</h3>
                        <ul class="space-y-1">
                            <li><a href="#" class="text-gray-700 hover:underline">Brain</a></li>
                            <li><a href="#" class="text-gray-700 hover:underline">Facemask</a></li>
                            <li><a href="#" class="text-gray-700 hover:underline">Greenlab</a></li>
                            <li><a href="#" class="text-gray-700 hover:underline">Medical</a></li>
                            <li><a href="#" class="text-gray-700 hover:underline">Mymedi</a></li>
                            <li><a href="#" class="text-gray-700 hover:underline">Nursecare</a></li>
                            <li><a href="#" class="text-gray-700 hover:underline">Nursing</a></li>
                            <li><a href="#" class="text-gray-700hover:underline">Pharmacy</a></li>
                        </ul>
                    </div>
                    <div class="p-4 border border-gray-200 rounded-md bg-gray-50">
                        <h3 class="mb-2 text-xl font-semibold">Filter by Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <button class="custom-tag-button">New Arrivals</button>
                            <button class="custom-tag-button">On Sale</button>
                            <button class="custom-tag-button">Popular</button>
                            <button class="custom-tag-button">Trending</button>
                        </div>
                    </div>
                </div>
                <div class="flex-1 p-4">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
