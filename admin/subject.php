<?php include ('build/header.php') ;?>
        <div class="row">
            <div class="col-md-2">
                <!--Linker kant-->
            </div>
            <div class="col-md-6">
            <?php if($_SESSION['alert']) {
           			echo $_SESSION['message']; 
			}?>    
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
                <?php } else { ?>               
                <form method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <h4>Vakken van <?php echo $_SESSION['subjectUser']; ?>:</h4><br>
                        <?php
                        $userSubject = subjectManagement::getUserSubject($_SESSION['subjectUser']);
                        foreach (subjectManagement::subject() as $subject) {
                            echo '<input type="checkbox" name="subject[]" value="' . $subject['name'] . '"';
                            foreach ($userSubject as $check) {
                                if ($subject['name'] == $check['subject']) {
                                    echo ' checked';
                                }
                            }
                            echo '> ' . $subject['name'] . ' <br>';
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