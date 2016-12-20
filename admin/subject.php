<?php include ('build/header.php') ;?>
        <div class="row">
            <div class="col-md-2">
                <!--Linker kant-->
            </div>
            <div class="col-md-6">
                <h1>Vak koppelen</h1>
                <form method="post" accept-charset="utf-8">
                    <div class="form-group">
                        Kind
                        <select required class="form-control" name="username">
                            <option value="" disabled Selected>Kies een kind</option>
                            <?php
                            foreach (accountManagement::getChild() as $child) {
                                echo'
                                <option value="'.$child['username'].'">'.$child['username'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" name="get_child_subject" value="Vakken van kind ophalen">
                </form>
                <form method="post" accept-charset="utf-8">
                    <div class="form-group">
                        Vakken:<br>
                        <?php
                        foreach (accountManagement::Subject() as $subject) {
                            echo'<input type="checkbox" name="' . $subject['name'] . '" value="' . $subject['name'] . '" checked> ' . $subject['name'];
                        }
                        ?>
                    </div>
                    <input type="submit" class="btn btn-primary" name="save_subject" value="Koppelen">
                </form>
            </div>
        </div>
    </body>
</html>