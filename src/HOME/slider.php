<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Tailwind Carousel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">


    <div class="relative flex items-center justify-center w-full">
        <div class="flex w-full py-8 overflow-hidden">
            <div class="flex transition-transform duration-500 ease" id="carousel">
            <?php foreach ($categories as $category): ?>
                <!-- Slides -->
                <div class="flex items-center justify-center flex-none w-56 h-24 p-4 mx-2 text-center bg-white rounded-md shadow-md">
                    <div class="text-lg"><a href=""><?php echo $category['Libelléca']; ?></a></div>
                </div>
                <?php endforeach; ?>
               
            </div>
        </div>

        <div class="absolute left-0 transform -translate-y-1/2 top-1/2">
            <button class="p-2 rounded-full bg-white/30" onclick="moveSlider('prev')">
                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
        </div>
        <div class="absolute right-0 transform -translate-y-1/2 top-1/2">
            <button class="p-2 rounded-full bg-white/30" onclick="moveSlider('next')">
                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    <script>
        const slidesContainer = document.getElementById('carousel');
        let slideIndex = 1; // Start at the first real slide
        let slideWidth = slidesContainer.children[0].offsetWidth + 16; // slide width plus margin

        function updateSlidePosition() {
            slidesContainer.style.transition = 'none'; // Disable transition for instant reset
            slidesContainer.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
            setTimeout(() => {
                slidesContainer.style.transition = 'transform 0.5s ease'; // Re-enable transition
            }, 50);
        }

        function moveSlider(direction) {
            if (direction === 'next') {
                slideIndex++;
                if (slideIndex >= slidesContainer.children.length - 7) {
                    slideIndex = 1;
                    slidesContainer.style.transition = 'none';
                    slidesContainer.style.transform = `translateX(-${slideWidth}px)`;
                    setTimeout(() => {
                        slidesContainer.style.transition = 'transform 0.5s ease';
                    }, 50);
                }
            } else {
                slideIndex--;
                if (slideIndex <= 0) {
                    slideIndex = slidesContainer.children.length - 7;
                    slidesContainer.style.transition = 'none';
                    slidesContainer.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
                    setTimeout(() => {
                        slidesContainer.style.transition = 'transform 0.5s ease';
                    }, 50);
                }
            }
            slidesContainer.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
        }

        updateSlidePosition(); // Initialize position
    </script>
</body>

</html>
