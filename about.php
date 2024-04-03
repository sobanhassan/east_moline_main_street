<?php $title="Home";
include'includes/header.php'?>
<style>
    .about-text h1 {
        color: #A42E00;
    }
    
    .about-text h3 {
        color: #A42E00;
    }
    
    .directors-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }
    
    .directors-grid a {
        color: #A42E00;
        text-decoration: none;
        font-weight: 900;
    }
    
    .directors-grid h3 {
        color: black;
    }
    
    @media screen and (max-width: 1000px) {
        .directors-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    
    @media screen and (max-width: 855px) {
        .directors-grid {
            grid-template-columns: 1fr;
            text-align: center;
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
    <div class="about-text justify adjust">
        <h1>About</h1>
        <h2>This is YOUR East Moline Main Street Association</h2>
        <p>We are a volunteer organization of East Moline residents and business owners dedicated to the preservation and revitalization of the community through shared experiences and resources.</p>
        <h3>Vision</h3>
        <p>East Moline Main Street envisions a downtown community that locals and visitors describe as a vibrant destination place to eat, shop, and play in the Quad Cities</p>
        <h3>Mission</h3>
        <p>East Moline Main Street’s mission is to foster the revitalization and growth of the city’s downtown by supporting local businesses, holding unique events, and creating beautiful spaces</p>
        <h3>Values</h3>
    </div>
    <div class="justify adjust">
        <span style="color: #A42E00;">Community: </span><span>We are committed to our East Moline communities - our
            business and civic communities and the diverse
            people of East Moline.</span><br><br>
        <span style="color: #A42E00;">Partnerships: </span><span>We believe the sahed prosperuty of the East Moline
            community is strenghthen when Easrt Moline main Street
            and its partners coordinate to develop common goals, share resources and work as a team to implement
            projects.</span><br><br>
        <span style="color: #A42E00;">Excellence: </span><span>We strive to deliver initiatives that reflect the
            excellence of the East Moline Community.<br><br>
            <h1>Board of <span style="color: #A42E00;">Directors</span></h1>
    </div>
    
    <div class="directors-grid justify adjust">
        <div>
            <h2>Patricia Hansen</h2>
            <h3>President Concert Series Chair</h3>
            <a href="mailto:president@emmainstreet.org" target="_blank">president@emmainstreet.org</a>
        </div>
        <div>
            <h2>Gracie Macias</h2>
            <h3>Vice President - Taco & Marg Festival Chair & Pulgita Chair</h3>
            <p><a href="mailto:eastmolinecinco@yahoo.com">eastmolinecinco@yahoo.com</a>&nbsp;</p>
</div>

        <div>
            <h2>McKenzie Bert</h2>
            <h3>Secretary</h3>
            <a href="mailto:Admin@emmainstreet.org">Admin@emmainstreet.org</a>
        </div>
        <div>
            <h2>Laura Polizzi - Johnson</h2>
            <h3>Treasurer</h3>
            <p><a href="mailto:Admin@emmainstreet.org" target="_blank">Admin@emmainstreet.org</a>            </p>
        </div>
        
        <div>
            <h2>Dawn Imel</h2>
            <h3>&nbsp;</h3>
</div>        
        <div>
            <h2>Michelle Horton</h2>
            <h3>&nbsp;</h3>
</div>
        <div>
            <h2>Debbie VanAsshe-Gruhl</h2>
            <h3>&nbsp;</h3>
        </div>
        <div>
            <h2>David Clevenger</h2>
            <h3>&nbsp;</h3>
</div>
        <div>
            <h2>Autin Roach</h2>
            <h3>&nbsp;</h3>
</div>
        <div>
            <h2>Laura Guthrie</h2>
            <h3>&nbsp;</h3>
</div>
        <div>
            <h2>Tayvian Johnson</h2>
            <h3>&nbsp;</h3>
</div>
        

    </div>
    
<?php include'includes/footer.php'?>