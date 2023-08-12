<section>
    <?php
    (count($notes) === 0 || isset($notes) === false)
        ? "<h2> Você ainda não possui nenhuma nota. </h2>"
        : renderList($notes);
    ?>
</section>