<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
<div id="content">

    <div id="page">

        Disko Template

        burger

        disko logo

        <!-- INTRO -->
        <h1>
            An amazing story
        </h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit
            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.
        </p>

        <?php include('inc/social.inc.php'); ?>

        <p>
            {catalogue img}
        </p>


        <!-- PRESENTATION -->
        <h2>
            Because Every projects deserve
            a nice presentation
        </h2>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
        </p>

        <a href="#">
            discover
        </a>


        <!-- TEAM -->
        <h2>
            our very special team
        </h2>

        <?php
        $team = array(
            array(
                'name' => 'Kévin Lambert',
                'position' => 'Founder',
                'src' => 'kevin-lambert'
            ),
            array(
                'name' => 'Lisa Ruyand',
                'position' => 'Developper',
                'src' => 'lisa-ruyand'
            ),
            array(
                'name' => 'Alexandra Labroche',
                'position' => 'Manager',
                'src' => 'alexandra-labroche'
            ),
            array(
                'name' => 'Stephen Aubert',
                'position' => 'Marketing',
                'src' => 'stephen-aubert'
            ),
            array(
                'name' => 'Thomas Ferreira',
                'position' => 'Community manager',
                'src' => 'thomas-ferreira'
            )
        );
        ?>

        <ul>
            <?php for ($i = 0; $i < count($team); $i++) { ?>
                <li>
                    <img src="<?php echo $team[$i]['src']; ?>" alt="<?php echo $team[$i]['name']; ?>">
                    <?php echo $team[$i]['name']; ?>
                    <?php echo $team[$i]['position']; ?>
                </li>
            <?php } ?>
        </ul>

        <!-- TIMELINE -->
        <h2>
            Cool timeline
        </h2>

        <div class="tl-item right">
            <h3>
                Hello World
            </h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            </p>

            <p class="more">
                <a href="#">
                    More →
                </a>
            </p>
        </div>

        <div class="tl-item left">
            <h3>
                Our beginning
            </h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            </p>
        </div>

        <div class="tl-item right">
            <h3>
                New shoes
            </h3>

            <img src="img/data/shoes.jpg" alt="dirty shoes" class="illus">
            
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            </p>
        </div>

        <div class="tl-item left">
            <h3>
                Our last event
            </h3>

            <p class="date">
                <span class="number">
                    24<sup>th</sup>
                </span>
                <span class="month">
                    Jun
                </span>
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            </p>
        </div>

        <!-- -SPECIFICATIONS -->
        <h2>
            Everything’s ready for you
        </h2>
        <?php
        $specs = array('Responsive', 'Retina', 'Animations', 'Customizable', 'Easy UI/UX', 'Cross Browser');
        ?>
        <ul>
            <?php for ($i = 0; $i < count($specs); $i++) { ?>
                <li>
                    <p class="name">
                        <?php echo $specs[$i]; ?>
                    </p>
                    <p class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </li>
            <?php } ?>
        </ul>

        <?php include('inc/social.inc.php'); ?>

        <p>
            Join us
        </p>

        <p class="copyright">
            © 2016 Disko Template
        </p>
    </div><!-- #page -->


</div><!-- #content -->

<?php include('inc/scripts.inc.php'); ?>
</body>
</html>