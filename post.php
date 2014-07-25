<?php $this->need('header.php'); ?>

	<div class="content">
		<div class="container">
			<div class="post">
				<div class="entry-left">
					<h2 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
					
					<div><?php echo $this->fields->description;?></div>
					
					<div class="entry-meta">
						<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author" class="entry-author">
							<?php $this->author->gravatar('64') ?>
							<?php $this->author(); ?>
						</a>
						in
						<?php $this->category(','); ?>
					</div>
				</div>

				<div class="entry-right">			
					<span class="date"><?php $this->date('F j'); ?></span>
				</div>

				<div class="clearfix"></div>
			</div>

			<div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>

			<div class="post-tags" itemprop="keywords">
				<?php $this->tags(' ', true, 'none'); ?>
			</div>

			<!-- share -->				

			<div class="post-related">
				<h4 class="">Further reading</h4>
				<ul class="">
					<li>没有相关文章!</li>
				</ul>
			</div>

			<?php $this->need('comments.php'); ?>
		</div>
	</div>

<?php $this->need('footer.php'); ?>