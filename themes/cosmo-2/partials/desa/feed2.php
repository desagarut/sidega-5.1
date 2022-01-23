<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!--  Feed dari situs lain -->
	<div class="newsfeed">
	<?php if ($feed2['items2']): ?>
    <h3 class="content__heading --mb-4 "><i class="fa fa-newspaper-o"></i> <a href="<?= $feed2['url']?>" target='_blank'><?= $feed2['title'] ?></a></h3>
    
    <?php foreach ($feed2['items2'] as $data): ?>
    <ul class="content__list">
        <li class="content__item">
            <a href="" class="content__thumbnail">
                <img src="<?= $data['IMG'] ?>" alt="" class="content__image">
            </a>
            <div class="content__caption">
                <h4 class="content__title"><a href="<?= $data['LINK'] ?>" target="_blank" class="content__link"><?= $data["TITLE"] ?></a></h4>
                <div class="content__meta">
                    <span class="content__meta__item"><i class="fa fa-calendar content__meta__icon"></i> <?= gmdate("d-M-Y H:i:s", $data['PUBDATE']) ?></span>
                    <span class="content__meta__item"><i class="fa fa-user content__meta__icon"></i> <?= $data['DC:CREATOR'] ?></span>
                                    <span class="content__meta__item"><i class="fa fa-tag content__meta__icon"></i> <?= $data['CATEGORY'] ?></span>
                            </div>
                <div class="content__description">
                    <p><img src="<?= $data['IMG'] ?>" alt="" class="content__image"><?= str_split($data['DESCRIPTION'], 200)[0] ?>
								<a href="<?= $data['LINK'] ?>"> <button class="button">selengkapnya</button></a></p>
                </div>
            </div>
        </li>
		<?php endforeach; ?>
    </ul>
	<?php endif; ?>
</div>
