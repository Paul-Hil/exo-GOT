<main>
    <div class="wrapper">
        <ul class="houses-list">
            <?php foreach($houses as $house) : ?>
            <li class="house-logo" style="background: #<?= $house->colour ?>;">
                <a href="/house/<?= $house->id ?>">
                    <img src="/assets/img/houses/<?= $house->image ?>" alt="Stark">
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</main>
