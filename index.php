<html
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>	
    <link rel="stylesheet" href="css/style.css" type="text/css">     
	<script type="text/javascript">
     //   if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {window.location.href = "mobile/index.html"; }
	</script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/page.js"></script>
    <style>
        a {
            color: #000;
            text-decoration: none;
        }
        
        span:hover {
            border-bottom: solid 1pt #000;
            cursor: hand;
            display: inline;
            color: black;
            padding-bottom: 3px;
        }    
    </style>        
	<title>devorm | about</title>
	</head>
    <body>
        <div class="nav hidden-xs">
            <header id="headerTxt">devorm</header>
            <ul>
                <li><a href="#about" id="about" onclick="moveToSlickSlide(0)">about</a></li>
                <li>releases</li>
                <li>
                    <ul>
                        <li><a href="#dev001" id="dev001" class="relList" onclick="moveToSlickSlide(1)">DEV001</a></li>
                        <li><a href="#dev002" id="dev002" class="relList" onclick="moveToSlickSlide(2)">DEV002</a></li>
                        <li><a href="#dev003" id="dev003" class="relList" onclick="moveToSlickSlide(3)">DEV003</a></li>
                    </ul>
                </li>
                <li><a href="https://soundcloud.com/devorm" target="_blank" >soundcloud</a></li>
                <li><a href="https://devormrecords.bandcamp.com" target="_blank" >bandcamp</a></li>
            </ul>
        </div> 
        <div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title" align="right">
          
        <a role="button" id="nav-collapse-btn" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            +
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul align="center">
                <li><a href="#about" id="about" onclick="moveToSlickSlide(0)">about</a></li>
                <li>releases</li>
                <li><a href="#dev001" id="dev001" onclick="moveToSlickSlide(1)">DEV001</a></li>
                <li><a href="#dev002" id="dev002" onclick="moveToSlickSlide(2)">DEV002</a></li>
                <li><a href="#dev003" id="dev003" onclick="moveToSlickSlide(3)">DEV003</a></li>
                <li><a href="https://soundcloud.com/devorm" target="_blank" >soundcloud</a></li>
                <li><a href="https://devormrecords.bandcamp.com" target="_blank" >bandcamp</a></li>
            </ul>
      </div>
    </div>
    </div>
  </div>
</div>
        <div class="container">
            <?php include 'slides/slide_splash.php' ?>
            <?php include 'slides/slide_about.php' ?>
            <?php include 'slides/slide_dev001.php' ?>
            <?php include 'slides/slide_dev002.php' ?>
            <?php include 'slides/slide_dev003.php' ?>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
        
      $('.container').slick({
        accessibility: false,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        draggable: false,
        fade: false
      });
           
        
      $('#gate').click(function(){
         moveThroughSplash();
    });
    
      $('#about').click(function(){
          $('.container').slick('slickGoTo', 0);
      });    
        
      $('#dev001').click(function(){
          $('.container').slick('slickGoTo', 1);
      });
        
      $('#dev002').click(function(){
          $('.container').slick('slickGoTo', 2);
      });          
            
    });
    
    </script>        
    </body>
</html>