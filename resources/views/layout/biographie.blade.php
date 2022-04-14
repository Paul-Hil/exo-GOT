<main>
    <div class="wrapper">
        <section class="character-page">
            <div class="col-8">
                <h2><?= $character->first_name . " " . $character->last_name ?></h2>
                <div class="bio">
                    <h3>Biographie</h3>
                    <p><?= $character->biography ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="avatar" style="background: #e3e3e3;">
                    <img src="/assets/img/<?= $character->image ?>" alt="Catelyn">
                </div>
                <div class="infos">
                    <h3>Maisons</h3>
                    <div class="houses">
                        <ul>
                        <?php foreach($houses as $house) : ?>
                            <li class="house-logo" style="background: #<?= $house->colour ?>;">
                                <a href="/house/<?= $house->id ?>">
                                    <img src="/assets/img/houses/<?= $house->image ?>" alt="Stark">
                                </a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <ul class="meta">
                        <li><span>Rang : </span><?= $title->name ?></li>
                        <li><span>Mère : </span>
                            <?= $mother !== null ? $mother->first_name . ' ' . $father->last_name : '-' ?>
                        </li>
                        <li><span>Père : </span>
                            <?= $father !== null ? $father->first_name . ' ' . $father->last_name : '-' ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

</body>

</html>
