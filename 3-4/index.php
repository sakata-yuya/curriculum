
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
 </head>
    <body>

        <?php
            require_once("pdo.php");
            require_once("getData.php");
            
            
            $getData = new getData();
            $result = $getData->getUserData();
            $result2 = $getData->getPostData();

        ?>
        <div class="header clearfix">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="up">
                <?php echo "ようこそ ",$result['last_name'],$result['first_name'],"さん"; ?>
            </div>
            <div class="low">
                <?php echo "最終ログイン日時：", $result['last_login'] ; ?>
            </div>

        </div>
        <div class="main">
            <table>
                <tr><th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th></tr>
                <?php  foreach($result2 as $row){ ?>
                <tr> 
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['title']; ?> </td>
                    <td><?php if ($row['category_no']==1){
                        echo "食事";
                    } elseif ($row['category_no']==2){
                        echo "旅行" ;
                    } else {
                        echo "その他";
                    }
                     ?> </td>
                    <td><?php echo $row['comment']; ?> </td>
                    <td><?php echo $row['created']; ?> </td>      
                </tr> 
                <?php } ?>
             </table>

        </div>
        <div class="footer">
            <p>Y&Igroup.inc</p>
        </div>
    
    
    
    
    
    </body>
</html>