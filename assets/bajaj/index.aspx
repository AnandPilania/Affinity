<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="index.aspx.cs" Inherits="affinity.bajaj.index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMzM0MzI0NDAyD2QWAgIBD2QWDAIBDw8WAh4EVGV4dAV+IDxhIGNsYXNzPSduYXZiYXItYnJhbmQnIGhyZWY9J2h0dHA6Ly9hbWl0eS5lZHUvJyB0YXJnZXQ9J19ibGFuayc+IDxpbWcgYWx0PScnIHNyYz0nQ2FtcGFpZ25faW1hZ2VzL2FtaXR5LXVuaXZlcnNpdHkucG5nJz48L2E+ZGQCCQ9kFgJmD2QWBAIDDxBkZBYBZmQCBw8QZBAVAQlQcm9ncmFtbWUVAQAUKwMBZ2RkAg4PFgIeCWlubmVyaHRtbAXhAQ0KCQkJCQkJCSAgICAgICAgPGRpdiBjbGFzcz0naXRlbSBhY3RpdmUnPiANCgkJCQkJCQkJICAgICAgICA8aW1nIGNsYXNzPSdpbWctcmVzcG9uc2l2ZScgc3JjPSdDYW1wYWlnbl9pbWFnZXMvc2xpZGVyL25vaWRhLmpwZycgYWx0PSdzbGlkZXInPg0KCQkJCQkJCQkJICAgIDxkaXYgY2xhc3M9J3NsaWRlci1jb250ZW50Jz4gPC9kaXY+DQoJCQkJCQkJICAgICAgICA8L2Rpdj4NCgkJCQkJCQkJCWQCEQ8WAh4LXyFJdGVtQ291bnQCMBZgAgEPZBYCZg8VAhFBY3R1YXJpYWwgU2NpZW5jZRFBY3R1YXJpYWwgU2NpZW5jZWQCAg9kFgJmDxUCDEFudGhyb3BvbG9neQxBbnRocm9wb2xvZ3lkAgMPZBYCZg8VAhBBcHBsaWVkIFNjaWVuY2VzEEFwcGxpZWQgU2NpZW5jZXNkAgQPZBYCZg8VAgxBcmNoaXRlY3R1cmUMQXJjaGl0ZWN0dXJlZAIFD2QWAmYPFQIHQmlvdGVjaAdCaW90ZWNoZAIGD2QWAmYPFQIIQ29tbWVyY2UIQ29tbWVyY2VkAgcPZBYCZg8VAg1Db21tdW5pY2F0aW9uDUNvbW11bmljYXRpb25kAggPZBYCZg8VAhRDb21wdXRlciBTY2llbmNlLyBJVBRDb21wdXRlciBTY2llbmNlLyBJVGQCCQ9kFgJmDxUCBkRlc2lnbgZEZXNpZ25kAgoPZBYCZg8VAglFY29ub21pY3MJRWNvbm9taWNzZAILD2QWAmYPFQIJRWR1Y2F0aW9uCUVkdWNhdGlvbmQCDA9kFgJmDxUCC0VuZ2luZWVyaW5nC0VuZ2luZWVyaW5nZAIND2QWAmYPFQISRW5nbGlzaCBsaXRlcmF0dXJlEkVuZ2xpc2ggbGl0ZXJhdHVyZWQCDg9kFgJmDxUCC0Vudmlyb25tZW50C0Vudmlyb25tZW50ZAIPD2QWAmYPFQIHRmFzaGlvbgdGYXNoaW9uZAIQD2QWAmYPFQIJRmluZSBBcnRzCUZpbmUgQXJ0c2QCEQ9kFgJmDxUCD0Zvb2QgVGVjaG5vbG9neQ9Gb29kIFRlY2hub2xvZ3lkAhIPZBYCZg8VAhFGb3JlbnNpYyBTY2llbmNlcxFGb3JlbnNpYyBTY2llbmNlc2QCEw9kFgJmDxUCIEdlbyBJbmZvcm1hdGljcyAmIFJlbW90ZSBTZW5zaW5nIEdlbyBJbmZvcm1hdGljcyAmIFJlbW90ZSBTZW5zaW5nZAIUD2QWAmYPFQIMSG9ydGljdWx0dXJlDEhvcnRpY3VsdHVyZWQCFQ9kFgJmDxUCF0hvc3BpdGFsIEFkbWluaXN0cmF0aW9uF0hvc3BpdGFsIEFkbWluaXN0cmF0aW9uZAIWD2QWAmYPFQIcSG90ZWwgTWFuYWdlbWVudCBIb3NwaXRhbGl0eRxIb3RlbCBNYW5hZ2VtZW50IEhvc3BpdGFsaXR5ZAIXD2QWAmYPFQIVSW5zdXJhbmNlIGFuZCBCYW5raW5nFUluc3VyYW5jZSBhbmQgQmFua2luZ2QCGA9kFgJmDxUCA0xhdwNMYXdkAhkPZBYCZg8VAgpNYW5hZ2VtZW50Ck1hbmFnZW1lbnRkAhoPZBYCZg8VAg5NYXJpbmUgU2NpZW5jZQ5NYXJpbmUgU2NpZW5jZWQCGw9kFgJmDxUCEk1pY3JvYmlhbCBTY2llbmNlcxJNaWNyb2JpYWwgU2NpZW5jZXNkAhwPZBYCZg8VAjpNb2xlY3VsYXIgTWVkaWNpbmUgJiBTdGVtIENlbGwgUmVzZWFyY2ggYW5kIENhbmNlciBCaW9sb2d5Ok1vbGVjdWxhciBNZWRpY2luZSAmIFN0ZW0gQ2VsbCBSZXNlYXJjaCBhbmQgQ2FuY2VyIEJpb2xvZ3lkAh0PZBYCZg8VAg5OYW5vdGVjaG5vbG9neQ5OYW5vdGVjaG5vbG9neWQCHg9kFgJmDxUCK05hdHVyYWwgUmVzb3VyY2VzICYgU3VzdGFpbmFibGUgRGV2ZWxvcG1lbnQrTmF0dXJhbCBSZXNvdXJjZXMgJiBTdXN0YWluYWJsZSBEZXZlbG9wbWVudGQCHw9kFgJmDxUCHE51Y2xlYXIgU2NpZW5jZSAmIFRlY2hub2xvZ3kcTnVjbGVhciBTY2llbmNlICYgVGVjaG5vbG9neWQCIA9kFgJmDxUCE09yZ2FuaWMgQWdyaWN1bHR1cmUTT3JnYW5pYyBBZ3JpY3VsdHVyZWQCIQ9kFgJmDxUCCFBoYXJtYWN5CFBoYXJtYWN5ZAIiD2QWAmYPFQISUGh5c2ljYWwgRWR1Y2F0aW9uElBoeXNpY2FsIEVkdWNhdGlvbmQCIw9kFgJmDxUCClBoeXNpb2xvZ3kKUGh5c2lvbG9neWQCJA9kFgJmDxUCDVBoeXNpb3RoZXJhcHkNUGh5c2lvdGhlcmFweWQCJQ9kFgJmDxUCIFBzeWNob2xvZ3kgJiBCZWhhdmlvdXJhbCBTY2llbmNlIFBzeWNob2xvZ3kgJiBCZWhhdmlvdXJhbCBTY2llbmNlZAImD2QWAmYPFQINUHVibGljIEhlYWx0aA1QdWJsaWMgSGVhbHRoZAInD2QWAmYPFQINUHVibGljIFBvbGljeQ1QdWJsaWMgUG9saWN5ZAIoD2QWAmYPFQIkUmVhbCBFc3RhdGUgQW5kIFVyYmFuIEluZnJhc3RydWN0dXJlJFJlYWwgRXN0YXRlIEFuZCBVcmJhbiBJbmZyYXN0cnVjdHVyZWQCKQ9kFgJmDxUCEFNhbnNrcml0IFN0dWRpZXMQU2Fuc2tyaXQgU3R1ZGllc2QCKg9kFgJmDxUCDlNvY2lhbCBTY2llbmNlDlNvY2lhbCBTY2llbmNlZAIrD2QWAmYPFQIYU29sYXIgJiBBbHRlcm5hdGUgZW5lcmd5GFNvbGFyICYgQWx0ZXJuYXRlIGVuZXJneWQCLA9kFgJmDxUCDlNwYWNlIFNjaWVuY2VzDlNwYWNlIFNjaWVuY2VzZAItD2QWAmYPFQIRU3BlY2lhbCBFZHVjYXRpb24RU3BlY2lhbCBFZHVjYXRpb25kAi4PZBYCZg8VAhBUcmF2ZWwgJiBUb3VyaXNtEFRyYXZlbCAmIFRvdXJpc21kAi8PZBYCZg8VAhVWaXJvbG9neSAmIEltbXVub2xvZ3kVVmlyb2xvZ3kgJiBJbW11bm9sb2d5ZAIwD2QWAmYPFQIRV2lsZGxpZmUgU2NpZW5jZXMRV2lsZGxpZmUgU2NpZW5jZXNkAhIPFgIfAgIqFlQCAQ9kFgJmDxUCEUFjdHVhcmlhbCBTY2llbmNlEUFjdHVhcmlhbCBTY2llbmNlZAICD2QWAmYPFQIMQW50aHJvcG9sb2d5DEFudGhyb3BvbG9neWQCAw9kFgJmDxUCEEFwcGxpZWQgU2NpZW5jZXMQQXBwbGllZCBTY2llbmNlc2QCBA9kFgJmDxUCDEFyY2hpdGVjdHVyZQxBcmNoaXRlY3R1cmVkAgUPZBYCZg8VAgdCaW90ZWNoB0Jpb3RlY2hkAgYPZBYCZg8VAghDb21tZXJjZQhDb21tZXJjZWQCBw9kFgJmDxUCDUNvbW11bmljYXRpb24NQ29tbXVuaWNhdGlvbmQCCA9kFgJmDxUCFENvbXB1dGVyIFNjaWVuY2UvIElUFENvbXB1dGVyIFNjaWVuY2UvIElUZAIJD2QWAmYPFQIGRGVzaWduBkRlc2lnbmQCCg9kFgJmDxUCCUVjb25vbWljcwlFY29ub21pY3NkAgsPZBYCZg8VAglFZHVjYXRpb24JRWR1Y2F0aW9uZAIMD2QWAmYPFQILRW5naW5lZXJpbmcLRW5naW5lZXJpbmdkAg0PZBYCZg8VAhJFbmdsaXNoIGxpdGVyYXR1cmUSRW5nbGlzaCBsaXRlcmF0dXJlZAIOD2QWAmYPFQILRW52aXJvbm1lbnQLRW52aXJvbm1lbnRkAg8PZBYCZg8VAgdGYXNoaW9uB0Zhc2hpb25kAhAPZBYCZg8VAglGaW5lIEFydHMJRmluZSBBcnRzZAIRD2QWAmYPFQIPRm9vZCBUZWNobm9sb2d5D0Zvb2QgVGVjaG5vbG9neWQCEg9kFgJmDxUCEUZvcmVuc2ljIFNjaWVuY2VzEUZvcmVuc2ljIFNjaWVuY2VzZAITD2QWAmYPFQIgR2VvIEluZm9ybWF0aWNzICYgUmVtb3RlIFNlbnNpbmcgR2VvIEluZm9ybWF0aWNzICYgUmVtb3RlIFNlbnNpbmdkAhQPZBYCZg8VAhxIb3RlbCBNYW5hZ2VtZW50IEhvc3BpdGFsaXR5HEhvdGVsIE1hbmFnZW1lbnQgSG9zcGl0YWxpdHlkAhUPZBYCZg8VAhVJbnN1cmFuY2UgYW5kIEJhbmtpbmcVSW5zdXJhbmNlIGFuZCBCYW5raW5nZAIWD2QWAmYPFQIITGFuZ3VhZ2UITGFuZ3VhZ2VkAhcPZBYCZg8VAgNMYXcDTGF3ZAIYD2QWAmYPFQIKTWFuYWdlbWVudApNYW5hZ2VtZW50ZAIZD2QWAmYPFQIOTWFyaW5lIFNjaWVuY2UOTWFyaW5lIFNjaWVuY2VkAhoPZBYCZg8VAhJNaWNyb2JpYWwgU2NpZW5jZXMSTWljcm9iaWFsIFNjaWVuY2VzZAIbD2QWAmYPFQIOTmFub3RlY2hub2xvZ3kOTmFub3RlY2hub2xvZ3lkAhwPZBYCZg8VAh9OZXVyb3BzeWNob2xvZ3kgJiBOZXVyb3NjaWVuY2VzH05ldXJvcHN5Y2hvbG9neSAmIE5ldXJvc2NpZW5jZXNkAh0PZBYCZg8VAhxOdWNsZWFyIFNjaWVuY2UgJiBUZWNobm9sb2d5HE51Y2xlYXIgU2NpZW5jZSAmIFRlY2hub2xvZ3lkAh4PZBYCZg8VAhRPY2N1cGF0aW9uYWwgVGhlcmFweRRPY2N1cGF0aW9uYWwgVGhlcmFweWQCHw9kFgJmDxUCE09yZ2FuaWMgQWdyaWN1bHR1cmUTT3JnYW5pYyBBZ3JpY3VsdHVyZWQCIA9kFgJmDxUCCFBoYXJtYWN5CFBoYXJtYWN5ZAIhD2QWAmYPFQISUGh5c2ljYWwgRWR1Y2F0aW9uElBoeXNpY2FsIEVkdWNhdGlvbmQCIg9kFgJmDxUCClBoeXNpb2xvZ3kKUGh5c2lvbG9neWQCIw9kFgJmDxUCDVBoeXNpb3RoZXJhcHkNUGh5c2lvdGhlcmFweWQCJA9kFgJmDxUCIFBzeWNob2xvZ3kgJiBCZWhhdmlvdXJhbCBTY2llbmNlIFBzeWNob2xvZ3kgJiBCZWhhdmlvdXJhbCBTY2llbmNlZAIlD2QWAmYPFQIQU2Fuc2tyaXQgU3R1ZGllcxBTYW5za3JpdCBTdHVkaWVzZAImD2QWAmYPFQIOU29jaWFsIFNjaWVuY2UOU29jaWFsIFNjaWVuY2VkAicPZBYCZg8VAhhTb2xhciAmIEFsdGVybmF0ZSBlbmVyZ3kYU29sYXIgJiBBbHRlcm5hdGUgZW5lcmd5ZAIoD2QWAmYPFQIRU3BlY2lhbCBFZHVjYXRpb24RU3BlY2lhbCBFZHVjYXRpb25kAikPZBYCZg8VAhBUcmF2ZWwgJiBUb3VyaXNtEFRyYXZlbCAmIFRvdXJpc21kAioPZBYCZg8VAhVWaXJvbG9neSAmIEltbXVub2xvZ3kVVmlyb2xvZ3kgJiBJbW11bm9sb2d5ZAITDw8WAh8ABdMCPGEgaHJlZj0naHR0cHM6Ly9tYXBzLmdvb2dsZS5jby5pbi9tYXBzP3E9YW1pdHkrdW5pdmVyc2l0eSZobD1lbiZsbD0yOC41NDI3NDUsNzcuMzMyNDIxJnNwbj0wLjAwMDAwNSwwLjAwMjI3NSZzbGw9MjguNTQ0MDU0LDc3LjMzMzIwOSZsYXllcj1jJmNpZD0xNDgxODE3MDAzNjc1NDc2MTYzMiZwYW5vaWQ9V2IzTldNWkFOMkNpazZRc21oS0o5QSZjYnA9MTMsNDEuOTIsLDAsMCZnbD1pbiZocT1hbWl0eSt1bml2ZXJzaXR5JnQ9bSZ6PTE5JmNibGw9MjguNTQyNzQ1LDc3LjMzMjQyMScgdGFyZ2V0PSdfYmxhbmsnPjxpbWcgc3JjPSdDYW1wYWlnbl9pbWFnZXMvdDAwMy5wbmcnIGFsdD0nJz48L2E+ZGRkVB1IMz0TpkAj+behEvaQKBLUY9A=" />
</div>

