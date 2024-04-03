<?php $title="Home";
include'includes/header.php'?>
    <style>
        .events-page-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            row-gap: 20px;
        }
        .events-page-grid img {
            max-width: 80%;
        }
        
        .one-row {
            grid-template-rows: 1fr!important;
        }
        
        .events-grid h1 {
            margin: 0;
        }
        
        .events-grid a {
            text-decoration: none;
            color: black;
        }
        
        .events-grid a:hover {
            text-decoration: underline;
        }
        
        @media screen and (max-width: 1000px) {
            .events-grid h1 {
                font-size: 25px;
            }
            
            .events-grid h3 {
                font-size: 15px;
            }
        }
        
        @media screen and (max-width: 855px) {
            .events-page-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .events-grid h1 {
                font-size: 20px;
                margin: 0;
            }
            
            .events-grid h3 {
                font-size: 10px;
                margin: 0!important;
            }
            
            .events-page-grid .date {
                display: none;
            }
            
            .events-page-grid .events-grid {
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
        <h1>Upcoming Events</h1>
        <div class="events-page-grid">
            

            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>June<strong>16</strong><br>2023</p>
                </div>
                <div>
                    <p>June 16, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>RICO Talent Show</h1></a>
                    <h3>Friday June 16th</h3>
                    <p>East Moline Main Street partners with the Rock Island County  Fair to keep the Talent Show going.&nbsp; Find the attached form and send in by  the date listed and let showcase your amazing talent.&nbsp; Everyone is welcome,  rules are included in attachment.&nbsp; Runner's Park is the venue and I can't  wait to see your performances.</p>
                    <p><a href="docs/2023-Talent-Show-Entry-Form.pdf" target="_blank">2023 Entry Form</a></p>
                    <p></p>
                </div>
            </div>
            <div>
                <img src="images/talent.jpg" alt="talent show">
            </div>
            
            
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>June<strong>16</strong><br>2023</p>
                </div>
                <div>
                  <p>Weekly </p>
                    <h1>Queen of Hearts</h1>
<h3>Weekly Fundraiser</h3>
                    <p>There are 52 cards and 2  jokers for a total of 54 cards. <br />
                      For a chance to draw for  the Queen of Hearts, purchase Tickets at 3 tickets for $5. <br />
                    Tickets will be sold  behind the bar @ The Whiskey Stop and at the Main Street Tent on Sunday’s  during the Summer Concert Series.</p>
<p><a href="docs/East-Moline-Main-Street-Queen-of-hearts-rules.pdf" target="_blank">East Moline Main Street Queen of Hearts Rules</a></p>
<p><a href="docs/Queen-of-Hearts-Payout-scale.pdf" target="_blank">East Moline Main Street Queen of Hearts Payout Scale</a></p>
                    <p></p>
                </div>
            </div>
            <div>
                <img src="images/heart.jpg" alt="heart">
            </div>
            
            
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>June<strong>18</strong><br>2023</p>
                </div>
                <div>
                    <p>June 18, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Father’s Day Concert - Juneteenth Celebration <i>Funk 5</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Funktastic 5</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>June<strong>25</strong><br>2023</p>
                </div>
                <div>
                    <p>June 25, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/.pdf" target="_blank"><h1>Concert - Pulgita <i>Grupo Realidad</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf.pdf" target="_blank">Pulgita <i>Grupo Realidad</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/concert-pulgita.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>02</strong><br>2023</p>
                </div>
                <div>
                    <p>July 02, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Avey Grows Band</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Avey Grows Band</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>03 & 04</strong><br>2023</p>
                </div>
                <div>
                    <p>July 03 & 04, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>Support the City</h1></a>

                    <h3>East Moline  is THE place to be in the QCA to celebrate Independence Day!</h3>
                    <p>Live Music,  Fireworks, the Firecracker Run, and of course the annual 4th of July  Parade.</p>
                    <p>Monday,  July 3rd come to River Bend Park to check out the kids&rsquo; zone, food trucks, and  live music from &ldquo;Those About to Yacht&rdquo;.&nbsp; Fireworks follow at dusk.</p>
                    <p>Up and at  &lsquo;em early on July 4th for the fire department&rsquo;s pancake breakfast,  cheer on runners at the Firecracker Run then finish with the 4th of July Parade  at 1 o&rsquo;clock on 15th Avenue.</p>
                    <p>Independence  Day in East Moline...a welcome difference</p>
                </div>
            </div>
            <div>
                <img src="images/fireworks.jpg" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>09</strong><br>2023</p>
                </div>
                <div>
                    <p>July 09, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Incredible 45’s</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Incredible 45’s</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>15</strong><br>2023</p>
                </div>
                <div>
                    <p>July 15, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>Christmas in July</h1></a>
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div>
                <img src="images/" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>16</strong><br>2023</p>
                </div>
                <div>
                    <p>July 16, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Orangadang</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Orangadang</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>23</strong><br>2023</p>
                </div>
                <div>
                    <p>July 23, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Mercury Brothers</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Mercury Brothers</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>July<strong>30</strong><br>2023</p>
                </div>
                <div>
                    <p>July 30, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert - Pulgita <i>Crooked Cactus</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank">Pulgita <i>Crooked Cactus</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/concert-pulgita.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>August<strong>06</strong><br>2023</p>
                </div>
                <div>
                    <p>August 06, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Far Out 283</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Far Out 283</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>August<strong>13</strong><br>2023</p>
                </div>
                <div>
                    <p>August 13, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Class of ’82</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Class of ’82</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>August<strong>19</strong><br>2023</p>
                </div>
                <div>
                    <p>August 19, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>Freedom Fest</h1></a>
                    <h3></h3>
                    <p>The Blackstones and the Bratt Pack</p>
                </div>
            </div>
            <div>
                <img src="images/" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>August<strong>20</strong><br>2023</p>
                </div>
                <div>
                    <p>August 20, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert <i>Wild Oatz</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Wild Oatz</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>August<strong>27</strong><br>2023</p>
                </div>
                <div>
                    <p>August 27, 2023 @ 5:00 pm - 8:00 pm</p>
                    <a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><h1>Concert - <i>Travis Reid Band</i></h1></a>
                    <h3><a href="docs/EMMS-Concert-Series-Flyer.pdf" target="_blank"><i>Travis Reid Band</i></a></h3>
                    <p>Runner's Park - 742 15th Avenue, East Moline</p>
                    <p>Food trucks, vendors and entertainment during the band breaks. Family friendly. No outside coolers please. Free Event.</p>
                </div>
            </div>
            <div>
                <img src="images/summer-concert-series.png" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>October<strong>20</strong><br>2023</p>
                </div>
                <div>
                    <p>October 20, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>Halloween Event</h1></a>
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div>
                <img src="images/" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>November<strong>25</strong><br>2023</p>
                </div>
                <div>
                    <p>November 25, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>Shop Small - Friday, Saturday & Sunday</h1></a>
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div>
                <img src="images/" alt="">
            </div>
            <div class="events-grid one-row">
                <div class="date">
                    <p><img src="images/arrow-black-2.png" alt=""><br>December<strong>02</strong><br>2023</p>
                </div>
                <div>
                    <p>December 02, 2023 @ </p>
                    <a href="docs/.pdf" target="_blank"><h1>Christmas</h1></a>
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div>
                <img src="images/" alt="">
            </div>
        </div>
    </div>

<?php include'includes/footer.php'?>