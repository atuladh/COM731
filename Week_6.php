<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>COM731_A_SPAN1_2025/26: Coding Pracitce: Reading From CSV Files | Solent Online Learning</title>
    <link rel="shortcut icon" href="https://learn.solent.ac.uk/theme/image.php/solent/theme/1781505702/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, COM731_A_SPAN1_2025/26: Coding Pracitce: Reading From CSV Files | Solent Online Learning" />
<link rel="stylesheet" type="text/css" href="https://learn.solent.ac.uk/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://learn.solent.ac.uk/theme/styles.php/solent/1781505702_1781505898/all" />
<link rel="stylesheet" type="text/css" href="https://learn.solent.ac.uk/course/format/onetopic/styles.php" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/learn.solent.ac.uk","apibase":"https:\/\/learn.solent.ac.uk\/r.php\/api","homeurl":{},"sesskey":"8EOgyUACko","sessiontimeout":"14400","sessiontimeoutwarning":1200,"themerev":"1781505702","slasharguments":1,"theme":"solent","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1781505702","admin":"admin","svgicons":true,"usertimezone":"Europe\/London","language":"en","courseId":65255,"courseContextId":5779412,"contextid":6260024,"contextInstanceId":4057661,"langrev":1781505702,"templaterev":"1781505702","siteId":1,"userId":135057};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/learn.solent.ac.uk\/lib\/yuilib\/3.18.1\/","comboBase":"https:\/\/learn.solent.ac.uk\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/learn.solent.ac.uk\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/learn.solent.ac.uk\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/learn.solent.ac.uk\/theme\/yui_combo.php?m\/1781505702\/","combine":true,"comboBase":"https:\/\/learn.solent.ac.uk\/theme\/yui_combo.php?","ext":false,"root":"m\/1781505702\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_checklist-linkselect":{"requires":["node","event-valuechange"]},"moodle-mod_mediagallery-base":{"requires":["base","node","selector-css3","dd-constrain","dd-proxy","dd-drop","dd-plugin","moodle-core-notification","event"]},"moodle-mod_mediagallery-mediabox":{"requires":["base","node","selector-css3"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form","datatype-date-format"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_xp-notification":{"requires":["base","node","handlebars","button-plugin","moodle-core-notification-dialogue"]},"moodle-block_xp-filters":{"requires":["base","node","moodle-core-dragdrop","moodle-core-notification-confirm","moodle-block_xp-rulepicker"]},"moodle-block_xp-rulepicker":{"requires":["base","node","handlebars","moodle-core-notification-dialogue"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-qbank_editquestion-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_embedquestion-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_helixatto-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_linkadv-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_panoptobutton-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_styles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_teamsmeeting-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_templates4u-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/learn.solent.ac.uk\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/learn.solent.ac.uk\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1781505702\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/learn.solent.ac.uk\/lib\/javascript.php\/1781505702\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/learn.solent.ac.uk\/lib\/javascript.php\/1781505702\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]}},"logInclude":[],"logExclude":[],"logLevel":null};
M.yui.loader = {modules: {}};

//]]>
</script>

<script src="https://kit.fontawesome.com/0c15e368e7.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGRF6PJ');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35590968-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-35590968-1');
  gtag('config', 'G-8KSVVCS108');
</script>


<meta name="keywords" content="mycourse, moodle, solent online learning, solent, southampton, university, southampton solent university, VLE, online learning," />
<meta name="description" content="Extending high quality teaching beyond the classroom, Solent Online Learning provides a rich and interactive virtual learning environment that is available 24 hours a day, 7 days a week.">

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-page-view" class="format-onetopic limitedwidth loggedin coursestatus-enrolled courserole-student accessibilitytool  path-mod path-mod-page safari dir-ltr lang-en yui-skin-sam yui3-skin-sam learn-solent-ac-uk pagelayout-incourse course-65255 context-6260024 cmid-4057661 cm-type-page category-496 theme uses-drawers">
<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>
<div id="page-wrapper" class="d-print-block">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://learn.solent.ac.uk/lib/javascript.php/1781505702/lib/polyfills/polyfill.js"></script>
<script src="https://learn.solent.ac.uk/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.js"></script><script src="https://learn.solent.ac.uk/lib/javascript.php/1781505702/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    <nav class="navbar fixed-top navbar-light bg-white navbar-expand" aria-label="Site navigation">
        <div class="container-fluid">
            <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boost-drawers-primary">
                <span class="navbar-toggler-icon"></span>
                <span class="sr-only">Side panel</span>
            </button>
    
            <a href="https://learn.solent.ac.uk/my/" class="navbar-brand d-none d-md-flex align-items-center m-0 me-4 p-0 aabtn">
    
                    <img src="https://learn.solent.ac.uk/pluginfile.php/1/core_admin/logocompact/300x300/1781505702/favicon.png" class="logo me-1" alt="Solent Online Learning">
            </a>
                <div class="primary-navigation">
                    <nav class="moremenu navigation">
                        <ul id="moremenu-6a3bc7a8c33d2-navbar-nav" role="menubar" class="nav more-nav navbar-nav">
                                    <li data-key="myhome" class="nav-item" role="none" data-forceintomoremenu="false">
                                                <a role="menuitem" class="nav-link  "
                                                    href="https://learn.solent.ac.uk/my/"
                                                    
                                                    
                                                    data-disableactive="true"
                                                    tabindex="-1"
                                                >
                                                    Dashboard
                                                </a>
                                    </li>
                                    <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                        <a class="dropdown-toggle nav-link  " id="drop-down-6a3bc7a8c2ef2" role="menuitem" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-6a3bc7a8c2ef2"
                                            
                                            
                                            tabindex="-1"
                                        >
                                            Study
                                        </a>
                                        <div class="dropdown-menu" role="menu" id="drop-down-menu-6a3bc7a8c2ef2" aria-labelledby="drop-down-6a3bc7a8c2ef2">
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/succeed"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Succeed@Solent Study skills
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/guidedlearning"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Guided Learning &amp; Workshops
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/assessment-support"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Assessment Support
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/library-home"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Library Homepage
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/library-catalogue"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Search Library Catalogue
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/libguides"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             LibGuides by Subject
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/academicintegrity"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Academic Integrity course
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/harvard-referencing"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Referencing
                                                        </a>
                                        </div>
                                    </li>
                                    <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                        <a class="dropdown-toggle nav-link  " id="drop-down-6a3bc7a8c2f8d" role="menuitem" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-6a3bc7a8c2f8d"
                                            
                                            
                                            tabindex="-1"
                                        >
                                            Learning Apps
                                        </a>
                                        <div class="dropdown-menu" role="menu" id="drop-down-menu-6a3bc7a8c2f8d" aria-labelledby="drop-down-6a3bc7a8c2f8d">
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/report/feedbackdashboard"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Assessment dashboard
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/timetable"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Timetables
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://myportfolio.solent.ac.uk"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            MyPortfolio
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/lil"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            LinkedIn Learning
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/bob"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Box of Broadcasts
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/panopto"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Panopto
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/app"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            My Solent app
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/apprenticeoffjob"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Apprentice off job
                                                        </a>
                                        </div>
                                    </li>
                                    <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                        <a class="dropdown-toggle nav-link  " id="drop-down-6a3bc7a8c2fe6" role="menuitem" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-6a3bc7a8c2fe6"
                                            
                                            
                                            tabindex="-1"
                                        >
                                            Student Help
                                        </a>
                                        <div class="dropdown-menu" role="menu" id="drop-down-menu-6a3bc7a8c2fe6" aria-labelledby="drop-down-6a3bc7a8c2fe6">
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/student-help"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Help Guides
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/induction"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                             Learning Technology Induction
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/student-hub"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Student Hub
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/solent-futures"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Solent Careers
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/student-portal"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Student Portal
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/ask"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Contact Us
                                                        </a>
                                        </div>
                                    </li>
                                    <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                        <a class="dropdown-toggle nav-link  " id="drop-down-6a3bc7a8c3031" role="menuitem" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-6a3bc7a8c3031"
                                            
                                            
                                            tabindex="-1"
                                        >
                                            Staff Help
                                        </a>
                                        <div class="dropdown-menu" role="menu" id="drop-down-menu-6a3bc7a8c3031" aria-labelledby="drop-down-6a3bc7a8c3031">
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/teach"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            CPD and Inductions
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://ssu.sharepoint.com/sites/EO"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Learning &amp; Teaching Hub
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/staff-help"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Help Guides
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/report/feedbackdashboard"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Assessment Dashboard
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/documentation"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Documentation
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/staff-portal"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Staff Portal
                                                        </a>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/beacon"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Beacon Service Centre
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" role="menuitem" href="https://learn.solent.ac.uk/ask"  data-disableactive="true" tabindex="-1"
                                                            
                                                        >
                                                            Contact Us
                                                        </a>
                                        </div>
                                    </li>
                            <li role="none" class="nav-item dropdown dropdownmoremenu d-none" data-region="morebutton">
                                <a class="dropdown-toggle nav-link " href="#" id="moremenu-dropdown-6a3bc7a8c33d2" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                    More
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-6a3bc7a8c33d2" role="menu">
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
    
    
            <div id="usernavigation" class="navbar-nav ms-auto h-100">
                    <div id="searchinput-navbar-6a3bc7a8c78896a3bc7a8a2ed75" class="simplesearchform">
    <div class="collapse" id="searchform-navbar">
        <form autocomplete="off" action="https://learn.solent.ac.uk/course/search.php" method="get" accept-charset="utf-8" class="mform d-flex flex-wrap align-items-center searchform-navbar">
                <input type="hidden" name="" value="">
            <div class="input-group" >
                <label for="searchinput-6a3bc7a8c78896a3bc7a8a2ed75">
                    <span class="sr-only">Search</span>
                </label>
                    <input type="text"
                       id="searchinput-6a3bc7a8c78896a3bc7a8a2ed75"
                       class="form-control withclear"
                       placeholder="Search"
                       aria-label="Search"
                       name="q"
                       data-region="input"
                       autocomplete="off"
                    >
                    <a class="btn btn-close"
                        data-action="closesearch"
                        data-toggle="collapse"
                        href="#searchform-navbar"
                        role="button"
                        title="Close"
                    >
                        <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">Close</span>
                    </a>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-submit" data-action="submit" title="Perform search">
                        <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">Perform search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a
        class="btn btn-open rounded-0 nav-link"
        data-toggle="collapse"
        data-action="opensearch"
        href="#searchform-navbar"
        role="button"
        aria-expanded="false"
        aria-controls="searchform-navbar"
        title="Toggle search input"
    >
        <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
        <span class="sr-only">Toggle search input</span>
    </a>
