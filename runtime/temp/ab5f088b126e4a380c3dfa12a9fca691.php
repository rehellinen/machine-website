<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"C:\wamp64\www\machine\public/../application/index\view\index\beng.html";i:1519272777;s:63:"C:\wamp64\www\machine\application\index\view\public\header.html";i:1519275324;s:60:"C:\wamp64\www\machine\application\index\view\public\nav.html";i:1519275540;s:62:"C:\wamp64\www\machine\application\index\view\public\title.html";i:1519230527;s:63:"C:\wamp64\www\machine\application\index\view\public\footer.html";i:1517122207;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Machine</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/machine/public/static/css/index.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .wide-background
        {
            width: 100%;
            background-color: #000088;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#myScrollspy">

<!-- 总div -->
<div class="container">

    <!-- header -->
<div class="big-nav">
<div class="row">
    <div class="logo col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img src="/machine/public/static/images/logo.png" class="img-responsive"/>
    </div>
    <div class="no-padding header-text-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <p class="header-text">Programme Structure and Syllabuses | HKU Home |</p>
        <p>Contact Us | Sitemap</p>

        <div class="hidden-xs search-div input-group col-md-offset-6 col-lg-offset-6 col-sm-offset-6 col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:0px ;positon:relative">
            <input style="height: 34px" type="text" class="form-control"placeholder="请输入字段名" / >
            <span class="input-group-btn">
               <button class="btn btn-info btn-search" style="height: 34px">查找</button>
            </span>
        </div>
    </div>
</div>
<!-- header -->

<!-- nav -->
<div class="row nav-row" id="getWidth">
    <nav class="no-margin navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="ul-width nav navbar-nav">
                    <li class="active li-width"><a href="<?php echo url('index/index/index'); ?>">Home</a></li>
                    <li class="li-about-width"><a href="<?php echo url('index/index/about'); ?>">About Us</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/beng'); ?>">BEng</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/research'); ?>">Research</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/people'); ?>">People</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/facilities'); ?>">Facilities</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/event'); ?>">Events</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/students'); ?>">Students</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</div>
<!-- nav -->

    <div class="short-background hidden-xs"></div>

<!-- photos -->
<div class="photo-text-container hidden-xs">
    <div class="col-lg-6">
        <img class="title-photo" src="/machine/public/static/images/subtitle.jpg" />
    </div>
    <p class="title-text">People</p>
</div>
<!-- photos -->

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked hidden-xs" data-spy="affix" data-offset-top="350">
                <li class="active hidden-xs"><a href="#section-1">Object and Learning Outcomes</a></li>
                <li><a href="#section-2">Programme Structure and Syllabuses</a></li>
                <li><a href="#section-3">Professional Recognition</a></li>
                <li><a href="#section-4">Opportunities on internationalization</a></li>
                <li><a href="#section-5">Career Prospects</a></li>
                <li><a href="#section-6">Courses and Timetables</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h2 id="section-1">Object and Learning Outcomes</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum. Vivamus fermentum in arcu in aliquam. Quisque aliquam porta odio in fringilla. Vivamus nisl leo, blandit at bibendum eu, tristique eget risus. Integer aliquet quam ut elit suscipit, id interdum neque porttitor. Integer faucibus ligula.</p>
            <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
            <hr>
            <h2 id="section-2">Programme Structure and Syllabuses</h2>
            <p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan. Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
            <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p>
            <hr>
            <h2 id="section-3">Professional Recognition</h2>
            <p>Integer pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh vitae lorem porttitor blandit in nec ante. Pellentesque vitae metus ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget blandit. Proin imperdiet mattis augue in porttitor. Quisque tempus enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor fringilla blandit. Ut sed sapien at purus lacinia porttitor. Nullam iaculis, felis a pretium ornare, dolor nisl semper tortor, vel sagittis lacus est consequat eros. Sed id pretium nisl. Curabitur dolor nisl, laoreet vitae aliquam id, tincidunt sit amet mauris.</p>
            <p>Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget ante rutrum adipiscing. Cras interdum ipsum mattis, tempus mauris vel, semper ipsum. Duis sed dolor ut enim lobortis pellentesque ultricies ac ligula. Pellentesque convallis elit nisi, id vulputate ipsum ullamcorper ut. Cras ac pulvinar purus, ac viverra est. Suspendisse potenti. Integer pellentesque neque et elementum tempus. Curabitur bibendum in ligula ut rhoncus.</p>
            <hr>
            <h2 id="section-4">Opportunities on internationalization</h2>
            <p>Suspendisse a orci facilisis, dignissim tortor vitae, ultrices mi. Vestibulum a iaculis lacus. Phasellus vitae convallis ligula, nec volutpat tellus. Vivamus scelerisque mollis nisl, nec vehicula elit egestas a. Sed luctus metus id mi gravida, faucibus convallis neque pretium. Maecenas quis sapien ut leo fringilla tempor vitae sit amet leo. Donec imperdiet tempus placerat. Pellentesque pulvinar ultrices nunc sed ultrices. Morbi vel mi pretium, fermentum lacus et, viverra tellus. Phasellus sodales libero nec dui convallis, sit amet fermentum sapien auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eu elementum nibh, quis varius libero.</p>
            <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
            <hr>
            <h2 id="section-5">Career Prospects</h2>
            <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
            <p>Vivamus mattis accumsan erat, vel convallis risus pretium nec. Integer nunc nulla, viverra ut sem non, scelerisque vehicula arcu. Fusce bibendum convallis augue sit amet lobortis. Cras porta urna turpis, sodales lobortis purus adipiscing id. Maecenas ullamcorper, turpis suscipit pellentesque fringilla, massa lacus pulvinar mi, nec dignissim velit arcu eget purus. Nam at dapibus tellus, eget euismod nisl. Ut eget venenatis sapien. Vivamus vulputate varius mauris, vel varius nisl facilisis ac. Nulla aliquet justo a nibh ornare, eu congue neque rutrum.</p>
            <h2 id="section-6">Courses and Timetables</h2>
            <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
        </div>
    </div>
    <div style="height: 50px"></div>
</div>
<!-- 总div -->
</body>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/machine/public/static/js/common.js"></script>
</html>