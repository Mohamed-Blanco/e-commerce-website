<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-input {
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <!-- Map and Contact Information Section -->
    <div class="grid md:grid-cols-2">
        <!-- Map Embed -->
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.466663520666!2d-74.0072556850973!3d40.74365797932849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e5a3e6d684d93cf!2sNew%20York!5e0!3m2!1sen!2sus!4v1584650193969!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- Contact Info -->
        <div class="p-6 space-y-4">
            <h2 class="text-2xl font-bold">How Can We Help You?</h2>
            <p>We are at your disposal 7 days a week!</p>
            <div class="space-y-2">
                <p><strong>Address:</strong> 15051 E Alameda Pkwy, Aurora, CO 80012, USA</p>
                <p><strong>Email:</strong> contact@sitename.com</p>
                <p><strong>Phone:</strong> +0123 666 999</p>
            </div>
        </div>
    </div>

    <!-- Additional Info Section -->
    <div class="p-6 text-white bg-blue-200">
        <h2 class="text-3xl font-bold">Get To Know Us</h2>
        <div class="grid gap-4 mt-4 md:grid-cols-2">
            <div>
                <h2 class="text-3xl font-bold">Have A Project In Mind? Let’s Talk.</h2>
                <p>Description or mission statement goes here.</p>
            </div>
            <div>
                <img src="path/to/your/image.jpg" alt="Descriptive alt text">
            </div>
        </div>
        <div class="grid gap-4 mt-4 md:grid-cols-4">
            <div>
                <h3 class="font-semibold">Careers</h3>
                <p>contact@sitename.com</p>
            </div>
            <div>
                <h3 class="font-semibold">Opening Time</h3>
                <p>8:00 AM - 6:00 PM</p>
            </div>
            <div>
                <h3 class="font-semibold">Follow Us</h3>
                <!-- Social Media Links -->
            </div>
            <div>
                <h3 class="font-semibold">Feedbacks</h3>
                <!-- Feedback Form Link -->
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="p-6 bg-gray-100">
        <h2 class="text-2xl font-bold">Get In Touch</h2>
        <form action="code.php" method="post">
            <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
                <input type="text" name="name" placeholder="Your Name *" class="p-2 border border-gray-300 rounded custom-input" >
                <input type="email" name="email" placeholder="Email Address *" class="p-2 border border-gray-300 rounded custom-input" >
            </div>
            <div class="mt-4">
                <textarea name="message" placeholder="Your Message *" rows="4" class="w-full p-2 border border-gray-300 rounded custom-input" name="message"></textarea>
            </div>
            <div class="mt-4">
                <button type="submit" class="w-full p-2 text-white bg-blue-500 rounded custom-input">Post Message</button>
            </div>
        </form>
    </div>
</body>
</html>
