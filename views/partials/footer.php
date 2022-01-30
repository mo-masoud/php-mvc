<footer>
    <div class="container-fluid bg-color1 text-color2">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6 col-sm-4 my-auto font-1 text-ms-left">Find us on social media:</div>
                <div class="col-md-6 col-sm-8 my-auto text-md-right">
                    <a><img src="images/social/facebook.png" width="30px" href="#"></a>
                    <a><img src="images/social/instagram.png" width="30px" href="#"></a>
                    <a><img src="images/social/twitter.png" width="30px" href="#"></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-color4 text-color2">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 my-auto text-center font-1">© <?= date('Y') ?> ArtZ | Bring your story into life.
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Model Login -->
<!-- Modal -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/login">
                    <div class="form-group">
                        <label for="login-username">Username</label>
                        <input type="text" class="form-control" name="username" id="login-username"
                            aria-describedby="emailHelp" placeholder="Enter username">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['username'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" class="form-control" name="password" id="login-password"
                            placeholder="Password">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['password'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-color1">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Model Register -->
<!-- Modal -->
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign-up Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/register">
                    <div class="form-group">
                        <label for="register-username">Username</label>
                        <input type="text" class="form-control" name="username" id="register-username"
                            aria-describedby="emailHelp" placeholder="Enter username" value="<?= old('username'); ?>">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['username'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" class="form-control" name="password" id="register-password"
                            placeholder="Password">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['password'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="register-password2">Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="register-password2"
                            placeholder="Confirm password">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['password_confirmation'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="register-fullname">Full name</label>
                        <input type="text" class="form-control" name="fullname" id="register-fullname"
                            placeholder="Enter full name">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['fullname'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="register-country">Country</label>
                        <select class="form-control" name="country" id="register-country">
                            <option>Egypt</option>
                        </select>
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['country'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-color1">Register</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Model Story Creation -->
<!-- Modal -->
<div class="modal fade" id="modal-createStory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create your story</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/create-story">
                    <div class="form-group">
                        <label for="createStory-storyname">Story name</label>
                        <input type="text" class="form-control" required value="<?= old('name') ?>" name="name"
                            id="createStory-storyname" aria-describedby="emailHelp" placeholder="Enter story name">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['name'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="createStory-desc">Description</label>
                        <textarea class="form-control" required name="desc" id="createStory-desc"
                            aria-describedby="emailHelp" placeholder="Description"><?= old('desc') ?></textarea>
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['desc'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="createStory-tags">Tags</label>
                        <input type="text" class="form-control" value="<?= old('tags') ?>" name="tags"
                            id="createStory-tags" aria-describedby="emailHelp"
                            placeholder="tags (Action,Adventure, ...)">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['tags'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="createStory-cat">Category</label>
                        <select value="<?= old('category_id') ?>" name="category_id" class="form-control" required
                            id="createStory-cat">
                            <?php foreach (App\Models\Category::where('id', '!=', 1)->get() as $category): ?>
                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['category_id'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="createStory-state">State</label>
                        <select value="<?= old('state') ?>" name="state" class="form-control" required
                            id="createStory-state">
                            <option value="1">On Going</option>
                            <option value="2">Completed</option>
                        </select>
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['state'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="createStory-price">Price ($)</label>
                        <input type="number" value="<?= old('price') ?>" name="price" class="form-control"
                            id="createStory-price" aria-describedby="emailHelp" value="0" min="0" max="20" step="1">
                        <?php if (app()->session->hasFlash('errors')): ?>
                        <p class="alert alert-danger">
                            <?= app()->session->getFlash('errors')['price'][0]; ?>
                        </p>
                        <?php endif; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-color1">Create</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>