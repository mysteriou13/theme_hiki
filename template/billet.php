<div id="billet">
    <?php
    $url = wp_get_attachment_url(get_post_thumbnail_id(htmlspecialchars($_GET['p'])), 'thumbnail');
    $u = explode("uploads", $url);
    $u = site_url() . "/wp-content/uploads" . $u[1];
    ?>

    <div style='width:30vh; height:30vh'>
        <?php
        echo "<img style='object-fit:cover; width:100%; height:100%;' src=" . $u . ">";
        ?>
    </div>

    <?php
    echo "<h1>$title</h1><p>$contenu</p><strong>$date</strong>";
    ?>
</div>

<div>
    <?php
    $post_id = get_the_ID();
    $comments = get_comments(array(
        'post_id' => $post_id,
    ));

    if ($comments) {
        echo '<ul>';
        foreach ($comments as $comment) {
            echo '<li>';
            echo '<div class="commentaire_post">';
            echo "<div>" . $comment->comment_author . "</div>";
            echo "<div>" . $comment->comment_date . "</div>";
            echo '</div>';
            echo '<p>' . $comment->comment_content . '</p>';
            echo '<button class="reply-button" data-comment-id="' . $comment->comment_ID . '">Répondre +</button>'; // Bouton "Répondre" avec attribut pour identifier le commentaire
            echo '<div class="reply-form" id="reply-form-' . $comment->comment_ID . '" style="display: none;">'; // Formulaire de réponse avec ID unique
            comment_form(array('comment_parent' => $comment->comment_ID)); // Afficher le formulaire de réponse au commentaire
            echo '</div>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'Aucun commentaire trouvé.';
    }
    ?>
</div>

<script>
    // Ajouter un événement clic pour le bouton "Répondre"
    var replyButtons = document.getElementsByClassName("reply-button");
    for (var i = 0; i < replyButtons.length; i++) {
        replyButtons[i].addEventListener("click", function () {
            var commentID = this.getAttribute("data-comment-id"); // Récupérer l'ID du commentaire
            var replyForm = document.getElementById("reply-form-" + commentID); // Récupérer le formulaire de réponse correspondant
            if (replyForm.style.display === "none") {
                replyForm.style.display = "block"; // Afficher le formulaire de réponse si caché
            } else {
                replyForm.style.display = "none"; // Cacher le formulaire de réponse si affiché
            }
        });
    }
</script>

</div>
