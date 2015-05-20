<?php
$home_img = "/img/img" . rand(2, 4) . ".jpg";
// TODO make home image pick between a random list of images.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Hyden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ("lib.php");?>
    <style type="text/css">
        
        a,
        a:focus,
        a:hover {
            color: #ffff;
        }
        
        .btn-default,
        .btn-default:hover,
        .btn-default:focus {
            color: #333;
            text-shadow: none;
            
            background-color: #fff;
            border: 1px solid #fff;
        }
        
        html,
        body {
            
            background: url(<?php echo($home_img); ?>) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 100%;
            background-color: #000;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 3px rgba(0, 0, 0, .5);
        }
        
        .site-wrapper {
            display: table;
            width: 100%;
            height: 100%;
            
            min-height: 100%;
            -webkit-box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
        }
        
        .site-wrapper-inner {
            display: table-cell;
            vertical-align: top;
        }
        
        .cover-container {
            margin-right: auto;
            margin-left: auto;
        }
        
        .inner {
            padding: 30px;
        }
        
        .masthead-brand {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        
        .masthead-nav > li {
            display: inline-block;
        }
        
        .masthead-nav > li + li {
            margin-left: 20px;
        }
        
        .masthead-nav > li > a {
            padding-right: 0;
            padding-left: 0;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            
            color: rgba(255, 255, 255, .95);
            border-bottom: 2px solid transparent;
        }
        
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
            background-color: transparent;
            border-bottom-color: #a9a9a9;
            border-bottom-color: rgba(255, 255, 255, .25);
        }
        
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
            color: #fff;
            border-bottom-color: #fff;
        }
        
        @media (min-width: 768px) {
            .masthead-brand {
                float: left;
            }
            .masthead-nav {
                float: right;
            }
        }
        
        .cover {
            padding: 0 20px;
        }
        
        .cover .btn-lg {
            padding: 10px 20px;
            font-weight: bold;
        }
        
        .mastfoot {
            color: #999;
            /* IE8 proofing */
            
            color: rgba(255, 255, 255, .5);
        }
        
        @media (min-width: 768px) {
            
            .masthead {
                position: fixed;
                top: 0;
            }
            .mastfoot {
                position: fixed;
                bottom: 0;
            }
            
            .site-wrapper-inner {
                vertical-align: middle;
            }
            
            .masthead,
            .mastfoot,
            .cover-container {
                width: 100%;
            }
        }
        
        @media (min-width: 992px) {
            .masthead, .mastfoot, .cover-container {
                width: 700px;
            }
        }
    </style>
</head>
<?php
$masthead_brand = 'Hyden';
$active = 'Home';
$yt = 'Steam';
$git = 'GitHub'; 
?>
<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner" id="inner">
                        <h3 class="masthead-brand" style="visibility: hidden"><?php echo($masthead_brand); ?></h3>
                        <ul class="nav masthead-nav">
                            <li class="active">
                                <a style="visibility: hidden" href="#" ><?php echo($active); ?></a>
                            </li>

                            <li>
                                <a href="#" onclick="alert('Maybe soon! ;)');"><p style="visibility: hidden"><?php echo($yt); ?></p></a>
                            </li>

                            <li>
                                <a href="https://www.github.com/playhyden"><p style="visibility: hidden"><?php echo($git); ?></p></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="inner cover" id="line1"></div>

                <div class="mastfoot">
                    <div class="inner" id="copyright"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
	scheduleForFadeIn('#line1', '<h1 class="cover-heading">Hyden</h1>                     <p class="lead">This project is currently under development.</p>                     <p class="lead"><a class="btn btn-lg btn-success" href="#" onclick="alert(\'This section is coming soon.<strong> Thanks for your interest!</strong>\');">Be a Beta Tester</a></p>');
	scheduleForFadeIn('#copyright', ' <p style="color: black">© <?php echo date("Y"); ?> LightWater Nexus and Justin O\'Boyle</p>');
	autoFadeIn('#inner');
	
	var time = 50;
	function scheduleForFadeIn(element, html){
	setTimeout(function(){
	$(element).hide();
	$(element).html(html);
	$(element).fadeIn();
	}, time);
		time = time + 50;
	}
	
	function autoFadeIn(element){
		var html = replaceAll('style="visibility: hidden"', '', $(element).html());
		console.log(html);
		scheduleForFadeIn(element, html);
	}
	
function replaceAll(find, replace, str) {
  return str.replace(new RegExp(find, 'g'), replace);
}
	
    </script>
</body>

</html>
