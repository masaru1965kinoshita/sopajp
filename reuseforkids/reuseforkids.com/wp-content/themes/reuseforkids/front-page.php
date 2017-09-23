<?php
			/*
				Template Name: html2wp-front-page
			*/

			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<link href="<?php  bloginfo('template_url');  ?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php  bloginfo('template_url');  ?>/css/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php  bloginfo('template_url');  ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?php  bloginfo('template_url');  ?>/css/index.css" rel="stylesheet" type="text/css">
<?php  wp_head();  ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">
  <div id="header">
    <p>平成２７年度　環境省使用済製品リユースモデル事業に採択されました。</p>
    <div id="logo">
     <h1><a href="<?php  html2wp_the_page_link( 'index.php' );  ?>"><img src="<?php  bloginfo('template_url');  ?>/images/logo_01.jpg" alt="リユースforきっず 広げよう!リユースと教育がつながるあたらしい社会貢献のかたち" width="355" height="120" id="RFK_logo_01"></a></h1>
    </div>
  <div id="contact_1">
    <h2><a href="<?php  html2wp_the_page_link( 'contact.php' );  ?>">お申し込み・お問い合わせ</a></h2>
  </div>
  <div id="nav_A">
  <ul>
    <li id="navA_01"><a href="<?php  html2wp_the_page_link( 'corporation.php' );  ?>">リユースで社会貢献したい法人の方へ</a></li>
    <li id="navA_02"><a href="<?php  html2wp_the_page_link( 'general.php' );  ?>">リユースで社会貢献したい一般の方へ</a></li>
    <li id="navA_03"><a href="<?php  html2wp_the_page_link( 'educators.php' );  ?>">プログラムを受けたい教育関係・団体の方へ</a></li>
  </ul>
  </div>
  <div id="nav_B">
  <ul>
    <li id="navB_01"><a href="<?php  html2wp_the_page_link( 'concept.php' );  ?>">コンセプト</a></li>
    <li id="navB_02"><a href="<?php  html2wp_the_page_link( 'project.php' );  ?>">プロジェクト概要</a></li>
    <li id="navB_03"><a href="<?php  html2wp_the_page_link( 'program.php' );  ?>">教育プログラム紹介</a></li>
    <li id="navB_04"><a href="<?php  html2wp_the_page_link( 'activities.php' );  ?>">活動実績</a></li>
    <li id="navB_05"><a href="<?php  html2wp_the_page_link( 'questions.php' );  ?>">よくある質問</a></li>
    <li id="navB_06"><a href="<?php  html2wp_the_page_link( 'partner.php' );  ?>">パートナー企業</a></li>
  </ul>
  </div>
</div>
<div id="content">
  <div id="top1">
    <p><img src="<?php  bloginfo('template_url');  ?>/images/top_image02.jpg" alt="リユースでこどもたちにやさしい未来をー" width="960" height="450" id="top_image"></p>
    <p>『リユース for きっず』は、<br>いらなくなったPCや本を捨てずに寄付（リユース）することで、<br>
      こどもたちにタブレットと楽しい時間（教育プログラム）を贈ることができる、<br>
      「あたらしいかたち」の社会貢献です。</p>
  </div>
  <div id="top2">
  <ul>
    <li id="by_pc"><a href="<?php  html2wp_the_page_link( 'project.php' );  ?>#byPC">By PC</a></li>
    <li id="by_book"><a href="<?php  html2wp_the_page_link( 'project.php' );  ?>#byBOOK">By Book</a></li>
  </ul>
  </div>
  <div id="top3">
    <div id="kyoiku_p">
  <h2><a href="<?php  html2wp_the_page_link( 'program.php' );  ?>">教育プログラム</a></h2>
    </div>
    <div id="kyoiku_p_youtube">
<iframe width="409" height="230" src="https://www.youtube.com/embed/dJs-M6sn-4I" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="Kyoiku_tittle">
      <p><a href="<?php  html2wp_the_page_link( 'program.php' );  ?>">いらなくなったPCや本を寄付してこどもたちに贈る教育プログラム</a></p>
</div>
  </div>
  <div id="top4">
    <div id="nav_C">
      <ul>
    <li id="navC_01"><a href="<?php  html2wp_the_page_link( 'corporation.php' );  ?>">リユースで社会貢献したい法人の方へ</a></li>
    <li id="navC_02"><a href="<?php  html2wp_the_page_link( 'general.php' );  ?>">リユースで社会貢献したい一般の方へ</a></li>
    <li id="navC_03"> <a href="<?php  html2wp_the_page_link( 'educators.php' );  ?>">プログラムを受けたい教育関係・団体の方へ</a>
