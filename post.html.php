<article class="post-full post">
	<header class="post-full-header">
		<?php if (!empty($p->link)) { ?>
		<h1 class="post-full-title"><a href="<?php echo $p->link;?>" target="_blank"><?php echo $p->title;?></a> &#8594;</h1>
		<?php } else {?>
		<h1 class="post-full-title"><?php echo $p->title;?></h1>
		<?php } ?>
		<p class="post-full-custom-excerpt"><?php echo $p->description;?></p>
		<div class="post-full-byline">
			<section class="post-full-byline-content">
				<ul class="author-list">
					<li class="author-list-item">
						<a href="<?php echo $p->authorUrl;?>" class="author-avatar">
							<img class="author-profile-image" src="<?php echo site_url();?>themes/casper/images/avatar.png" alt="<?php echo $p->author;?>">
						</a>
					</li>
				</ul>
				<section class="post-full-byline-meta">
					<h4 class="author-name"><a href="<?php echo $p->authorUrl;?>"><?php echo $p->author;?></a></h4>
					<div class="byline-meta-content">
					<time><?php echo format_date($p->date) ?></time> <span class="bull">•</span> <?php echo $p->category;?> <?php if (login()):?><span class="bull">•</span> <a href="<?php echo $p->url;?>/edit?destination=post">Edit</a><?php endif;?>
					</div>
				</section>
			</section>
		</div>
	</header>
	<section class="post-full-content">
		<div class="post-content">
		<?php if (!empty($p->image)): ?>
			<p><img src="<?php echo $p->image;?>"></p>
		<?php endif;?>
		<?php if (!empty($p->video)) { ?>
			<p><iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=" frameborder="0"></iframe></p>
		<?php } ?>
		<?php if (!empty($p->audio)) { ?>
			<p><iframe class="embed-responsive-item" scrolling="no" width="100%" height="200" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe></p>
		<?php } ?>
		<?php if (!empty($p->quote)) { ?>
		<blockquote><p><?php echo $p->quote ?></p></blockquote>
		<?php } ?>
		<?php echo $p->body;?>
		</div>
		<div class="tag read-next-card-content">Tag: <?php echo $p->tag;?></div>
		
		<?php if (disqus()): ?>
			<?php echo disqus($p->title, $p->url) ?>
		<?php endif; ?>
		<?php if (facebook() || disqus()): ?>
		<div class="comments-area" id="comments" style="margin-top:30px;">
			<?php if (facebook()): ?>
				<div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
			<?php endif; ?>
			<?php if (disqus()): ?>
				<div id="disqus_thread"></div>
			<?php endif; ?>
		</div>
		<?php endif; ?>		
		
	</section>
</article>
