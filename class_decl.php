<?php
    if (isset($_POST['cek']))
        {
            $reqs = $_POST["keb"];
            $comp = $_POST["komp"];
            $time = $_POST["waktu"];
            $team = $_POST["tim"];
            $skll = $_POST["ketr"];
            $clnt = $_POST["klien"];
        }

        class methodology {
            public $methName;
            public $methReqs;
            public $methComps;
            public $methTime;
            public $methTeams;
            public $methSkills;
            public $methClient;
            public $methLink;
            public $methNear = 0;
        }

        $inc = new methodology();
        $inc->methName = "Incremental";
        $inc->methReqs = 2;
        $inc->methComps = 1;
        $inc->methTime = 2;
        $inc->methTeams = 1;
        $inc->methSkills = 2;
        $inc->methClient = 1;
        $inc->methLink = "incremental.php";

        $vsh = new methodology();
        $vsh->methName = "V-Shaped Model";
        $vsh->methReqs = 2;
        $vsh->methComps = 3;
        $vsh->methTime = 4;
        $vsh->methTeams = 2;
        $vsh->methSkills = 2;
        $vsh->methClient = 1;
        $vsh->methLink = "vshaped.php";

        $spi = new methodology();
        $spi->methName = "Spiral";
        $spi->methReqs = 1;
        $spi->methComps = 3;
        $spi->methTime = 3;
        $spi->methTeams = 2;
        $spi->methSkills = 1;
        $spi->methClient = 1;
        $spi->methLink = "spiral.php";

        $rad = new methodology();
        $rad->methName = "Rapid Agile Development";
        $rad->methReqs = 1;
        $rad->methComps = 2;
        $rad->methTime = 1;
        $rad->methTeams = 1;
        $rad->methSkills = 1;
        $rad->methClient = 1;
        $rad->methLink = "rad.php";

        $pro = new methodology();
        $pro->methName = "Prototyping";
        $pro->methReqs = 1;
        $pro->methComps = 2;
        $pro->methTime = 1;
        $pro->methTeams = 1;
        $pro->methSkills = 1;
        $pro->methClient = 1;
        $pro->methLink = "prototype.php";
        
        $scr = new methodology();
        $scr->methName = "Scrum";
        $scr->methReqs = 2;
        $scr->methComps = 2;
        $scr->methTime = 2;
        $scr->methTeams = 1;
        $scr->methSkills = 1;
        $scr->methClient = 1;
        $scr->methLink = "scrum.php";

        $xpr = new methodology();
        $xpr->methName = "Extreme Programming";
        $xpr->methReqs = 1;
        $xpr->methComps = 1;
        $xpr->methTime = 2;
        $xpr->methTeams = 1;
        $xpr->methSkills = 2;
        $xpr->methClient = 1;
        $xpr->methLink = "xp.php";

        $answer = array($reqs,$comp,$time,$team,$skll,$clnt);
        $methods = array($inc,$vsh,$spi,$rad,$pro,$scr,$xpr);

?>