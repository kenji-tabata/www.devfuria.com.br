<?php
require "../core/boot.php";

?>
<!--
JavaScript Pipepanic.
Copyright (C) 2004 Thunor <thunorsif@hotmail.com>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
-->
<!DOCTYPE html>
<html lang="pt">

    <head>
        <?php
        $view->head->setTitle('Desenvolvimento de games - pipepanic');
        $view->head->setDescription('');
        $view->head->setkeywords('');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <style type="text/css">
            .contentplayarea {
                border-style: solid;
                border-width: 1px;
                border-color: #455372;
            }
            .contentplayarea a img {
                border-width: 0px;
            }
        </style>

    </head>

    <body>

        <table width="100%">
            <tr>
                <td>

                    <table cellpadding="1px" cellspacing="0px" class="contentplayarea">
                        <tr>
                            <td>
                                <!-- This is the game vvvv -->
                                <table width="750" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top">
                                            <table style="background-image: url('images/jpipepanicbg.jpg');" width="200" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td><img src="images/blankx1y1.gif" width="200" height="36" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="160" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td><img src="images/blankx1y1.gif" width="10" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="hscore1000" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="hscore100" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="hscore10" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="hscore1" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="hscoresign" width="30" height="50" alt=""></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/blankx1y1.gif" width="200" height="30" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="160" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td><img src="images/blankx1y1.gif" width="10" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="score1000" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="score100" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="score10" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="score1" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="scoresign" width="30" height="50" alt=""></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/blankx1y1.gif" width="200" height="30" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="130" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td><img src="images/blankx1y1.gif" width="10" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="timer100" width="30" height="50" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" width="30" height="50" name="timer10" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" width="30" height="50" name="timer1" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="timersign" width="30" height="50" alt=""></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/blankx1y1.gif" width="200" height="5" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="190" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td><img src="images/blankx1y1.gif" width="6" height="48" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="preview3" width="46" height="46" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" width="2" height="48" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="preview2" width="46" height="46" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" width="2" height="48" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="preview1" width="46" height="46" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" width="2" height="48" alt=""></td>
                                                                <td><img src="images/blankx1y1.gif" name="preview0" width="46" height="46" alt=""></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppreset();"><img src="images/blankx1y1.gif" name="newgame" width="120" height="48" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppfillpipesnow();"><img src="images/blankx1y1.gif" name="fillpipes" width="120" height="46" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <script language="JavaScript" type="text/javascript">
                                                            <!--
                                                                        if (ppdebug)
                                                                document.write("<a href='javascript:ppdebugstuff();'>");
                //-->
                                                        </script><img src="images/blankx1y1.gif" width="200" height="157" alt=""><script language="JavaScript" type="text/javascript">
                                                            <!--
                                                                        if (ppdebug)
                                                                document.write("<\/a>");
                //-->
                                                        </script>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="background-image: url('images/jpipepanictile.jpg');" width="550" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('1000');"><img src="images/blankx1y1.gif" name="board1000" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1001');"><img src="images/blankx1y1.gif" name="board1001" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1002');"><img src="images/blankx1y1.gif" name="board1002" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1003');"><img src="images/blankx1y1.gif" name="board1003" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1004');"><img src="images/blankx1y1.gif" name="board1004" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1005');"><img src="images/blankx1y1.gif" name="board1005" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1006');"><img src="images/blankx1y1.gif" name="board1006" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1007');"><img src="images/blankx1y1.gif" name="board1007" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1008');"><img src="images/blankx1y1.gif" name="board1008" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1009');"><img src="images/blankx1y1.gif" name="board1009" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('1010');"><img src="images/blankx1y1.gif" name="board1010" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0900');"><img src="images/blankx1y1.gif" name="board0900" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0901');"><img src="images/blankx1y1.gif" name="board0901" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0902');"><img src="images/blankx1y1.gif" name="board0902" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0903');"><img src="images/blankx1y1.gif" name="board0903" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0904');"><img src="images/blankx1y1.gif" name="board0904" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0905');"><img src="images/blankx1y1.gif" name="board0905" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0906');"><img src="images/blankx1y1.gif" name="board0906" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0907');"><img src="images/blankx1y1.gif" name="board0907" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0908');"><img src="images/blankx1y1.gif" name="board0908" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0909');"><img src="images/blankx1y1.gif" name="board0909" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0910');"><img src="images/blankx1y1.gif" name="board0910" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0800');"><img src="images/blankx1y1.gif" name="board0800" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0801');"><img src="images/blankx1y1.gif" name="board0801" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0802');"><img src="images/blankx1y1.gif" name="board0802" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0803');"><img src="images/blankx1y1.gif" name="board0803" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0804');"><img src="images/blankx1y1.gif" name="board0804" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0805');"><img src="images/blankx1y1.gif" name="board0805" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0806');"><img src="images/blankx1y1.gif" name="board0806" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0807');"><img src="images/blankx1y1.gif" name="board0807" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0808');"><img src="images/blankx1y1.gif" name="board0808" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0809');"><img src="images/blankx1y1.gif" name="board0809" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0810');"><img src="images/blankx1y1.gif" name="board0810" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0700');"><img src="images/blankx1y1.gif" name="board0700" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0701');"><img src="images/blankx1y1.gif" name="board0701" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0702');"><img src="images/blankx1y1.gif" name="board0702" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0703');"><img src="images/blankx1y1.gif" name="board0703" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0704');"><img src="images/blankx1y1.gif" name="board0704" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0705');"><img src="images/blankx1y1.gif" name="board0705" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0706');"><img src="images/blankx1y1.gif" name="board0706" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0707');"><img src="images/blankx1y1.gif" name="board0707" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0708');"><img src="images/blankx1y1.gif" name="board0708" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0709');"><img src="images/blankx1y1.gif" name="board0709" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0710');"><img src="images/blankx1y1.gif" name="board0710" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0600');"><img src="images/blankx1y1.gif" name="board0600" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0601');"><img src="images/blankx1y1.gif" name="board0601" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0602');"><img src="images/blankx1y1.gif" name="board0602" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0603');"><img src="images/blankx1y1.gif" name="board0603" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0604');"><img src="images/blankx1y1.gif" name="board0604" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0605');"><img src="images/blankx1y1.gif" name="board0605" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0606');"><img src="images/blankx1y1.gif" name="board0606" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0607');"><img src="images/blankx1y1.gif" name="board0607" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0608');"><img src="images/blankx1y1.gif" name="board0608" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0609');"><img src="images/blankx1y1.gif" name="board0609" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0610');"><img src="images/blankx1y1.gif" name="board0610" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0500');"><img src="images/blankx1y1.gif" name="board0500" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0501');"><img src="images/blankx1y1.gif" name="board0501" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0502');"><img src="images/blankx1y1.gif" name="board0502" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0503');"><img src="images/blankx1y1.gif" name="board0503" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0504');"><img src="images/blankx1y1.gif" name="board0504" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0505');"><img src="images/blankx1y1.gif" name="board0505" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0506');"><img src="images/blankx1y1.gif" name="board0506" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0507');"><img src="images/blankx1y1.gif" name="board0507" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0508');"><img src="images/blankx1y1.gif" name="board0508" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0509');"><img src="images/blankx1y1.gif" name="board0509" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0510');"><img src="images/blankx1y1.gif" name="board0510" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0400');"><img src="images/blankx1y1.gif" name="board0400" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0401');"><img src="images/blankx1y1.gif" name="board0401" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0402');"><img src="images/blankx1y1.gif" name="board0402" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0403');"><img src="images/blankx1y1.gif" name="board0403" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0404');"><img src="images/blankx1y1.gif" name="board0404" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0405');"><img src="images/blankx1y1.gif" name="board0405" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0406');"><img src="images/blankx1y1.gif" name="board0406" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0407');"><img src="images/blankx1y1.gif" name="board0407" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0408');"><img src="images/blankx1y1.gif" name="board0408" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0409');"><img src="images/blankx1y1.gif" name="board0409" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0410');"><img src="images/blankx1y1.gif" name="board0410" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0300');"><img src="images/blankx1y1.gif" name="board0300" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0301');"><img src="images/blankx1y1.gif" name="board0301" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0302');"><img src="images/blankx1y1.gif" name="board0302" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0303');"><img src="images/blankx1y1.gif" name="board0303" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0304');"><img src="images/blankx1y1.gif" name="board0304" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0305');"><img src="images/blankx1y1.gif" name="board0305" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0306');"><img src="images/blankx1y1.gif" name="board0306" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0307');"><img src="images/blankx1y1.gif" name="board0307" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0308');"><img src="images/blankx1y1.gif" name="board0308" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0309');"><img src="images/blankx1y1.gif" name="board0309" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0310');"><img src="images/blankx1y1.gif" name="board0310" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0200');"><img src="images/blankx1y1.gif" name="board0200" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0201');"><img src="images/blankx1y1.gif" name="board0201" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0202');"><img src="images/blankx1y1.gif" name="board0202" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0203');"><img src="images/blankx1y1.gif" name="board0203" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0204');"><img src="images/blankx1y1.gif" name="board0204" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0205');"><img src="images/blankx1y1.gif" name="board0205" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0206');"><img src="images/blankx1y1.gif" name="board0206" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0207');"><img src="images/blankx1y1.gif" name="board0207" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0208');"><img src="images/blankx1y1.gif" name="board0208" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0209');"><img src="images/blankx1y1.gif" name="board0209" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0210');"><img src="images/blankx1y1.gif" name="board0210" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0100');"><img src="images/blankx1y1.gif" name="board0100" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0101');"><img src="images/blankx1y1.gif" name="board0101" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0102');"><img src="images/blankx1y1.gif" name="board0102" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0103');"><img src="images/blankx1y1.gif" name="board0103" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0104');"><img src="images/blankx1y1.gif" name="board0104" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0105');"><img src="images/blankx1y1.gif" name="board0105" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0106');"><img src="images/blankx1y1.gif" name="board0106" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0107');"><img src="images/blankx1y1.gif" name="board0107" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0108');"><img src="images/blankx1y1.gif" name="board0108" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0109');"><img src="images/blankx1y1.gif" name="board0109" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0110');"><img src="images/blankx1y1.gif" name="board0110" width="50" height="50" alt=""></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:ppprocessboardclick('0000');"><img src="images/blankx1y1.gif" name="board0000" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0001');"><img src="images/blankx1y1.gif" name="board0001" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0002');"><img src="images/blankx1y1.gif" name="board0002" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0003');"><img src="images/blankx1y1.gif" name="board0003" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0004');"><img src="images/blankx1y1.gif" name="board0004" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0005');"><img src="images/blankx1y1.gif" name="board0005" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0006');"><img src="images/blankx1y1.gif" name="board0006" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0007');"><img src="images/blankx1y1.gif" name="board0007" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0008');"><img src="images/blankx1y1.gif" name="board0008" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0009');"><img src="images/blankx1y1.gif" name="board0009" width="50" height="50" alt=""></a></td>
                                                    <td><a href="javascript:ppprocessboardclick('0010');"><img src="images/blankx1y1.gif" name="board0010" width="50" height="50" alt=""></a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <script language="JavaScript" type="text/javascript">
                                                <!--
                                    if (ppdebug)
                                                    document.write("<div align='center'><form name='ppdebugform'><input name='ppdebugnotes' type='text' value='' size='100'><\/form><\/div>");
    //-->
                                </script>
                                <!-- This is the game ^^^^ -->
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
        <script language="JavaScript" src="jspp.js" type="text/javascript"></script>
        <script language="JavaScript" type="text/javascript">
            // --- Initialise Pipepanic game. ---
            if (cookiemanager("read", "pphighscore") != "") {
                pphighscore = cookiemanager("read", "pphighscore");
                ppreset();
            }
        </script>
    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>


