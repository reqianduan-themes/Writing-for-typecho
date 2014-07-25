<?php
/**
 * Writing主题（免费） BUG反馈：<a href="http://themes.xiguabaobao.com/Writing-for-typecho/#respond">西瓜宝宝主题</a>
 * 
 * @package Writing for typecho
 * @author themes.xiguabaobao.com
 * @version 1.0
 * @link http://themes.xiguabaobao.com
 */

 $this->need('header.php');
 ?>

	<div class="content">
		<div class="container">
			<?php while($this->next()): ?>
				<div class="entry">
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
			<?php endwhile; ?>

			<?php $this->pageNav('&laquo;', '&raquo;'); ?>
		</div>
	</div>

<?php $this->need('footer.php'); ?>