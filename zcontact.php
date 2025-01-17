<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N.Flowers Contact</title>

    <link rel="stylesheet" href="style2.css">

</head>
<body>
    <!-- header kısmı -->
    <header>
        <a href="z.html" class="logo">N<span>.</span>Flowers</a>
        
    </header>

    <br><br><br><br><br>

    <!-- contact section -->
        <section class="contact" id="contact">
            <h1 class="heading">contact <span>us</span></h1>
        
        
                <div class="row">
                    <form action="islem.php" method="post">
                        <input type="text" required="" placeholder="name" class="box" name="ad">
                        <input type="email" required="" placeholder="email" class="box" name="email">
                        <textarea class="box" required="" placeholder="message" id="" cols="30" rows="10" name="mesaj"></textarea>
                        <input type="submit" value="send message"name="insertislemi" class="btn">

                    </form>

                    <div class="image">
                        <img src="img/contact.jpg">

                    </div>

                </div>
            

        </section>
    

</body>
</html>