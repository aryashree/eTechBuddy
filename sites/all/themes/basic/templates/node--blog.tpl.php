<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
		<div class="postBox">
			<div class="postBoxTop"></div>
			<div class="postBoxMid">
				<div class="postBoxMidInner first clearfix">
					<div class="date">
					<span class="month"><?php echo date("M", $node->created); ?></span>
					<br class="clear"/>
					<span class="day"><?php  echo date("j", $node->created); ?></span>
					<br class="clear"/>
					<span class="year"><?php echo date("Y", $node->created); ?></span>
					</div>
					<?php if (!empty($content['field_blog_categorey'])): ?>
					<div class="category">
					<?php print render($content['field_blog_categorey']); ?>
					<?php if($page): ?>
						<div class="postTags">
						<?php 
						print render($content['field_blog_tags']); 												
						?>						
						</div>
					<?php endif;?>	
					</div>			  
					<?php endif;?>
     				<h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
					<?php if ($page): ?>
					<div class="postMetaSingle">
					<img alt="Author" src="../sites/all/themes/basic/images/ico_author.png"> Article by <?php print token_replace('<a href="../user/[node:author:uid]" title="Contact [node:author]">[node:author:field_first_name] [node:author:field_last_name]</a>', array('node' => $node)); ?>&nbsp;&nbsp;&nbsp;
					<!---<img alt="Comments" src="../sites/all/themes/basic/images/ico_comments.png"> <?php //print ($node->comment_count);?> <a href="<?php print $node_url; ?>">Comments</a>-->
					</div>
					<?php endif; ?>
					<div class="textPreview">
					<?php 
					// We hide the comments and links now so that we can render them later.
					hide($content['comments']);
					hide($content['links']);
					hide($content['field_blog_tags']);
					print render($content);
					?>
					</div>
					<?php if(!$page): ?>
					<div class="postMeta">
						<a class="more-link" href="<?php print $node_url; ?>">Read more &raquo;</a>
						<div class="metaRight">
							<img alt="Author" src="../sites/all/themes/basic/images/ico_author.png"> Article by <?php print token_replace('<a href="../user/[node:author:uid]" title="Contact [node:author]">[node:author:field_first_name] [node:author:field_last_name]</a>', array('node' => $node)); ?>
							<!---<img alt="Comments" src="../sites/all/themes/basic/images/ico_comments.png"> <?php //print ($node->comment_count); ?>	<a href="<?php print $node_url; ?>">Comments</a>-->
						</div>
					</div>
					<?php endif;?>
						
				</div>
			</div>
			<div class="postBoxBottom"></div>
		</div>
	</div>
</div>	
<?php print render($content['comments']); ?>