</div>
                    <div class="divider border-start h-75 align-self-center mx-1"></div>
                <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="135057"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link icon-no-margin"
        data-region="popover-region-toggle"
        aria-controls="popover-region-container-6a3bc7a8c82856a3bc7a8a2ed76"
        aria-haspopup="true"
        aria-expanded="false"
        aria-label=" Show notification window with no new notifications   "
        title=" Show notification window with no new notifications   "
        tabindex="0"
        role="button">
                <i class="icon fa fa-bell fa-fw " aria-hidden="true" ></i>
        <div
            class="count-container hidden"
            data-region="count-container"
            aria-hidden=true
        >
            0
        </div>

    </div>
    <div         aria-modal="true"
        tabindex="-1"

        id="popover-region-container-6a3bc7a8c82856a3bc7a8a2ed76"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-hidden="true"
        aria-label="Notification window"
        role="dialog">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button btn btn-sm btn-link m-0 py-0 icon-no-margin"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button"
           aria-label="Mark all as read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true" ></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
            <span aria-live="polite" class="sr-only" data-region="notification-read-feedback"></span>
        </a>
            <a href="https://learn.solent.ac.uk/message/notificationpreferences.php"
               title="Notification preferences"
               aria-label="Notification preferences"
               class="btn btn-sm btn-link m-0 py-0 icon-no-margin" >
                <i class="icon fa fa-gear fa-fw " aria-hidden="true" ></i></a>
        <button type="button" class="btn btn-sm btn-link m-0 py-0 icon-no-margin" aria-label="Close" title="Close" data-action="close-notification-popover">
            <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
        </button>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://learn.solent.ac.uk/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div>
                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
                        <div class="usermenu">
                                <div class="dropdown show">
                                    <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="User menu"
                                       aria-haspopup="true" aria-controls="user-action-menu" class="btn dropdown-toggle">
                                        <span class="userbutton">
                                            <span class="avatars">
                                                    <span class="avatar current">
                                                        <span class="userinitials size-35" title="ATUL ADHIKARI" aria-label="ATUL ADHIKARI" role="img">AA</span>
                                                    </span>
                                            </span>
                                        </span>
                                    </a>
                                    <div id="user-action-menu" class="dropdown-menu dropdown-menu-right">
                                        <div id="usermenu-carousel" class="carousel slide" data-touch="false" data-interval="false" data-keyboard="false">
                                            <div class="carousel-inner">
                                                <div id="carousel-item-main" class="carousel-item active" role="menu" tabindex="-1" aria-label="User">
                                                            <a href="https://learn.solent.ac.uk/user/profile.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    
                                                                Profile
                                                            </a>
                                                        
                                                            <a href="https://learn.solent.ac.uk/grade/report/overview/index.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    
                                                                Grades
                                                            </a>
                                                        
                                                            <a href="https://learn.solent.ac.uk/calendar/view.php?view=month" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    
                                                                Calendar
                                                            </a>
                                                        
                                                            <a href="https://learn.solent.ac.uk/reportbuilder/index.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    
                                                                Reports
                                                            </a>
                                                        
                                                            <a href="https://learn.solent.ac.uk/local/accessibilitytool/manage.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    <i class="icon fa fa-universal-access fa-fw " aria-hidden="true" ></i>
                                                                Accessibility Tool
                                                            </a>
                                                        
                                                        <div class="dropdown-divider"></div>
                                                            <a href="https://learn.solent.ac.uk/user/preferences.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    
                                                                Preferences
                                                            </a>
                                                        <div class="dropdown-divider"></div>
                                                            <a href="https://learn.solent.ac.uk/login/logout.php?sesskey=8EOgyUACko" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                    
                                                                Log out
                                                            </a>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                
            </div>
        </div>
    </nav>
    

