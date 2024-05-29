<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .poppins {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

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

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 20;
    }

    .filter-menu-open {
        display: block !important;
    }

    @media (max-width: 768px) {
        #filterMenu {
            position: fixed;
            top: 0;
            left: 0;
            width: 300px;
            height: 100%;
            background: white;
            z-index: 30;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }
    }

    @media (min-width: 769px) {
        #filterMenu {
            position: static;
            width: 300px;
        }
    }
</style>

<body class="" style="background-color : white;">
    <div class="p-5 bg-green-100">
        <ul id="slidedown" class="flex-row">
            <li class="mt-5 mb-2 text-2xl text-center text-black text-bold">Shop</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Shop</span></li>
        </ul>
    </div>
    <div class="flex flex-col items-center justify-center md:flex-row md:items-start">

        <div>
            <div class="overlay" id="overlay"></div>
            <div class="ml-5 flex justify-start">
                <div class="w-full p-4">
                    <div class="relative">
                        <button id="filterButton"
                            class="flex items-center px-4 py-2 mb-4 text-black bg-gray-200 rounded-full md:mr-0 md:hidden">
                            <img src="../../images/2.png" alt="">
                            <p class="flex items-center justify-center gap-2"><i
                                    class=" fa-solid fa-sliders"></i>Filtrer</p>
                        </button>
                        <div id="filterMenu"
                            class="absolute top-0 left-0 z-10 flex-col hidden w-full bg-white md:flex md:flex-row md:relative md:w-auto">
                            <div class="p-4 mt-5 mb-4 border border-gray-200 rounded-md bg-gray-50 md:mb-0">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-2xl font-semibold text-black">Product categories</h2>
                                    <button id="closeButton" class="text-black md:hidden">✖</button>
                                </div>
                                <ul class="mb-8 space-y-2">
                                    <li><a href="#" class="text-black hover:text-blue-500">Category 1</a></li>
                                    <li><a href="#" class="text-black hover:text-blue-500">Category 2</a></li>
                                    <li><a href="#" class="text-black hover:text-blue-500">Category 3</a></li>
                                    <li><a href="#" class="text-black hover:text-blue-500">Category 4</a></li>
                                </ul>
                                <div class="p-4 border border-gray-200 rounded-md bg-gray-50">
                                    <h3 class="mb-2 text-xl font-semibold text-black">Filter by Price</h3>
                                    <input type="range" min="0" max="1000" step="10"
                                        class="w-full h-2 mb-2 bg-blue-500 rounded-lg cursor-pointer">
                                    <div class="flex justify-between text-sm">
                                        <span>$0</span>
                                        <span>$1000</span>
                                    </div>
                                    <button class="px-20 py-2 mt-4 text-white bg-blue-500 rounded-full">Filter</button>
                                </div>
                                <div class="p-4 mt-5 border border-gray-200 rounded-md bg-gray-50">
                                    <h3 class="mb-2 text-xl font-semibold text-black">Product Brands</h3>
                                    <ul class="space-y-1">
                                        <li><a href="#" class="text-black hover:underline">Brain</a></li>
                                        <li><a href="#" class="text-black hover:underline">Facemask</a></li>
                                        <li><a href="#" class="text-black hover:underline">Greenlab</a></li>
                                        <li><a href="#" class="text-black hover:underline">Medical</a></li>
                                        <li><a href="#" class="text-black hover:underline">Mymedi</a></li>
                                        <li><a href="#" class="text-black hover:underline">Nursecare</a></li>
                                        <li><a href="#" class="text-black hover:underline">Nursing</a></li>
                                        <li><a href="#" class="text-black hover:underline">Pharmacy</a></li>
                                    </ul>
                                </div>
                                <div class="p-4 mt-5 border border-gray-200 rounded-md bg-gray-50">
                                    <h3 class="mb-2 text-xl font-semibold text-black">Filter by Tags</h3>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="text-black custom-tag-button">New Arrivals</button>
                                        <button class="text-black custom-tag-button">On Sale</button>
                                        <button class="text-black custom-tag-button">Popular</button>
                                        <button class="text-black custom-tag-button">Trending</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                const filterButton = document.getElementById('filterButton');
                const filterMenu = document.getElementById('filterMenu');
                const closeButton = document.getElementById('closeButton');
                const overlay = document.getElementById('overlay');

                filterButton.addEventListener('click', () => {
                    filterMenu.classList.remove('hidden');
                    overlay.classList.add('filter-menu-open');
                });

                closeButton.addEventListener('click', () => {
                    filterMenu.classList.add('hidden');
                    overlay.classList.remove('filter-menu-open');
                });

                overlay.addEventListener('click', () => {
                    filterMenu.classList.add('hidden');
                    overlay.classList.remove('filter-menu-open');
                });
            </script>
        </div>



        <div>

                
        <div class="p-7 pl-0 w-auto grid md:grid-rows-3 grid-cols-1 md:grid-cols-subgrid  md:grid-flow-col ">
    <?php 
    
    
        /*$conn = new PDO('mysql:host=localhost;port=3308;dbname=pharmacie', 'root', '');
        $query = "SELECT IDp, Prixv, IDcat, Libellép , Imagep FROM produit";
        $result = $conn->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);*/

        $obj = new Product();
        $data = $obj ->getFilteredProducts();
        
        foreach ($data as $ligne) {
            
            $id = $ligne["IDp"];
            $Productprix = $ligne["Prixv"];
            $Productcategory = $ligne["IDcat"];
            $Productname = $ligne["Libellép"];
            $Productimage = $ligne["Imagep"];
            
            ?>
            <div class="my-2">
                <?php include '../PRODUCTCARD/cardcontroller.php'; ?>
            </div>
            <?php
        }
    
    ?>
      </div>
        </div>
    </div>
</body>

</html>