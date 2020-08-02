<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <?$APPLICATION->ShowHead();?>
  <title>
    <?$APPLICATION->ShowTitle()?>
  </title>

  <? use Bitrix\Main\Page\Asset;?>

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

  <? Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/bootstrap.css");



  Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/normalize.min.css");
  Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/font-awesome.min.css");
  
  Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/animate.css");
  Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/templatemo-misc.css");
  Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/templatemo-style.css");
  Asset::getInstance() -> AddJs( SITE_TEMPLATE_PATH . "/js/vendor/modernizr-2.6.2.min.js");
  Asset::getInstance() -> AddString('<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">');
  
  CJSCore::Init(['jquery']);
  ?>





</head>

<body>

  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

  <?$APPLICATION->ShowPanel()?>

  <?if($USER->IsAdmin()):?>

  <div style="">
    <form action="/bitrix/admin/site_edit.php" method="GET">
      <input type="hidden" name="LID" value="<?=SITE_ID?>" />
      <p>
        <font style="color:red">
          <?echo GetMessage("DEF_TEMPLATE_NF")?>
        </font>
      </p>
      <input type="submit" name="set_template" value="<?echo GetMessage(" DEF_TEMPLATE_NF_SET")?>" />
    </form>
  </div>

  <?endif?>


  <header class="site-header">
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="top-header-left">
              <a href="#">Sign Up</a>
              <a href="#">Log In</a>
            </div>
            <!-- /.top-header-left -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6 col-sm-6">
            <div class="social-icons">
              <ul>
                <li>
                  <a href="#" class="fa fa-facebook"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-dribbble"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-twitter"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-linkedin"></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.social-icons -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.top-header -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-8">
            <div class="logo">
              <h1><a href="#">Kool Store</a></h1>
            </div>
            <!-- /.logo -->
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-8 col-sm-6 col-xs-4">
            <div class="main-menu">
              <a href="#" class="toggle-menu">
                <i class="fa fa-bars"></i>
              </a>
              <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Catalogs</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Policies</a></li>
                <li><a href="#">About</a></li>
              </ul>
            </div>
            <!-- /.main-menu -->
          </div>
          <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.main-header -->
    <div class="main-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7">
            <div class="list-menu">
              <ul>
                <li><a href="">Shop</a></li>
                <li><a href="">Details</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
            <!-- /.list-menu -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6 col-sm-5">
            <div class="notification">
              <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"template1", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => "template1",
		"PATH" => "/include/subtitle.php"
	),
	false
);?>


            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.main-nav -->
  </header>
  <!-- /.site-header -->