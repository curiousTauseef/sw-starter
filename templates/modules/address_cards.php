<?php if(is_array($layout['address_cards']) && count($layout['address_cards']) > 0): ?>

    <div class="address-cards">

        <?php foreach($layout['address_cards'] as $card): ?>

            <div class="address-cards__card <?php echo $card['css_class'] ?>">

                <div class="address-cards__card__title">
                    <?php echo $card['title'] ?>
                </div>

                <div class="address-cards__card__content">
                    <?php echo $card['content'] ?>
                </div>

                <?php if($card['link_url'] && $card['link_text']): ?>
                    <a class="address-cards__card__link" href="<?php echo $card['link_url'] ?>">
                        <?php echo $card['link_text'] ?>
                    </a>
                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    </div>

<?php endif; ?>
