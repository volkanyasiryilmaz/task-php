<?php 
    $data = '{
        "comments": [
            {
                "title": "Yorum 1- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                "content": "içerik 1",
                "comment_to_comment": null
            },
            {
                "title": "Yorum 2- ",
                "content": "içerik 2",
                "comment_to_comment": "Yoruma yorum 2"
            },
            {
                "title": "Yorum 3",
                "content": "içerik 3",
                "comment_to_comment": ""
            },
            {
                 "title": "Yorum 4- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                "content": "içerik 4",
                "comment_to_comment": "yoruma yorum 4- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            },
            {
                 "title": "Yorum 5",
                "content": "içerik 5",
                "comment_to_comment": null
            }
        ]
    }
';

    $data = json_decode($data, true);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VatanSoft Task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,800;0,900;1,200;1,300;1,400;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      
        
        .comments{
            width:80%;
            margin-left: auto;
            margin-right: auto;
            padding: 16px;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            display: flex;
            gap:40px;
            flex-direction:column;
        }
        .comment{
            background: aliceblue;
            padding: 10px;
            border-radius: 20px;
        }
        .comment-author{
            display: flex;
            gap: 20px;
        }
        .comment-author img{
            width: 50px;
            height: 50px;
            border-radius: 25px;
        }
        .author-name{
            font-weight: 800;
        }
        .comment-date{
            font-weight: 300;
            font-style:italic;
        }
        .comment-info{
            position: relative;
        }
        .comment-info svg{
            position: absolute;
            right: 0;
            top: -72px;
            opacity: 0.3;
            rotate: -10deg;
        }
        .comment-info p{
            font-style: italic;
        }
        .comment-to-comment{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .comment-to-comment-info{
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 0;
            
        }
        .comment-to-comment h3{
            margin-bottom: 4px;
        }
        .comment-to-comment-info p{
            margin: 0;
        }
        .comment-to-comment-date{
            font-style:italic;
            zoom: 0.8
        }
    </style>
</head>
<body>


    <div class="comments">
      <?php 
            foreach($data["comments"] as $comment ){
        ?>
            <div class="comment">
            <div class="comment-content">
                <div class="comment-author">
                    <img src="https://media.licdn.com/dms/image/D4D35AQGt3710G-KY6w/profile-framedphoto-shrink_200_200/0/1681442349239?e=1695236400&v=beta&t=W94TEdd00xIxDoPGr5No-aW_cNYNgkC9aZVtHX8ItB8" alt="author">
                    <p class="author-name">Volkan Yasir Yılmaz</p>
                    <p class="comment-date">01 Eylül 2023</p>
                </div>
                <div class="comment-info">
                    <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0V24H15C15 32.82 8.27625 40 0 40V48C12.4069 48 22.5 37.234 22.5 24V0H0Z" fill="#4E4E50"/>
                        <path d="M37.5 0V24H52.5C52.5 32.82 45.7763 40 37.5 40V48C49.9069 48 60 37.234 60 24V0H37.5Z" fill="#4E4E50"/>
                    </svg>
                    <h3>
                        <?=$comment["title"]?>
                    </h3>
                    <p>
                        <?=$comment["content"]?>
                    </p>
                </div>
            </div>
            <?php 
                if(!$comment["comment_to_comment"]=="null"){

                
            ?>
            <div class="comment-to-comment">
                <h3>Comment to comment</h3> 
                <div class="comment-to-comment-info">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ab aliquam placeat?</p>    
                    <p class="comment-to-comment-date">— 03 Eylül 2023</p>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
            }
        ?>
    </div>    
</body>
</html>