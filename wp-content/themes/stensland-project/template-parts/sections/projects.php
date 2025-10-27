<?php
/**
 * Block Template: Projects Section (Gutenberg)
 */

$section_title = get_field('section_title');
$section_description = get_field('section_description');
$tabs = get_field('tabs'); // get all tabs at once
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
                            ?>
                            <div class="project-item">
                                <div class="project-image">
                                    <?php if ($project_image): ?>
                                        <img src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_title); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="project-meta">
                                    <?php if ($project_role): ?>
                                        <p class="project-role"><strong>Role:</strong> <?php echo esc_html($project_role); ?></p>
                                    <?php endif; ?>

                                    <?php if ($project_year_range): ?>
                                        <p class="project-duration" style="margin-top: -41px; margin-left: 302px;">
                                            <?php echo esc_html($project_year_range); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($project_title): ?>
                                        <h3 class="project-title"><?php echo esc_html($project_title); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($project_description): ?>
                                        <p class="project-desc"><?php echo esc_html($project_description); ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($project['iso_tags'])): ?>
                                        <div class="project-tags">
                                            <?php foreach ($project['iso_tags'] as $tag): ?>
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
