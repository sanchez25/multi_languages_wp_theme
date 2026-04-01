<?php
    $offer_link = get_field('offer_link', 'option');
    $banner = get_field('banner');
?>
<?php
    if ($banner) {
?>
<div class="banner wrapper" style="background-image: linear-gradient(135deg, rgba(252, 70, 101, 1), rgba(49, 86, 235, 0.7)), url(<?php echo $banner; ?>);">
    <div class="banner__content">
        <div class="banner__text">
            <span class="banner__text-first">125% + 250 FS</span>
            <span class="banner__text-third"><?= asl()->translate('Sürətli başlanğıc üçün Glory-dən ilk depozitdə'); ?></span>
            <?php if (is_amp()): ?>
            <button class="button content_btn" on="tap:AMP.navigateTo(url='<?php echo $offer_link; ?>')">
                <?php else: ?>
                    <button class="button content_btn" onclick="location.href='<?php echo $offer_link; ?>'">
                <?php endif; ?>
                <?= asl()->translate('Bonus əldə edin'); ?>
            </button>
        </div>
    </div>
</div>
<?php
    }
?>