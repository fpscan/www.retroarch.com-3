<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Installing on Linux</h1>
                <p>There are many ways to install RetroArch in a Linux environment. If you can compile it from source, you can remove unneeded features and dependencies. Distro packages can be nice, but we don't control those builds (aside from the official PPAs) and can't guarantee their quality or how often they are updated. Universal packages, such as Snap and Flatpak are maintained by the libretro team but have some limitations resulting from their sandboxing techniques, such as lack of support for Vulkan and a small number of cores not functioning as expected.</p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>Ubuntu</h2>
        <p>These instructions will install RetroArch. Cores should be downloaded from within the program using the Online Updater's Core Updater, if possible. Some distros patch out the Online Updater, in which case you'll need to install cores using your package manager. There are core packages available in the PPAs, as well, and they will continue to be updated, but new packages for new cores will not be created.</p>
        <p><a href="https://launchpad.net/~libretro/+archive/ubuntu/stable">Stable version</a> (RetroArch stable version):</p>
        <pre>sudo add-apt-repository ppa:libretro/stable && sudo apt-get update && sudo apt-get install retroarch*</pre>
        <p><a href="https://launchpad.net/~libretro/+archive/ubuntu/testing">Testing version</a> (RetroArch nightly builds (Git)):</p>
        <pre>sudo add-apt-repository ppa:libretro/testing && sudo apt-get update && sudo apt-get install retroarch*</pre>
        <h2>Arch Linux</h2>
        <p>Stable version:</p>
        <pre>sudo pacman -Sy retroarch</pre>
        <p>Git version:</p>
        <pre>yaourt -Sy retroarch-git</pre>
        <h2>Flatpak</h2>
        <p><a href="https://flathub.org/apps/details/org.libretro.RetroArch">RetroArch on Flathub</a>:</p>
        <pre>flatpak remote-add --user --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo</pre>
        <pre>flatpak install --user flathub org.libretro.RetroArch</pre>
        <p>Update to the latest stable:</p>
        <pre>flatpak update --user org.libretro.RetroArch</pre>
        <h2>Snap</h2>
        <p><a href="https://snapcraft.io/retroarch">RetroArch on Snapcraft</a>:</p>
        <pre>sudo snap install retroarch</pre>
        <p><a href="https://snapcraft.io/retroarch"> <img alt="Get it from the Snap Store" src="https://snapcraft.io/static/images/badges/en/snap-store-white.svg" /> </a> </p>
    </div>
</div>
