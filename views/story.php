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
                                    class="bg-color1 text-color2 p-1 ml-1"><?= $story->price == 0 ? 'Free' : '$ ' . $story->price ?></span>
                            </li>
                            <?php if (isLogin() && auth()->id !== $story->user_id && !$inBill): ?>
                            <li class="list-inline-item float-right"><a href="/buy-story?story_id=<?= $story->id ?>"
                                    class="btn btn-lg btn-color1">Buy
                                    Story</a></li>
                            <?php endif; ?>
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


                <?php if ($inBill || auth()->id === $story->user_id): ?>
                <h4 class="text-center text-md-left">List of Episodes</h4>
                <div class="my-3">

                    <?php $i = 1; ?>
                    <?php foreach ($episodes as $episode): ?>
                    <div class="mb-2">
                        <a href="#" class="episode-card text-dark">
                            <div
                                class="container-fluid px-0 bg-color2 px-4 pt-3 pb-2 rounded border-right border-width4 border-dark">
                                <div class="row">
                                    <div class="col-md-10 my-auto">
                                        <a href="<?= $episodeUrl . $episode ?>" target="_blank"
                                            class="display-5 font-2 text-dark">Episode
                                            <?= $i ?> -
                                            <?= ucfirst(str_replace(['.xml', $i . '_'], '', $episode)) ?></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <h4 class="text-center text-md-left">You must buy this story to watch it</h4>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <h4 class="text-center">You may also like</h4>
                <div class="my-3">
                    <?php foreach ($topStories as $topStory): ?>
                    <div class="mb-2 bg-color2 rounded py-2 border-right border-width4 border-dark">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 pr-0 pl-1">
                                    <img src="images/cover.jpg" width="100%" height="100%" class="rounded">
                                </div>
                                <a href="/show-story?story_id=<?= $topStory->id ?>"
                                    class="text-dark col-8 my-auto py-2 pr-2">
                                    <h3 class="display-5"><?= $topStory->name ?></h3>
                                    <div class="badge badge-<?= $topStory->state == 1 ? 'warning' : 'success'?>">
                                        <?= $topStory->state == 1 ? 'On Going' : 'Completed'?></div>
                                    <!-- <ul class="list-inline my-2">
                                        <li class="list-inline-item"><span class="font-2 text-color5">Episodes
                                            </span><span class="font-1">52</span></li>
                                    </ul> -->
                                    <p class="description-2">
                                        <?= $topStory->desc ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>