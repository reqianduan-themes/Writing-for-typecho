<?php $this->need('header.php'); ?>

	<div class="content">
		<div class="container">
			<div class="post">
				<div class="entry-left">
					<div class="entry-meta">
						<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author" class="entry-author">
							<?php $this->author(); ?>
						</a>
						<small>post in</small>
						<?php $this->category(','); ?>
					</div>

					<h1 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h1>
					
					<div class="entry-description"><?php echo $this->fields->description;?></div>
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
				<?php $this->tags(' ', true, '没有标签'); ?>
			</div>

			<!-- share -->				

			<!-- <div class="post-related">
				<h4 class="">Further reading</h4>
				<ul class="">
					<li>没有相关文章!</li>
				</ul>
			</div> -->

			<?php $this->need('comments.php'); ?>
		</div>

		<div class="pager" role="pager">
			<div class="prev">
				<?php $this->theNext('%s', '<a href="javascript:void(0);">没有上一篇</a>'); ?>
				<span>&larr;</span>
			</div>

			<div class="next">
				<?php $this->thePrev('%s', '<a href="javascript:void(0);">没有下一篇</a>'); ?>
				<span>&rarr;</span>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>