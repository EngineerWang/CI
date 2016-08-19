<meta charset="utf-8">
<base href="<?php echo site_url();?>" />
<form action="blog/do_update" method="post">
	<input type="hidden" name="hid" value="<?php echo $article->blogid;?>"/>
	标题：<input type="text" name="title" value="<?php echo $article->title;?>" /><br />
	内容：<textarea cols="30" rows="10" name="content"><?php echo $article->content?></textarea><br />
		<input type="submit" name="sub" value="提交"/>
</form>
