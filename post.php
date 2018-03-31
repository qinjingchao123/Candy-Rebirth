<?php
if (!defined('__TYPECHO_ROOT_DIR__'))
	exit ;
	
if(!isset($_GET['ajaxload'])){
    $this->need('header.php');
    ?><div id="index" class="screen index">
    <div style="margin:40vh auto;text-align:center;">
        <h1 style="font-size:2.3rem">贫困的蚊子</h1>
        <span style="color:#696969;font-size:0.9rem">亦余心之所向兮，虽九死其尤未悔</font>
        <h3></h3>
        <br>
        <a href="#" class="btn" onclick="Move('#archive','#index','right')">Explore Me</a>
    </div>
    
</div>
<div id="archive" class="screen archive">
    <div class="archive-container">
        <div class="author-info">
            <img class="avatar" src="https://secure.gravatar.com/avatar/93f5d0e297fe1c30eb4cf540e214523a?s=90&r=G&d=" />
            <div class="name">贫困的蚊子</div>
            <div class="desc">亦余心之所善兮，虽九死其犹未悔</div>
            <div class="stat">
                <?php $stat = Typecho_Widget::widget('Widget_Stat'); ?>
                <div class="article-count"><?php echo $stat->myPublishedPostsNum ?></div>
                <div class="category-count"><?php echo $stat->categoriesNum ?></div>
                <div class="comment-count"><?php echo $stat->myPublishedCommentsNum ?></div>
            </div>
            <div class="social">
                <a href="https://github.com/Archeb" target="_blank" class="item"><span class="mdi mdi-github-circle"></span> GitHub</a>
                <a href="https://www.zhihu.com/people/archeb" target="_blank" class="item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="15px" style="margin:2px 7px 0 1px;" height="15px" viewBox="0 0 31 33">
      <path style="fill:#333" d="M26.000,28.000 L21.000,33.000 L21.000,28.000 L18.000,28.000 L18.000,5.000 L30.990,5.169 L31.000,5.000 L31.000,28.000 L26.000,28.000 ZM28.000,8.000 L21.000,8.000 L21.000,25.966 L22.000,26.000 L22.000,28.000 L25.853,25.948 L28.000,26.000 L28.000,8.000 ZM11.000,18.000 C9.958,18.010 9.924,17.781 9.877,18.905 C9.847,19.620 9.626,20.326 9.491,21.036 L8.605,23.885 C7.887,25.758 7.075,27.578 5.750,29.136 C4.436,30.679 2.647,30.894 0.797,30.959 C0.509,30.969 0.110,31.015 0.007,30.637 C-0.089,30.282 0.260,30.097 0.487,29.914 C2.436,28.338 3.808,27.190 5.000,25.000 C5.966,23.226 6.684,21.996 7.000,20.000 C7.135,19.145 6.814,17.977 6.000,18.000 C4.488,18.043 1.513,17.985 -0.000,18.000 C-0.049,17.995 0.134,17.516 0.291,17.016 C0.615,15.926 1.373,15.036 2.222,15.052 C3.541,15.076 3.682,14.958 5.000,15.000 C5.835,15.027 7.009,14.868 7.000,14.000 C6.980,12.040 6.945,9.959 7.000,8.000 C7.016,7.438 7.394,7.207 6.862,7.163 C5.133,7.022 4.963,7.101 4.145,8.683 C3.477,9.972 2.099,10.703 0.704,11.049 C-0.049,11.236 0.028,11.210 0.124,10.983 C1.228,8.390 2.427,5.083 3.473,2.478 C3.903,1.408 5.723,0.627 6.776,0.026 C6.776,0.026 7.022,-0.152 6.781,0.596 C6.522,1.402 6.178,2.867 5.891,3.662 C5.590,4.493 5.740,4.923 6.589,4.916 C9.111,4.895 11.772,4.916 14.295,4.916 C14.890,4.916 15.396,4.816 15.769,5.446 C16.982,7.492 16.707,7.146 15.527,7.165 C14.518,7.181 13.008,7.034 12.000,7.000 C11.237,6.974 10.159,7.390 10.124,8.197 C10.030,10.385 9.970,11.999 10.000,14.000 C10.011,14.711 11.496,15.001 12.000,15.000 C13.319,14.998 13.489,15.029 14.808,15.052 C15.885,15.070 16.624,15.943 17.000,17.000 C17.027,17.334 17.269,17.909 17.000,18.000 C15.623,17.986 12.358,17.987 11.000,18.000 ZM15.000,26.000 C15.393,26.583 15.444,27.623 15.000,29.000 C14.912,29.274 14.377,29.137 13.798,28.477 C12.399,26.881 11.116,25.189 9.763,23.555 C9.385,23.098 9.158,22.839 8.985,22.786 L11.000,21.000 C11.922,22.089 14.080,24.910 15.000,26.000 Z"/>
    </svg> Archeb</a>
                <a href="javascript:alert('不存在的')" target="_blank" class="item"><span class="mdi mdi-qqchat"></span> QQ</a>
                <a href="mailto:archebasic@hotmail.com" target="_blank" class="item"><span class="mdi mdi-email"></span> Email</a>
            </div>
        </div>
        <div class="article-list">
            <?php $art=$this->widget('Widget_Archive@indexfenlei', 'pageSize=5&type=index') ?>
            <?php while($art->next()): ?>
            <?php if ($art->fields->previewImage && $art->fields->previewImage!==""): ?>
            <div class="article-with-preview" onclick="showArticle('<?php $art->permalink() ?>')">
                <div class="cover">
                    <div class="cover-image" style="background-image:url(<?php $art->fields->previewImage(); ?>)"><div class="title"><?php $art->title(); ?></div></div>
                    
                </div>
                <div class="content">
                    <div class="text">
                        <?php $art->excerpt(50, '') ?>
                    </div>
                </div>
                <div class="meta">
                    <div class="group">
                        <?php array_map(function($v){echo '<a class="category" href="'.$v['permalink'].'" style="'.$v['description'].'">'.$v['name'].'</a>';},$art->categories) ?>
                    </div>
                    <div class="group date"><?php echo time_elapsed_string('@'.$art->created) ?>前 · <?php $art->author(); ?></div>
                </div>
            </div>
            <?php else: ?>
            <div class="article" onclick="showArticle('<?php $art->permalink() ?>')">
                <div class="title"><?php $art->title(); ?>
                    <div class="meta"><?php array_map(function($v){echo '<a class="category" href="'.$v['permalink'].'" style="'.$v['description'].'">'.$v['name'].'</a>';},$art->categories) ?> <?php $art->author(); ?> · <?php echo time_elapsed_string('@'.$art->created) ?>前</div>
                </div>
                
                <div class="content">
                    <?php $art->content(); ?>
                </div>
            </div>
            <?php endif; endwhile;?>
        </div>
    </div>
</div>
<div id="page" class="screen page move-show" style="overflow-y: scroll;">
    <div class="page-container">
    <?php
	}
