<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
					============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <div class="single-post nobottommargin">

                    <!-- Single Post
							============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
								============================================= -->
                        <div class="entry-title">
                            <h2><?= $detail['topic']; ?></h2>
                            <h4>รายชื่อคนโกง : <?= $detail['cheat']; ?></h4>
                        </div><!-- .entry-title end -->
                        <?php $user = $this->db->get_where('tbl_user', ['id_user' => $detail['user_id']])->row_array(); ?>
                        <!-- Entry Meta
								============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> <?= thaiDate($detail['date_post']); ?></li>
                            <li><a href="#"><i class="icon-user"></i> <?= $user['first_name'] . ' ' . $user['last_name']; ?></a></li>
                            <li><a href="#"><i class="icon-comments"></i> <?php echo $comment_count['countAll'] ; ?> Comments</a></li>
                            <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
								============================================= -->
                        <div class="entry-image">
                            <a href="#"><img src="uploads/post/<?= $detail['file_name']; ?>" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
								============================================= -->
                        <div class="entry-content notopmargin">

                            <p><?= $detail['detail']; ?></p>

                            <!-- Post Single - Content End -->
                            <div class="clear"></div>

                            <!-- Post Single - Share
									============================================= -->
                            <!-- <div class="si-share noborder clearfix">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->


                    

                    <!-- Comments
							============================================= -->
                    <div id="comments" class="clearfix">

                        <h3 id="comments-title"><span><?php echo $comment_count['countAll'] ; ?></span> Comments</h3>

                        <!-- Comments List
								============================================= -->
                        <ol class="commentlist clearfix">
                            <?php if (empty($comments)) { ?>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p style="font-size:1.25rem;color:#FF0000;">ไม่มีรายการแสดงความคิดเห็น</p>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <?php foreach ($comments as $comments) { ?>
                                    <li class="comment even thread-even depth-1" id="li-comment-1">

                                        <div id="comment-1" class="comment-wrap clearfix">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar clearfix">
                                                        <?php if (empty($comments['fileUser'])) : ?>
                                                            <img alt='' src='public/assets/front-end/images/author/male-user.png' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                                        <?php else : ?>
                                                            <img alt='' src='uploads/user/<?php echo $comments['fileUser']; ?>' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                                        <?php endif; ?>
                                                    </span>
                                                </div>

                                            </div>

                                            <div class="comment-content clearfix">

                                                <div class="comment-author"><?php echo $comments['first_name'] . ' ' . $comments['last_name']; ?><span><a href="#" title="Permalink to this comment"><?php echo $comments['timecom'];  ?></a></span></div>

                                                <p><?php echo $comments['comment']; ?></p>


                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>
                                <?php } ?>
                            <?php } ?>

                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                        <!-- Comment Form
								============================================= -->
                        <div id="respond" class="clearfix">

                            <h3>Leave a <span>Comment</span></h3>

                            <form class="clearfix" action="comment" method="post" id="commentform">
                                <?php $id = $this->input->get('id'); ?>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="col_full">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" id="editor2"></textarea>
                                </div>

                                <div class="col_full nobottommargin">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
                                </div>

                            </form>

                        </div><!-- #respond end -->

                    </div><!-- #comments end -->
                     

                    <hr>

                    <h4>Related Posts:</h4>

                    <div class="related-posts clearfix">

                        <div class="col_half nobottommargin">
                            <?php foreach ($related as $related) { ?>
                                <div class="mpost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="uploads/post/<?= $related['file_name']; ?>" alt="Blog Single"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#"><?= $related['topic']; ?></a></h4>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> <?= thaiDate($related['date_post']); ?></li>
                                            <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                        </ul>
                                        <div class="entry-content"><?= substr($related['detail'], 0, 50); ?></div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>

                </div>

            </div><!-- .postcontent end -->

            <!-- Sidebar============================================= -->
          

        </div>

    </div>

</section><!-- #content end -->