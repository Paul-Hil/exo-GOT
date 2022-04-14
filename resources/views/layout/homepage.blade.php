
<main>
    <div class="wrapper">
        <h2><?= $house === null ? '' : 'Maison '.$house->name ?></h2>
        <ul class="characters-list">
            <?php foreach ($characters as $key => $character) : ?>
                <li class="character-card">
                    <a href="<?= $house === null ? 'characters/'.$character->id : '/characters/'.$character->id ?>">

                        <div class="avatar" style="background: #<?= $house === null ? $houseCharacter[$key]->colour  : $house->colour ?>;">

                            <img src="/assets/img/<?= $character->image ?>" alt="<?= $character->first_name ?>">
                        </div>
                        <div class="name">
                            <?= $character->first_name . ' ' . $character->last_name ?>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>

        </ul>
    </div>
</main>

</body>

</html>
