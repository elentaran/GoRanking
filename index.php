<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>GoRanking</title>
    </head>

    <body>

        <div id="main_page"> 

            <div id="top_page">
                <header>
                </header>

                <nav>
                    <?php include("pages/menu.php"); ?>
                </nav>
            </div>

            <div id="middle_page">
                <table>
                    <tr>
                        <td>
                            <?php include("pages/article.php"); ?>
                        </td>
                        <td id="right_side">
                            <aside>
                                <?php include("pages/login.php"); ?>

                                <?php include("pages/top10.php"); ?>

                                <?php include("pages/calendar.php"); ?>
                            </aside>
                        </td>
                    </tr>
                </table>
            </div>

            <footer>
                The contents of this webpage are copyright © 2012
            </footer>
        </div>
    </body>
</html>

