<?php
			/*
				Template Name: html2wp-readme
			*/

			?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php  wp_title( '|', true, 'right' );  ?>
</title>
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/wp-admin/css/install.css?ver=20100228" type="text/css">
<?php  wp_head();  ?>
</head>
<body>
<h1 id="logo">
	<a href="https://wordpress.org/"><img alt="WordPress" src="<?php  bloginfo('template_url');  ?>/wp-admin/images/wordpress-logo.png"></a>
	<br> Version 4.7
</h1>
<p style="text-align: center">セマンティックな個人情報発信プラットフォーム</p>

<h1>はじめに</h1>
<p>ようこそ。WordPress は私にとってとても特別なプロジェクトです。各開発者や貢献者が独自なものをそこに加え、みんなで一緒に美しいものを作り上げています。私はその一翼を担っていることを誇りに思います。たいへん多くの時間をかけて、WordPress をよりよいものにしようと私たちは日々力を注いでいます。WordPress を選んでいただきありがとうございます。</p>
<p style="text-align: right">— Matt Mullenweg</p>

<h1>インストール: 5分でインストール</h1>
<ol>
	<li>zip ファイルを空のディレクトリに展開します。そしてすべてのファイルをアップロードしてください。</li>
	<li>
<span class="file"><a href="<?php  bloginfo('template_url');  ?>/wp-admin/install.php">wp-admin/install.php</a></span> をブラウザーで開きます。これによりデータベース接続のための<code>wp-config.php</code> の設定を行います。
		<ol>
			<li>何らかの理由でこれがうまくいかなくても、心配しないでください。すべてのウェブホストでうまくいくわけではないのです。テキストエディター (訳注: 日本語版の場合、UTF-8 BOMなし (または UTF-8N) で保存できるエディターを用いてください。Windows の『メモ帳』は用いないでください) で <code>wp-config-sample.php</code> を開き、データベースの接続情報を記入してください。</li>
			<li>このファイルの名前を <code>wp-config.php</code> として保存し、アップロードしてください。</li>
			<li>
<span class="file"><a href="<?php  bloginfo('template_url');  ?>/wp-admin/install.php">wp-admin/install.php</a></span> をブラウザーで開いてください。</li>
		</ol>
	</li>
	<li>いったん設定ファイルを設置すると、あなたのブログに必要なデータベースのテーブルが設置されるはずです。もしエラーが発生するようなら <code>wp-config.php</code> ファイルをもう一度確認し、再度このインストーラーを試してください。それでも失敗する場合は、できるだけ多くのデータを集めて<a href="https://wordpress.org/support/">サポートフォーラム (英語)</a> (<a href="http://ja.forums.wordpress.org/">WP 日本語フォーラム</a>) に行ってください。</li>
	<li>
<strong>パスワードを入力しなかった場合、パスワードは自動生成されますので、これをメモしてください。</strong>ユーザー名を入力しなかった場合、ユーザー名は <code>admin</code> になります。</li>
	<li>その後、このインストーラはあなたを<a href="<?php  bloginfo('template_url');  ?>/wp-login.php">ログインページ</a>に案内するはずです。前に選んだユーザー名とパスワードでログインしてください。自動生成のパスワードを使った場合、管理画面の「プロフィール」をクリックしてパスワードを変更することができます。</li>
</ol>

<h1>更新</h1>
<h2>自動更新機能の利用</h2>
<p>バージョン 2.7 以上をお使いなら、自動更新機能が使えます。</p>
<ol>
	<li>
<span class="file"><a href="<?php  bloginfo('template_url');  ?>/wp-admin/update-core.php">wp-admin/update-core.php</a></span> をブラウザーで開き、指示に従います。</li>
	<li>もっと何かしたかったですか ? これだけです !</li>
</ol>

<h2>手動更新</h2>
<ol>
	<li>更新前に、<code>index.php</code> など変更した可能性のあるすべてのファイルのバックアップコピーを必ずとってください。</li>
	<li>変更したファイルを保存し、古い WordPress のファイルを削除します。</li>
	<li>新しいファイルをアップロードします。</li>
	<li>ブラウザーで <span class="file"><a href="<?php  bloginfo('template_url');  ?>/wp-admin/upgrade.php">/wp-admin/upgrade.php</a></span> にアクセスします。</li>
</ol>

<h1>他のシステムからの移行</h1>
<p>WordPress は <a href="https://codex.wordpress.org/Importing_Content">多くのブログシステムからインポート (英語)</a> (<a href="http://wpdocs.sourceforge.jp/Importing_Content" title="Importing_Content - WordPress Codex 日本語版">日本語</a>)することができます。まずは上記のように WordPress をインストールして動作させてください。その後に、<a href="<?php  bloginfo('template_url');  ?>/wp-admin/import.php" title="Import to WordPress">インポートツール</a>を使ってください。</p>

<h1>動作環境</h1>
<ul>
	<li>
<a href="http://php.net/">PHP</a> バージョン <strong>5.2.4</strong> 以上</li>
	<li>
<a href="http://www.mysql.com/">MySQL</a> バージョン <strong>5.0</strong> 以上</li>
</ul>

