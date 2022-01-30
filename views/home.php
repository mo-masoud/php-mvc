<main>
    <section class="container-fluid bg-color2 top-right-portal">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 my-auto text-center order-sm-last">
                    <img src="images/hero-devices.png" width="100%" alt=""
                        class="animate__animated animate__fadeInDown">
                </div>
                <div class="col-md-6 my-auto">
                    <h2 class="text-color1 animate__animated animate__slideInUp">Hi, we 're ArtZ</h2>
                    <h4 class="animate__animated animate__slideInUp">The Best visual audio stories platform</h4>
                    <p class="text-color5 animate__animated animate__slideInUp">
                        ArtZ connects a global community of 90 million readers and writers through the power of
                        story.
                    </p>
                    <a href="/search" class="btn btn-lg btn-color1 mb-1 animate__animated animate__slideInUp">Start
                        Watching</a>
                    <a href="/profile" <?= !isLogin() ? 'data-toggle="modal" data-target="#modal-login"' : ''?>
                        class="btn btn-lg btn-color1 mb-1 animate__animated animate__slideInUp">Start Visual
                        Writing</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-color2 bottom-left-portal">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 class="">See your story...</h3>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-md-5">
                    <img src="images/poster1.png" width="100%" alt="" class="animateJS animateImg">
                </div>
                <div class="col-md-7 text-center text-md-left">
                    <div class="mb-4"><img src="images/poster1logo.png" width="200px"></div>
                    <h4>Your original story could be the next big hit</h4>
                    <p class="text-color5">
                        ArtZ Studios discovers untapped, unsigned,
                        and talented writers on ArtZ and connects them to global multi-media entertainment
                        companies.
                    </p>
                    <p>ArtZ Studios works with partners such as:</p>
                    <div>
                        <img class="mr-5" src="images/studio1.svg" height="5%">
                        <img class="mr-5" src="images/studio2.svg" width="10%">
                        <img src="images/studio3.svg" width="15%">
                    </div>
                </div>
            </div>


            <div class="row py-5">
                <div class="col-md-5 order-sm-last">
                    <img src="images/poster2.png" width="100%" alt="" class="animateJS animateImg">
                </div>
                <div class="col-md-7 text-center text-md-right">
                    <div class="mb-4"><img src="images/poster2logo.png" width="200px"></div>
                    <h4>Your original story could be the next big hit</h4>
                    <p class="text-color5">
                        ArtZ Studios discovers untapped, unsigned,
                        and talented writers on ArtZ and connects them to global multi-media entertainment
                        companies.
                    </p>
                    <p>ArtZ Studios works with partners such as:</p>
                    <div>
                        <img class="mr-5" src="images/studio1.svg" height="5%">
                        <img class="mr-5" src="images/studio2.svg" width="10%">
                        <img src="images/studio3.svg" width="15%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-color2 text-color3">
        <div class="container py-3">
            <div class="row">
                <div class="col text-center mb-3">
                    <h4 class="mb-5">How ArtZ works</h4>
                    <p class="mb-5">Get your story discovered through the power of community and technology on
                        ArtZ.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 text-center">
                                <h1 class="font-3 display-1">1</h1>
                            </div>
                            <div class="col-9">
                                <h4>Create</h4>
                                <p class="text-color5">
                                    There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form,
                                    by injected humour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 text-center">
                                <h1 class="font-3 display-1">2</h1>
                            </div>
                            <div class="col-9">
                                <h4>Build</h4>
                                <p class="text-color5">
                                    There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form,
                                    by injected humour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 text-center">
                                <h1 class="font-3 display-1">3</h1>
                            </div>
                            <div class="col-9">
                                <h4>Amplify</h4>
                                <p class="text-color5">
                                    There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form,
                                    by injected humour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container-fluid bg-footer-wall text-light mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col my-auto text-center">
                    <h2>Take ArtZ With You</h2>
                    <p>The Best visual audio stories platform</p>
                    <a href="/search" class="btn btn-lg btn-color1 mb-1 animate__animated animate__slideInUp">Start
                        Watching</a>
                    <a href="/profile" <?= !isLogin() ? 'data-toggle="modal" data-target="#modal-login"' : ''?>
                        class="btn btn-lg btn-color1 mb-1 animate__animated animate__slideInUp">Start Visual
                        Writing</a>
                    <div class="mt-5">
                        <img src="images/footer-devices.png" width="100%">
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>