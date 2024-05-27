<?php 
session_start();
    include '../NAVBAR/navbarview.php';
    if(isset($_SESSION["nom"])){
        echo "<script>alert('email has been sended ')</script>";
        unset($_SESSION["nom"]);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact Us</title>
    <style>
          .custom-input {
            border-radius: 15px;
        }
    </style>
</head>
<body>
<div class="grid md:grid-cols-2">
       
       <div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13128.992076383627!2d-1.9265851378440593!3d34.64843881719741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd787d5fbdedc3b7%3A0x9dee02db65e54b44!2sPharmacie%20Nour%20El-Mohamadi!5e0!3m2!1sen!2sma!4v1716634550088!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
   
       <div class="p-6 space-y-4">
           <h2 class="text-2xl font-bold">How Can We Help You?</h2>
           <p>We are at your disposal 7 days a week!</p>
           <div class="space-y-2">
               <p><strong>Address:</strong> Lotissement ballaoui n° 584, Oujda 60000</p>
               <p><strong>Email:</strong> pharmacie@gmail.com</p>
               <p><strong>Phone:</strong> 0648122256</p>
           </div>
       </div>
   </div>

  
   <div class="p-6 text-black bg-white-200">
   <h3 class="font-bold text-blue-500">Get To Know Us</h3>
   <div class="grid gap-4 mt-4 md:grid-cols-2">
      
       <div class="space-y-40"> 
           
           <div>
               <h2 class="mb-4 text-3xl font-bold">Have A Project In Mind? Let’s Talk.</h2>
               <p>Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus...</p>
           </div>
           
           
           <div class="grid gap-4 md:grid-cols-2" >
               <div>
                   <h3 class="font-semibold">Careers</h3>
                   <p>Would you like to join our growing team?</p>
                   <p>contact@sitename.com</p>
               </div>
               <div>
                   <h3 class="font-semibold">Opening Time</h3>
                   <p>8:00 AM - 6:00 PM</p>
                   <p>Saturday – Sunday: Close</p>
               </div>
               <div>
                   <h3 class="font-semibold">Follow Us</h3>
                   <div class="flex space-x-2">
                       <a href="#" aria-label="Facebook"><img src="../images/fb.png" alt="Facebook" class="w-6 h-6"></a>
                       <a href="#" aria-label="Instagram"><img src="../images/insta.png" alt="Instagram" class="w-6 h-6"></a>
                       <a href="#" aria-label="LinkedIn"><img src="../images/link.png" alt="LinkedIn" class="w-6 h-6"></a>
                   </div>
               </div>
               <div>
                   <h3 class="font-semibold">Feedbacks</h3>
                   <p>Have a project in mind? Send a message.</p>
                   <p>charikat@gmail.com</p>
               </div>
           </div>
       </div>
       
       <div class="flex items-start">
           <img src="../images/Contact.jpg" alt="success goal">
       </div>
   </div>
</div>

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
<?php
include '../Footer/Footerview.php';
?>