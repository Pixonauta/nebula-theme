<div class="row mt-4">
    <div class="col-md-12">

        <article class="card mb-4 horizontal-post-feed">
            <div class="row g-0 pt-3 pb-3">
                <div class="col-md-2 d-inline-flex p-2 pl-4 pr-4 justify-content-center">
                    <div style="align-self:center">
                        <a href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>" style="border-radius:50px; display:inline-block" class="">
                            <picture>
                                <img class="" src="<?php print get_avatar_url(get_the_author_meta('user_email')); ?>" style="border-radius:50px" alt="<?php echo get_the_author(); ?>">
                            </picture>

                        </a>
                    </div>


                </div>
                <div class="col-md-10">
                    <div class="card-body">

                        <a href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>" class="link-text">
                            <h5 class="card-title mb-0" style="text-decoration: none;"><?php echo get_the_author_meta('display_name'); ?>
                                <?php
                               
                                $website = get_the_author_meta('user_url', $post->post_author);
                                $twitter = get_the_author_meta('twitter', $post->post_author);
                                $facebook = get_the_author_meta('facebook', $post->post_author);
                                $instagram = get_the_author_meta('instagram', $post->post_author);
                                $linkedin = get_the_author_meta('linkedin', $post->post_author);
                                $behance = get_the_author_meta('myspace', $post->post_author);
                                $github = get_the_author_meta('soundcloud', $post->post_author);
                                ?>
                                <?php if ($website) : ?><a href="<?php echo $website; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fa-solid fa-earth-americas"></i></a><?php endif; ?>
                                <?php if ($twitter) : ?><a href="<?php echo $twitter; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fab fa-x-twitter white-text"> </i></a><?php endif; ?>
                                <?php if ($facebook) : ?> <a href="<?php echo $facebook; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fab fa-facebook-f white-text"> </i></a><?php endif; ?>
                                <?php if ($instagram) : ?> <a href="<?php echo $instagram; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fa-brands fa-instagram"></i></a><?php endif; ?>
                                <?php if ($linkedin) : ?> <a href="<?php echo $linkedin; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fa-brands fa-linkedin"> </i></a><?php endif; ?>
                                <?php if ($behance) : ?> <a href="<?php echo $behance; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fa-brands fa-behance"></i></a><?php endif; ?>
                                <?php if ($github) : ?> <a href="<?php echo $github; ?>" class="px-1" rel="nofollow" target="_blank"><i class="fa-brands fa-github"></i></a><?php endif; ?>

                            </h5>

                            <p class="card-text mb-1"><?php echo get_the_author_meta('description'); ?>
                            </p>
                        </a>
                        <?php if (is_single()) : ?>
                            <div class="mb-2">
                                <span class="text-orange">Editado el:</span>
                                <a class="text-orange text-decoration-none" href="<?php echo get_home_url() . '/' . get_the_date('Y/m/d'); ?>"><?php echo get_the_modified_date(); ?></a><span class="text-orange">
                            </div>
                        <?php endif; ?>



                    </div>
                </div>
            </div>
        </article>

    </div>
</div>