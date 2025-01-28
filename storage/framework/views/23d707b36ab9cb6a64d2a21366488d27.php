

<?php $__env->startSection('content'); ?>

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="<?php echo e(asset("storage/$user?->profile_pic")); ?>" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;"><?php echo e($user?->name); ?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none"><?php echo e($user?->job); ?></div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="<?php echo e($setting->cv_url); ?>" class="btn btn-outline-light mr-5">Download CV</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="<?php echo e($setting->video_url); ?>" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 hover-section" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="<?php echo e(asset("storage/$setting->about_photo")); ?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"><?php echo e($setting->about_title); ?></h3>
                    <p><?php echo e($setting->about_description); ?></p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary"><?php echo e($user?->name); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary"><?php echo e($user?->birth_day); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary"><?php echo e($user?->degree); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo e($user?->experience); ?> Years</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary"><?php echo e($user?->phone); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><?php echo e($user?->email); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary"><?php echo e($user?->address); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Available</span></h6></div>
                    </div>
                    <a href="<?php echo e($setting->freelance_url); ?>" class="btn btn-outline-primary mr-4">Hire Me</a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5 hover-section" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo e($education->title); ?></h5>
                            <p class="mb-2"><strong><?php echo e($education->association); ?></strong> | <small><?php echo e($education->from); ?> - <?php echo e($education->to); ?></small></p>
                            <p><?php echo e($education->description); ?> </p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo e($experience->title); ?></h5>
                            <p class="mb-2"><strong><?php echo e($experience->association); ?></strong> | <small><?php echo e($experience->from); ?> - <?php echo e($experience->to); ?></small></p>
                            <p><?php echo e($experience->description); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5 hover-section" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <?php $__currentLoopData = $skills->split($skills->count()/3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo e($skill->name); ?></h6>
                            <h6 class="font-weight-bold"><?php echo e($skill->percent); ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo e($skill->percent); ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php echo e($skill->color); ?>"></div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 hover-section" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">My Services</h1>
            </div>
            <div class="row pb-3">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="<?php echo e($service->icon); ?> service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0"><?php echo e($service->name); ?></h4>
                    </div>
                    <p><?php echo e($service->description); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3 hover-section" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".<?php echo e($category->name); ?>"><?php echo e($category->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?php echo e($portfolio->category->name); ?>">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo e(asset("storage/$portfolio->image")); ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset("storage/$portfolio->image")); ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 50px;"></i>
                            </a>
                            <a href="<?php echo e($portfolio->project_url); ?>" data-lightbox="portfolio">
                                <i class="fa-solid fa-link text-white" style="margin-left:20px; font-size: 50px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 hover-section" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">Clients Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <?php $__currentLoopData = $reviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4"><?php echo e($review->description); ?></h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="<?php echo e(asset("storage/$review->image")); ?>" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0"><?php echo e($review->name); ?> </h5>
                            <span><?php echo e($review->job); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 hover-section" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white hover-text" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary default-text">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-primary" role="alert">
                          <?php echo e(Session::get('message')); ?>

                        </div>
                        <br>
                        <?php endif; ?>
                        <form id="contactForm" method="POST" action="<?php echo e(route('contact')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required name="name" value="<?php echo e(old('name')); ?>"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>"
                                        required name="email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" value="<?php echo e(old('subject_mail')); ?>"
                                    required name="subject_mail"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" name="content"
                                    required><?php echo e(old('content')); ?></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                            <?php if($errors->any()): ?>
                            <br>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                             <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="<?php echo e($setting->github_url); ?>"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?php echo e($setting->fb_url); ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?php echo e($setting->linkedin_url); ?>"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#"></a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="#">Bivek Shrestha</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MyPortfolioLaravel-main45\MyPortfolioLaravel-main\resources\views/home.blade.php ENDPATH**/ ?>