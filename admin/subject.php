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
                            <option value="username" disabled Selected>Kies een kind</option>
                            <?php
                            foreach (accountManagement::getChild() as $child) {
                                echo'<option value="' . $child['username'] . '">' . $child['username'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" name="subject_user" value="Vakken van kind ophalen">
                </form>
                <br>
                <?php if (empty($_SESSION['subjectUser'])) { ?>
                <p>Selecteer een kind.</p>
                <?php
                } else {
                ?>               
                <form method="post" accept-charset="utf-8">
                    <div class="form-group">
                        Vakken van <?php echo $_SESSION['subjectUser']; ?>:<br>
                        <?php
                        foreach (subjectManagement::subject() as $subject) {
                            echo '<input type="checkbox" name="' . $subject['name'] . '" value="' . $subject['name'] . '"';
                            foreach (subjectManagement::getUserSubject($_SESSION['userSubject']) as $check) {
                                if ($subject['name'] == $check['subject']) {
                                    echo ' checked';
                                }
                            }
                            echo '> ' . $subject['name'] . '<br>';
                        }
                        ?>
                    </div>
                    <input type="hidden" name="username" value="<?php echo $_SESSION['subjectUser']; ?>">
                    <input type="submit" class="btn btn-primary" name="save_subject" value="Opslaan">
                </form>
                <?php } ?>
            </div>
        </div>
    </body>
</html>