<script type="text/javascript">
    //<![CDATA[
    var theForm = document.forms['form1'];
    if (!theForm) {
        theForm = document.form1;
    }
    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
    //]]>
</script>






<script type="text/javascript">
    //<![CDATA[
    if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
    //]]>
</script>

<script type="text/javascript">
    //<![CDATA[
    function WebForm_OnSubmit() {
        if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
        return true;
    }
    //]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="64A99B07" />
</div>
        <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', ['tUpdatePanel1','UpdatePanel1'], [], [], 90, '');
            //]]>
</script>

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
                                
                                            <asp:TextBox ID="txtfirmname" runat="server" required="required"   placeholder="Name"></asp:TextBox>

                                            <span class="white_txt">Email</span><span id="rfvemail" style="color:Red;display:none;">*</span>
                                            <span id="RegValtxtEmail" style="color:Red;display:none;">Invalid Email</span>

                               
                                             <asp:TextBox ID="txtemail" runat="server" required="required"    placeholder="Email"></asp:TextBox>

                                            <span class="white_txt">Mobile</span>
                                            <span id="efvMobile" style="color:Red;display:none;">*</span>

                                       <asp:TextBox ID="txtmobile"  MaxLength="10"  runat="server"  required="required"    placeholder="Mobile"></asp:TextBox>


                                         <%--   <span id="UpdatePanel1">--%>
                                                    <span class="white_txt">Course</span><span id="rfvcampus" style="color:Red;display:none;">*</span>

  
                                    <asp:DropDownList ID="ddlChoice" class="md-form-control" runat="server">
                                    <asp:ListItem>Select Course</asp:ListItem>
                                    <asp:ListItem>B-TECH</asp:ListItem>
                                    <asp:ListItem>B-ARCH</asp:ListItem>
                                    <asp:ListItem>M-TECH</asp:ListItem>
                                    <asp:ListItem>Medical</asp:ListItem>
                                </asp:DropDownList>
                                                   

                                         <%--       </span>--%>
                                         <%--   <input type="hidden" name="hiddenCampus" id="hiddenCampus" value="Noida" />--%>
                                            <asp:Button ID="btnsubmit" runat="server" Text="Register Now" class="btn btn-danger btn-lg" style="width: 100%;" OnClick="btnsubmit_Click" />

                                            <br />
                                            <asp:Label ID="lblStatus" runat="server" Text="" style="color :white" ></asp:Label>
