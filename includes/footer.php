
                        <?php
                            foreach($socialMedia as $item) {
                                echo "<td><a href=\"$item[addr]\"><img src=\"$item[img]\" alt = \"$item[title]\" style=\"width:25px; height:25px;\"></a></td>";
                            }
                        ?>