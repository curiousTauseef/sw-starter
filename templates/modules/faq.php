<!-- includes/faq.php  -->
<div class="faq">
    <div class="faq__image" style="background-image: url('<?php echo $layout['image']['url'] ?>')"></div>
    <div>
        <h1 class="faq__title">
            <?php echo $layout['title'] ?>
        </h1>
        <?php echo $layout['content'] ?>
        <dl>
            <?php foreach ($layout['faqs'] as $faq_key => $faq_value) { ?>
                <dt><?php echo $faq_value['question'] ?></dt>
                <dd><?php echo $faq_value['answer'] ?></dd>
            <?php } ?>
        </dl>
    </div>
</div>