<%--                                            <input type="submit" name="frm_submit" value="Register Now" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;frm_submit&quot;, &quot;&quot;, true, &quot;SubscriptionForm&quot;, &quot;&quot;, false, false))" id="frm_submit" class="btn btn-danger btn-lg" style="width: 100%;" />--%>
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
                    <p>Online Payment</li>
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
     <h2>At G L Bajaj, we nurture and develope:</h2>
     <br>
     <P>In G L Bajaj, innovation is defined as the translation of knowledge and technologies in the form of newer and better products and services. Being innovative adds value to our graduates' education and training, which gives them the extra edge and ultimately increases their employability. G L Bajaj strives to train and develop talented students and budding professionals with intense focus on Technological development and career grooming.</P>
     <ul class="clearfix">
     <li>1.A perfect blend of academia and modern technology. </li>
     <li>2. A robust culture built on people with pioneering and dare to dream spirit, coupled with the vision and ability to turn ideas into reality. </li>
     <li>3. Best quality education and training to enable students to be exceptionally competent to match global standards, and there by create competent professionals with strong value orientation. </li>
     <li>4. Unique teaching and learning concepts relevant to the real world environment Communication skills and Leadership skills. </li>
     <li>5. An Integration of knowledge and talents throughout the curriculum. </li>
     <li>6. Understanding of the societal, economic and environmental impacts of Technological and managerial decisions.  </li>
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
