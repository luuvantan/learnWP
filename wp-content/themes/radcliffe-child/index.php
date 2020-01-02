<?php /* Template Name: Index */ ?>
<?php get_header(); ?>
<?php $categories = getCategory();?>
<div class="container">
    <div class="row">
        <div class="col-xs-12  col-md-12  article-page-builder" role="main">
            <div id="pl-2059" class="panel-layout">
                <div id="pg-2059-0" class="panel-grid panel-has-style">
                    <div class="panel-row-style panel-row-style-for-2059-0">
                        <div id="pgc-2059-0-0" class="panel-grid-cell">
                            <div class="latest-posts  latest-posts--horizontal  js-latest-posts"
                                 data-type="horizontal"><a class="latest-posts__post-image"
                                                           href="http://localhost:8080/wordpress/2019/12/16/detail/">
                                    <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo1.jpg"
                                         class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloading"
                                         alt=""
                                         sizes="(min-width: 1200px) 797px, (min-width: 992px) 657px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                         srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo1.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo1-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo1-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo1-1024x444.jpg 1024w"
                                         data-was-processed="true"> </a>
                                <div class="latest-posts__post-content">
                                    <div class="latest-posts__meta">
                                        <div class="latest-posts__meta-image"><img alt=""
                                                                                   src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/9da685568d9a5850389b42763bb68805.jpeg"
                                                                                   srcset="https://secure.gravatar.com/avatar/9da685568d9a5850389b42763bb68805?s=90&amp;d=mm&amp;r=g 2x"
                                                                                   class="avatar avatar-45 photo lazyloaded"
                                                                                   height="45" width="45"
                                                                                   data-was-processed="true"></div>
                                        <div class="latest-posts__meta-content"><a
                                                class="latest-posts__meta-content-author-link"
                                                href="https://demo.proteusthemes.com/readable/author/demo4/"> <span
                                                    class="vcard author"> <span class="fn">Mary Smith</span> </span>
                                            </a> in <a
                                                href="http://localhost:8080/wordpress/2019/12/16/detail/"
                                                rel="category tag">Travel &amp; Food</a></div>
                                    </div>
                                    <h2 class="latest-posts__title"><a
                                            href="http://localhost:8080/wordpress/2019/12/16/detail/">Design
                                            of Waves</a></h2>
                                    <div class="latest-posts__excerpt  js-latest-posts-excerpt"
                                         style="height: 220px;"><p>She had a last view back on the skyline of her
                                            hometown Bookmarksgrove. The European languages are members of the same
                                            family. Their separate existence is a myth. For science, music, sport, etc,
                                            Europe uses the same vocabulary. The languages only differ in their grammar,
                                            their pronunciation and their most common words. Everyone realizes why …</p>
                                    </div>
                                    <a class="latest-posts__read-more"
                                       href="http://localhost:8080/wordpress/2019/12/16/detail/">Read
                                        more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-1" class="panel-grid panel-no-style">
                    <div id="pgc-2059-1-0" class="panel-grid-cell">
                        <div id="panel-2059-1-0-0"
                             class="so-panel widget widget_pw_title_with_link widget-title-with-link panel-first-child panel-last-child"
                             data-index="1">
                            <div class="title-with-link"><h2 class="title-with-link__title">Lifestyle</h2> <a
                                    class="title-with-link__link"
                                    href="http://localhost:8080/wordpress/lifestyle/"
                                    target="_self">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-2" class="panel-grid panel-no-style">
                    <div id="pgc-2059-2-0" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="<?php echo $categories[0]->guid ?>">
                                <img width="1138" height="493" src="<?php echo get_the_post_thumbnail_url($categories[0]->ID); ?>"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloading"
                                     alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     data-was-processed="true"> </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/bdbb8318519395bacd2f98b2a8fe4ab3.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/bdbb8318519395bacd2f98b2a8fe4ab3?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo lazyloading"
                                                                               height="45" width="45"
                                                                               data-was-processed="true"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo2/"> <span
                                                class="vcard author"> <span class="fn">Clark Kent</span> </span> </a> in
                                        <a href="https://demo.proteusthemes.com/readable/category/lifestyle/"
                                           rel="category tag">Lifestyle</a>
                                        <time datetime="2014-05-04T14:12:18+00:00" class="latest-posts__meta-date">
                                            May 4, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="<?php echo $categories[0]->guid ?>"><?php echo $categories[0]->post_title ?></a></h2>
                                <div class="latest-posts__excerpt  js-latest-posts-excerpt" style="height: 245px;">
                                    <p><?php echo wp_trim_words(wpautop($categories[0]->post_content), 60) ?></p></div>
                                <a class="latest-posts__read-more"
                                   href="<?php echo $categories[0]->guid ?>">Read
                                    more</a></div>
                        </div>
                    </div>
                    <div id="pgc-2059-2-1" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="<?php echo $categories[1]->guid ?>">
                                <img width="1138" height="493" src="<?php echo get_the_post_thumbnail_url($categories[1]->ID); ?>"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloading"
                                     alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     data-was-processed="true"> </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/d0ea1620cb5b9a56e0d2d79e6c033b15.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/d0ea1620cb5b9a56e0d2d79e6c033b15?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo lazyloading"
                                                                               height="45" width="45"
                                                                               data-was-processed="true"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo5/"> <span
                                                class="vcard author"> <span class="fn">Jennifer Moore</span> </span>
                                        </a> in <a href="https://demo.proteusthemes.com/readable/category/lifestyle/"
                                                   rel="category tag">Lifestyle</a>
                                        <time datetime="2014-05-02T14:44:10+00:00" class="latest-posts__meta-date">
                                            May 2, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                            href="<?php echo $categories[1]->guid ?>"><?php echo $categories[1]->post_title ?></a></h2>
                                <div class="latest-posts__excerpt  js-latest-posts-excerpt" style="height: 245px;">
                                    <p><?php echo wp_trim_words(wpautop($categories[1]->post_content), 60) ?></p></div>
                                <a class="latest-posts__read-more"
                                   href="<?php echo $categories[1]->guid ?>">Read
                                    more</a></div>
                        </div>
                    </div>
                    <div id="pgc-2059-2-2" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="<?php echo $categories[2]->guid ?>"> <img
                                    width="1138" height="493" src="<?php echo get_the_post_thumbnail_url($categories[2]->ID); ?>"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloading"
                                    alt=""
                                    sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                    data-was-processed="true"> </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/b2ac420ebc330f5d37a5bfb1948e5d97.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/b2ac420ebc330f5d37a5bfb1948e5d97?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo lazyloading"
                                                                               height="45" width="45"
                                                                               data-was-processed="true"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo3/"> <span
                                                class="vcard author"> <span class="fn">John Locke</span> </span> </a> in
                                        <a href="https://demo.proteusthemes.com/readable/category/lifestyle/"
                                           rel="category tag">Lifestyle</a>
                                        <time datetime="2014-03-05T14:35:41+00:00" class="latest-posts__meta-date">
                                            March 5, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                            href="<?php echo $categories[2]->guid ?>"><?php echo $categories[2]->post_title ?></a></h2>
                                <div class="latest-posts__excerpt  js-latest-posts-excerpt" style="height: 217px;">
                                    <p><?php echo wp_trim_words(wpautop($categories[2]->post_content), 60) ?></p></div>
                                <a class="latest-posts__read-more"
                                   href="<?php echo $categories[2]->guid ?>">Read
                                    more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-3" class="panel-grid panel-no-style">
                    <div id="pgc-2059-3-0" class="panel-grid-cell">
                        <div id="panel-2059-3-0-0"
                             class="so-panel widget widget_pw_title_with_link widget-title-with-link panel-first-child panel-last-child"
                             data-index="5">
                            <div class="title-with-link"><h2 class="title-with-link__title">Design</h2> <a
                                    class="title-with-link__link"
                                    href="https://demo.proteusthemes.com/readable/category/design/" target="_self">Read
                                    more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-4" class="panel-grid panel-no-style">
                    <div id="pgc-2059-4-0" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="https://demo.proteusthemes.com/readable/2014/01/03/post-with-right-sidebar/">
                                <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo13.jpg"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo13.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo13-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo13-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo13-1024x444.jpg 1024w">
                            </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/b2ac420ebc330f5d37a5bfb1948e5d97.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/b2ac420ebc330f5d37a5bfb1948e5d97?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo"
                                                                               height="45" width="45"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo3/"> <span
                                                class="vcard author"> <span class="fn">John Locke</span> </span> </a>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="https://demo.proteusthemes.com/readable/2014/01/03/post-with-right-sidebar/">#SUMMER
                                        Vibe Trends</a></h2>
                                <div class="latest-posts__excerpt  js-latest-posts-excerpt" style="height: 160px;">
                                    <p>She had a last view back on the skyline of her hometown Bookmarksgrove. The
                                        European languages are members of the same family. Their separate existence
                                        is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                        The languages only differ in their grammar, their pronunciation and their
                                        most common words. Everyone realizes why …</p></div>
                                <a class="latest-posts__read-more"
                                   href="https://demo.proteusthemes.com/readable/2014/01/03/post-with-right-sidebar/">Read
                                    more</a></div>
                        </div>
                    </div>
                    <div id="pgc-2059-4-1" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="https://demo.proteusthemes.com/readable/2014/01/02/post-with-left-sidebar/">
                                <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo6.jpg"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo6.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo6-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo6-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo6-1024x444.jpg 1024w">
                            </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/fbdb43490220472b3de1dc0934d2557a.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/fbdb43490220472b3de1dc0934d2557a?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo"
                                                                               height="45" width="45"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo1/"> <span
                                                class="vcard author"> <span class="fn">Charles Baker</span> </span> </a>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="https://demo.proteusthemes.com/readable/2014/01/02/post-with-left-sidebar/">Beagle
                                        Coffee Case Study</a></h2>
                                <div class="latest-posts__excerpt  js-latest-posts-excerpt" style="height: 160px;">
                                    <p>She had a last view back on the skyline of her hometown Bookmarksgrove. (H3)
                                        Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                        A small&nbsp;river&nbsp;named Duden flows by their …</p></div>
                                <a class="latest-posts__read-more"
                                   href="https://demo.proteusthemes.com/readable/2014/01/02/post-with-left-sidebar/">Read
                                    more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-5" class="panel-grid panel-no-style">
                    <div id="pgc-2059-5-0" class="panel-grid-cell">
                        <div id="panel-2059-5-0-0"
                             class="so-panel widget widget_pw_title_with_link widget-title-with-link panel-first-child panel-last-child"
                             data-index="8">
                            <div class="title-with-link"><h2 class="title-with-link__title">Food &amp; Travel</h2><a
                                    class="title-with-link__link"
                                    href="https://demo.proteusthemes.com/readable/category/travel-food/"
                                    target="_self">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-6" class="panel-grid panel-no-style">
                    <div id="pgc-2059-6-0" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--horizontal  js-latest-posts" data-type="horizontal">
                            <a class="latest-posts__post-image"
                               href="https://demo.proteusthemes.com/readable/2014/01/02/maroccan-fairytail-the-adventure-of-lifetime/">
                                <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo9.jpg"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                     sizes="(min-width: 1200px) 797px, (min-width: 992px) 657px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo9.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo9-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo9-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo9-1024x444.jpg 1024w">
                            </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/68ee6321571ef2ea3ef938279fe86c5c.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/68ee6321571ef2ea3ef938279fe86c5c?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo"
                                                                               height="45" width="45"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/proteusnet/"> <span
                                                class="vcard author"> <span class="fn">Primož Cigler</span> </span> </a>
                                        in <a href="https://demo.proteusthemes.com/readable/category/travel-food/"
                                              rel="category tag">Travel &amp; Food</a>
                                        <time datetime="2014-01-02T08:32:03+00:00" class="latest-posts__meta-date">
                                            January 2, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="https://demo.proteusthemes.com/readable/2014/01/02/maroccan-fairytail-the-adventure-of-lifetime/">Moroccan
                                        Fairytail: The Adventure of Lifetime by Exploring the Mysterious Great Blue
                                        Hole</a></h2> <a class="latest-posts__read-more"
                                                         href="https://demo.proteusthemes.com/readable/2014/01/02/maroccan-fairytail-the-adventure-of-lifetime/">Read
                                    more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-7" class="panel-grid panel-no-style">
                    <div id="pgc-2059-7-0" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="https://demo.proteusthemes.com/readable/2014/01/02/best-places-to-eat-when-mum-is-not-cooking/">
                                <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo12.jpg"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo12.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo12-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo12-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo12-1024x444.jpg 1024w">
                            </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/fbdb43490220472b3de1dc0934d2557a.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/fbdb43490220472b3de1dc0934d2557a?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo"
                                                                               height="45" width="45"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo1/"> <span
                                                class="vcard author"> <span class="fn">Charles Baker</span> </span> </a>
                                        in <a href="https://demo.proteusthemes.com/readable/category/travel-food/"
                                              rel="category tag">Travel &amp; Food</a>
                                        <time datetime="2014-01-02T08:30:49+00:00" class="latest-posts__meta-date">
                                            January 2, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="https://demo.proteusthemes.com/readable/2014/01/02/best-places-to-eat-when-mum-is-not-cooking/">Best
                                        Places to eat when Mum is not Cooking</a></h2> <a
                                    class="latest-posts__read-more"
                                    href="https://demo.proteusthemes.com/readable/2014/01/02/best-places-to-eat-when-mum-is-not-cooking/">Read
                                    more</a></div>
                        </div>
                    </div>
                    <div id="pgc-2059-7-1" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="https://demo.proteusthemes.com/readable/2014/01/02/backpacking-the-world-and-working-remote/">
                                <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo17.jpg"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo17.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo17-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo17-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo17-1024x444.jpg 1024w">
                            </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/9da685568d9a5850389b42763bb68805.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/9da685568d9a5850389b42763bb68805?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo"
                                                                               height="45" width="45"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo4/"> <span
                                                class="vcard author"> <span class="fn">Mary Smith</span> </span> </a> in
                                        <a href="https://demo.proteusthemes.com/readable/category/travel-food/"
                                           rel="category tag">Travel &amp; Food</a>
                                        <time datetime="2014-01-02T08:31:10+00:00" class="latest-posts__meta-date">
                                            January 2, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="https://demo.proteusthemes.com/readable/2014/01/02/backpacking-the-world-and-working-remote/">Backpacking
                                        the World and Working Remotely</a></h2> <a class="latest-posts__read-more"
                                                                                   href="https://demo.proteusthemes.com/readable/2014/01/02/backpacking-the-world-and-working-remote/">Read
                                    more</a></div>
                        </div>
                    </div>
                    <div id="pgc-2059-7-2" class="panel-grid-cell">
                        <div class="latest-posts  latest-posts--vertical  js-latest-posts" data-type="vertical"><a
                                class="latest-posts__post-image"
                                href="https://demo.proteusthemes.com/readable/2014/01/02/street-food-to-die-for/">
                                <img width="1138" height="493" src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/photo10.jpg"
                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                     sizes="(min-width: 1200px) 358px, (min-width: 992px) 292px, (min-width: 768px) 718px, calc(100vw - 30px)"
                                     srcset="https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo10.jpg 1138w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo10-300x130.jpg 300w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo10-768x333.jpg 768w, https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/photo10-1024x444.jpg 1024w">
                            </a>
                            <div class="latest-posts__post-content">
                                <div class="latest-posts__meta">
                                    <div class="latest-posts__meta-image"><img alt=""
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/abc/a_files/b2ac420ebc330f5d37a5bfb1948e5d97.jpeg"
                                                                               srcset="https://secure.gravatar.com/avatar/b2ac420ebc330f5d37a5bfb1948e5d97?s=90&amp;d=mm&amp;r=g 2x"
                                                                               class="avatar avatar-45 photo"
                                                                               height="45" width="45"></div>
                                    <div class="latest-posts__meta-content"><a
                                            class="latest-posts__meta-content-author-link"
                                            href="https://demo.proteusthemes.com/readable/author/demo3/"> <span
                                                class="vcard author"> <span class="fn">John Locke</span> </span> </a> in
                                        <a href="https://demo.proteusthemes.com/readable/category/travel-food/"
                                           rel="category tag">Travel &amp; Food</a>
                                        <time datetime="2014-01-02T08:33:25+00:00" class="latest-posts__meta-date">
                                            January 2, 2014
                                        </time>
                                    </div>
                                </div>
                                <h2 class="latest-posts__title"><a
                                        href="https://demo.proteusthemes.com/readable/2014/01/02/street-food-to-die-for/">Street
                                        Food to Die for in 21st Century</a></h2> <a class="latest-posts__read-more"
                                                                                    href="https://demo.proteusthemes.com/readable/2014/01/02/street-food-to-die-for/">Read
                                    more</a></div>
                        </div>
                    </div>
                </div>
                <div id="pg-2059-8" class="panel-grid panel-has-style">
                    <div data-siteorigin-parallax="{&quot;backgroundUrl&quot;:&quot;https:\/\/demo.proteusthemes.com\/readable\/wp-content\/uploads\/sites\/12\/2017\/08\/background6.png&quot;,&quot;backgroundSize&quot;:[1055,299],&quot;backgroundSizing&quot;:&quot;original&quot;,&quot;limitMotion&quot;:&quot;auto&quot;}"
                         class="panel-row-style panel-row-style-for-2059-8"
                         style="background-image: url(&quot;https://demo.proteusthemes.com/readable/wp-content/uploads/sites/12/2017/08/background6.png&quot;); background-size: auto; background-position: 50% -321.954px;">
                        <div id="pgc-2059-8-0" class="panel-grid-cell">
                            <div id="panel-2059-8-0-0"
                                 class="widget_text so-panel widget widget_custom_html panel-first-child"
                                 data-index="13">
                                <div class="widget_text panel-widget-style panel-widget-style-for-2059-8-0-0">
                                    <div class="textwidget custom-html-widget"><h2
                                            style="text-align: center;margin-bottom: 5px"><span
                                                style="color: #ffffff">Subscribe and Stay Updated</span></h2>
                                        <p style="text-align: center"><span style="color: #9ab5a4;font-size: 18px">Get all our posts, blogs and video content via e-mail.</span>
                                        </p></div>
                                </div>
                            </div>
                            <div id="panel-2059-8-0-1"
                                 class="so-panel widget widget_pt_mailchimp_subscribe widget-mailchimp-subscribe"
                                 data-index="14">
                                <div class="panel-widget-style panel-widget-style-for-2059-8-0-1">
                                    <form method="post" name="mc-embedded-subscribe-form"
                                          class="mailchimp-subscribe  validate" target="_blank" novalidate=""><input
                                            type="email" value="" name="EMAIL"
                                            class="email  form-control  mailchimp-subscribe__email-input"
                                            placeholder="Your E-mail Address" required="">
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b__" tabindex="-1" value=""></div>
                                        <input type="submit" value="Subscribe!" name="subscribe"
                                               class="button  btn  btn-primary mailchimp-subscribe__submit"></form>
                                </div>
                            </div>
                            <div id="panel-2059-8-0-2"
                                 class="widget_text so-panel widget widget_custom_html panel-last-child"
                                 data-index="15">
                                <div class="widget_text panel-widget-style panel-widget-style-for-2059-8-0-2">
                                    <div class="textwidget custom-html-widget"><p style="text-align: center"><span
                                                style="color: #9a9a90;font-size: 14px">We promise. No spam.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>