<div  class="drawer drawer-left drawer-primary d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-primary" data-preference="" data-state="show-drawer-primary" data-forceopen="0" data-close-on-resize="1">
    <div class="drawerheader">
        <button
            class="btn drawertoggle icon-no-margin hidden"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-primary"
            data-toggle="tooltip"
            data-placement="right"
            title="Close drawer"
        >
            <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
        </button>
                <a
            href="https://learn.solent.ac.uk/my/"
            title="Solent Online Learning"
            data-region="site-home-link"
            class="aabtn text-reset d-flex align-items-center py-1 h-100"
        >
                <img src="https://learn.solent.ac.uk/pluginfile.php/1/core_admin/logocompact/300x300/1781505702/favicon.png" class="logo py-1 h-100" alt="Solent Online Learning">
        </a>

        <div class="drawerheadercontent hidden">
            
        </div>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                <div class="list-group">
                <a href="https://learn.solent.ac.uk/my/" class="list-group-item list-group-item-action  " >
                    Dashboard
                </a>
                <a id="drop-down-1" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-1" aria-expanded="false" aria-controls="drop-down-menu-1">
                    Study
                    <span class="ms-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-1" aria-labelledby="drop-down-1">
                             <a href="https://learn.solent.ac.uk/succeed" class="ps-5 bg-light list-group-item list-group-item-action"> Succeed@Solent Study skills</a>
                             <a href="https://learn.solent.ac.uk/guidedlearning" class="ps-5 bg-light list-group-item list-group-item-action">Guided Learning &amp; Workshops</a>
                             <a href="https://learn.solent.ac.uk/assessment-support" class="ps-5 bg-light list-group-item list-group-item-action">Assessment Support</a>
                             <a href="https://learn.solent.ac.uk/library-home" class="ps-5 bg-light list-group-item list-group-item-action"> Library Homepage</a>
                             <a href="https://learn.solent.ac.uk/library-catalogue" class="ps-5 bg-light list-group-item list-group-item-action"> Search Library Catalogue</a>
                             <a href="https://learn.solent.ac.uk/libguides" class="ps-5 bg-light list-group-item list-group-item-action"> LibGuides by Subject</a>
                             <a href="https://learn.solent.ac.uk/academicintegrity" class="ps-5 bg-light list-group-item list-group-item-action"> Academic Integrity course</a>
                             <a href="https://learn.solent.ac.uk/harvard-referencing" class="ps-5 bg-light list-group-item list-group-item-action">Referencing</a>
                </div>
                <a id="drop-down-12" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-12" aria-expanded="false" aria-controls="drop-down-menu-12">
                    Learning Apps
                    <span class="ms-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-12" aria-labelledby="drop-down-12">
                             <a href="https://learn.solent.ac.uk/report/feedbackdashboard" class="ps-5 bg-light list-group-item list-group-item-action"> Assessment dashboard</a>
                             <a href="https://learn.solent.ac.uk/timetable" class="ps-5 bg-light list-group-item list-group-item-action">Timetables</a>
                             <a href="https://myportfolio.solent.ac.uk" class="ps-5 bg-light list-group-item list-group-item-action">MyPortfolio</a>
                             <a href="https://learn.solent.ac.uk/lil" class="ps-5 bg-light list-group-item list-group-item-action">LinkedIn Learning</a>
                             <a href="https://learn.solent.ac.uk/bob" class="ps-5 bg-light list-group-item list-group-item-action">Box of Broadcasts</a>
                             <a href="https://learn.solent.ac.uk/panopto" class="ps-5 bg-light list-group-item list-group-item-action">Panopto</a>
                             <a href="https://learn.solent.ac.uk/app" class="ps-5 bg-light list-group-item list-group-item-action">My Solent app</a>
                             <a href="https://learn.solent.ac.uk/apprenticeoffjob" class="ps-5 bg-light list-group-item list-group-item-action">Apprentice off job</a>
                </div>
                <a id="drop-down-22" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-22" aria-expanded="false" aria-controls="drop-down-menu-22">
                    Student Help
                    <span class="ms-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-22" aria-labelledby="drop-down-22">
                             <a href="https://learn.solent.ac.uk/student-help" class="ps-5 bg-light list-group-item list-group-item-action"> Help Guides</a>
                             <a href="https://learn.solent.ac.uk/induction" class="ps-5 bg-light list-group-item list-group-item-action"> Learning Technology Induction</a>
                             <a href="https://learn.solent.ac.uk/student-hub" class="ps-5 bg-light list-group-item list-group-item-action">Student Hub</a>
                             <a href="https://learn.solent.ac.uk/solent-futures" class="ps-5 bg-light list-group-item list-group-item-action">Solent Careers</a>
                             <a href="https://learn.solent.ac.uk/student-portal" class="ps-5 bg-light list-group-item list-group-item-action">Student Portal</a>
                             <a href="https://learn.solent.ac.uk/ask" class="ps-5 bg-light list-group-item list-group-item-action">Contact Us</a>
                </div>
                <a id="drop-down-31" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-31" aria-expanded="false" aria-controls="drop-down-menu-31">
                    Staff Help
                    <span class="ms-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-31" aria-labelledby="drop-down-31">
                             <a href="https://learn.solent.ac.uk/teach" class="ps-5 bg-light list-group-item list-group-item-action">CPD and Inductions</a>
                             <a href="https://ssu.sharepoint.com/sites/EO" class="ps-5 bg-light list-group-item list-group-item-action">Learning &amp; Teaching Hub</a>
                             <a href="https://learn.solent.ac.uk/staff-help" class="ps-5 bg-light list-group-item list-group-item-action">Help Guides</a>
                             <a href="https://learn.solent.ac.uk/report/feedbackdashboard" class="ps-5 bg-light list-group-item list-group-item-action">Assessment Dashboard</a>
                             <a href="https://learn.solent.ac.uk/documentation" class="ps-5 bg-light list-group-item list-group-item-action">Documentation</a>
                             <a href="https://learn.solent.ac.uk/staff-portal" class="ps-5 bg-light list-group-item list-group-item-action">Staff Portal</a>
                             <a href="https://learn.solent.ac.uk/beacon" class="ps-5 bg-light list-group-item list-group-item-action">Beacon Service Centre</a>
                             <a href="https://learn.solent.ac.uk/ask" class="ps-5 bg-light list-group-item list-group-item-action">Contact Us</a>
                </div>
        </div>

    </div>
</div>
        <div  class="drawer drawer-left  d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-courseindex" data-preference="drawer-open-index" data-state="show-drawer-left" data-forceopen="0" data-close-on-resize="0">
    <div class="drawerheader">
        <button
            class="btn drawertoggle icon-no-margin hidden"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-courseindex"
            data-toggle="tooltip"
            data-placement="right"
            title="Close course index"
        >
            <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
        </button>
        
        <div class="drawerheadercontent hidden">
                            <div id="courseindexdrawercontrols" class="dropdown">
                    <button class="btn btn-icon rounded-circle mx-2"
                            id="courseindexdrawercontrolsmenubutton"
                            type="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            title="Course index options"
                            aria-label="Course index options"
                            aria-controls="courseindexdrawercontrolsmenu">
                        <i class="icon fa fa-ellipsis-v fa-fw m-0" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu" id="courseindexdrawercontrolsmenu" aria-labelledby="courseindexdrawercontrolsmenubutton">
                        <a class="dropdown-item"
                           href="#"
                           data-action="expandallcourseindexsections"
                           role="menuitem"
                        >
                            <i class="icon fa fa-angles-down fa-fw " aria-hidden="true" ></i>
                            Expand all
                        </a>
                        <a class="dropdown-item"
                           href="#"
                           data-action="collapseallcourseindexsections"
                           role="menuitem"
                        >
                            <span class="dir-rtl-hide"><i class="icon fa fa-angles-right fa-fw " aria-hidden="true" ></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-angles-left fa-fw " aria-hidden="true" ></i></span>
                            Collapse all
                        </a>
                    </div>
                </div>

        </div>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                        <nav id="courseindex" class="courseindex">
    <div id="courseindex-content">
        <div data-region="loading-placeholder-content" aria-hidden="true" id="course-index-placeholder">
            <ul class="placeholders list-unstyled px-5">
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

    </div>
</div>
    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers   drag-container">
        <div id="topofscroll" class="main-inner">
            <div class="drawer-toggles d-flex">
                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                        <button
                            class="btn icon-no-margin"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_boost-drawers-courseindex"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="Open course index"
                        >
                            <span class="sr-only">Open course index</span>
                            <i class="icon fa fa-list fa-fw " aria-hidden="true" ></i>
                        </button>
                    </div>
            </div>
            <header id="page-header" class="d-print-none "
    style="background-image: url('https://learn.solent.ac.uk/pluginfile.php/5779412/course/overviewfiles/_Waves_BlueOnBlue4.png');">
    <div class="w-100">
        <div class="d-flex flex-wrap">
            <div id="page-navbar">
                <nav aria-label="Breadcrumb">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/my/"
                        
                        
                        
                    >
                        Dashboard
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/course/view.php?id=65255&amp;section=0"
                        
                        title="Programming For Problem Solving (COM731)"
                        
                    >
                        Programming For Problem Solving (COM731)
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/course/view.php?id=65255&amp;section=17"
                        
                        
                        data-section-name-for="1232828" 
                    >
                        6: File Operations
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/mod/page/view.php?id=4057661"
                        aria-current="page"
                        title="Page"
                        
                    >
                        Coding Pracitce: Reading From CSV Files
                    </a>
                </li>
        </ol>
</nav>
            </div>
            <div class="ms-auto pe-2 my-2 d-flex">
                
            </div>
            <div id="course-header">
                
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="me-auto d-flex flex-column">
                    <div class="me-auto">
                        <div class="page-context-header d-flex align-items-center">
    <div class="page-header-image">
        <div class="content activityiconcontainer icon-size-6 modicon_page"><img class="icon activityicon " aria-hidden="true" src="https://learn.solent.ac.uk/theme/image.php/solent/page/1781505702/monologo?filtericon=1" alt="" /></div>
    </div>
    <div class="page-header-headings">
        <h1 class="h2 mb-2">Coding Pracitce: Reading From CSV Files</h1>
    </div>
</div>
                    </div>
                <div>
                </div>
            </div>
            <div class="header-actions-container ms-auto" data-region="header-actions-container">
            </div>
        </div>
    </div>
</header>
            <div id="page-content" class="pb-3 d-print-block">
                <div id="region-main-box">
                    <div id="region-main">

                        <span class="notifications" id="user-notifications"></span><div class="solalerts m-2">
</div>
                            <span id="maincontent"></span>
                            <div class="activity-header" data-for="page-activity-header">
                                    <span class="sr-only">Completion requirements</span>
                                    <div data-region="activity-information" data-activityname="Coding Pracitce: Reading From CSV Files" class="activity-information">


