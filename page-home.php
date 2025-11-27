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

<!-- Content Blocks -->
<?php if(have_rows('content_blocks')): ?>
    <?php 
    $block_count = 2;
    while(have_rows('content_blocks')): the_row(); 
    ?>
        <section class="content-block <?php echo get_sub_field('reverse_layout') ? 'reverse' : ''; ?>" id="section<?php echo $block_count; ?>">
            <?php if(get_sub_field('image')): ?>
                <div class="content-block-image" style="background-image: url('<?php echo esc_url(get_sub_field('image')['url']); ?>'); background-size: cover; background-position: center;"></div>
            <?php else: ?>
                <div class="content-block-image"></div>
            <?php endif; ?>
            
            <div class="content-block-text">
                <?php if(get_sub_field('label')): ?>
                    <div class="block-label"><?php the_sub_field('label'); ?></div>
                <?php endif; ?>
                
                <?php if(get_sub_field('title')): ?>
                    <h2 class="block-title"><?php the_sub_field('title'); ?></h2>
                <?php endif; ?>
                
                <?php if(get_sub_field('content')): ?>
                    <div class="block-content"><?php the_sub_field('content'); ?></div>
                <?php endif; ?>
                
                <?php if(get_sub_field('link_url') && get_sub_field('link_text')): ?>
                    <a href="<?php the_sub_field('link_url'); ?>" class="btn-link"><?php the_sub_field('link_text'); ?></a>
                <?php endif; ?>
            </div>
        </section>
    <?php 
    $block_count++;
    endwhile; 
    ?>
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
    
    <?php if(have_rows('card_grid_items')): ?>
        <div class="card-grid masonry">
            <?php while(have_rows('card_grid_items')): the_row(); 
                $size = get_sub_field('card_size'); // large, medium, small
                $size_class = $size ? $size : 'medium';
            ?>
                <div class="card-item <?php echo esc_attr($size_class); ?>">
                    <?php if(get_sub_field('title')): ?>
                        <h3 class="card-title"><?php the_sub_field('title'); ?></h3>
                    <?php endif; ?>
                    
                    <?php if(get_sub_field('content')): ?>
                        <p class="card-text"><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>

<!-- Bottom Card Row -->
<?php if(have_rows('bottom_cards')): ?>
<section class="bottom-card-row" id="section5">
    <?php while(have_rows('bottom_cards')): the_row(); ?>
        <div class="card-with-link">
            <?php if(get_sub_field('title')): ?>
                <h3 class="card-title"><?php the_sub_field('title'); ?></h3>
            <?php endif; ?>
            
            <?php if(get_sub_field('content')): ?>
                <p class="card-text"><?php the_sub_field('content'); ?></p>
            <?php endif; ?>
            
            <?php if(get_sub_field('link_url') && get_sub_field('link_text')): ?>
                <a href="<?php the_sub_field('link_url'); ?>" class="card-link"><?php the_sub_field('link_text'); ?></a>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
</section>
<?php endif; ?>

<!-- Geometric Pattern Section -->
<?php if(get_field('pattern_enable')): ?>
<section class="pattern-section" id="section6">
    <div class="geometric-pattern">
        <?php 
        // Pattern layout definition (6x6 grid)
        $pattern = array(
            array('dark', 'dark', '', '', '', ''),
            array('dark', 'dark', '', 'darker', 'darker', ''),
            array('', '', '', 'darker', 'darker', ''),
            array('', 'dark', 'dark', '', '', 'darker'),
            array('', 'dark', 'dark', '', '', 'darker'),
            array('', '', '', '', '', 'darker'),
        );
        
        foreach($pattern as $row):
            foreach($row as $cell):
        ?>
            <div class="pattern-block <?php echo esc_attr($cell); ?>"></div>
        <?php 
            endforeach;
        endforeach; 
        ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>