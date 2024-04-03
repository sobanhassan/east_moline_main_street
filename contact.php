<?php $title="Home";
include'includes/header.php'?>
    <style>
        .g-form-container {    
           position: relative; 
           width: 100%; 
           overflow: hidden; 
           padding-top: 1425px;
        } 
           
        .responsive-iframe {
           position: absolute; 
           top: 0; 
           left: 0; 
           bottom: 0; 
           right: 0; 
           width: 100%; 
           height: 100%; 
           border: none; 
        }
        
        .map-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            justify-items: center;
        }
        
        .map-grid a {
            color: black;
        }
        
        @media screen and (max-width: 855px) {
            .map-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
        <div class="banner">
            <img src="images/banner.jpg" alt="banner">
        </div>
        <div class="banner-text1">
            <p id="street">Main Street</p>
        </div>
        <div class="banner-text2">
            <p id="welcome">Welcome to East Moline Main Street</p>
        </div>
        <div class="banner-text3">
            <a href="about.php" class="button">Learn About Us</a>
        </div>
    </header>
    <div class="justify adjust">
        <h1>Contact <span style="color:#A42E00;">Us</span></h1>
        <p>Whether you’ve got something to get off your chest, an idea to share, or simply want to share a story, we want to hear it all!</p>
    </div>
    <div class="g-form-container">
        <iframe class="responsive-iframe" src="https://docs.google.com/forms/d/e/1FAIpQLScf1cfO_FhjorlMe97gJiRAN35bG4Tybzfsnb2YqSaxCe82Og/viewform?embedded=true" width="640" height="1260" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
    <div class="justify adjust map-grid">
        <div>
            <p><a href="tel:309-948-1926">309-948-1926</a></p>
            <a href="mailto: admin@emmmainstreet.org">admin@emmmainstreet.org</a>
            <p>EastMoline, IL 61244</p>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47800.5215381359!2d-90.40444345907409!3d41.514402658466125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e23a23ecd23619%3A0x400c13859c86562c!2sEast%20Moline%2C%20IL!5e0!3m2!1sen!2sus!4v1680107933739!5m2!1sen!2sus" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
<?php include'includes/footer.php'?>