</div>
</div>
                        <div role="main"><div class="box py-3 generalbox center clearfix"><div class="no-overflow"><!--
<div style="text-align: left;" class="outline-box outline-box-teal fa-style">Activity 1: Read the headings</div>
<p dir="ltr"><strong style="font-size: 1rem; letter-spacing: 0.45px;">Tasks</strong><br></p>
<p dir="ltr"></p>
<ol>
    <li>At the same location of 'songs.csv' file, create a new floder named 'read'</li>
    <li>Inside the 'read' folder, create new Jupyter notebook file, rename as ''Read_CSV_Files"</li>
    <li>Set a Makedown cell and named as&nbsp; "Activity: headings" and click 'Run'<br></li>
    <li>Import <strong>csv </strong>module</li>
    <li>Create a variable named&nbsp;<strong>file_name</strong>&nbsp;and assign a path and a name as ../<strong>songs.csv</strong>. <span><span style=""><strong style="text-decoration-line: underline;">Note:</strong>&nbsp;</span></span>the CSV file is stored in the parent directory so you will need to use&nbsp;"<strong>../</strong>"&nbsp;at the start of the file path to navigate to the parent directory.<br></li>
    <li>Open the file for reading using Python's keyword <strong>with</strong> and the <strong>open()</strong> function. The program should use the variable&nbsp;<strong>file_name and set up encoding as UTF-8</strong>.<br></li>
    <li>Create a variable named <strong>csv_reader</strong>&nbsp;to read CSV file using <strong>reader method</strong>&nbsp;of the csv module<br></li>
    <li>Read in and store&nbsp;the headings separately to a new variable named&nbsp;<strong>headings</strong> using <strong>next()</strong> function</li>
    <li>Display the headings</li>
    <li>Run the program</li>
</ol>
<p></p>
<p><strong>[Expected Output]</strong></p>
<p></p>
<pre>['Song', 'Artist', 'Category', 'Year']</pre>Code your solution and be sure to include appropriate comments in your code.<br><br>
-->

<div class="outline-box outline-box-teal fa-style">

    Activity 1: Read the values</div><br><strong>Tasks</strong><br>In this activity, you will create a Python program that reads all the values from a CSV file and displays them in the standard output.<br><br>
<ol>
    <li>Create a new Jupyter Notebook, at the top of VS Code, click the search bar and type &gt;create. A list of commands will appear—select the first one that says 'Create: New Jupyter Notebook'.</li><li>Then save it by going to the 'File' menu at the top, then click 'Save As'. Navigate to the COM731 folder, name the file Files.ipynb, and make sure the 'Save as type' is set to 'All files'. Finally, click 'OK' to save</li><li>Set the kernel for running your program, click 'Select Kernel' in the top right corner of the notebook. Then choose the 'COM731' environment that was previously set up.</li><li>Set Markdown cell and type a message as 'Activity: values'&nbsp;and click tick icon to run</li>
    <li>Add a new code cell, the program should consist of the following tasks:&nbsp;&nbsp;<ul><li><span style="font-size: 1rem;">Import </span><strong style="font-size: 1rem;">csv</strong><span style="font-size: 1rem;"> module</span></li><li>Create a variable named&nbsp;<strong style="font-size: 1rem;">file_name</strong><span style="font-size: 1rem;">&nbsp;and assign a path and a name as ./</span><strong style="font-size: 1rem;">songs.csv</strong><strong style="font-size: 1rem;"></strong><span style="font-size: 1rem;"> file</span></li><li>Open the file for reading using&nbsp;Python's keyword&nbsp;<strong style="font-size: 1rem;">with</strong><span style="font-size: 1rem;">&nbsp;and the&nbsp;</span><strong style="font-size: 1rem;">open() </strong><span style="font-size: 1rem;">function. The program should use the variable&nbsp;</span><strong style="font-size: 1rem;">file_name&nbsp;<strong>and set up encoding as UTF-8.</strong></strong></li><li>Create a CSV reader for the file.</li><li>Using an appropriate loop, read in and display the values from the CSV file.</li></ul></li>
    <li><span>Run the program<br></span></li>
</ol>
<p><strong>[Expected Output]</strong></p>
<p></p>
<pre>['Song', 'Artist', 'Category', 'Year']

['Blinding Lights', 'The Weeknd', 'r&amp;b', '2020']
['Watermelon Sugar', 'Harry Styles', 'pop', '2019']
['Mood', '24kGoldn', 'rap', '2021']
['Someone You Loved', 'Lewis Capaldi', 'pop', '2019']
['Perfect', 'Ed Sheeran', 'pop', '2017']
['Believer', 'Imagine Dragons', 'rock', '2017']
['Lovely', 'Billie Eilish', 'electropop', '2018']
['Circles', 'Post Malone', 'rap', '2019']
['Shape of You', 'Ed Sheeran', 'pop', '2017']
['Memories', 'Maroon 5', 'pop', '2021']
['Closer', 'The Chainsmokers', 'pop', '2016']
['Bad Guy', 'Billie Eilish', 'electropop', '2019']
["Say You Won't Let Go", 'James Arthur', 'pop', '2016']</pre>Code your solution and be sure to include appropriate comments in your code.<br><br>
<div class="outline-box outline-box-teal fa-style">

    Activity 2: Read specific values</div><br><strong>Tasks</strong><br>In this activity, you will create a Python program that reads all the song titles from a CSV file&nbsp;and displays them in the standard output.<br><br>
<ol>
    <li>Create a new Markdown cell and type a message as 'Activity: song_titles'&nbsp;and click tick icon to run</li><li>Add a new code cell, the program should consist of the following tasks:<ul><li><span style="font-size: 1rem;">Import </span><strong style="font-size: 1rem;">csv</strong><span style="font-size: 1rem;"> module</span></li><li>Create a variable named&nbsp;<strong style="font-size: 1rem;">file_name</strong><span style="font-size: 1rem;">&nbsp;and assign a path and a name as ./</span><strong style="font-size: 1rem;">songs.csv</strong><strong style="font-size: 1rem;"></strong><span style="font-size: 1rem;"> file</span></li><li>Open the file for reading Python's keyword&nbsp;<strong style="font-size: 1rem;">with</strong><span style="font-size: 1rem;">&nbsp;and the&nbsp;</span><strong style="font-size: 1rem;">open()</strong><span style="font-size: 1rem;">&nbsp;function. The program should use the variable&nbsp;</span><strong style="font-size: 1rem;">file_name&nbsp;<strong><strong>and set up encoding as UTF-8.</strong></strong></strong></li><li>Create a CSV reader for the file.</li><li>Read in and store the headings from the file.&nbsp; Display only headings '<strong style="font-size: 1rem;">Song</strong><span style="font-size: 1rem;">'&nbsp;</span></li><li>Using an appropriate loop, read in and display <strong style="font-size: 1rem;">only the song titles</strong><span style="font-size: 1rem;"> from the CSV file.</span></li></ul></li>
    <li>Run the program<br></li>
</ol>
<p><strong>[Expected Output]</strong></p>
<p>The following should be displayed:</p>
<pre>Song

Blinding Lights
Watermelon Sugar
Mood
Someone You Loved
Perfect
Believer
Lovely
Circles
Shape of You
Memories
Closer
Bad Guy
Say You Won't Let Go</pre>Code your solution and be sure to include appropriate comments in your code.<br>
<!--
<div class="outline-box outline-box-teal fa-style">
    Activity 4: Reading specific values and formatting</div><br><strong>Tasks<br></strong>In this activity, you will create a Python program that reads in multiple specific values from a CSV file and displays them in the standard output.<br><br>
<ol>
    <li>Create a new cell, set Markdown as 'Activity: formatted_values'</li>
    <li>Import<strong> csv</strong> module</li>
    <li>Create a variable named&nbsp;<strong>file_name</strong>&nbsp;and assigna path and a name as ../<strong>songs.csv</strong><strong></strong>&nbsp;file.<br></li>
    <li>Open the file for reading using Python's keyword&nbsp;<strong>with</strong>&nbsp;and the&nbsp;<strong>open()</strong>&nbsp;function and create a CSV reader for the file.<br></li>
    <li>Read in and store the headings. However, we will not display or use this further in the program.<br></li>
    <li>Using an appropriate loop, read in and display the <strong>song title</strong>, <strong>year</strong> and <strong>artist</strong>.&nbsp; Your output should be formatted as follows:&nbsp;<strong>"[Year] Song Title (by Artist)</strong>".<br></li>
    <li>Run the program<br></li>
