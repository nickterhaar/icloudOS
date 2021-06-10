<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>icloudOS</title>
</head>
<body>
    <?php
        if (!isset($_SESSION['first-name'])) {
            header("Location: index.php");
            exit();
        }

        $firstname = $_SESSION['first-name'];
        $lastname = $_SESSION['last-name'];
    ?>
    <img id="wallpaper" src="assets/images/backgrounds/bigsur-light.jpeg" alt="wallpaper">
    <div class="navbar">
        <div class="menu-left">
            <ul>
                <li id="logo" onclick="menuShow('logo-menu')"><i class="fab fa-apple"></i></li>
                <li id="finder" onclick="menuShow('finder-menu')">Finder</li>
                <li id="file" onclick="menuShow('file-menu')">File</li>
                <li id="edit" onclick="menuShow('edit-menu')">Edit</li>
                <li id="view" onclick="menuShow('view-menu')">View</li>
                <li id="go" onclick="menuShow('go-menu')">Go</li>
                <li id="window" onclick="menuShow('window-menu')">Window</li>
                <li id="help" onclick="menuShow('help-menu')">Help</li>
            </ul>
        </div>
        <div class="menu-right">

        </div>
    </div>

    <div class="navbar-menu-container">
        <div class="nav-menu logo-menu" id="logo-menu" onmouseleave="menuHide('logo-menu')">
            <div class="menu-content">
                <p onclick="show('about-window')">About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out <?= $firstname; ?> <?= $lastname; ?></p>
            </div>
        </div>
        <!-- <div class="nav-menu finder-menu" id="finder-menu" onmouseleave="menuHide('finder-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div>
        <div class="nav-menu file-menu" id="file-menu" onmouseleave="menuHide('file-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div>
        <div class="nav-menu edit-menu" id="edit-menu" onmouseleave="menuHide('edit-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div>
        <div class="nav-menu view-menu" id="view-menu" onmouseleave="menuHide('view-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div>
        <div class="nav-menu go-menu" id="go-menu" onmouseleave="menuHide('go-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div>
        <div class="nav-menu window-menu" id="window-menu" onmouseleave="menuHide('window-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div>
        <div class="nav-menu help-menu" id="help-menu" onmouseleave="menuHide('help-menu')">
            <div class="menu-content">
                <p>About This Mac</p>
                <p>System Preferences...</p>
                <p>App Store...</p>
                <p>Recent Items</p>
                <p>Force Quit...</p>
                <p>Sleep</p>
                <p>Restart...</p>
                <p>Shutdown...</p>
                <p>Lock Screen</p>
                <p>Log Out FIRST_NAME LAST_NAME</p>
            </div>
        </div> -->
    </div>

    <div class="finder-container" id="finder-window" onclick="show('finder-window')">
        <div class="finder-sidebar">
            <div class="window-control">
                <div class="btn close" onclick="hide('finder-window')"><p>x</p></div>
                <div class="btn minimize" onclick="hide('finder-window')"><p>-</p></div>
                <div class="btn fullscreen"></div>
            </div>
            <div class="sidebar-content">
                <p>favorites</p>
                <ul>
                    <li id="home"><i class="fas fa-home"></i>nick</li>
                    <li id="applications"><i class="fab fa-app-store"></i>Applications</li>
                    <li id="desktop"><i class="far fa-window-maximize"></i>Desktop</li>
                    <li id="documents"><i class="far fa-file"></i>Documents</li>
                    <li id="downloads"><i class="fas fa-arrow-circle-down"></i>Downloads</li>
                    <li id="movies"><i class="fas fa-film"></i>Movies</li>
                    <li id="music"><i class="fab fa-itunes-note"></i>Music</li>
                    <li id="pictures"><i class="fas fa-image"></i>Pictures</li>
                </ul>
                <p>iCloud</p>
                <ul>
                    <li><i class="fas fa-cloud"></i>iCloud Drive</li>
                </ul>
                <p>Locations</p>
                <ul>
                    <li><i class="fas fa-desktop"></i><?= $firstname; ?>'s iMac</li>
                    <li><i class="fas fa-globe"></i>Network</li>
                </ul>
            </div>
        </div>
        <div class="finder-content-container" id="finder-windowheader">
            <div class="finder-content-bar">
                <div class="finder-content-bar-left">
                    <i class="fas fa-chevron-left"></i>
                    <i class="fas fa-chevron-right"></i>
                    <p>FOLDER_NAME</p>
                </div>
                <div class="finder-content-bar-right">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="finder-content">
                <div class="picture" id="picture1">
                    <img src="assets/images/picture1.jpeg" alt="">
                    <p>Picture 1</p>
                </div>
                <div class="picture" id="picture2">
                    <img src="assets/images/picture2.jpeg" alt="">
                    <p>Picture 2</p>
                </div>
                <div class="picture" id="picture3">
                    <img src="assets/images/picture3.jpeg" alt="">
                    <p>Picture 3</p>
                </div>
                <div class="picture" id="picture4">
                    <img src="assets/images/picture4.jpeg" alt="">
                    <p>Picture 4</p>
                </div>
            </div>
        </div>
    </div>

    <div class="help-container" id="help-window" onclick="show('help-window')">
        <div class="help-top-bar">
            <p onclick="hide('help-window')">x</p>
        </div>
        <h1>Hier komt het helpscherm</h1>
        <h2>Dit scherm legt je uit hoe je de webapplicatie kunt gebruiken</h2>
    </div>

    <div class="notes-container" id="notes-window" onclick="show('notes-window')">
        <div class="notes-sidebar">
            <div class="window-control">
                <div class="btn close" onclick="hide('notes-window')"><p>x</p></div>
                <div class="btn minimize" onclick="hide('finder-window')"><p>-</p></div>
                <div class="btn fullscreen"></div>
            </div>
            <div class="notes-sidebar-content">
                <p>iCloud</p>
                <ul>
                    <li id="notes"><i class="far fa-folder"></i>Notes</li>
                </ul>                
            </div>
        </div>
        <div class="notes-list">
            <div class="notes-list-bar">
                <i class="fas fa-list-ul"></i>
                <i class="fas fa-th-large"></i>
                <i class="far fa-trash-alt"></i>
            </div>
            <div class="notes-list-content">
                <ul>
                    <li>
                        <strong>Welcome</strong>
                        <p>05/06/2021</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="notes-content">
            <div class="notes-content-bar">
                <div class="notes-content-bar-items left">
                    <i class="far fa-edit"></i>
                </div>
                <div class="notes-content-bar-items middle">
                    <p>Aa</p>
                    <i class="far fa-check-circle"></i>
                    <i class="fas fa-border-all"></i>
                </div>
                <div class="notes-content-bar-items right">
                    <i class="fas fa-lock" id="lock"></i>
                    <i class="fas fa-chevron-down" id="lock-arrow"></i>
                    <i class="far fa-images" id="images"></i>
                    <i class="fas fa-chevron-down" id="images-arrow"></i>
                    <i class="far fa-user-circle"></i>
                    <i class="fas fa-external-link-alt"></i>
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="notes-content-field">
                <h1>Welcome <?= $firstname;?> to icloudOS</h1>
                <h3>About icloudOS</h3>
                <p><strong>icloudOS</strong> was started by <strong>Nick ter Haar</strong> as a fun project during his <br> Full Stack Web Developer starter course at <strong>Bit Academy</strong>.</p>
                <p>This project is in no way related to <strong>Apple</strong> or any of <strong>Apple</strong> subsidiaries. And was initiated as a personal and fun way to use my newly learned skills.</p>
                <h3>Navigation</h3>
                <p>As you've seen when you first logged in, this screen is the screen you will be welcomed with. To close this screen, click on the red or yellow dot in the left top corner.</p>
                <p>Besides this screen there are some others to explorer.</p>
                <p><img src="assets/icons/37_finder.png" alt=""> <strong>Finder</strong> is one of the exploreble screens. You can open this screen by clicking on <img src="assets/icons/37_finder.png" alt="">.</p>
                <p><strong>About This Mac</strong> can be opened by click the <i class="fab fa-apple"></i> in the left top corner. When you click on the <i class="fab fa-apple"></i> a menu will open. The first option will be the 'About This Mac' option. Once clicked, the 'About This Mac' window will open.</p>
                <h3>Change Wallpaper</h3>
                <p>To change the wallpaper you have to open the System Preferences by clicking on <img src="assets/icons/08_system-preferences.png" alt="">.</p>
            </div>
        </div>
    </div>

    <div class="about-container" id="about-window" onclick="show('about-window')">
        <div class="about-top-bar">
            <div class="window-control">
                <div class="btn close" onclick="hide('about-window')"><p>x</p></div>
                <div class="btn minimize" onclick="hide('about-window')"><p>-</p></div>
                <div class="btn fullscreen"></div>
            </div>
            <div class="about-button-bar">
                <p>Overview</p>
                <p>Displays</p>
                <p>Storage</p>
                <p>Support</p>
                <p>Service</p>
            </div>
        </div>
        <div class="about-content">
            <div class="circle">
                <img src="assets/images/heuvelrug.jpeg" alt="">
            </div>
            <div class="os-info">
                <p id="os-name"><strong>icloudOS</strong> Utrechtse Heuvelrug</p>
                <p id="os-version">Version 1.0.0</p>
                <!-- <p class="os-about" id="browser"></p> -->
                <p class="os-about"><strong>Made with</strong> HTML/CSS - JavaScript - PHP</p>
            </div>
        </div>
    </div>

    <div class="systempref-container" id="systempref-window" onclick="show('systempref-window')">
        <div class="systempref-bar">
            <div class="window-control">
                <div class="btn close" onclick="hide('systempref-window')"><p>x</p></div>
                <div class="btn minimize" onclick="hide('systempref-window')"><p>-</p></div>
                <div class="btn fullscreen"></div>
            </div>
            <div class="systempref-bar-content">
                <i class="fas fa-chevron-left"></i>
                <i class="fas fa-chevron-right"></i>
                <i class="fas fa-grip-horizontal" id="main-view"></i>
                <p>Desktop & Screen Saver</p>
            </div>
        </div>
        <div class="systempref-content">
            <div class="systempref-picker">
                <p>Desktop</p>
                <p>Screen Saver</p>
            </div>
            <div class="wallpaper-preview">
                <img id="wallpaper-preview" src="assets/images/backgrounds/bigsur-light.jpeg" alt="">
                <div class="wallpaper-preview-text">
                    <p id="wallpaper-name">bigsur-light</p>
                    <select name="wallpaper-size" id="">
                        <option value="fill-screen">Fill Screen</option>
                        <option value="fit-to-screen">Fit to Screen</option>
                        <option value="stretch-to-fill-screen">Stretch to Fill Screen</option>
                        <option value="center">Center</option>
                    </select>
                </div>
            </div>
            <div class="choices">
                <img src="assets/images/backgrounds/bigsur-light.jpeg" alt="" onclick="wallpaperChange('bigsur-light')">
                <img src="assets/images/backgrounds/bigsur-dark.jpeg" alt="" onclick="wallpaperChange('bigsur-dark')">
                <img src="assets/images/backgrounds/monterey-light.jpeg" alt="" onclick="wallpaperChange('monterey-light')">
                <img src="assets/images/backgrounds/monterey-dark.jpeg" alt="" onclick="wallpaperChange('monterey-dark')">
                <img src="assets/images/backgrounds/bigsur-daylight.jpeg" alt="" onclick="wallpaperChange('bigsur-daylight')">
                <img src="assets/images/backgrounds/bigsur-night.jpeg" alt="" onclick="wallpaperChange('bigsur-night')">
            </div>
        </div>
    </div>

    <div class="dock">
        <div class="dock-items">
            <img src="assets/icons/37_finder.png" alt="" onclick="show('finder-window')">
            <img src="assets/icons/23_notes.png" alt="" onclick="show('notes-window')">
            <img src="assets/icons/34_help-viewer.png" alt="" onclick="show('help-window')">
            <img src="assets/icons/08_system-preferences.png" alt="" onclick="show('systempref-window')">
            <!-- <img src="assets/icons/30_launchpad.png" alt="">
            <img src="assets/icons/15_safari.png" alt="">
            <img src="assets/icons/27_messages.png" alt="">
            <img src="assets/icons/29_mail.png" alt="">
            <img src="assets/icons/28_maps.png" alt="">
            <img src="assets/icons/20_photos.png" alt="">
            <img src="assets/icons/45_facetime.png" alt="">
            <img src="assets/icons/50_contacts.png" alt="">
            <img src="assets/icons/55_calendar.png" alt="">
            <img src="assets/icons/16_reminders.png" alt="">
            <img src="assets/icons/04_tv+.png" alt="">
            <img src="assets/icons/24_music.png" alt="">
            <img src="assets/icons/19_podcast.png" alt="">
            <img src="assets/icons/63_appstore.png" alt=""> -->
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>