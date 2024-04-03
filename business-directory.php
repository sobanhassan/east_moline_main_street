<?php $title="Business Directory";
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
        <h1>Business Directory</h1>

        <h3>Eat - Drink - Market</h3>
        <p><a href="eat-drink-market.php">Looking for something different? Check out East Moline favorites for meals and nightlife options...</a></p>
        <h3>Shop - Play - Create</h3>
        <p><a href="shop-play-create.php">Great shopping and fun in East Moline...</a></p>
        <h3>Professional Services</h3>
        <p><a href="professional-services.php">East Moline has a lot of great businesses for services...</a></p>
        <h3>Business Center</h3>
        <p><a href="business-center.php">Business Center businesses...</a></p>
        <p>&nbsp;</p>
    </div>

    

    
<?php include'includes/footer.php'?>