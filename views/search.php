<main>
    <section class="container-fluid bg-color2">
        <div class="container-fluid py-3">
            <div class="row py-3 d-none">
                <div class="col">
                    <ul class="nav nav-tabs border-0">
                        <li class="nav-item">
                            <a class="nav-link active font-3 a-color1" href="#">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-3 a-color1" href="#">Profiles</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <form method="GET" action="/search" class="col-md-3">
                    <h2><?= $keyword ?></h2>
                    <p class="text-color5">714K results</p>
                    <input class="form-control mb-2" type="text" name="keyword" placeholder="Keyword"
                        value="<?= $keyword ?>">

                    <div id="filters" class=" mt-3">
                        <h6>Category</h6>
                        <select name="category_id" class="form-control mb-4">
                            <option value="0">All</option>
                            <?php foreach ($categories as $category): ?>
                            <option <?php echo request('category_id') === $category->id ? 'selected' : '' ?>
                                value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php endforeach; ?>
                        </select>

                        <div class=" mt-4 mb-3">
                            <h6>Content</h6>
                            <p class="text-color5">You can select one option</p>

                            <select name="content" class="form-control mb-4">
                                <option <?php echo request('content') == 0 ? 'selected' : '' ?> value="0">All Content
                                </option>
                                <option <?php echo request('content') == 1 ? 'selected' : '' ?> value="1">Free Stories
                                </option>
                                <option <?php echo request('content') == 2 ? 'selected' : '' ?> value="2">Paid Stories
                                </option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-color1 w-100 mb-3">Search</button>

                </form>
                <div class="col-md-9">
                    <div class="container-fluid">
                        <div id="searchResults" class="row">
                            <?php foreach ($stories as $story): ?>
                            <div class="col-md-6">
                                <div class="story-card rounded border-right border-width4 border-dark">
                                    <div class="container-fluid h-100">
                                        <div class="row h-100">
                                            <div class="col-lg-4 px-0">
                                                <img src="images/cover.jpg" width="100%" height="100%">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="py-2">
                                                    <h3><?= $story->name ?></h3>
                                                    <div
                                                        class="badge badge-<?= $story->state == 1 ? 'warning' : 'success'?>">
                                                        <?= $story->state == 1 ? 'On Going' : 'Completed'?></div>
                                                    <ul class="list-inline mt-8">
                                                        <li class="list-inline-item"><span
                                                                class="font-2 text-color5">Views</span>
                                                            <div class="font-1"><?= $story->views ?></div>
                                                        </li>
                                                    </ul>
                                                    <p class="description">
                                                        <?= $story->desc ?>
                                                    </p>
                                                    <div>
                                                        <ul class="list-inline my-3">
                                                            <li class="list-inline-item font-1 mt-2">Price: <span
                                                                    class="bg-color1 text-color2 p-1 ml-1"><?= $story->price ?></span>
                                                            </li>
                                                            <li class="list-inline-item float-right"><a
                                                                    href="/show-story?story_id=<?= $story->id ?>"
                                                                    class="btn btn-md btn-color1">Watch</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>