</li>
  </ul>
    </div>
</div>
<div id="footer">
  <div id="message">
    <p>このプロジェクトは行政・企業・ＮＰＯが連携して、環境配慮とこどもたちの未来のお手伝いをしています。</p>
  </div>
  <div id="column1">
    <div id="footer_logo">
      <p><a href="<?php  html2wp_the_page_link( 'index.php' );  ?>"><img src="<?php  bloginfo('template_url');  ?>/images/logo_01s.png" alt="リユースforきっず" width="281" height="90" id="RFK_logo_02"></a></p>
    </div>
    <div id="RFK_Secretariat">
      <h2>リユースforきっず プロジェクト事務局<br>
        （NPO法人sopa.jp内）</h2>
      <p>〒112-0002<br>
        <a href="https://www.google.co.jp/maps/place/%E3%80%92112-0002+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%87%E4%BA%AC%E5%8C%BA%E5%B0%8F%E7%9F%B3%E5%B7%9D%EF%BC%95%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%93%E2%88%92%EF%BC%97/@35.7175664,139.7385232,17z/data=!3m1!4b1!4m2!3m1!1s0x60188dae72495d37:0x5d78e0fc3f3a4a08?hl=ja" id="adress">東京都文京区小石川5-13-7マンションSHIN101</a><br>
        TEL:070-5464-3070</p>
     </div>
    <div id="SNS">
      <p>プロジェクトへの参加・拡散のご協力をお願いいたします。</p>
      <div class="fb-like" data-href="https://www.facebook.com/sopa.jp" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
      <div class="tweet"> <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/sopa_jp">Tweet</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </div>
      </div>
  </div>
    <div id="column2">
      <div id="partner">
        <h2>●パートナー企業</h2>
       <ul>
        <li><a href="http://www.prins.co.jp/" target="_blank"><img src="<?php  bloginfo('template_url');  ?>/images/PCNET_logo_S.png" alt="株式会社パシフィックネット" width="225" height="30" id="PCNET_logo"></a></li>
        <li><a href="https://www.valuebooks.jp/" target="_blank"><img src="<?php  bloginfo('template_url');  ?>/images/valuebooks_logo_S.png" alt="株式会社バリューブックス" width="167" height="30" id="VB_logo"></a></li>
       </ul>
      </div>
    <div id="produce">
      <h2>●
      プロデュース</h2>
        <p><a href="http://www.sopa.jp/" target="_blank"><img src="<?php  bloginfo('template_url');  ?>/images/SOPA_logo_S.png" alt="sopa.jp" width="146" height="35" id="sopa_logo"></a></p>
      </div>
     <p><a href="http://www.env.go.jp/" target="_blank"><img src="<?php  bloginfo('template_url');  ?>/images/kankyosyo.png" alt="平成２７年度　環境省使用済製品リユースモデル事業採択" width="550" height="48" id="kankyosyo"></a></p>
    </div>
    </div>
  </div>
  <div id="sitemap">
  <ul>
  <li id="f_01"><a href="<?php  html2wp_the_page_link( 'corporation.php' );  ?>">法人の方へ　|</a></li>
  <li id="f_02"><a href="<?php  html2wp_the_page_link( 'general.php' );  ?>">一般の方へ　|</a></li>
  <li id="f_03"><a href="<?php  html2wp_the_page_link( 'educators.php' );  ?>">教育関係・団体の方へ　|</a></li>
  <li id="f_04"><a href="<?php  html2wp_the_page_link( 'concept.php' );  ?>">コンセプト　|</a></li>
  <li id="f_05"><a href="<?php  html2wp_the_page_link( 'project.php' );  ?>">プロジェクト概要　|</a></li>
  <li id="f_06"><a href="<?php  html2wp_the_page_link( 'program.php' );  ?>">教育プログラム紹介　|</a></li>
  <li id="f_07"><a href="<?php  html2wp_the_page_link( 'activities.php' );  ?>">活動実績　|</a></li>
  <li id="f_08"><a href="<?php  html2wp_the_page_link( 'questions.php' );  ?>">よくある質問　|</a></li>
  <li id="f_09"><a href="<?php  html2wp_the_page_link( 'partner.php' );  ?>">パートナー企業・団体</a></li>
  </ul>
  </div>
    <p id="copyright">Copyright © リユースforきっず, All rights reserved.</p>
</div>
<?php  wp_footer();  ?>
</body>
</html>
