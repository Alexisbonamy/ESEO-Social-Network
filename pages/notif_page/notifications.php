<div class="page">
    <?php
        include 'menu.php';
    ?>
    <div class="page_content">
        <h2>Notifications</h2>

        <?php
            $sql = "SELECT type
            FROM Notification
            WHERE idEtudiant = 1";
        
            $result = $mysqli->query($sql);
            if (!$result) {
                exit($mysqli->error);
            }
        
            $nb = $result->num_rows;
        
            if ($nb) {
                $notifs = $result->fetch_all(MYSQLI_ASSOC);
            }

            for ($i=0; $i<$nb; $i++) {
                echo $notifs[$i]['type'].'</br>';
            }
        ?>
    </div>
</div>