</ol>
<p><strong>[Expected Output]</strong></p>
<p>The output should be as follows:</p>
<pre>[2020] Blinding Lights (by The Weeknd)
[2019] Watermelon Sugar (by Harry Styles)
[2021] Mood (by 24kGoldn)
[2019] Someone You Loved (by Lewis Capaldi)
[2017] Perfect (by Ed Sheeran)
[2017] Believer (by Imagine Dragons)
[2018] Lovely (by Billie Eilish)
[2019] Circles (by Post Malone)
[2017] Shape of You (by Ed Sheeran)
[2021] Memories (by Maroon 5)
[2016] Closer (by The Chainsmokers)
[2019] Bad Guy (by Billie Eilish)
[2016] Say You Won't Let Go (by James Arthur)</pre>Code your solution and be sure to include appropriate comments in your code.<br><br>

-->
<div class="outline-box outline-box-teal fa-style">
    Activity 3: Commit to Repository&nbsp;</div>If you have successfully set up Github and link your Jupyter notebook to it. It is time to commit our working program to your repository. Enter appropriate commands in the terminal to commit your changes. You should add a description for the commit summarising the changes you have made &nbsp;e.g. "Added code to demonstrate the use of Simple decision". Remember to also push the commits to the remote GitHub repository using git push.<br><!-- footer -->
<div style="background-color: #ccc; color: #fff; font-size: 12px; margin-top: 32px; padding: 5px; text-align: center;">Copyright © Prins Butt and Jarutas Andritsch, All rights reserved.</div></div></div><div class="modified">Last modified: Tuesday, 20 May 2025, 11:02 AM</div></div>
                        <nav class="mt-5 mb-1 activity-navigation container-fluid" aria-label="Activity navigation">
