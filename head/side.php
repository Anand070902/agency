<div class="list-group">
                    <div class="list-group-item list-group-item-action text-light bg-dark">categories </div>
                    <?php
                    $callingcat = callingData("category");
                    foreach($callingcat as $cat){
                        $id = $cat['cat_id'];
                        $title = $cat['cat_title'];
                        echo "<a href='index.php?cat=$id' class='list-group-item list-group-item-action'>$title</a>";
                    }
                    ?>
                </div>
            </div>