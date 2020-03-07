<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  <title>Desa Sitoluama</title>
</head>
<body>
  <header class="cd-main-header js-cd-main-header">
 
    
    <div class="cd-search js-cd-search">
      <form>
        <input class="reset" type="search" placeholder="Search...">
      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
    
  
    <ul class="cd-nav__list js-cd-nav__list">
     
    
     
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Dashboard</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
          <a href="#0">Home</a>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <a href="#0">Pengumuman</a>
                   
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">Buat Pengumuman Tentang Desa</a></li>
            <li class="cd-side__sub-item"><a href="#0">Profil Desa</a></li>
            <li class="cd-side__sub-item"><a href="#0">Update Profil Desa</a></li>
            <li class="cd-side__sub-item"><a href="#0">Update APB Desa Kependudukan</a></li>
            <li class="cd-side__sub-item"><a href="#0">Update Data Penduduk</a></li>
          </ul>
        </li>
        
      
      
      </ul>
    
    
    </nav>
  
    <div class="cd-content-wrapper">
      <div class="text-component text--right">    
     
        <h1>Sitol Nauli</h1>
        <form id="frm-image-upload" action="#" name="img" method="post"
        enctype="multipart/form-data">
        <div class="form-row">
        <div>Select Image<br/></div>
        <div>
            <input type="file" class="file-input" name="file-input">
        </div>
        </div>

        <div class="button-row">
            <input type="submit" id="btn-submit" name="upload"
            value="upload">
        </div>
    </form>

    <br>
    <br>

    <p><b>Type Your Text Here</b></p>
      <form action="/html/tags/html_form_tag_action.cfm" method="post">
      <br>
<textarea name="comments" id="comments" style="width:500px;height:100px;color:#53760D;font:24px/30px cursive;">
 </textarea><br />
<input type="submit" value="Submit" />
</form>
</form>
 
        
      
      </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>