?>
<div class="page-wrapper">
    <?php if ($this->fields->previewImage && $this->fields->previewImage!==""): ?>
    <div class="cover">
        <div class="cover-image" style="background-image:url(<?php $this->fields->previewImage(); ?>)">
            <div class="title"><?php $this->title(); ?>
            <div class="meta"><?php array_map(function($v){echo '<a class="category" href="'.$v['permalink'].'" style="'.$v['description'].'">'.$v['name'].'</a>';},$this->categories) ?> <?php $this->author(); ?> · <?php echo time_elapsed_string('@'.$this->created) ?>前</div></div>
        </div>
    </div>
    <?php else: ?>
    <div class="title"><?php $this->title(); ?>
    <div class="meta"><?php array_map(function($v){echo '<a class="category" href="'.$v['permalink'].'" style="'.$v['description'].'">'.$v['name'].'</a>';},$this->categories) ?> <?php $this->author(); ?> · <?php echo time_elapsed_string('@'.$this->created) ?>前</div>
    </div>
    <?php endif; ?>
    <div class="content">
        <?php $this->content(); ?>
    </div>
    <?php $this->need('comments.php'); ?>
</div>
<?php 
if(!isset($_GET['ajaxload'])){
?>
    </div>
</div>

<script>
document.querySelector('#back').style.transform="rotate(90deg)";
document.querySelector(".drop-down").style.transform="translate(0)";
        document.querySelector(".drop-down").style.opacity="1";
    var pageInfo=<?php echo json_encode(
        [
            'currentPage' => $art->_currentPage,
            'total'=> $art->getTotal(),
            'pageSize' => $art->parameter->pageSize,
            'type' => $art->parameter->type
        ]
        )  ?>
</script>
<?php
}
?>