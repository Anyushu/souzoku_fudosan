<?php get_header(); ?>
<section class="kv">
<div class="container">
<h2><?php the_title(); ?></h2>
</div>
</section>

<section class="tax sec bg-gray">
<div class="container">

<p class="text-md-center text-left mb-5">遺産相続の際に出てくる問題の一つとして相続税があります。
<br>悪意はないのに納税義務を果たさずにトラブルなんてことも。
<br>内容を理解すればそこまで複雑な話ではないので仕組みを一つずつ理解していきましょう。</p>

<div class="tax__wrap mb-5">
<h2 class="ttl__h2 text-center">相続税とは</h2>
<div class="fuyouhin__wrap__toha__flex">
<div class="fuyouhin__wrap__toha__flex__img">
<img src="<?php e_img_url(); ?>/tax_img_1.png" alt="相続税とは">
</div>
<div class="fuyouhin__wrap__toha__flex__txt">亡くなった方の遺産を相続で受け継ぎ、その遺産総額にかかる税金を指します。相続税には基礎控除という仕組みがあり、相続税が0円になることもあります。しかし、基本的には相続を受け取る際はそこに税金がかかるという認識を持っておきましょう。
<br>相続税が発生する財産としては、大きく分けて「不動産」、「金融財産」、「その他」の3つ。その他の部分に関しては、自動車や家具といった動産や著作権、特許権など各種権利等が含まれます。
<br>基本的にお金に変換できるものは全て対象になるという理解をしておきましょう。</div>
</div>

<h3 class="ttl__h3 mt-md-5 mt-4">納税義務のある人</h3>
<p class="small">原則、遺産相続人もしくは遺贈を受けた人に納税義務が発生します。
<br>相続税は<span class="text-primary big">遺産の相続の開始、つまり手続きがはじまったことを知った日の翌日から10ヶ月以内に申告し、納付しなければならない</span>と法律で定められています。
<br>しかし、課税遺産総額がマイナスのときに申告は必要ありませんので、申告書を書く前にまずは相続した財産をすべて計算してみましょう。</p>

<h3 class="ttl__h3 mt-md-5 mt-4">計算方法</h3>
<p class="small">基礎控除とは相続する人に対して、一律して控除(課税されない金額)が適用される制度です。
<br><span class="text-primary big">「相続税の基礎控除額＝3,000万＋600万×法定相続人の数」</span>
<br>それを踏まえた上で、相続税の計算式はこちらです。</p>
<p class="shiki">課税遺産総額＝
<br>遺産の総額＋死亡した時点からさかのぼって3年間で贈与した財産の金額－借金などの債務葬式費用の控除額－基礎控除額</p>
<p class="small">遺産総額から葬式の費用などを控除し、更にそこから基礎控除も適用します。
<br>ここで重要なのは、課税遺産総額がマイナスのときは、相続税が発生しないということです。
<br>つまり相続税が0円となります。</p>

<h3 class="ttl__h3 mt-md-5 mt-4">相続税が発生した際の税率</h3>
<div class="table-responsive">
<table class="table tax__wrap__table">
<thead>
<tr>
<th>課税価格</th>
<th>税率</th>
<th>控除額</th>
</tr>
</thead>
<tbody>
<tr>
<td>1,000万円以下</td>
<td>10%</td>
<td>‐</td>
</tr>
<tr>
<td>3,000万円以下</td>
<td>15%</td>
<td>50万円</td>
</tr>
<tr>
<td>5,000万円以下</td>
<td>20%</td>
<td>200万円</td>
</tr>
<tr>
<td>1億円以下</td>
<td>30%</td>
<td>700万円</td>
</tr>
</tbody>
</table>
</div>
<p class="small">先程ご紹介した計算式で課税遺産総額がプラスになったとき、そのプラスの金額によって税率が変わります。
<br>その税率についてはこちらで紹介している表を参考にしてください。
<br>また、1,000万を超えてからは控除税率とは別で固定での控除も発生します。</p>
<p class="small">例）課税総額が2,000万の場合。
<br>「2,000万×0.15－50万＝250万」</p>

