<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/e89eb1cff9eb261b0d77a4dea27f1ef1?family=Helvetica+W01+Light"
          rel="stylesheet">
    <title>Modern HTML Email Template</title>

    <style type="text/css">
        body {
            margin: 0;
            background-color: #ffffff;
        }

        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #ffffff;
            padding-bottom: 60px;
        }

        .main {
            background-color: #ffffff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            font-family: Helvetica, sans-serif;
            color: rgb(0, 0, 0);
        }

        .two-columns {
            text-align: center;
            font-size: 0;
        }

        .two-columns .column {
            width: 100%;
            max-width: 300px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }

        .hero-bg {
            background-color: #73f497;
            background: linear-gradient(to right, #73f497, #4eefae, #23e9c2, #00e1d1, #00d9dc, #00d4e1, #00cfe5, #15c9e8, #11c6eb, #16c2ee, #21bef0, #2ebaf2);
            background-size: cover;
            background-position: center;
        }

        .start-btn {
            font-family: Helvetica;
            font-weight: 600;
            color: white;
            padding: 10px;
            border-radius: 20px;
            padding-inline: 20px;
            border: 0px;
            background-color: #73f497;
            background-image: linear-gradient(to right, #73f497, #4eefae, #23e9c2, #00e1d1, #00d9dc, #00d4e1, #00cfe5, #15c9e8, #11c6eb, #16c2ee, #21bef0, #2ebaf2);
        }

        .three-columns {
            text-align: center;
            font-size: 0;
            padding: 15px 0 25px;
        }

        .three-columns .column {
            margin-top: 10px;
            font-size: 14px;
            width: 100%;
            max-width: 200px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }

        @media screen and (max-width: 600px) {
            three-columns .column {
                display: none;
                max-width: 600px;
            }
        }
    </style>

</head>

<body>
<center class="wrapper">
    <table class="main" width="100%">

        <!-------------------------------------Header--------------------------------->
        <tr>
            <td align="center" class="hero-bg ">
                <table width="100%">
                    <tr>
                        <td height="20" style="font-size: 1px; line-height: 20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <img style="padding-left: 10px;"
                                 src="https://res.cloudinary.com/dmlyidw2r/image/upload/v1702359324/MedFuture%20Email%20Template/o4h0twpkmq3x7j96eszw.png"
                                 alt="logo" width="auto" height="40">
                        </td>
                    </tr>
                    <tr>
                        <td align="center"
                            style="font-size: 36px; font-weight: 400; color: #ffffff; line-height: 44px; letter-spacing: 1px;">
                            Hi<span style="font-weight: 700;"> {{$first_name}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td height="20" style="font-size: 1px; line-height: 10px;"></td>
                    </tr>
                </table>

            </td>
        </tr>
        <!------------------------------------End-Header--------------------------------->

        <!-------------------------------------Intro--------------------------------->
        <tr>
        <tr>
            <td height="20" style="font-size: 1px; line-height: 20px;"></td>
        </tr>
        <tr>
            <td align="center">

                <p style="font-family: Helvetica W01 Light, Helvetica; padding:20px;">
                    Are you ready to elevate your online presence and supercharge your business growth? Look no
                    further! Code Desk, your trusted partner in digital marketing, is ready to take your brand to
                    new heights.
                </p>

            </td>
        </tr>
        <tr>
            <td height="20" style="font-size: 1px; line-height: 20px;"></td>
        </tr>
        </tr>
        <!------------------------------------End-Intro--------------------------------->


        <!-------------------------------------Second-Intro--------------------------------->
        <tr style="background-color: #F6F6F6 !important">
            <td>
        <tr>
            <td height="10" style="background-color: #F6F6F6; font-size: 1px; line-height: 10px;"></td>
        </tr>
        <tr>
            <td align="center" style="background-color: #F6F6F6">
                <h2 style="font-weight: 500;">Unleash the Power of Digital Marketing!</h2>
            </td>
        </tr>
        <tr style="background-color:#F6F6F6;">
            <td align="center">
                <p style="font-family: Helvetica W01 Light, Helvetica; padding:20px;">
                    In today's digital age, a robust online presence is crucial for success. Code Desk specializes
                    in crafting tailored digital marketing strategies to propel your brand forward. Whether you're
                    looking to increase website traffic, improve conversions, build a strong social media presence
                    or enhance your overall growth, our team of experts has you covered.
                </p>
            </td>
        </tr>
        <td height="20" style="font-size: 1px; line-height: 20px; background-color: #F6F6F6 !important"></td>
        </td>
        </tr>
        <!------------------------------------End-Second-Intro--------------------------------->


        <!-------------------------------------Service--------------------------------->
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td align="center">
                            <h2 style="font-weight: 500;">Services</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="three-columns">
                            @if(count($strategic_and_planning) >0)
                                <table class="column">
                                    <tr>
                                        <td class="padding">
                                            <table
                                                style="border-radius: 10px; border: 1px solid #f0f0f0; padding: 10px;"
                                                class="content">
                                                <tr>
                                                    <td>
                                                        <img
                                                            style="max-width: 150px; border-radius: 10px; width: 150px;"
                                                            src="{{asset('services/New folder/Group 770775.png')}}"
                                                            {{--                                                         src="/services/New folder/Group 770775.png"--}}
                                                            alt="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        @foreach($strategic_and_planning as $strategic_and_plannings)
                                                            <p>- {{$strategic_and_plannings}}</p>
                                                        @endforeach
                                                        <p>- Lead Generation</p>
                                                        <p>- Social Media Management</p>
                                                        <p>- Email Marketing</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <button
                                                            style=" font-family: Helvetica;
																	color: white;
																	padding: 5px;
																	border-radius: 20px;
																	padding-inline: 10px;
																	border: 0px;
																	background-color: #73f497;
																	background-image: linear-gradient(to right, #73f497, #4eefae, #23e9c2, #00e1d1, #00d9dc, #00d4e1, #00cfe5, #15c9e8, #11c6eb, #16c2ee, #21bef0, #2ebaf2);">
                                                            Let's Start
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                            @endif

                            <table class="column">
                                <tr>
                                    <td class="padding">
                                        <table
                                            style="border-radius: 10px; border: 1px solid #f0f0f0; padding: 10px;"
                                            class="content">
                                            <tr>
                                                <td>
                                                    <img style="max-width: 150px; border-radius: 10px;"
                                                         width="150px"
                                                         src="{{asset('services/New folder/Group 770762.png')}}"
                                                         alt="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>- SEO, SEM, PPC</p>
                                                    <p>- Lead Generation</p>
                                                    <p>- Social Media Management</p>
                                                    <p>- Email Marketing</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <button
                                                        style="font-family: Helvetica;
																	color: white;
																	padding: 5px;
																	border-radius: 20px;
																	padding-inline: 10px;
																	border: 0px;
																	background-color: #73f497;
																	background-image: linear-gradient(to right, #73f497, #4eefae, #23e9c2, #00e1d1, #00d9dc, #00d4e1, #00cfe5, #15c9e8, #11c6eb, #16c2ee, #21bef0, #2ebaf2);">
                                                        Let's Start
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <table class="column">
                                <tr>
                                    <td class="padding">
                                        <table
                                            style="border-radius: 10px; border: 1px solid #f0f0f0; padding: 10px;"
                                            class="content">
                                            <tr>
                                                <td>
                                                    <img style="max-width: 600px; border-radius: 10px;"
                                                         width="150px"
                                                         src="{{asset('services/New folder/Group 770762.png')}}"
                                                         alt="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>- SEO, SEM, PPC</p>
                                                    <p>- Lead Generation</p>
                                                    <p>- Social Media Management</p>
                                                    <p>- Email Marketing</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <button
                                                        style="font-family: Helvetica;
																	color: white;
																	padding: 5px;
																	border-radius: 20px;
																	padding-inline: 10px;
																	border: 0px;
																	background-color: #73f497;
																	background-image: linear-gradient(to right, #73f497, #4eefae, #23e9c2, #00e1d1, #00d9dc, #00d4e1, #00cfe5, #15c9e8, #11c6eb, #16c2ee, #21bef0, #2ebaf2);">
                                                        Let's Start
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <td height="30" style="font-size: 1px; line-height: 20px;"></td>
            </td>
        </tr>
    </table>
    </td>
    </tr>
    <!------------------------------------End-Service---------------------------------->

    <!-------------------------------------Lets Start---------------------------------->
    <tr style="background-color: #F6F6F6 !important">
        <td style="background-color: #F6F6F6 !important">
    <tr style="background-color: #F6F6F6 !important">
        <td height="10" style="font-size: 1px; line-height: 10px;"></td>
    </tr>
    <tr style="background-color: #F6F6F6 !important">
        <td align="center">
            <h2 style="font-weight: 500;">Ready to Elevate Your Brand?</h2>
        </td>
    </tr>
    <tr>
        <td align="center" style="background-color: #F6F6F6 !important">
            <p style="font-family: Helvetica W01 Light, Helvetica; padding:20px; padding-top: 0px;">
                Be the first privileged set of businesses to boost your brand through our digital, development
                and design efforts through our experienced team of professionals. Contact us through our email
                with your requirements and let’s take it from there.
            </p>
        </td>
    </tr>
    <tr>
        <td height="10" style="font-size: 1px; line-height: 10px; background-color: #F6F6F6 !important"></td>
    </tr>
    <tr>
        <td align="center" style="background-color: #F6F6F6 !important">
            <button
                style="font-family: Helvetica;
					font-weight: 600;
					color: white; padding: 10px;
					border-radius: 20px;
					padding-inline: 20px;
					border: 0px;
					background-color: #73f497;
					background-image: linear-gradient(to right, #73f497, #4eefae, #23e9c2, #00e1d1, #00d9dc, #00d4e1, #00cfe5, #15c9e8, #11c6eb, #16c2ee, #21bef0, #2ebaf2);">
                Let's Start
            </button>
        </td>
    </tr>
    <tr>
        <td height="30" style="font-size: 1px; line-height: 20px; background-color: #F6F6F6 !important"></td>
    </tr>
    </td>
    </tr>
    <!------------------------------------End-Lets Start------------------------------->


    <!---------------------------------------Footer------------------------------------>
    <tr style="background-color: black;">
        <td style="padding: 14px 0 4px">
            <table width="100%">
                <tr>
                    <td class="two-columns">
                        <table class="column">
                            <tr>
                                <td style="padding: 0 62px 10px">
                                    <a href="">
                                        <img width="auto" height="50"
                                             src="https://res.cloudinary.com/dmlyidw2r/image/upload/v1702359324/MedFuture%20Email%20Template/ndagjzrc3o0cwrznetmm.png"
                                             alt="Logo">
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <table class="column">
                            <tr>
                                <td style="padding: 10px 72px;">
                                    <a href="https://www.linkedin.com/your-profile-url" target="_blank"
                                       style="margin-right: 8px; text-decoration: none;  display: inline-block; border-radius: 50%; overflow: hidden; border:1px solid rgb(110, 110, 110)">
											<span
                                                style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 1; display: block; padding: 4px;">

												<img
                                                    src="https://res.cloudinary.com/dmlyidw2r/image/upload/v1702360881/MedFuture%20Email%20Template/m150zklr80hdanxjlx4a.svg"
                                                    alt="Facebook icon" width="20" height="20" style=" display: block;">
											</span>
                                    </a>
                                    <a href="https://www.linkedin.com/your-profile-url" target="_blank"
                                       style="margin-right: 8px; text-decoration: none;  display: inline-block; border-radius: 50%; overflow: hidden; border:1px solid rgb(110, 110, 110)">
											<span
                                                style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 1; display: block; padding: 4px;">

												<img
                                                    src="https://res.cloudinary.com/dmlyidw2r/image/upload/v1702360881/MedFuture%20Email%20Template/c1wciprbogmynhqp4bu4.svg"
                                                    alt="Facebook icon" width="20" height="20" style=" display: block;">
											</span>
                                    </a>
                                    <a href="https://www.linkedin.com/your-profile-url" target="_blank"
                                       style="margin-right: 8px; text-decoration: none;  display: inline-block; border-radius: 50%; overflow: hidden; border:1px solid rgb(110, 110, 110)">
											<span
                                                style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 1; display: block; padding: 4px;">

												<img
                                                    src="https://res.cloudinary.com/dmlyidw2r/image/upload/v1702360881/MedFuture%20Email%20Template/o6wkzvv31zrkhxf6kr3o.svg"
                                                    alt="Facebook icon" width="20" height="20" style=" display: block;">
											</span>
                                    </a>
                                    <a href="https://www.linkedin.com/your-profile-url" target="_blank"
                                       style="margin-right: 8px; text-decoration: none;  display: inline-block; border-radius: 50%; overflow: hidden; border:1px solid rgb(110, 110, 110)">
											<span
                                                style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 1; display: block; padding: 4px;">

												<img
                                                    src="https://res.cloudinary.com/dmlyidw2r/image/upload/v1702360881/MedFuture%20Email%20Template/mzpfbgjm1ilgouiz9fnb.svg"
                                                    alt="Facebook icon" width="20" height="20" style=" display: block;">
											</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Underline -->
                <tr>
                    <td align="center">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="10" style="border-bottom: 1px solid #545454;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- End Underline -->
                <tr>
                    <td align="center"
                        style="font-family: 'Helvetica', sans-serif; font-size: 10px; font-weight: 400; color: #ffffff; line-height: 24px;">
                        @ 2023 Code Desk. All Right Receved
                    </td>
                </tr>

                <tr>
                    <td height="5" style="font-size: 1px; line-height: 5px;"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!--------------------------------------End-Footer--------------------------------->
    </table>
</center>

</body>

</html>
