<base href="<?php echo site_url();?>">
<?php
	if($this->session->userdata['username']){
		echo $this->session->userdata['username']."已登录&nbsp;"."<a href='user/exit'>注销</a>";
		echo "<p><a href='blog/add'>发表文章</a></p>";
	}else{
		echo "<a href='user/login'>登录</a>";
	}
?>
<?php
	foreach($blog as $v){
?>
<h2><a href="blog/info/<?php echo $v->blogid;?>"><?php echo $v->title?></a>&nbsp;||&nbsp;<a href="blog/update/<?php echo $v->blogid;?>">编辑</a>&nbsp;||&nbsp;<a href="blog/delete/<?php echo $v->blogid;?>">删除</a></h2>
<p><?php echo $v->content?></p>
<p>时间：<?php echo $v->time?></p>
<p>类型：<?php echo $v->type?></p>
<hr />


<?php
	}
?>