<h3 class="ttl__h3 mt-md-5 mt-4">計算の事例</h3>
<div class="tax__wrap__case">
<h4><span>事例1</span>法定相続人は配偶者と子供4人の合計5人で遺産総額5,000万。</h4>
<p class="mb-0">「基礎控除額＝3,000万＋5人×600万＝6,000万」
<br>「課税遺産総額＝5,000万－6,000万＝－1,000万」
<br>この場合、課税遺産総額はマイナスとなったので相続税は発生しません。</p>
</div>
<div class="tax__wrap__case mb-0">
<h4><span>事例2</span>上記と同じ条件で遺産総額が9,000万。</h4>
<p class="mb-0">「基礎控除額＝6,000万(事例1と同じ計算)」
<br>「課税遺産総額＝9,000万―6,000万＝3,000万」
<br>「相続税＝3,000万×0.15―50万＝400万」
<br>課税遺産総額が大きくなるほど相続税は大きくなるのでその辺りは理解しておきましょう。</p>
</div>
</div>

<div class="tax__wrap mb-5">
<h2 class="ttl__h2 text-center">申告の流れ</h2>
<div class="fuyouhin__wrap__toha__merit__list">
<ul>
<li><span>1</span>死亡から7日以内に死亡届を役所に提出</li>
<li><span>2</span>戸籍謄本を収集し相続人の特定</li>
<li><span>3</span>相続人の承認</li>
</ul>
<ul>
<li><span>4</span>相続財産の評価及び財産目録の作成</li>
<li><span>5</span>遺産分割協議書の作成</li>
<li><span>6</span>相続税申告書の提出と相続税の納付</li>
</ul>
</div>
<h3 class="ttl__h3 mt-md-5 mt-4">必要書類</h3>
<p class="small mb-2">相続税申告書などの必要な書類は国税局のHPからダウンロードできます。
<br>量が膨大にあるため、国税局に電話をして必要な書類を確認することをおすすめします。</p>
<div class="useful__list__inner__info__txt position-static w-100">
<a class="position-static text-left small" href="https://www.nta.go.jp/taxes/tetsuzuki/shinsei/annai/sozoku-zoyo/annai/r01.htm" target="_blank"><i class="fas fa-caret-right"></i><span>詳しくはこちら</span></a>
</div>
<h3 class="ttl__h3 mt-md-5 mt-4">納付方法</h3>
<p class="small mb-0">原則、申告期限10ヶ月以内に現金一括払いで納税することになっています。
<br>現在は税務署以外にゆうちょ銀行などの金融機関の窓口で納税することも可能です。
<br>ただ、納税に必要な現金をいきなり何百万円も用意するのは難しいかもしれません。
<br>金融機関の中には、納税の資金調達のためのローンを低金利で組めるプランなどを出しているところもありますので、相談をしてみるのも一つの手でしょう。</p>
<h3 class="ttl__h3 mt-md-5 mt-4">トラブルの事例</h3>
<p class="small mb-0">遺産分割協議ができていないために納税ができていないというケースがあります。
<br>申告と納税は先述した通り10か月以内に行わなければなりませんが、相続を開始してからはやることも多く、申告期限に間に合わないことも少なくありません。
<br>間に合わない場合は仮申告で済ませ、のちに修正申告で是正するケースも手段としてありますが、その際に税務署とトラブルになる場合があります。
<br>修正申告もしくは期限後の申告においては原則、「延滞税」や「過少申告加算税」といったペナルティが課せられますので注意が必要です。
<br>延滞税は本来の申告期限から起算されるため、誤りが判明した際には早めに手続きしましょう。</p>
</div>

<h3 class="h5 text-center text-primary mb-4">遺産相続時は相続税が発生するという認識を持とう</h3>
<p class="text-center mb-0">遺産相続があった際は基本的に相続税が発生するという認識を持つようにしましょう。
<br>実際に計算した結果、相続税が発生しないということもありますが、
<br>相続を受けた際は必ず計算をするように徹底することでトラブルを避けることが可能です。
<br>納税義務が発生しているのに気づかず法を無視していたというのはよくあることなので、
<br>遺産相続の際は皆さん気をつけましょう。</p>
</div>
<!-- container -->
</section>
<?php get_footer();
