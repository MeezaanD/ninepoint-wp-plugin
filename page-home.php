<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!-- Hero Section -->
<?php if(get_field('hero_enable')): ?>
<section class="hero-section" id="section1">
    <?php if(get_field('hero_label')): ?>
        <div class="hero-label"><?php the_field('hero_label'); ?></div>
    <?php endif; ?>
    
    <?php if(get_field('hero_title')): ?>
        <h1 class="hero-title"><?php the_field('hero_title'); ?></h1>
    <?php endif; ?>
    
    <?php if(get_field('hero_content')): ?>
        <div class="hero-content"><?php the_field('hero_content'); ?></div>
    <?php endif; ?>
</section>
<?php endif; ?>

<!-- Content Block 1 -->
<?php if(get_field('block1_title')): ?>
<section class="content-block" id="section2">
    <?php if(get_field('block1_image')): ?>
        <div class="content-block-image" style="background-image: url('<?php echo esc_url(get_field('block1_image')['url']); ?>'); background-size: cover; background-position: center;"></div>
    <?php else: ?>
        <div class="content-block-image"></div>
    <?php endif; ?>
    
    <div class="content-block-text">
        <?php if(get_field('block1_label')): ?>
            <div class="block-label"><?php the_field('block1_label'); ?></div>
        <?php endif; ?>
        
        <h2 class="block-title"><?php the_field('block1_title'); ?></h2>
        
        <?php if(get_field('block1_content')): ?>
            <div class="block-content"><?php the_field('block1_content'); ?></div>
        <?php endif; ?>
        
        <?php if(get_field('block1_link_url') && get_field('block1_link_text')): ?>
            <a href="<?php the_field('block1_link_url'); ?>" class="btn-link"><?php the_field('block1_link_text'); ?></a>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- Content Block 2 -->
<?php if(get_field('block2_title')): ?>
<section class="content-block reverse" id="section3">
    <?php if(get_field('block2_image')): ?>
        <div class="content-block-image" style="background-image: url('<?php echo esc_url(get_field('block2_image')['url']); ?>'); background-size: cover; background-position: center;"></div>
    <?php else: ?>
        <div class="content-block-image"></div>
    <?php endif; ?>
    
    <div class="content-block-text">
        <?php if(get_field('block2_label')): ?>
            <div class="block-label"><?php the_field('block2_label'); ?></div>
        <?php endif; ?>
        
        <h2 class="block-title"><?php the_field('block2_title'); ?></h2>
        
        <?php if(get_field('block2_content')): ?>
            <div class="block-content"><?php the_field('block2_content'); ?></div>
        <?php endif; ?>
        
        <?php if(get_field('block2_link_url') && get_field('block2_link_text')): ?>
            <a href="<?php the_field('block2_link_url'); ?>" class="btn-link"><?php the_field('block2_link_text'); ?></a>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- Card Grid Section -->
<?php if(get_field('card_grid_enable')): ?>
<section class="card-grid-section" id="section4">
    <div class="card-grid-header">
        <?php if(get_field('card_grid_dropdown_text')): ?>
            <select class="card-grid-dropdown">
                <option><?php the_field('card_grid_dropdown_text'); ?></option>
            </select>
        <?php endif; ?>
    </div>
    
    <div class="card-grid masonry">
        <?php if(get_field('card1_title')): ?>
        <div class="card-item <?php echo get_field('card1_size') ? get_field('card1_size') : 'medium'; ?>">
            <h3 class="card-title"><?php the_field('card1_title'); ?></h3>
            <?php if(get_field('card1_content')): ?>
                <p class="card-text"><?php the_field('card1_content'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if(get_field('card2_title')): ?>
        <div class="card-item <?php echo get_field('card2_size') ? get_field('card2_size') : 'medium'; ?>">
            <h3 class="card-title"><?php the_field('card2_title'); ?></h3>
            <?php if(get_field('card2_content')): ?>
                <p class="card-text"><?php the_field('card2_content'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if(get_field('card3_title')): ?>
        <div class="card-item <?php echo get_field('card3_size') ? get_field('card3_size') : 'medium'; ?>">
            <h3 class="card-title"><?php the_field('card3_title'); ?></h3>
            <?php if(get_field('card3_content')): ?>
                <p class="card-text"><?php the_field('card3_content'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if(get_field('card4_title')): ?>
        <div class="card-item <?php echo get_field('card4_size') ? get_field('card4_size') : 'medium'; ?>">
            <h3 class="card-title"><?php the_field('card4_title'); ?></h3>
            <?php if(get_field('card4_content')): ?>
                <p class="card-text"><?php the_field('card4_content'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if(get_field('card5_title')): ?>
        <div class="card-item <?php echo get_field('card5_size') ? get_field('card5_size') : 'medium'; ?>">
            <h3 class="card-title"><?php the_field('card5_title'); ?></h3>
            <?php if(get_field('card5_content')): ?>
                <p class="card-text"><?php the_field('card5_content'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- Bottom Card Row -->
<section class="bottom-card-row" id="section5">
    <?php if(get_field('bottom_card1_title')): ?>
    <div class="card-with-link">
        <h3 class="card-title"><?php the_field('bottom_card1_title'); ?></h3>
        <?php if(get_field('bottom_card1_content')): ?>
            <p class="card-text"><?php the_field('bottom_card1_content'); ?></p>
        <?php endif; ?>
        <?php if(get_field('bottom_card1_link_url') && get_field('bottom_card1_link_text')): ?>
            <a href="<?php the_field('bottom_card1_link_url'); ?>" class="card-link"><?php the_field('bottom_card1_link_text'); ?></a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <?php if(get_field('bottom_card2_title')): ?>
    <div class="card-with-link">
        <h3 class="card-title"><?php the_field('bottom_card2_title'); ?></h3>
        <?php if(get_field('bottom_card2_content')): ?>
            <p class="card-text"><?php the_field('bottom_card2_content'); ?></p>
        <?php endif; ?>
        <?php if(get_field('bottom_card2_link_url') && get_field('bottom_card2_link_text')): ?>
            <a href="<?php the_field('bottom_card2_link_url'); ?>" class="card-link"><?php the_field('bottom_card2_link_text'); ?></a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <?php if(get_field('bottom_card3_title')): ?>
    <div class="card-with-link">
        <h3 class="card-title"><?php the_field('bottom_card3_title'); ?></h3>
        <?php if(get_field('bottom_card3_content')): ?>
            <p class="card-text"><?php the_field('bottom_card3_content'); ?></p>
        <?php endif; ?>
        <?php if(get_field('bottom_card3_link_url') && get_field('bottom_card3_link_text')): ?>
            <a href="<?php the_field('bottom_card3_link_url'); ?>" class="card-link"><?php the_field('bottom_card3_link_text'); ?></a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</section>

<!-- Diagonal Pattern Section -->
<?php if(get_field('pattern_enable')): ?>
<section class="diagonal-section" id="section6">
    <div class="background-container">
        <div class="square-container square1"></div>
        <div class="square-container square2"></div>
        <div class="square-container square3"></div>
        <div class="square-container square4"></div>
        <div class="square-container square5"></div>
        <div class="square-container square6"></div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>