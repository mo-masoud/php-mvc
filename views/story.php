<main>
    <section
        class="container-fluid bg-color2 shadow mb-4 pb-2 border-bottom border-width4 border-dark top-right-portal">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-2">
                    <img src="images/cover.jpg" width="100%" height="100%" class="rounded">
                </div>
                <div class="col-md-10 my-auto py-2">
                    <h3><?= $story->name ?></h3>
                    <div class="badge badge-<?= $story->state == 1 ? 'warning' : 'success'?>">
                        <?= $story->state == 1 ? 'On Going' : 'Completed'?></div>
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><span class="font-2 text-color5">Views</span>
                            <div class="font-1"><?= $story->views ?></div>
                        </li>
                    </ul>
                    <div>
                        <ul class="list-inline my-3">
                            <li class="list-inline-item font-1 mt-2">Price: <span
                                    class="bg-color1 text-color2 p-1 ml-1"><?= $story->price ?></span></li>
                            <li class="list-inline-item float-right"><a href="/buy-story?story_id=<?= $story->id ?>"
                                    class="btn btn-lg btn-color1">Buy
                                    Story</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-4">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-2"><span class="text-color1"><?= $storyOwner->fullname ?> </span></div>
                <p>
                    <?= $story->desc ?>
                </p>
                <div>
                    <ul class="list-inline">
                        <?php if (strlen($story->tags) > 0): ?>
                        <?php foreach (explode(',', $story->tags) as $tag): ?>
                        <li class="badge badge-secondary tag"><span class="display-5"><?= trim($tag) ?></span></li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <h4 class="text-center text-md-left">List of Episodes</h4>
                <div class="my-3">

                    <div class="mb-2">
                        <a href="#" class="episode-card">
                            <div
                                class="container-fluid px-0 bg-color2 px-4 pt-3 pb-2 rounded border-right border-width4 border-dark">
                                <div class="row">
                                    <div class="col-md-10 my-auto">
                                        <p class="display-5 font-2">Episode 1 - The Plot Chicken</p>
                                    </div>
                                    <div class="col-md-2 my-auto text-left text-md-right">
                                        <p>1h 55m</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="mb-2">
                        <a href="#" class="episode-card">
                            <div
                                class="container-fluid px-0 bg-color2 px-4 pt-3 pb-2 rounded border-right border-width4 border-dark">
                                <div class="row">
                                    <div class="col-md-10 my-auto">
                                        <p class="display-5 font-2">Episode 1 - The Plot Chicken</p>
                                    </div>
                                    <div class="col-md-2 my-auto text-left text-md-right">
                                        <p>1h 55m</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="mb-2">
                        <a href="#" class="episode-card">
                            <div
                                class="container-fluid px-0 bg-color2 px-4 pt-3 pb-2 rounded border-right border-width4 border-dark">
                                <div class="row">
                                    <div class="col-md-10 my-auto">
                                        <p class="display-5 font-2">Episode 1 - The Plot Chicken</p>
                                    </div>
                                    <div class="col-md-2 my-auto text-left text-md-right">
                                        <p>1h 55m</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <h4 class="text-center">You may also like</h4>
                <div class="my-3">

                    <div class="mb-2 bg-color2 rounded py-2 border-right border-width4 border-dark">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 pr-0 pl-1">
                                    <img src="images/cover.jpg" width="100%" height="100%" class="rounded">
                                </div>
                                <div class="col-8 my-auto py-2 pr-2">
                                    <h3 class="display-5">The Detective</h3>
                                    <div class="badge badge-success">Completed</div>
                                    <ul class="list-inline my-2">
                                        <li class="list-inline-item"><span class="font-2 text-color5">Episodes
                                            </span><span class="font-1">52</span></li>
                                    </ul>
                                    <p class="description-2">
                                        With eleven missing women to find and six high-profile burglary cases to solve,
                                        the last thing Detective Nathan McNamara needs in his life is one more
                                        complication. And that's exactly what his recent one-night stand is
                                        becoming-complicated. With his heinous lieutenant breathing down his neck for
                                        answers and his accidental girlfriend dropping hints for a commitment, Nathan is
                                        realizing that his career and his bachelor status are both on the line.
                                        When the burglary cases suddenly escalate to homicide, Nathan must put
                                        everything else aside to stop the killer. But this is easier said than done when
                                        the blonde from the bar repeatedly shows up at his doorstep and enlists his own
                                        mother against him. Now he's more convinced than ever that his job hangs in the
                                        balance and that the Surgeon General's warning on the whiskey bottle should
                                        include something about women.
                                        The Detective is part of THE SOUL SUMMONER Series. Book one of the series is
                                        available on WATTPAD.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 bg-color2 rounded py-2 border-right border-width4 border-dark">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 pr-0 pl-1">
                                    <img src="images/cover.jpg" width="100%" height="100%" class="rounded">
                                </div>
                                <div class="col-8 my-auto py-2 pr-2">
                                    <h3 class="display-5">The Detective</h3>
                                    <div class="badge badge-success">Completed</div>
                                    <ul class="list-inline my-2">
                                        <li class="list-inline-item"><span class="font-2 text-color5">Episodes
                                            </span><span class="font-1">52</span></li>
                                    </ul>
                                    <p class="description-2">
                                        With eleven missing women to find and six high-profile burglary cases to solve,
                                        the last thing Detective Nathan McNamara needs in his life is one more
                                        complication. And that's exactly what his recent one-night stand is
                                        becoming-complicated. With his heinous lieutenant breathing down his neck for
                                        answers and his accidental girlfriend dropping hints for a commitment, Nathan is
                                        realizing that his career and his bachelor status are both on the line.
                                        When the burglary cases suddenly escalate to homicide, Nathan must put
                                        everything else aside to stop the killer. But this is easier said than done when
                                        the blonde from the bar repeatedly shows up at his doorstep and enlists his own
                                        mother against him. Now he's more convinced than ever that his job hangs in the
                                        balance and that the Surgeon General's warning on the whiskey bottle should
                                        include something about women.
                                        The Detective is part of THE SOUL SUMMONER Series. Book one of the series is
                                        available on WATTPAD.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 bg-color2 rounded py-2 border-right border-width4 border-dark">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 pr-0 pl-1">
                                    <img src="images/cover.jpg" width="100%" height="100%" class="rounded">
                                </div>
                                <div class="col-8 my-auto py-2 pr-2">
                                    <h3 class="display-5">The Detective</h3>
                                    <div class="badge badge-success">Completed</div>
                                    <ul class="list-inline my-2">
                                        <li class="list-inline-item"><span class="font-2 text-color5">Episodes
                                            </span><span class="font-1">52</span></li>
                                    </ul>
                                    <p class="description-2">
                                        With eleven missing women to find and six high-profile burglary cases to solve,
                                        the last thing Detective Nathan McNamara needs in his life is one more
                                        complication. And that's exactly what his recent one-night stand is
                                        becoming-complicated. With his heinous lieutenant breathing down his neck for
                                        answers and his accidental girlfriend dropping hints for a commitment, Nathan is
                                        realizing that his career and his bachelor status are both on the line.
                                        When the burglary cases suddenly escalate to homicide, Nathan must put
                                        everything else aside to stop the killer. But this is easier said than done when
                                        the blonde from the bar repeatedly shows up at his doorstep and enlists his own
                                        mother against him. Now he's more convinced than ever that his job hangs in the
                                        balance and that the Surgeon General's warning on the whiskey bottle should
                                        include something about women.
                                        The Detective is part of THE SOUL SUMMONER Series. Book one of the series is
                                        available on WATTPAD.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</main>