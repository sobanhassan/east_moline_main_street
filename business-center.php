<?php $title="Business Center";
include'includes/header.php'?>
<style>
    .about-text h1 {
        color: #A42E00;
    }
    
    .about-text h3 {
        color: #ff7545;
    }
    
    .directors-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }
    
    .directors-grid a {
        color: black;
        text-decoration: none;
        font-weight: 900;
    }
    
    .directors-grid h3 {
        color: #ff7545;
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
        <h1>Business Center</h1>
        <div class="directory-page-grid">
            <div><p>City Of East Moline<br />
            915 16th Avenue<br />
            <a href="https://www.eastmoline.com/" target="_blank">website</a></p></div>
            <div><p>City Of East Moline Police Department<br />
              915 16th Avenue<br />
              <a href="https://www.eastmoline.com/164/Police" target="_blank">website</a></p></div>
            <div><p>East Moline Main Street Association Office<br />
              1003 7th Street Suite 2B</p></div>
            <div><p>East Moline Public Library<br />
              740 16th Avenue<br />
              <a href="https://www.eastmolinelibrary.org/" target="_blank">website</a></p></div>
            <div><p>Guthrie Development, Inc<br />
              920 15th Avenue<br />
              <a href="https://www.facebook.com/profile.php?id=100047209458179" target="_blank">website</a></p></div>
        </div>
    </div>

    

    
<?php include'includes/footer.php'?>