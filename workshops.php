<!DOCTYPE HTML>

<html>

<head>
    <title>Workshops</title>

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
                    <li class="selected">
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
            
            <h2>Community Workshops</h2>
			
			<!-- Placeholder Image -->
            <img src='static/images/communityWorkshop1.jpg' alt="Placeholder Photo" class="rightphoto" style="width: 30%;" />
            
            <p>
                At Dandelion STH, I believe in the power of community. My community workshops are designed to bring people together, foster creativity, and build skills in a collaborative environment. Whether you're interested in therapeutic horticulture, arts and crafts, wellness activities, or technology, I am here to guide you. Join me to learn something new, make new friends, and enjoy a nurturing environment.
            </p>
            
            <h2>Corporate Workshops</h2>
            <p>
                Looking to boost team morale, enhance collaboration, or develop new skills within your organization? Dandelion STH offers a range of corporate workshops tailored to meet your company's needs. These workshops are perfect for team-building events, professional development days, and company retreats. With engaging activities, I ensure your team leaves feeling inspired, connected, and rejuvenated.
            </p>
            
            <h2>Private Workshops</h2>
            <p>
                Want a more personalized experience? My private workshops are perfect for individuals or small groups looking for a tailored workshop experience. Whether it's a special occasion, a unique gift, or just a personal interest, you can purchase tickets to join one of my exclusive sessions. Enjoy focused attention and a customized agenda that fits your interests and needs.
            </p>

            <h2>Join Me in Cultivating Wellbeing</h2>
            <p>
                At Dandelion STH, my mission is to improve lives through the healing power of nature and the transformative benefits of my workshops. Whether you’re part of a community group, a corporate team, or seeking a private session, I have something for everyone. Explore my offerings and join me in cultivating wellbeing, fostering social connections, and creating a positive impact in our communities.
            </p>
			
			<br>
			<br>
			<br>
			<br>
			
				<!-- Call-to-Action Section -->
				<div class="call-to-action">
					<a href="contact.php" class="cta-button">Enquire about bespoke workshops</a><br>
					<a href="https://www.eventbrite.co.uk/o/dandelion-sth-85890503143?_gl=1*1x05o4j*_up*MQ..*_ga*MTM1MzU5ODUyNy4xNzE5OTA5NjI3*_ga_TQVES5V6SH*MTcxOTkwOTYyNi4xLjAuMTcxOTkwOTYyNi4wLjAuMA.." class="cta-button">Check out our current workshops</a>
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
