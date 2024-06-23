<!DOCTYPE HTML>

<html>

<head>
    <title>Terrariums Workshop</title>

    <!---Head section--->
    <?php require_once('includes/head_section.php') ?>
    <!---// Header section--->
</head>
     
<body>

    <div id="main">
    
        <!---Header--->
        <div id="header">
        
            <!--START-MENUBAR-->
            <div id="menubar">
                <ul class="menu">
                    <li class="unselected">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="unselected">
                        <a href="workshops.php">Workshops</a>
                          <ul class="dropdown">
                            <li class="dropdownTab"><a href="workshop1.php">Terrariums</a></li>
							<!--
                            <li class="dropdownTab"><a href="workshop2.php">Workshop 2</a></li>
                            <li class="dropdownTab"><a href="workshop3.php">Workshop 3</a></li>
							-->
                          </ul>
                    </li>
					<!--
                    <li class="unselected">
                        <a href="portfolio.php">Portfolio</a>
                    </li>
					-->
                    <li class="unselected">
                        <a href="about.php">About</a>
                    </li>
                    <li class="unselected">
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!--END-MENUBAR-->
          
        <!--END_HEADER-->
        </div>

        <!--START-SITE-CONTENT-->
        <div id="site_content">
            
            <h2>Terrarium Workshop</h2>
			
			<!-- Placeholder Image -->
            <img src='static/images/Terrarium3.JPG' alt="Placeholder Photo" class="rightphoto" style="width: 30%;" />
            
            <p>
                Discover the art of creating beautiful and sustainable terrariums at Dandelion STH's Terrarium Workshop. This hands-on workshop is perfect for plant enthusiasts, DIY lovers, and anyone looking to bring a touch of nature indoors.
            </p>
			
            
            <p>
                During this workshop, you will:
                <ul>
                    <li>Learn about different types of terrariums and the best plants to use</li>
                    <li>Get step-by-step instructions on how to assemble your own terrarium</li>
                    <li>Understand the principles of plant care and maintenance for terrariums</li>
                    <li>Take home your unique creation to enjoy and cherish</li>
                </ul>
            </p>
			
			<!-- Placeholder Image -->
            <img src='static/images/Terrarium1.JPG' alt="Placeholder Photo" class="leftphoto" style="width: 30%;" />
            
            <p>
                No prior experience is necessary—all materials and tools will be provided. Whether you're looking for a fun activity with friends, a unique gift idea, or a way to enhance your living space, this workshop is for you. Join me in a creative and relaxing environment and bring a little green into your life!
            </p>
			
			<h2>All about Terrariums</h2>
			
			<p>
				A terrarium is a sealed or open glass container that houses a miniature ecosystem. These small, self-contained gardens can be filled with a variety of plants, creating a lush, green environment that is easy to maintain and beautiful to look at.
			</p>

			<p>
				Terrariums can be divided into two main types: closed and open. Closed terrariums are perfect for plants that thrive in high humidity and low light, such as ferns, mosses, and air plants. The sealed environment allows for the recycling of water through condensation and evaporation, creating a self-sustaining ecosystem.
			</p>

			<p>
				Creating a terrarium involves selecting the right container, choosing suitable plants, and layering materials such as gravel, activated charcoal, and potting soil to ensure proper drainage and prevent root rot. Once assembled, terrariums require minimal maintenance, making them an excellent choice for busy individuals or those new to gardening.
			</p>

			<p>
				Terrariums not only serve as a beautiful addition to any home or office but also offer a range of benefits. They can improve air quality, reduce stress, and provide a sense of connection to nature. With their compact size and captivating aesthetics, terrariums are a delightful way to bring the beauty of the outdoors inside.
			</p>
			
			
			<!-- Placeholder Image -->
            <img src='static/images/Terrarium2.JPG' alt="Placeholder Photo" class="centerphoto" style="width: 30%;" />

				<!-- Call-to-Action Section -->
				<div class="call-to-action">
					<a href="contact.php" class="cta-button">Enquire about workshops</a>
				</div>

        <!--END-SITE-CONTENT-->
        </div>
        
        <!--START-FOOTER-->
        <div id="footer">
        <?php include_once  ('includes/footer.php');?>
        </div>
        <!--END-FOOTER-->
        
    <!--END-MAIN-->
    </div>
    
</body>

</html>