<div class="row">
    <div class="col-md-4">        <div class="float-start">
                <a href="https://learn.solent.ac.uk/mod/resource/view.php?id=4057660&forceview=1" id="prev-activity-link" class="btn btn-link"  aria-label="Previous activity: songs" >&#x25C0;&#xFE0E; songs</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://learn.solent.ac.uk/course/jumpto.php" class="d-flex flex-wrap align-items-center" id="url_select_f6a3bc7a8a2ed77">
        <input type="hidden" name="sesskey" value="8EOgyUACko">
            <label for="jump-to-activity" class="sr-only">
                Jump to activity
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected >Jump to activity</option>
                    <option value="/mod/forum/view.php?id=4057429&amp;forceview=1"  >Assessment Queries</option>
                    <option value="/mod/checklist/view.php?id=4057433&amp;forceview=1"  >AE2 Checklist</option>
                    <option value="/mod/assign/view.php?id=4303430&amp;forceview=1"  >Programming For Problem Solving - In Class Test (40%) </option>
                    <option value="/mod/assign/view.php?id=4303429&amp;forceview=1"  >Programming For Problem Solving - Project (60%)</option>
                    <option value="/mod/url/view.php?id=3843470&amp;forceview=1"  >LinkedIn Learning</option>
                    <option value="/mod/forum/view.php?id=3843474&amp;forceview=1"  >Module Conversation</option>
                    <option value="/mod/questionnaire/view.php?id=3843475&amp;forceview=1"  >Your Module Survey</option>
                    <option value="/mod/forum/view.php?id=4057459&amp;forceview=1"  >Hear My Name</option>
                    <option value="/mod/scheduler/view.php?id=4057474&amp;forceview=1"  >COM731 Support Session Booking</option>
                    <option value="/mod/url/view.php?id=4057482&amp;forceview=1"  >How to Group by Month in Pandas DataFrame</option>
                    <option value="/mod/lesson/view.php?id=4057489&amp;forceview=1"  >The profession,  relevant standards, and environment</option>
                    <option value="/mod/h5pactivity/view.php?id=4057493&amp;forceview=1"  >Introduction to Programming Terminology</option>
                    <option value="/mod/h5pactivity/view.php?id=4057510&amp;forceview=1"  >Programming Terminology Quiz</option>
                    <option value="/mod/quiz/view.php?id=4057531&amp;forceview=1"  >Programming_Basic_Quiz</option>
                    <option value="/mod/resource/view.php?id=4057534&amp;forceview=1"  >Problem Solving Process</option>
                    <option value="/mod/resource/view.php?id=4057536&amp;forceview=1"  >Basic_Input and Output</option>
                    <option value="/mod/resource/view.php?id=4276129&amp;forceview=1"  >Jupyter notebook developed today</option>
                    <option value="/mod/resource/view.php?id=4057537&amp;forceview=1"  >Basic_Input and Output (ppt)</option>
                    <option value="/mod/page/view.php?id=4057542&amp;forceview=1"  >Coding Practice: Output</option>
                    <option value="/mod/page/view.php?id=4057543&amp;forceview=1"  >Solutions - Output</option>
                    <option value="/mod/page/view.php?id=4057545&amp;forceview=1"  >Coding Practice: Input</option>
                    <option value="/mod/page/view.php?id=4057546&amp;forceview=1"  >Solutions - Input</option>
                    <option value="/mod/quiz/view.php?id=4057558&amp;forceview=1"  >Selection Concept Quiz</option>
                    <option value="/mod/resource/view.php?id=4057561&amp;forceview=1"  >Control Flow Selection Notes</option>
                    <option value="/mod/resource/view.php?id=4057562&amp;forceview=1"  >Control Flow_Selections</option>
                    <option value="/mod/page/view.php?id=4057566&amp;forceview=1"  >Coding Practice: Decision</option>
                    <option value="/mod/page/view.php?id=4057567&amp;forceview=1"  >Solutions: Decision</option>
                    <option value="/mod/oublog/view.php?id=4057569&amp;forceview=1"  >Self_Defiend Problem - Selection Control</option>
                    <option value="/mod/resource/view.php?id=4057572&amp;forceview=1"  >BMI Calculator Solution</option>
                    <option value="/mod/resource/view.php?id=4281805&amp;forceview=1"  >Activity Code Files - Week03</option>
                    <option value="/mod/quiz/view.php?id=4057581&amp;forceview=1"  >Repetition Quiz</option>
                    <option value="/mod/resource/view.php?id=4057584&amp;forceview=1"  >Control Flow Loop Notes</option>
                    <option value="/mod/resource/view.php?id=4299157&amp;forceview=1"  >Code done during the class</option>
                    <option value="/mod/resource/view.php?id=4057585&amp;forceview=1"  >Control Flow_Loops</option>
                    <option value="/mod/page/view.php?id=4057590&amp;forceview=1"  >Coding Practice: While Loops</option>
                    <option value="/mod/page/view.php?id=4057591&amp;forceview=1"  >Solutions: While</option>
                    <option value="/mod/page/view.php?id=4057593&amp;forceview=1"  >Coding Practice: For Loop</option>
                    <option value="/mod/page/view.php?id=4057594&amp;forceview=1"  >Solutions: For</option>
                    <option value="/mod/oublog/view.php?id=4057596&amp;forceview=1"  >Self_Defined Problem - Loop</option>
                    <option value="/mod/resource/view.php?id=4057600&amp;forceview=1"  >Lifetime Earnings Calculation Solution</option>
                    <option value="/mod/quiz/view.php?id=4057612&amp;forceview=1"  >List_Dictionary_Quiz</option>
                    <option value="/mod/resource/view.php?id=4057615&amp;forceview=1"  >List and dictionary Notes</option>
                    <option value="/mod/resource/view.php?id=4306660&amp;forceview=1"  >Coding done during the class</option>
                    <option value="/mod/resource/view.php?id=4057616&amp;forceview=1"  >List and dictionary</option>
                    <option value="/mod/resource/view.php?id=4057620&amp;forceview=1"  >Real world example List Dictionary</option>
                    <option value="/mod/resource/view.php?id=4057621&amp;forceview=1"  >Real World Example List and Dictionary</option>
                    <option value="/mod/page/view.php?id=4057625&amp;forceview=1"  >Coding Pracitce: Lists</option>
                    <option value="/mod/page/view.php?id=4057626&amp;forceview=1"  >Solutions: Lists</option>
                    <option value="/mod/page/view.php?id=4057628&amp;forceview=1"  >Coding Pracitce: Dictionaries</option>
                    <option value="/mod/page/view.php?id=4057629&amp;forceview=1"  >Solutions: Dictionaries</option>
                    <option value="/mod/oublog/view.php?id=4057631&amp;forceview=1"  >Self_Defined_Problem: List or Dictionary</option>
                    <option value="/mod/oublog/view.php?id=4057633&amp;forceview=1"  >The reflective blog</option>
                    <option value="/mod/resource/view.php?id=4057636&amp;forceview=1"  >Username Generator solution</option>
                    <option value="/mod/h5pactivity/view.php?id=4057645&amp;forceview=1"  >File Basics</option>
                    <option value="/mod/quiz/view.php?id=4057649&amp;forceview=1"  >File Basics Quiz</option>
                    <option value="/mod/folder/view.php?id=4057652&amp;forceview=1"  >File Operations Notes</option>
                    <option value="/mod/folder/view.php?id=4314394&amp;forceview=1"  >Code done during the class</option>
                    <option value="/mod/resource/view.php?id=4057653&amp;forceview=1"  >File operations sildes</option>
                    <option value="/mod/resource/view.php?id=4057660&amp;forceview=1"  >songs</option>
                    <option value="/mod/page/view.php?id=4057662&amp;forceview=1"  >Solutions - Reading from csv files</option>
                    <option value="/mod/page/view.php?id=4057664&amp;forceview=1"  >Coding Pracitce: Writing To CSV Files</option>
                    <option value="/mod/page/view.php?id=4057665&amp;forceview=1"  >Solutions - Writing to csv file</option>
                    <option value="/mod/oublog/view.php?id=4057667&amp;forceview=1"  >Self_Defined problem: File Handling</option>
                    <option value="/mod/resource/view.php?id=4057676&amp;forceview=1"  >Titanic Training Data</option>
                    <option value="/mod/page/view.php?id=4057678&amp;forceview=1"  >Coding Pracitce: Titanic - Load data</option>
                    <option value="/mod/page/view.php?id=4057679&amp;forceview=1"  >Case Study Model Solutions: loading data</option>
                    <option value="/mod/page/view.php?id=4057681&amp;forceview=1"  >Coding Pracitce: Titanic - display a menu</option>
                    <option value="/mod/page/view.php?id=4057682&amp;forceview=1"  >Case Study Model Solutions: display a menu</option>
                    <option value="/mod/page/view.php?id=4057684&amp;forceview=1"  >Coding Pracitce: Titanic  - Process option 1</option>
                    <option value="/mod/page/view.php?id=4057685&amp;forceview=1"  >Case Study Model Solutions: processing option 1</option>
                    <option value="/mod/page/view.php?id=4057687&amp;forceview=1"  >Coding Pracitce: Titanic: process option 2</option>
                    <option value="/mod/page/view.php?id=4057688&amp;forceview=1"  >Case Study Model Solutions: processing option 2</option>
                    <option value="/mod/page/view.php?id=4057690&amp;forceview=1"  >Coding Pracitce: Titanic - process option 3</option>
                    <option value="/mod/page/view.php?id=4057691&amp;forceview=1"  >Case Study Model Solutions: processing option 3</option>
                    <option value="/mod/page/view.php?id=4057693&amp;forceview=1"  >Coding Pracitce: Titanic - process option 4</option>
                    <option value="/mod/page/view.php?id=4057694&amp;forceview=1"  >Case Study Model Solutions: processing option 4</option>
                    <option value="/mod/h5pactivity/view.php?id=4057703&amp;forceview=1"  >Function Basics</option>
                    <option value="/mod/quiz/view.php?id=4057705&amp;forceview=1"  >Function_Quiz</option>
                    <option value="/mod/folder/view.php?id=4057708&amp;forceview=1"  >Function_and_Module_Notes</option>
                    <option value="/mod/resource/view.php?id=4057709&amp;forceview=1"  >Function and Module slide</option>
                    <option value="/mod/page/view.php?id=4057716&amp;forceview=1"  >Coding Pracitce: Built-in Functions</option>
                    <option value="/mod/page/view.php?id=4057717&amp;forceview=1"  >Solutions: Built-in Function</option>
                    <option value="/mod/page/view.php?id=4057719&amp;forceview=1"  >Coding Pracitce: User Defined Functions</option>
                    <option value="/mod/page/view.php?id=4057720&amp;forceview=1"  >Solutions: User Defined Functions</option>
                    <option value="/mod/oublog/view.php?id=4057722&amp;forceview=1"  >Self-defined Problem: Functions</option>
                    <option value="/mod/resource/view.php?id=4057726&amp;forceview=1"  >Simple Finance Tracker Solution</option>
                    <option value="/mod/resource/view.php?id=4057742&amp;forceview=1"  >The Olympics dataset</option>
                    <option value="/mod/page/view.php?id=4057743&amp;forceview=1"  >Coding Pracitce: Olympics</option>
                    <option value="/mod/page/view.php?id=4057744&amp;forceview=1"  >Case Study Model Solutions: tui module</option>
                    <option value="/mod/page/view.php?id=4057745&amp;forceview=1"  >Case Study Model Solutions: main</option>
                    <option value="/mod/page/view.php?id=4057746&amp;forceview=1"  >Case Study Model Solutions: process module</option>
                    <option value="/mod/h5pactivity/view.php?id=4057754&amp;forceview=1"  >Pandas Basic</option>
                    <option value="/mod/quiz/view.php?id=4057756&amp;forceview=1"  >Pandas-Basic-Quiz</option>
                    <option value="/mod/folder/view.php?id=4057759&amp;forceview=1"  >Pandas - Basic</option>
                    <option value="/mod/resource/view.php?id=4057760&amp;forceview=1"  >Pandas Basic</option>
                    <option value="/mod/resource/view.php?id=4057761&amp;forceview=1"  >pandas dataframe cheat sheet</option>
                    <option value="/mod/folder/view.php?id=4057764&amp;forceview=1"  >Datasets_for_practice</option>
                    <option value="/mod/resource/view.php?id=4057766&amp;forceview=1"  >Basic Pandas Practice Salaries</option>
                    <option value="/mod/resource/view.php?id=4057767&amp;forceview=1"  >Basic Pandas Practice Solutions - Staff Salaries</option>
                    <option value="/mod/resource/view.php?id=4057769&amp;forceview=1"  >Basic Pandas Practice Purchase</option>
                    <option value="/mod/resource/view.php?id=4057770&amp;forceview=1"  >Basic Pandas Practice Solutions- Purchase</option>
                    <option value="/mod/resource/view.php?id=4057772&amp;forceview=1"  >Basic Pandas Practice US Election</option>
                    <option value="/mod/resource/view.php?id=4057773&amp;forceview=1"  >Basic Pandas Practice Solutions- US Election</option>
                    <option value="/mod/quiz/view.php?id=4057785&amp;forceview=1"  >Pandas-Wrangling_Quiz</option>
                    <option value="/mod/folder/view.php?id=4057788&amp;forceview=1"  >Pandas_Data_Wrangling</option>
                    <option value="/mod/resource/view.php?id=4057789&amp;forceview=1"  >Pandas Wrangling</option>
                    <option value="/mod/resource/view.php?id=4057790&amp;forceview=1"  >Pandas Data Wrangling Cheat Sheet</option>
                    <option value="/mod/resource/view.php?id=4057794&amp;forceview=1"  >Purchase Data</option>
                    <option value="/mod/resource/view.php?id=4057795&amp;forceview=1"  >Data Wrangling Practice1 Purchase</option>
                    <option value="/mod/resource/view.php?id=4057796&amp;forceview=1"  >Data Wrangling Practice1 Purchase solutions</option>
                    <option value="/mod/resource/view.php?id=4057798&amp;forceview=1"  >Yelp data</option>
                    <option value="/mod/resource/view.php?id=4057799&amp;forceview=1"  >Data Wrangling Practice2 Yelp</option>
                    <option value="/mod/resource/view.php?id=4057800&amp;forceview=1"  >Data Wrangling Practice2 Solutions</option>
                    <option value="/mod/resource/view.php?id=4057802&amp;forceview=1"  >food consumption</option>
                    <option value="/mod/resource/view.php?id=4057803&amp;forceview=1"  >Data Wrangling Practice3 Comsumption</option>
                    <option value="/mod/resource/view.php?id=4057804&amp;forceview=1"  >Data Wrangling Practice3 Solutions</option>
                    <option value="/mod/h5pactivity/view.php?id=4057813&amp;forceview=1"  >Data Visualisation Basic</option>
                    <option value="/mod/quiz/view.php?id=4057818&amp;forceview=1"  >Visualisation_Quiz</option>
                    <option value="/mod/folder/view.php?id=4057821&amp;forceview=1"  >Data_Visualisation with Matplotlib</option>
                    <option value="/mod/resource/view.php?id=4057822&amp;forceview=1"  >Data Visualisation plots</option>
                    <option value="/mod/resource/view.php?id=4057823&amp;forceview=1"  >matplolib-cheat-sheet</option>
                    <option value="/mod/folder/view.php?id=4057826&amp;forceview=1"  >Plots_with_matplotlib_Exercises</option>
                    <option value="/mod/resource/view.php?id=4057830&amp;forceview=1"  >Python Mathplotlib Practice Sleep</option>
                    <option value="/mod/resource/view.php?id=4057831&amp;forceview=1"  >Python Mathplotlib Practice Sleep Sample Solutions</option>
                    <option value="/mod/resource/view.php?id=4057833&amp;forceview=1"  >Python Matplotlib Practice CompanySale</option>
                    <option value="/mod/resource/view.php?id=4057834&amp;forceview=1"  >Python Matplotlib Practice CompanySale-Sample Solutions</option>
                    <option value="/mod/resource/view.php?id=4057837&amp;forceview=1"  >matplolib-handout-intermediate</option>
                    <option value="/mod/quiz/view.php?id=4057845&amp;forceview=1"  >Basic_Database_Quiz</option>
                    <option value="/mod/folder/view.php?id=4057848&amp;forceview=1"  >Basic_Database</option>
                    <option value="/mod/resource/view.php?id=4057849&amp;forceview=1"  >Basic Database</option>
                    <option value="/mod/resource/view.php?id=4057852&amp;forceview=1"  >HospitalDB</option>
                    <option value="/mod/resource/view.php?id=4057854&amp;forceview=1"  >Basic Database with SQLite Exercise 1</option>
                    <option value="/mod/resource/view.php?id=4057855&amp;forceview=1"  >Basic Database with SQLite Exercise 1 Solution</option>
                    <option value="/mod/resource/view.php?id=4057857&amp;forceview=1"  >Basic Database with SQLite Exercise 2</option>
                    <option value="/mod/resource/view.php?id=4057858&amp;forceview=1"  >Basic Database with SQLite Exercise 2 Solution</option>
                    <option value="/mod/resource/view.php?id=4057860&amp;forceview=1"  >Basic Database with SQLite Exercise 3</option>
                    <option value="/mod/resource/view.php?id=4057861&amp;forceview=1"  >Basic Database with SQLite Exercise 3 Solution</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary ms-1" value="Go">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="float-end">
                <a href="https://learn.solent.ac.uk/mod/page/view.php?id=4057662&forceview=1" id="next-activity-link" class="btn btn-link"  aria-label="Next activity: Solutions - Reading from csv files" >Solutions - Reading from csv files &#x25B6;&#xFE0E;</a>

        </div>
