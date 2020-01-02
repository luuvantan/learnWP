<?php /* Template Name: Lifestyle */ ?>

<?php get_header(); ?>
<?php $categories = getCategory();?>
<div class="container">
    <div class="archives-title"><h3>Category Archive For <span class="archives-title__subtitle h2">"Lifestyle"</span>
        </h3></div>
    <div class="row">
        <div class="col-xs-12  col-md-12" role="main">
            <?php foreach ($categories as $key => $category): ;?>
            <article
                class="boxed push-down-30 post-<?php echo $category->ID ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-blog tag-news">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <div class="post-content--narrow"><h2 class="post-content__title  entry-title"><a
                                    href="<?php echo $category->guid ?>"><?php echo $category->post_title ?></a></h2>
                            <div class="post-content__text"><p><?php echo wp_trim_words(wpautop($category->post_content), 60) ?></p></div>
                        </div>
                        <a href="<?php echo $category->guid ?>"
                           class="read-more"> Continue reading
                            <div class="read-more__arrow"><span class="glyphicon  glyphicon-chevron-right"></span></div>
                        </a></div>
                </div>
            </article>
            <?php endforeach; ?>
            <article
                class="boxed push-down-30 post-1984 post type-post status-publish format-quote hentry category-lifestyle tag-news post_format-post-format-quote">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <div class="post-content--narrow"><h2 class="post-content__title  entry-title"><a
                                    href="https://demo.proteusthemes.com/readable/2012/09/18/post-format-quote/">Post
                                    Format: Quote</a></h2>
                            <div class="post-content__text"><p>Believe in yourself! Have faith in your abilities!
                                    Without a humble but reasonable confidence in your own powers you cannot be successful
                                    or happy.</p></div>
                        </div>
                    </div>
                </div>
            </article>
            <nav class="center">
                <div class="pagination">
                    <div class="row"></div>
                </div>
            </nav>
        </div>
    </div>
</div>