<h2>推奨環境</h2>
<ul>
	<li>
<a href="http://php.net/">PHP</a> バージョン <strong>7</strong> 以上</li>
	<li>
<a href="http://www.mysql.com/">MySQL</a> バージョン <strong>5.6</strong> 以上</li>
	<li>Apache の <a href="http://httpd.apache.org/docs/2.2/mod/mod_rewrite.html">mod_rewrite</a> モジュール</li>
	<li>
<a href="https://ja.wordpress.org/2016/12/02/moving-toward-ssl/">HTTPS</a> のサポート。</li>
	<li>あなたのサイトに <a href="https://wordpress.org/">https://wordpress.org</a> へのリンクを。</li>
</ul>

<h1>オンラインの資料</h1>
<p>もしこの文書にあなたの疑問への答が見つからなかったら、ぜひ WordPress の豊富なオンライン資料を利用してください。</p>
<dl>
	<dt>
<a href="https://codex.wordpress.org/">The WordPress Codex (英語)</a> (<a href="http://wpdocs.sourceforge.jp/">WordPress Codex 日本語版</a>)</dt>
		<dd>Codex は WordPress のすべてについての百科事典です。WordPress に関する最も総合的な情報源です。</dd>
	<dt>
<a href="https://wordpress.org/news/">開発ブログ (英語)</a> (<a href="http://ja.wordpress.org/" title="WordPress | 日本語">日本語訳</a>)</dt>
		<dd>ここでは WordPress に関する最新のアップデートやニュースを知ることができます。最新の WordPress 開発ニュースは、デフォルトで管理ダッシュボードに表示されます。</dd>
	<dt><a href="https://planet.wordpress.org/">WordPress Planet (英語)</a></dt>
		<dd>WordPress Planet はウェブ中の WordPress からの投稿を集めたニュースアグリゲーターです。</dd>
	<dt>
<a href="https://wordpress.org/support/">WordPress サポートフォーラム (英語)</a> (<a href="http://ja.forums.wordpress.org/">WP 日本語フォーラム</a>)</dt>
		<dd>隅々まで探しまわってもなお答が見つからない場合、とても活発で大きなコミュニティを持つサポートフォーラムが役に立つでしょう。助けてもらうコツは、分かりやすいスレッドタイトルをつけて、質問の内容をなるべく詳しく書くようにすることです。</dd>
	<dt><a href="https://codex.wordpress.org/IRC">WordPress <abbr title="Internet Relay Chat">IRC</abbr> チャンネル (英語)</a></dt>
		<dd>WordPress を使っている人たちの話し合いに使用されているオンラインのチャットチャンネルがあり、時おりここでサポートに関する話題も扱っています。上記 wiki ページで案内されています。(<a href="irc://irc.freenode.net/wordpress">irc.freenode.net #wordpress</a>)</dd>
</dl>

<h1>おわりに</h1>
<ul>
	<li>提案、アイディア、コメントをお持ちだったり、あるいはバグ (うわっ !) を見つけたら、<a href="https://wordpress.org/support/">サポートフォーラム (英語)</a> (<a href="http://ja.forums.wordpress.org/">WP 日本語フォーラム</a>) に参加してみませんか ?</li>
	<li>WordPress はコードを簡単に拡張するための堅牢なプラグイン <abbr title="application programming interface">API</abbr> を備えています。この利用に興味のある開発者は <a href="https://codex.wordpress.org/Plugin_API">Codex のプラグインドキュメント (英語)</a> (<a href="http://wpdocs.sourceforge.jp/%E3%83%97%E3%83%A9%E3%82%B0%E3%82%A4%E3%83%B3_API" title="プラグイン API - WordPress Codex 日本語版">日本語</a>) を参照してください。 ほとんどの場合、コアコードを変更するべきではありません。</li>
</ul>

<h1>分かちあい</h1>
<p>WordPress には数百万ドルのマーケティングキャンペーンもなければ有名なスポンサーもいませんが、それよりもっとすばらしいみなさんがいます。もしあなたが WordPress を楽しんでくれているのなら、友達にそれを伝えてください。自分よりまだ WordPress の知識がない人のためにセットアップの手助けをしてください。あるいは、WordPress を見落としているメディアのライターにメールを送ってください。</p>

<p>WordPress は、Michel V がはじめた <a href="http://cafelog.com/">b2/cafélog</a> を公式に引き継いだブログツールです。作業は <a href="https://wordpress.org/about/">WordPress の開発者たち</a>によって続けられています。WordPress に支援をしていただけるのなら、どうか<a href="https://wordpress.org/donate/">寄付</a>をご検討ください。</p>

<h1>ライセンス</h1>
<p>WordPress は <abbr title="GNU General Public License">GPL</abbr> バージョン 2 またはそれ以降の (あなたの選択する) 任意のバージョンの条件に基づいてリリースされているフリーソフトウェアです。<a href="<?php  bloginfo('template_url');  ?>/license.txt">license.txt</a> を参照してください。</p>

<?php  wp_footer();  ?>
</body>
</html>