</div>
</div>
</nav>
                        <div class="bottomnavbar"><nav aria-label="Breadcrumb">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/my/"
                        
                        
                        
                    >
                        Dashboard
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/course/view.php?id=65255&amp;section=0"
                        
                        title="Programming For Problem Solving (COM731)"
                        
                    >
                        Programming For Problem Solving (COM731)
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/course/view.php?id=65255&amp;section=17"
                        
                        
                        data-section-name-for="1232828" 
                    >
                        6: File Operations
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://learn.solent.ac.uk/mod/page/view.php?id=4057661"
                        aria-current="page"
                        title="Page"
                        
                    >
                        Coding Pracitce: Reading From CSV Files
                    </a>
                </li>
        </ol>
</nav></div>
                        

                    </div>
                </div>
            </div>
        </div>
        
        <footer id="page-footer" class="bg-solent-navy footer-popover text-light">
            <div data-region="footer-container-popover">
                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="Show footer">
                    <i class="icon fa fa-question fa-fw " aria-hidden="true" ></i>
                </button>
            </div>
            <div class="footer-content-popover container" data-region="footer-content-popover">
                    <div class="footer-section p-3 border-bottom">
        
        
                            <div><a href="http://learn.solent.ac.uk/help" target="blank"><i class="icon fa-regular fa-envelope fa-fw " aria-hidden="true" ></i>Contact site support<i class="icon fa fa-arrow-up-right-from-square fa-fw ms-1" aria-hidden="true" ></i></a></div>
                    </div>
                <div class="footer-section p-3 border-bottom">
                    <div class="logininfo">
                        <div class="logininfo">You are logged in as <a href="https://learn.solent.ac.uk/user/profile.php?id=135057">ATUL ADHIKARI</a> (<a href="https://learn.solent.ac.uk/login/logout.php?sesskey=8EOgyUACko">Log out</a>)</div>
                    </div>
                    <div class="tool_usertours-resettourcontainer">
                    </div>
        
                    <div class="policiesfooter"><a href="https://learn.solent.ac.uk/admin/tool/policy/viewall.php?returnurl=https%3A%2F%2Flearn.solent.ac.uk%2Fmod%2Fpage%2Fview.php%3Fid%3D4057661">Policies</a></div><div><a class="mobilelink" href="https://download.moodle.org/mobile?version=2024100712&amp;lang=en&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile&amp;siteurl=https%3A%2F%2Flearn.solent.ac.uk">Get the mobile app</a></div>
                    <script>
