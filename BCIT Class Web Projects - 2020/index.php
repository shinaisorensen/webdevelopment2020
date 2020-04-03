<!-- 
    Author: Shinai Sorensen
    Student Number: A01059813 
-->

<!DOCTYPE html>
<html lang = 'en'>

<head>
    <title>COMP 1950 Homepage</title>

    <meta charset = 'UTF-8'>
    <!-- Link to the CSS style sheet -->
    <link rel = "stylesheet" href = "/students/ssorensen23/css/index.css">
</head>

<body>
    <!-- Header -->
    <div id = "headerContainer">
        <h1>COMP 1950</h1>
    </div>
    
    <!-- Navigation bar -->
    <div id = "navContainer">
        <ul id = "navBar">
            <li><a href = '/students/ssorensen23/html5.html'>HTML5</a></li>
            <li><a href = 'http://bcitcomp.ca/students/jtan82/hw2/index.html'>CSS Selectors</a></li>
            <li><a href = '/students/ssorensen23/cssLayoutLarge.html'>CSS3 Layout</a></li>
            <li><a href = '/students/ssorensen23/responsiveLayout.html'>Responsive Layout</a></li>
            <li><a href = '/students/ssorensen23/jQuery.html'>jQuery</a></li>
            <li><a href = '/students/ssorensen23/error/error404.html'>Server-side</a></li>
            <li><a href = '/students/ssorensen23/templates.html'>Templates</a></li>
        </ul>
    </div>
    
    <!-- Profile -->
    <div id = "profileContainer" class = "flex-container">
        <div>
            <img src = "/students/ssorensen23/images/indexImages/chibiMe.png" alt = "Chibi Version of Me" id = "chibiMe">
        </div>
        <div id = "profileContent">My name is Shinai Sorensen.<br><br>
            I was born in Victoria but moved to Vancouver to study at BCIT.<br><br>
            I have a younger brother (5) and a younger sister (3).<br><br>
            I'm super excited for the remake of FF7 and Cyberpunk 2077 to come out in April.<br><br>
            I work full-time as a barista and go to school part-time so I can finish the CSC program.<br><br>
            <!-- PHP to display date -->
            <p>The date using PHP: <?php echo date('F j, Y, H:iA'); ?></p> 
            
        </div>
    </div>

    <!-- Links  -->
    <div id = 'contentContainer'>
        <h2 class = 'linkHeader'>Favourite Websites</h2>
        <dl class = 'linkList'>
            <dt><a href = 'https://www.ebgames.ca/'>EB Games</a></dt>
            <dd>I buy all of my games from here. This is the bane of my bank account, but I still love this place.</dd>
            <dt><a href = 'http://clobbaonline.com/'>Clobba Online</a></dt>
            <dd>I always find such beautiful clothes here, I love to window shop and imagine wearing any one of these dresses.</dd>
        </dl>

        <h2 class = 'linkHeader'>Favourite Online Resources</h2>
        <dl class = 'linkList'>
            <dt><a href = 'https://www.w3schools.com/'>W3 Schools</a></dt>
            <dd>I love this as a handy tool to refresh my memory or to introduce new topics in a simple way!</dd>
            <dt><a href = 'https://www.udemy.com/'>Udemy</a></dt>
            <dd>They have a variety of courses that I use to learn more programming skills and other languages.</dd>
        </dl>
    </div>   

    <!-- Footer -->
    <footer>
        <div>
            Contact me at: <a href = 'ssorensen23@my.bcit.ca'>ssorensen23@my.bcit.ca</a>
        </div>
    </footer>
</body>

</html>