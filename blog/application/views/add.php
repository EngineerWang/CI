<base href="<?php echo site_url();?>" />
<form action="blog/do_add" method="post">
	标题：<input type="text" name="title" /><br />
	内容：<textarea rows='10' cols='30' name='content'></textarea><br />
	生活：<input type="checkbox" value="生活" name="type[]" />
	旅游：<input type="checkbox" value="旅游" name="type[]" />
	娱乐：<input type="checkbox" value="娱乐" name="type[]" />
	动物：<input type="checkbox" value="动物" name="type[]" />
	其它：<input type="text" name="others" /><br />
	<input type="submit" name="sub" value="发表" />
</form>