//<![CDATA[
var require = {
    baseUrl : 'https://learn.solent.ac.uk/lib/requirejs.php/1781505702/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://learn.solent.ac.uk/lib/javascript.php/1781505702/lib/jquery/jquery-3.7.1.min',
        jqueryui: 'https://learn.solent.ac.uk/lib/javascript.php/1781505702/lib/jquery/ui-1.13.2/jquery-ui.min',
        jqueryprivate: 'https://learn.solent.ac.uk/lib/javascript.php/1781505702/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://learn.solent.ac.uk/lib/javascript.php/1781505702/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;
M.util.js_pending('filter_glossary/autolinker'); require(['filter_glossary/autolinker'], function(amd) {amd.init(); M.util.js_complete('filter_glossary/autolinker');});;
M.util.js_pending('filter_mathjaxloader/loader'); require(['filter_mathjaxloader/loader'], function(amd) {amd.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"}); M.util.js_complete('filter_mathjaxloader/loader');});;
M.util.js_pending('theme_solent/scrollspy'); require(['theme_solent/scrollspy'], function(amd) {amd.init(); M.util.js_complete('theme_solent/scrollspy');});;
M.util.js_pending('theme_solent/solent'); require(['theme_solent/solent'], function(amd) {amd.togglefieldsets(["#id_activitycompletionheader","#id_completionhdr","#id_feedbacktypes"]); M.util.js_complete('theme_solent/solent');});;
M.util.js_pending('theme_solent/fitvids'); require(['theme_solent/fitvids'], function(amd) {amd.init({"maxwidth":"700","maxheight":"370","customSelector":["iframe[src*='solent.cloud.panopto.eu\\\/Panopto\\\/Pages\\\/Embed.aspx']"],"ignore":[""]}); M.util.js_complete('theme_solent/fitvids');});;
M.util.js_pending('core_courseformat/courseeditor'); require(['core_courseformat/courseeditor'], function(amd) {amd.setViewFormat("65255", {"editing":false,"supportscomponents":true,"statekey":"1782298770_1782302232","overriddenStrings":[]}); M.util.js_complete('core_courseformat/courseeditor');});;

require(['core_courseformat/local/courseindex/placeholder'], function(component) {
    component.init('course-index-placeholder');
});
;

require(['core_courseformat/local/courseindex/drawer'], function(component) {
    component.init('courseindex');
});
;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://learn.solent.ac.uk/mod/lti/launch.php?id=1285358', 'lti-1285358'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://learn.solent.ac.uk/mod/lti/launch.php?id=2697407', 'lti-2697407'); return false; };
M.util.js_pending('core_courseformat/local/content/activity_header'); require(['core_courseformat/local/content/activity_header'], function(amd) {amd.init(); M.util.js_complete('core_courseformat/local/content/activity_header');});;

    require(['core/moremenu'], function(moremenu) {
        moremenu(document.querySelector('#moremenu-6a3bc7a8c33d2-navbar-nav'));
    });
;

require(
[
    'jquery',
],
function(
    $
) {
    var uniqid = "6a3bc7a8c73176a3bc7a8a2ed74";
    var container = $('#searchinput-navbar-' + uniqid);
    var opensearch = container.find('[data-action="opensearch"]');
    var input = container.find('[data-region="input"]');
    var submit = container.find('[data-action="submit"]');

    submit.on('click', function(e) {
        if (input.val() === '') {
            e.preventDefault();
        }
    });
    container.on('hidden.bs.collapse', function() {
        opensearch.removeClass('d-none');
        input.val('');
    });
    container.on('show.bs.collapse', function() {
        opensearch.addClass('d-none');
    });
    container.on('shown.bs.collapse', function() {
        input.focus();
    });
});
;

require(
[
    'jquery',
],
function(
    $
) {
    var uniqid = "6a3bc7a8c78896a3bc7a8a2ed75";
    var container = $('#searchinput-navbar-' + uniqid);
    var opensearch = container.find('[data-action="opensearch"]');
    var input = container.find('[data-region="input"]');
    var submit = container.find('[data-action="submit"]');

    submit.on('click', function(e) {
        if (input.val() === '') {
            e.preventDefault();
        }
    });
    container.on('hidden.bs.collapse', function() {
        opensearch.removeClass('d-none');
        input.val('');
    });
    container.on('show.bs.collapse', function() {
        opensearch.addClass('d-none');
    });
    container.on('shown.bs.collapse', function() {
        input.focus();
    });
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, Controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new Controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

    require(['core/usermenu'], function(UserMenu) {
        UserMenu.init();
    });
;

M.util.js_pending('theme_boost/drawers:load');
require(['theme_boost/drawers'], function() {
    M.util.js_complete('theme_boost/drawers:load');
});
;

    require(['theme_boost/courseindexdrawercontrols'], function(component) {
    component.init('courseindexdrawercontrols');
    });
;

M.util.js_pending('theme_boost/drawers:load');
require(['theme_boost/drawers'], function() {
    M.util.js_complete('theme_boost/drawers:load');
});
;

        require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
            CustomEvents.define('#jump-to-activity', [CustomEvents.events.accessibleChange]);
            $('#jump-to-activity').on(CustomEvents.events.accessibleChange, function() {
                if ($(this).val()) {
                    $('#url_select_f6a3bc7a8a2ed77').submit();
                }
            });
        });
    ;

require(['theme_boost/footer-popover'], function(FooterPopover) {
    FooterPopover.init();
});
;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader', 'theme_boost/drawer'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete('theme_boost/loader');
});
require(['theme_solent/solent'], function(Solent) {
    Solent.totop();
});
;
M.util.js_pending('local_solsits/assignments'); require(['local_solsits/assignments'], function(amd) {amd.init(); M.util.js_complete('local_solsits/assignments');});;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(6260024, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});;
M.util.js_pending('core/utility'); require(['core/utility'], function(amd) {M.util.js_complete('core/utility');});;
M.util.js_pending('core/storage_validation'); require(['core/storage_validation'], function(amd) {amd.init(1782288249); M.util.js_complete('core/storage_validation');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script src="https://cdn.jsdelivr.net/npm/mathjax@2.7.9/MathJax.js?delayStartupUntil=configured"></script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"Are you sure you want to delete the selected comment(s)?","confirmation":"Confirmation"},"local_solent":{"noroleerror":"You are not correctly enrolled on this page. Please contact Guided Learning on <a href=\"https:\/\/learn.solent.ac.uk\/ask\">https:\/\/learn.solent.ac.uk\/ask<\/a>"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {M.util.help_popups.setup(Y);
 M.util.js_pending('random6a3bc7a8a2ed78'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random6a3bc7a8a2ed78'); });
})();
//]]>
</script>

                </div>
                <div class="footer-section p-3">
                    <div>Powered by <a href="https://moodle.com">Moodle</a></div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg col-md-6 col-sm-12">
    <h3 class="footer__title footer__item nav__item footer_list">Study</h3>
    <ul class="vertical footer_list">
        <li>
            <a class="footer__item nav__item" href="https://learn.solent.ac.uk/succeed" target="_blank">Succeed@Solent</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://learn.solent.ac.uk/succeed/referencing" target="_blank">Referencing</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://libguides.solent.ac.uk/" target="_blank">Subject Guides</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/studying/library" target="_blank">Library</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://solent.ethicsreview.org.uk/" target="_blank">Ethics</a>
        </li>
    </ul>
</div>
                    <div class="col-lg col-md-6 col-sm-12">
    <h3 class="footer__title footer__item nav__item footer_list">Organise</h3>
    <ul class="vertical footer_list">
        <li>
            <a class="footer__item nav__item" href="https://email.solent.ac.uk" target="_blank">Email</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://timetable.solent.ac.uk/" target="_blank">Timetables</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://www.solent.ac.uk/about/term-dates" target="_blank">Term Dates</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/" target="_blank">Portal</a>
        </li>
    </ul>
</div>
                    <div class="col-lg col-md-6 col-sm-12">
    <h3 class="footer__title footer__item nav__item footer_list">Support</h3>
    <ul class="vertical footer_list">
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/student-hub" target="_blank">Student Hub</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://learn.solent.ac.uk/help" target="_blank">Technical Support</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/studying/print-service" target="_blank">Printing</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/studying/attendance-monitoring/extenuating-circumstances" target="_blank">Extenuating Circumstances</a>
        </li>
    </ul>
</div>
                    <div class="col-lg col-md-6 col-sm-12">
    <h3 class="footer__title footer__item nav__item footer_list">Solent Futures</h3>
    <ul class="vertical footer_list">
        <li>
            <a class="footer__item nav__item" href="https://careers.solent.ac.uk/" target="_blank">Solent Careers Online</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/careers/cvs-applications-and-interviews" target="_blank">CV Help</a>
        </li>
        <li>
            <a class="footer__item nav__item" href="https://students.solent.ac.uk/careers/placements-and-work-experience" target="_blank">Placements</a>
        </li>
    </ul>
</div>
                </div>
                <div class="footer--bottom">
                    <div class="container-fluid footer_bottom">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <a class="footer__item nav__item" href="https://www.solent.ac.uk/disclaimer" target="_blank">Disclaimer</a>&nbsp;|&nbsp;
    <a class="footer__item nav__item" href="https://learn.solent.ac.uk/terms" target="_blank">Terms & Conditions</a>&nbsp;|&nbsp;
    <a class="footer__item nav__item" href="https://www.solent.ac.uk/disclaimer/cookies" target="_blank">Cookies</a>&nbsp;|&nbsp;
    <a class="footer__item nav__item" href="https://learn.solent.ac.uk/accessibilitystatement" target="_blank">Accessibility Statement</a>&nbsp;|&nbsp;
                                <br><br>
                                <p class="footer__copyright">&copy; Solent University</p>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                        <ul class="menu social-wrap nav">
    <li>
        <a class="social fab fa-x-twitter fa-2x" href="https://twitter.com/solentuni" target="_blank" aria-label="Solent Twitter"></a>
    </li>
    <li>
        <a class="social fab fa-facebook fa-2x" href="https://www.facebook.com/solentuniversity" target="_blank" aria-label="Solent Facebook"></a>
    </li>
    <li>
        <a class="social fab fa-youtube fa-2x" href="https://www.youtube.com/user/SolentUniOfficial" target="_blank" aria-label="Solent YouTube"></a>
    </li>
    <li>
        <a class="social fab fa-linkedin fa-2x" href="https://www.linkedin.com/edu/southampton-solent-university-12644" target="_blank" aria-label="Solent LinkedIn"></a>
    </li>
    <li>
        <a class="social fab fa-tiktok fa-2x" href="https://tiktok.com/@solentuniofficial" target="_blank" aria-label="Solent Tiktok"></a>
    </li>
    <li>
        <a class="social fab fa-bluesky fa-2x" href="https://bsky.app/profile/solentuniversity.bsky.social" target="_blank" aria-label="Solent Bluesky"></a>
    </li>
</ul>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="footer-content-debugging footer-dark text-light">
                <div class="container-fluid footer-dark-inner">
                    
                </div>
            </div>
        </footer>
    </div>
    
</div>


</body></html>