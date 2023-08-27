<?php
/**
 * @file site.inc.php
 * File that is loaded every time for a site. If provided, this
 * will be loaded during site startup and is a good place to
 * add site-specific capabilities.
 */

use \CL\Site\Site;

/*
 * Return a function that is passed a $site parameter.
 */
return function(Site $site) {
    global $clion;

    $clion = new \CL\Site\ProgramUI($site);
    $clion->addMenu(Site::Generic, "settings", "File", "Settings");
    $clion->addMenu(Site::Mac, "settings", "CLion", "Preferences");

    $clion->addMenu(Site::Generic, "import-settings", "File", "Import Settings...");
    $clion->addMenu(Site::Generic, "cse335", "CSE335");
    $clion->addMenu(Site::Generic, "tools", "Tools");
    $clion->addMenu(Site::Generic, "build", "Build");
    $clion->addMenu(Site::Generic, "run", "Run");
    $clion->addMenu(Site::Generic, "view", "View");
};


