<div class="container">
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>

            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $post['title']; ?></div>
                <div class="panel-body">
                    <?php echo $post['price'];  ?>
                </div>
            </div>
           
        <?php endforeach; ?>
    <?php endif; ?>
</div>