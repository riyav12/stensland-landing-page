<?php
/**
 * Block Template: Projects Section (Gutenberg)
 */

$section_title = get_field('section_title');
$section_description = get_field('section_description');
$tabs = get_field('tabs');
?>

<section class="projects-section">
    <div class="container">

        <div class="projects-header">
            <?php if ($section_title): ?>
                <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
            <?php endif; ?>

            <?php if ($section_description): ?>
                <p class="projects-description"><?php echo esc_html($section_description); ?></p>
            <?php endif; ?>
        </div>

        <?php if ($tabs): ?>
            <div class="projects-tabs">
                <ul class="tabs-list">
                    <?php foreach ($tabs as $index => $tab): ?>
                        <li class="tab <?php echo $index === 0 ? 'active' : ''; ?>">
                            <?php echo esc_html($tab['tab_title']); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <?php foreach ($tabs as $index => $tab): ?>
                <div class="projects-grid <?php echo $index === 0 ? 'active-grid' : 'hidden-grid'; ?>">
                    <?php if (!empty($tab['projects'])): ?>
                        <?php foreach ($tab['projects'] as $project): ?>
                            <?php
                            $project_image = $project['project_image'];
                            $project_role = $project['project_role'];
                            $project_year_range = $project['project_year_range'];
                            $project_title = $project['project_title'];
                            $project_description = $project['project_description'];
                            $iso_tags = $project['iso_tags'] ?? [];
                            ?>
                            <div class="project-item">
                                <div class="project-image">
                                    <?php if ($project_image): ?>
                                        <img src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_title); ?>">
                                    <?php endif; ?>
                                </div>

                                <div class="project-meta">
                                    <?php if ($project_role || $project_year_range): ?>
                                        <div class="meta-top">
                                            <?php if ($project_role): ?>
                                                <span class="project-role"><strong>Role:</strong> <?php echo esc_html($project_role); ?></span>
                                            <?php endif; ?>

                                            <?php if ($project_year_range): ?>
                                                <span class="project-duration"><?php echo esc_html($project_year_range); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($project_title): ?>
                                        <h3 class="project-title"><?php echo esc_html($project_title); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($project_description): ?>
                                        <p class="project-desc"><?php echo esc_html($project_description); ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($iso_tags)): ?>
                                        <div class="iso-tags">
                                            <?php foreach ($iso_tags as $tag): ?>
                                                <span class="iso-tag"><?php echo esc_html($tag['tag']); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No projects under this tab.</p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
