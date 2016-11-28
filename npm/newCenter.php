<?php
session_start();
include_once "db.php";
include_once "header.php";
?>
    <head>
        <meta charset="UTF-8">
        <title>新闻中心</title>
    </head>
    <body>
    <main class="container">
        <h5>首页 / 资讯中心</h5>
        <div class="nerCenter-left">

            <?php
            $news_sql = "select * from newCenter";
            $news_result = mysql_query($news_sql);
            $new_data = array();
            while ($news_row = mysql_fetch_assoc($news_result)) {
                $new_data[] = $news_row;
            }
//            var_dump($new_data);
            echo <<< new
   <ul>
        <li> <img src="img/newslistOpen.jpg"/>
            <h4>集团新闻</h4>
            <ul>


new;
            foreach($new_data as $k=> $v){
                if($v['集团新闻']!=""){
                   echo<<<main
                    <li><div></div><a href="#">{$v['集团新闻']}</a></li>
main;
                }
            }
            echo <<<report
                </ul>
           </li>
           <li> <img src="img/newslistOpen.jpg"/>
           <h4>新闻报道</h4>
                <ul>
report;
            foreach($new_data as $k=> $v) {
                if ($v['新闻报道'] != ""){
                    echo <<<main
                    <li><div></div><a href="#">{$v['新闻报道']}</a></li>
main;
                }

            }
            echo <<<report
                </ul>
            </li>
            <li> <img src="img/newslistOpen.jpg"/>
                    <h4>视频报道</h4>
                 <ul>
report;
            foreach($new_data as $k=> $v){
                if($v['视频报道']==''){}else{
                    echo <<< main
                    <li><div></div><a href="#">{$v['视频报道']}</a></li>

main;
                }

            }

            echo <<<report
                </ul>
            </li>
            <li> <img src="img/newslistOpen.jpg"/>
            <h4>专家讲堂</h4>
                <ul>
report;
            foreach($new_data as $k=> $v) {
                if ($v['专家讲堂'] != '') {

                    echo <<< main
                    <li><div></div><a href="#">{$v['专家讲堂']}</a></li>

main;
                }
            }

            echo <<<report
                </ul>
            </li>
            <li> <img src="img/newslistOpen.jpg"/>
            <h4>育儿知识堂</h4>
                <ul>
report;
            foreach($new_data as $k=> $v){
                if($v['育儿知识堂']!=''){
                    echo <<< main
                    <li><div></div><a href="#">{$v['育儿知识堂']}</a></li>
main;
                }

            }


            echo <<< end
                </ul>
            </li>
        </ul>

end;




            ?>
        </div>

<div class="newCenter ">
        <ul class="nav nav-pills newCenter-content">
            <li class="active title"><a href="#">集团新闻</a></li>
            <li class="title"><a href="#">新闻报道</a></li>
            <li class="title"><a href="#">视频报道</a></li>
            <li class="title"><a href="#">专家讲堂</a></li>
            <li class="title"><a href="#">育儿知识堂</a></li>
        </ul>
        <ul id="contentNews"></ul>
</div>
    </main>
</body>
<?php
    include_once "footer.php";
?>
<script>
   $(function(){
       $(".title").on("click",function(){
           $(".title").attr('class','title').css("background","none");
           $(this).attr('class','title active').css("background","skyblue")
           var news=$(this).find('a').html()
           $.ajax({
               type: "POST",
               data: {
                   news: news
               },
               url: 'data.php',
               dataType: "",
               success: function (data) {
//                   alert($(data))
                   $("#contentNews").empty();
                   $("#contentNews").append($(data));

               },
               error: function (data) {
                   alert('数据传输失败')
                   console.log(data)
               }
           })
       })
       $(".title").trigger("click");
   })

</script>
