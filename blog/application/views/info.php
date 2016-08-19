<meta charset="utf-8">
<base href="<?php echo site_url();?>" />
<h2>标题：<?php echo $article->title;?></h2>
<p><?php echo $article->content;?></p>
<p>时间：<?php echo $article->time;?></p>
<p>类型：<?php echo $article->type;?>&nbsp;|&nbsp;<a href="blog/go_type/<?php echo $article->blogid?>">修改类型</a></p>
<hr />
