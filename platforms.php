 <?php $version = "1.7.7"; ?>

<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Cross Platform</h1>
                <p>RetroArch can run on the usual platforms like Windows, Mac OS X and Linux, but it stands alone in that it can support far more platforms beyond just that.</p>
                <p>We support operating systems that not even Microsoft and Apple themselves support anymore, such as macOS X on PowerPC Macs, and RetroArch being available on Windows OSes as far back as Windows 95.</p>
                <p>On top of all that, RetroArch also runs on iOS and Android for tablets and phones, as well as on game consoles like PS2, PS3, PSP, PS Vita, Wii, Wii U, 2DS, 3DS, Switch, and more!</p>
                <p>The current stable version is: <?php echo $version; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>List of supported platforms</h2>

        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows.png">
                    <h4>Windows 10 / 8 / 7</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86_64/RetroArch-<?php echo $version; ?>-x64-setup.exe" title="If you are unsure which version to install for your Windows computer, chances are you will want to pick this one. Use this if you are running a 64bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation.">Installer (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86/RetroArch-<?php echo $version; ?>-x86-setup.exe" title="If you are unsure which version to install for your Windows computer, chances are you will want to pick this one. Use this if you are running a 32bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation.">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86_64/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a 64bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer.">Download (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a 32bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer.">Download (32bit)</a>
                    <a href="https://www.youtube.com/watch?v=hu-TW02bhhY">Installation video</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/windows/">Compilation instructions (MinGW-W64 MSYS2)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2017-uwp/x64/RetroArch-msvc2017-UWP_<?php echo $version; ?>_alpha_x64.appx" title="This is a temporary pre-alpha version of RetroArch for UWP/Xbox One! Please be aware that whatever you see might not be reflective of the finished product later on. Its purpose is to allow people to test for issues as much as possible and to report them back.">Download (UWP, 64bit, Pre-alpha)</a>
                 <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2017-uwp/x64/RetroArch-msvc2017-UWP_<?php echo $version; ?>_alpha_x64.cer" title="You need to install this certificate on your Windows computer to be able to install RetroArch UWP on your system. You need to assign the certificate to 'Trusted Root Key Authenticators' or something similar.">UWP Certificate (UWP, 64bit, Pre-alpha)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windowsxp.png">
                    <h4>Windows Vista / XP</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86/RetroArch-<?php echo $version; ?>-msvc2010-x86-setup.exe" title="Use this is if you are running a computer with Windows XP. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version." onclick="return showXPConfirmation()">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86_64/RetroArch-<?php echo $version; ?>-msvc2010-x64-setup.exe" title="Use this is if you are running a computer with Windows XP x64 Edition. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version." onclick="return showXPConfirmation()">Installer (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows XP. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version." onclick="return showXPConfirmation()">Download (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86_64/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows XP. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version." onclick="return showXPConfirmation()">Download (64bit)</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/windowsXP/">Compilation instructions (Visual Studio 2010)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows98.png">
                    <h4>Windows 2000 / ME / 98SE</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2005/x86/RetroArch-<?php echo $version; ?>-msvc2005-x86-setup.exe" title="Use this is if you are running a computer with Windows 98 Second Edition, Windows Millenium Edition, and/or Windows 2000. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for XP and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2005/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows 98 Second Edition, Windows Millenium Edition, and/or Windows 2000. NOTE: While this version will also work for XP and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download</a>
                    <a href="https://youtu.be/M8pNxq_vifQ">Installation video</a>
                    <a href="https://docs.libretro.com/guides/install-windows-2000-me-98SE/">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/windows98/">Compilation instructions (Visual Studio 2005)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/Win_logo_1992.png">
                    <h4>Windows 98 / 95</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2003/x86/RetroArch-<?php echo $version; ?>-msvc2003-x86-setup.exe" title="Use this is if you are running a computer with Windows 95 or Windows 98 First Edition. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for 98SE and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2003/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows 95 or Windows 98 First Edition. NOTE: While this version will also work for 98SE and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/windows95-msvc-cmdline/">Compilation instructions (Visual Studio 2003)</a>
                </div>
            </div>
        </div>
        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
               <div class="platform">
                   <img src="images/linux.png">
                   <h4>Linux</h4>
                   <a href="https://youtu.be/hu-TW02bhhY?t=95">Installation video</a>
                   <a href="index.php?page=linux-instructions" title="This page includes instructions for installing from the official PPAs, distro package managers and universal Snap and Flatpak packages.">Installation instructions</a>
                   <a href="https://docs.libretro.com/development/retroarch/compilation/ubuntu/">Compilation instructions (Ubuntu)</a>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/rpi.png">
                    <h4>Raspberry Pi</h4>
                    <a href="http://www.lakka.tv/get/">Download Lakka</a>
                </div>
            </div>
            <!--
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/xbox360.png">
                    <h4>Xbox 360</h4>
                    <a href="#">Currently unavailable (N/A)</a>
               </div>
            </div>
            -->
            <div class="col-md-3 col-sm-6">
               <div class="platform">
                 <img src="images/xbox.png">
                 <h4>Xbox</h4>
                 <a href="https://xbins.org/libretro/stable/<?php echo $version; ?>/xbox/xbox/RetroArch.zip">Download [Xbins]</a>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="platform">
                 <img src="images/xbone.png">
                 <h4>Xbox One</h4>
                 <a href="https://buildbot.libretro.com/stable/1.7.7/windows-msvc2017-uwp/x64/Microsoft.VCLibs.x64.14.00.appx">Microsoft Visual C++ 2015 UWP Runtime Package</a>
                 <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2017-uwp/x64/RetroArch-msvc2017-UWP_<?php echo $version; ?>_alpha_x64.appx" title="This is a temporary pre-alpha version of RetroArch for UWP/Xbox One! Please be aware that whatever you see might not be reflective of the finished product later on. Its purpose is to allow people to test for issues as much as possible and to report them back.">Download (Pre-alpha)</a>
               </div>
            </div>
        </div>
        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/android.png">
                    <h4>Android</h4>
                    <a href="https://play.google.com/store/apps/details?id=com.retroarch"><img src="images/en_badge_web_generic.png" alt="Google Play" /></a>
                    <a href="https://play.google.com/store/apps/details?id=com.retroarch.aarch64">Google Play (64bit)</a>
                    <a href="http://fdroid.libretro.com/">F-Droid</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/android/RetroArch.apk">Download</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/android/RetroArch_aarch64.apk">Download (64bit)</a>
                    <a href="https://www.youtube.com/watch?v=dqx5c28pT3o">Installation video</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/android/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ios.png">
                    <h4>iOS</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/ios/RetroArch.ipa">Download</a>
                    <a href="https://www.youtube.com/watch?v=QMCXXabUR5k">Installation video</a>
                    <a href="https://docs.libretro.com/guides/install-ios/">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/ios/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/apple-metal.png">
                    <h4>Apple macOS High Sierra <br>(and later) with Metal2</h4>
                    <a href="https://youtu.be/hu-TW02bhhY?t=182">Installation video</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArch_Metal.dmg" title="Use this if you are using a Mac with at least macOS 10.13 (High Sierra) installed or later.">Download</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                   <img src="images/apple.png">
                   <h4>Apple macOS / OSX</h4>
                   <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArch.dmg" title="Use this if you are using a Mac with at least MacOS X 10.7 installed or later.">Download (Intel)</a>
                   <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArch_CG.dmg" title="Use this if you are using a Mac with at least MacOS X 10.7 installed or later. This build requires Nvidia Cg installed, and will use it. If in doubt, use the other one.">Download (Intel) (with Cg support - requires Cg installed)</a>
                   <s><a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86/RetroArch.dmg" title="Use this if you are using a 32bit Mac with at least MacOS X 10.6 installed or later.">Download (Intel 32bit)</a></s>
                   <s><a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86/RetroArch_CG.dmg" title="Use this if you are using a 32bit Mac with at least MacOS X 10.6 installed or later. This build requires Nvidia Cg installed, and will use it. If in doubt, use the other one.">Download (Intel 32bit) (with Cg support - requires Cg installed)</a></s>
                   <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/ppc/RetroArch.zip" title="Use this if you are using a PowerMac/Powerbook with MacOS X 10.5 installed.">Download (PowerPC)</a>
                   <a href="https://youtu.be/hu-TW02bhhY?t=182">Installation video</a>
                   <a href="https://docs.libretro.com/development/retroarch/compilation/osx/">Compilation instructions (Intel)</a>
                   <a href="https://docs.libretro.com/development/retroarch/compilation/osxppc/">Compilation instructions (PowerPC)</a>
                   <p>Note: OSX version for x86 32bit will return at a later point in time. </p>
                </div>
            </div>
        </div>
        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/psvita.png">
                    <h4>PlayStation Vita / TV</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/vita/RetroArch.vpk">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/psvita/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/psp.png">
                    <h4>PlayStation Portable</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/psp/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/psp/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ps2.png">
                    <h4>PlayStation 2</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/ps2/RetroArch_elf.7z">Download</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/ps2/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ps3.png">
                    <h4>PlayStation 3</h4>
                    <a href="https://xbins.org/libretro/stable/<?php echo $version; ?>/playstation/ps3/RetroArch.PS3.CEX.PS3.pkg">Download (CEX) [Xbins]</a>
                    <a href="https://xbins.org/libretro/stable/<?php echo $version; ?>/playstation/ps3/RetroArch.PS3.DEX.PS3.pkg">Download (DEX) [Xbins]</a>
                    <a href="https://xbins.org/libretro/stable/<?php echo $version; ?>/playstation/ps3/RetroArch.PS3.ODE.PS3.iso">Download (ODE) [Xbins]</a>
                    <a href="https://youtu.be/8O-jcykRX6w">Installation video</a></a>
                    <a href="https://docs.libretro.com/guides/install-ps3/">Installation instructions</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ps4.png">
                    <h4>PlayStation 4</h4>
                    <p>Coming soon</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/nsw.png">
                    <h4>Switch</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/switch/libnx/RetroArch.7z" title="Do NOT use SD cards formatted with exFAT, and always exit from 'Quit retroArch'">Download</a>
                    <a href="https://www.youtube.com/watch?v=8onZ4H8h3iE">Installation video</a>
                    <a href="https://docs.libretro.com/guides/install-libnx/">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/switch-libnx/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/wiiu.png">
                    <h4>Wii U</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wiiu/RetroArch.7z">Download</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wiiu/RetroArch_rpx.7z">Download (rpx)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/wiiu/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/wii.png">
                    <h4>Wii</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wii/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/wii/">Compilation instructions</a>
                </div>
            </div>
        </div>
        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/gc.png">
                    <h4>GameCube</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/ngc/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/gamecube/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/3dsand2ds.png">
                    <h4>3DS/2DS Family</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/3ds/RetroArch_3dsx.7z">Download (3dsx)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/3ds/RetroArch_cia.7z">Download (cia)</a>
                    <a href="https://www.youtube.com/watch?v=4TnjFE9t1a4">Installation video</a>
                    <a href="https://docs.libretro.com/guides/install-3ds2ds/">Installation instructions</a>
                    <a href="https://docs.libretro.com/development/retroarch/compilation/3ds/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/steam-link.png">
                    <h4>Steam Link</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/steam/steamlink/RetroArch.zip">Download</a>
                    <a href="https://docs.libretro.com/guides/install-steamlink/">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/web.png">
                    <h4>Web Browsers</h4>
                    <a href="https://web.libretro.com/" title="Try with 'Google Chrome' for better performance">Try it online</a>
                </div>
            </div>
            <!--
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/gcw0.png">
                    <h4>GCW Zero</h4>
                    <a href="#">Currently unavailable (N/A)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/bb.png">
                    <h4>Blackberry</h4>
                    <a href="#">Currently unavailable (N/A)</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            -->
        </div>
        <br />
        <h2>Other downloads</h2>
        <ul>
            <li><a href="http://buildbot.libretro.com/stable">Stable builds</a></li>
            <li><a href="http://buildbot.libretro.com/nightly">Nightly builds</a></li>
         <li><a href="https://xbins.org/libretro/nightly/">Nightly builds (Xbins)</a></li>
        </ul>
        All the above trademarks are the property of their respective owners. RetroArch is not associated with or sponsored by any of them.
        </div>
</div>
