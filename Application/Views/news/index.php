<?php
    $params     = $this->getParams();
    $articles   = $params['articles'];
    $spotlight  = $params['spotlight'];
    //print_r($spotlight);
?>
<div class="row">
<!--colleft-->
<div class="col-md-8 col-sm-12">
	<div class="box-caption">
		<span>spotlight</span>
	</div>
	<!--spotlight-->
	<section class="owl-carousel owl-spotlight">
		<div>
			<article class="spotlight-item">
				<div class="spotlight-img">
					<img alt="" src="images/product/16.jpg" class="img-responsive" />
					<a href="#" class="cate-tag">Mobile</a>
				</div>
				<div class="spotlight-item-caption">
					<h2 class="font-heading">
						<a href="article.html">
							7 essential lessons from agency marketing to startup growth
						</a>
					</h2>
					<div class="meta-post">
						<a href="#">
							Super User
						</a>
						<em></em>
						<span>
							24 Sep 2016
						</span>
					</div>
					<p>When Microsoft took to the stage at this year's E3 it announced not one but two new consoles: the Xbox One S, which went on sale earlier this year, and Project Scorpio,which will enable gaming at native resolutions up to 4K when it hits store shelves in 2017. </p>
				</div>
			</article>
		</div>
		<div>
			<article class="spotlight-item">
				<div class="spotlight-img">
					<img alt="" src="images/product/1.jpg" class="img-responsive" />
					<a href="#" class="cate-tag">Computing</a>
				</div>
				<div class="spotlight-item-caption">
					<h2 class="font-heading">
						<a href="article.html">
							Windows 10 Now Running on 400 Million Active Devices, Says Microsoft
						</a>
					</h2>
					<div class="meta-post">
						<a href="#">
							Ashley Ford
						</a>
						<em></em>
						<span>
							26 Sep 2016
						</span>
					</div>
					<p>Microsoft had set an ambitious goal for itself of having Windows 10 running on 1 billion active devices by FY18 at the launch of its software platform. However, back in July, the company acknowledged that due to lack of traction in its smartphone business, it might take longer to achieve this target</p>
				</div>
			</article>
		</div>
		<div>
			<article class="spotlight-item">
				<div class="spotlight-img">
					<img alt="" src="images/product/2.jpg" class="img-responsive" />
					<a href="#" class="cate-tag">Mobile</a>
				</div>

				<div class="spotlight-item-caption">
					<h2 class="font-heading">
						<a href="article.html">
							iOS 10 Backups Less Secure Than iOS 9, Claims Researcher
						</a>
					</h2>
					<div class="meta-post">
						<a href="#">
							Super User
						</a>
						<em></em>
						<span>
							24 Sep 2016
						</span>
					</div>
					<p>A security research company based in Moscow claims to have discovered a flaw in Apple's local password protected iTunes backups in iOS 10, a flaw that is said to weaken password security. According to ElcomSoft's Oleg Afonin, the security flaw lets attackers develop a new attack that can bypass certain security </p>
				</div>
			</article>
		</div>
	  
	</section>

	<!--spotlight-thumbs-->
	<section class="spotlight-thumbs">
		<div class="row">
		<?php foreach($articles as $article) : ?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="spotlight-item-thumb">
					<div class="spotlight-item-thumb-img">
						<a href="#">
							<img alt="<?= $article->getTITREARTICLE(); ?>" src="<?= PUBLIC_URL; ?>/images/product/<?= $article->getFEATUREDIMAGEARTICLE(); ?>" />
						</a>
						<a href="#" class="cate-tag"><?= $article->getCategorieObj()->getLIBELLECATEGORIE(); ?></a>
					</div>
					<h3><a href="#"><?= $article->getTITREARTICLE(); ?></a></h3>
					<div class="meta-post">
						<a href="#">
							<?= $article->getAuteurObj()->getNOMCOMPLET(); ?>
						</a>
						<em></em>
						<span>
							<?= $article->getDATECREATIONARTICLE(); ?>
						</span>
					</div>
				</div>
			</div>
		<?php endforeach; ?>	
		</div>
	</section>
</div>

<?php include SIDEBAR_SITE; ?>

















