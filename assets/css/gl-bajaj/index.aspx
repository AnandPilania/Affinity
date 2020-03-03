<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="index.aspx.cs" Inherits="affinity.gl_bajaj.index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Direct Admissions in GL Bajaj Institute of technology & Management</title>
    <!-- Define Charset -->
    <meta charset="utf-8" />

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Page Description and Author -->
    
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="Campaign_asset/css/bootstrap.min.css" type="text/css" media="screen" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="Campaign_css/font-awesome.min.css" type="text/css" media="screen" />
    <!-- Revolution Banner CSS -->
    <link rel="stylesheet" type="text/css" href="Campaign_css/settings.html" media="screen" />
    <!--  CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="Campaign_css/style.css" media="screen" />
    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="Campaign_css/responsive.css" media="screen" />
    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="Campaign_css/animate.css" media="screen" />
    <!-- Margo JS  --><link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <script type="text/javascript" src="Campaign_js/jquery-2.1.1.min.js"></script>
    <script>
        $(document).ready(function ($) {
            $("#graduate").click(function () {
                //alert("function")
                $(".tab_pro a#graduate").addClass("active");
                $(".tab_pro a#post_graduate").removeClass("active");
                $(".displines_post_graduate").hide();
                $(".displines_graduate").show();
                //alert("graduate")

            });
            $("#post_graduate").click(function () {
                //alert("function")
                $(".tab_pro a#post_graduate").addClass("active");
                $(".tab_pro a#graduate").removeClass("active");
                $(".displines_graduate").hide();
                $(".displines_post_graduate").show();

                //alert("post graduate")

            });


            $(".displines_post_graduate a").click(function () {
                //alert("function")

                $(".displines_post_graduate").toggle();


                //alert("post graduate")

            });
        });
    </script>
    <script type="text/javascript" src="Campaign_asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Campaign_js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="Campaign_js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="Campaign_js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="Campaign_js/jquery.appear.js"></script>
    <script type="text/javascript" src="Campaign_js/count-to.js"></script>
    <script type="text/javascript" src="Campaign_js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="Campaign_js/script.js"></script>

    <style>
        html.csstransforms.csstransforms3d.csstransitions {
            overflow: auto !important;
        }

        .tab-pane li {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
            border-top: 1px solid #fff;
            display: inline-block;
            margin: 0 3% 0 0 !important;
            padding: 10px 0 !important;
            width: 46%;
            vertical-align: top;
        }

        .tab-pane.active {
            padding: 10px 0 25px 25px;
        }

        .nav-tabs > li > a {
            padding: 6px !important;
            font-size: 11px;
        }

        .tab-content {
            padding: 0 !important;
        }

        .border_top_none {
            border-top: none !important;
        }

        .tab-pane, .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            background: none repeat scroll 0 0 rgb(255, 192, 203);
            border-color: rgb(255, 192, 203);
        }

        .portfolio-details {
            display: table;
            height: 100px;
        }

            .portfolio-details h4 {
                display: table-cell;
                vertical-align: middle;
            }

        .owl-buttons {
            left: -3%;
            position: relative !important;
            top: -70px !important;
            width: 105%;
        }

        .owl-prev {
            left: 0;
            position: absolute;
        }

        .owl-next {
            right: 0;
            position: absolute;
        }
    </style>


    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }; if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '409602019244281');
        fbq('track', "PageView");</script>
    <noscript>
        <img height="1" width="1" style="display: none"
            src="https://www.facebook.com/tr?id=409602019244281&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->



    
								<script>
								    (function (i, s, o, g, r, a, m) {
								        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
								            (i[r].q = i[r].q || []).push(arguments)
								        }, i[r].l = 1 * new Date(); a = s.createElement(o),
                                        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
								    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
								    ga('create', 'UA-8897436-28', 'auto');
								    ga('send', 'pageview');
								</script>
							  <script type='text/javascript'>
							      var _gaq = _gaq || [];
							      _gaq.push(['_setAccount', 'UA-8897436-2']);
							      _gaq.push(['_trackPageview']);

							      (function () {
							          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
							          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
							      })();
            </script>

</head>
<body>
    <form id="form1" runat="server">
    <div id="container">

            <!-- Start Header -->
            <div class="hidden-header"></div>
            <header class="clearfix">

                <!-- Start Top Bar -->

                <!-- End Top Bar -->

                <!-- Start Header ( Logo & Naviagtion ) -->
                <div class="navbar navbar-default navbar-top">
                    <div class="container">
                        <div class="navbar-header">
                            <!-- Stat Toggle Nav Link For Mobiles -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
                            <!-- End Toggle Nav Link For Mobiles -->

                            <span id="lblLogo"> <a class='' href='index.html' target='_blank'> <img alt='' src='images/logo.png'></a></span>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Stat Search -->

                            <!-- End Search -->
                            <!-- Start Navigation List -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>Call : 9999190311, 9871698297</li>
                                
                            </ul>
                            <!-- End Navigation List -->
                        </div>
                    </div>
                </div>
                <!-- End Header ( Logo & Naviagtion ) -->

            </header>
            <!-- End Header -->

            <!-- Start HomePage Slider -->

            <section id="home">
                <!-- Carousel -->
                <div id="main-slide" class="carousel slide" data-ride="carousel">
                    <div class="container inmobile">
                        <div class="layer_1">
                            <div class="layer_2">

                                <div class="layer_3">
                                    <div class="register_info">

                                        <!-- Classic Heading -->
                                        <p style="padding: 15px 0;">
                                            <center>                    <img src="Campaign_images/t001.png" alt="">                  </center>
                                        </p>
                                        <!-- Start Contact Form -->
                                        <small id="frm_error" style="display: none;" class="red-small"></small>
                                        <div style="margin-top: 10px;" id="frm_registration" name="frm_registration">
                                            <span class="white_txt">Name</span>
                                            <span id="rfvname" style="color:Red;display:none;">*</span>
                                            <asp:TextBox ID="txtfirmname" runat="server" required="required"    placeholder="Name"></asp:TextBox>

                                            <span class="white_txt">Email</span><span id="rfvemail" style="color:Red;display:none;">*</span>
                                            <span id="RegValtxtEmail" style="color:Red;display:none;">Invalid Email</span>

                                             <asp:TextBox ID="txtemail" runat="server" required="required"    placeholder="Email"></asp:TextBox>

                                            <span class="white_txt">Mobile</span>
                                            <span id="efvMobile" style="color:Red;display:none;">*</span>

                                             <asp:TextBox ID="txtmobile" runat="server" required="required"    placeholder="Email"></asp:TextBox>


                                            <span id="UpdatePanel1">
                                                    <span class="white_txt">Course</span><span id="rfvcampus" style="color:Red;display:none;">*</span>

                                                    <asp:DropDownList ID="ddlChoice" class="md-form-control" runat="server">
                                                        <asp:ListItem>Select Course</asp:ListItem>
                                                        <asp:ListItem>B-TECH</asp:ListItem>
                                                        <asp:ListItem>B-ARCH</asp:ListItem>
                                                        <asp:ListItem>M-TECH</asp:ListItem>
                                                        <asp:ListItem>Medical</asp:ListItem>
                                                    </asp:DropDownList>
                                                   

                                                </span>
                                           <asp:Button ID="btnsubmit" runat="server" Text="Register Now" class="btn btn-danger btn-lg" style="width: 100%;" OnClick="btnsubmit_Click" />
                                            <br />
                                            <asp:Label ID="lblStatus" runat="server" Text="" style="color :white" ></asp:Label>
                                            <span id="lblMsg" style="color: red;"></span>
								
                                            <div id="UpdateProgress1" style="display:none;">
	
                                                    <span style="color: red;">Loading.....</span>
                                                
</div>
                                        </div>

                                        <!-- End Contact Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="DivImgslider" class="carousel-inner">
							        <div class='item active'> 
								        <img class='img-responsive' src='images/bharati.jpg' alt='slider'>
									    <div class='slider-content'> </div>
							        </div>
									</div>
                    <!-- Carousel inner end-->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a><a class="right carousel-control" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
                </div>
                <!-- /carousel -->
            </section>
            <!-- End HomePage Slider -->

            <!-- Start Content -->
            <input type="hidden" name="HiddenField1" id="HiddenField1" />
            
            <!-- End Content -->

            <!-- End Content -->

            <!-- Start Footer -->


<section class="ug-area ug-admission">
    <div class="container border-white">
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-ug">
                    <h2>Overview G L Bajaj</h2>
                    <p>G L Bajaj Institute of Technology & Management is the 6th Institute established under the prestigious banner of R.K Group. The institute is approved by All India Council for Technical Education (AICTE), Ministry of HRD Govt OF India and Affiliated to Dr. A.P.J. Abdul Kalam Technical University(Formerly UPTU Lucknow).</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ug-area ug-area1">
    <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-ug">
                    <h2>Courses and Admission</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="inner-ug1">
                    <h4>UNDER GRADUATE (B.TECH)</h4>
                    <p>Computer Science and Engineering</p>
                    <p>Electronics and Communication Engineering</p>
                    <p>Mechanical Engineering</p>
                    <p>Information Technology</p>
                    <p>Electrical and Electronics Engineering</p>
                    <p>Civil Engineering</p>
                    <p>Applied Science and Humanities</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="inner-ug1">
                    <h4>ADMISSIONS</h4>
                    <p>Admission Process</p>
                    <p>Admission Process</p>
                    <p>Admission Counseling</p>
                    <p>Courses</p>
                    <p>Payment Procedure</p>
                    <p>Apply Online</p>
                    <p>Online Payment</p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="inner-ug1">
                    <h4>POST GRADUATE</h4>
                    <p>M.Tech Computer Science and Engineering</p>
                    <p>Master of Business Administration</p>
                    <p>Master of Computer Application</p>
                </div>
            </div>
            
        </div>
    </div>
</section>




<section class="about-area padding-B-30">
  <div class="container">
    <div class="inner-area new-area">
     <h2>At G L Bajaj, We Nurture and Develop :</h2>
     <br>
     <P>In G L Bajaj, innovation is defined as the translation of knowledge and technologies in the form of newer and better products and services. Being innovative adds value to our graduates' education and training, which gives them the extra edge and ultimately increases their employability. G L Bajaj strives to train and develop talented students and budding professionals with intense focus on Technological development and career grooming.</P>
     <ul class="clearfix">
     <li>1.A perfect blend of academia and modern technology. </li>
     <li>2. Best quality education and training to enable students to be exceptionally competent to match global standards, and there by create competent professionals with strong value orientation. </li>
     <li>3. Unique teaching and learning concepts relevant to the real world environment Communication skills and Leadership skills. </li>
     <li>4. An Integration of knowledge and talents throughout the curriculum. </li>
     <li>5. Understanding of the societal, economic and environmental impacts of Technological and managerial decisions.  </li>
     <li>6. A robust culture built on people with pioneering and dare to dream spirit, coupled with the vision and ability to turn ideas into reality. </li>
     </ul>
    </div>
  </div>
</section>




            <footer class="footer-area">
                <div class="container">
                   <div class="ftr">
                    <p> © This website is meant only for information purposes. It should not be considered/ claimed as an official site.All logos and trade mark are property of respective owner. </p>
                   </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Container -->

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

       
                    




        
    
<script type="text/javascript">
    //<![CDATA[
    var Page_Validators =  new Array(document.getElementById("rfvname"), document.getElementById("rfvemail"), document.getElementById("RegValtxtEmail"), document.getElementById("efvMobile"), document.getElementById("rfvcampus"), document.getElementById("rfvprogram"));
    //]]>
</script>

<script type="text/javascript">
    //<![CDATA[
    var rfvname = document.all ? document.all["rfvname"] : document.getElementById("rfvname");
    rfvname.controltovalidate = "frm_name";
    rfvname.errormessage = "*";
    rfvname.display = "Dynamic";
    rfvname.validationGroup = "SubscriptionForm";
    rfvname.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    rfvname.initialvalue = "";
    var rfvemail = document.all ? document.all["rfvemail"] : document.getElementById("rfvemail");
    rfvemail.controltovalidate = "frm_email";
    rfvemail.errormessage = "*";
    rfvemail.display = "Dynamic";
    rfvemail.validationGroup = "SubscriptionForm";
    rfvemail.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    rfvemail.initialvalue = "";
    var RegValtxtEmail = document.all ? document.all["RegValtxtEmail"] : document.getElementById("RegValtxtEmail");
    RegValtxtEmail.controltovalidate = "frm_email";
    RegValtxtEmail.focusOnError = "t";
    RegValtxtEmail.errormessage = "Invalid Email";
    RegValtxtEmail.display = "Dynamic";
    RegValtxtEmail.validationGroup = "SubscriptionForm";
    RegValtxtEmail.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
    RegValtxtEmail.validationexpression = "^([0-9a-zA-Z]([-.\\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\\w]*[0-9a-zA-Z]\\.)+[a-zA-Z]{2,9})$";
    var efvMobile = document.all ? document.all["efvMobile"] : document.getElementById("efvMobile");
    efvMobile.controltovalidate = "frm_mobile";
    efvMobile.errormessage = "*";
    efvMobile.display = "Dynamic";
    efvMobile.validationGroup = "SubscriptionForm";
    efvMobile.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    efvMobile.initialvalue = "";
    var rfvcampus = document.all ? document.all["rfvcampus"] : document.getElementById("rfvcampus");
    rfvcampus.controltovalidate = "ddlType";
    rfvcampus.errormessage = "*";
    rfvcampus.display = "Dynamic";
    rfvcampus.validationGroup = "SubscriptionForm";
    rfvcampus.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    rfvcampus.initialvalue = "";
    var rfvprogram = document.all ? document.all["rfvprogram"] : document.getElementById("rfvprogram");
    rfvprogram.controltovalidate = "ddlProgram";
    rfvprogram.errormessage = "*";
    rfvprogram.display = "Dynamic";
    rfvprogram.validationGroup = "SubscriptionForm";
    rfvprogram.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    rfvprogram.initialvalue = "";
    //]]>
</script>


<script type="text/javascript">
    //<![CDATA[

    var Page_ValidationActive = false;
    if (typeof(ValidatorOnLoad) == "function") {
        ValidatorOnLoad();
    }

    function ValidatorOnSubmit() {
        if (Page_ValidationActive) {
            return ValidatorCommonOnSubmit();
        }
        else {
            return true;
        }
    }
        
    document.getElementById('rfvname').dispose = function() {
        Array.remove(Page_Validators, document.getElementById('rfvname'));
    }

    document.getElementById('rfvemail').dispose = function() {
        Array.remove(Page_Validators, document.getElementById('rfvemail'));
    }

    document.getElementById('RegValtxtEmail').dispose = function() {
        Array.remove(Page_Validators, document.getElementById('RegValtxtEmail'));
    }

    document.getElementById('efvMobile').dispose = function() {
        Array.remove(Page_Validators, document.getElementById('efvMobile'));
    }

    document.getElementById('rfvcampus').dispose = function() {
        Array.remove(Page_Validators, document.getElementById('rfvcampus'));
    }

    document.getElementById('rfvprogram').dispose = function() {
        Array.remove(Page_Validators, document.getElementById('rfvprogram'));
    }
    Sys.Application.add_init(function() {
        $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":null,"displayAfter":500,"dynamicLayout":true}, null, null, $get("UpdateProgress1"));
    });
    //]]>
</script>
</form>

</body>
</html>
