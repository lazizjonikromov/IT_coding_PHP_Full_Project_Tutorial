
    <main>
        <h2 class="page-heading">Blogs</h2>
            
        <section>

            <?php
                while($info=$result->fetch_assoc())
                {
            ?>
                <div class="card" data-aos="flip-left"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                    <div class="card-image">
                        <a href="blogpost.php">
                            <img src="<?php echo "{$info['image']}" ?>" alt="">
                        </a>
                    </div>

                    <div class="card-description">
                        <a href="blogpost.php">
                            <h3><?php echo "{$info['name']}" ?></h3>
                        </a>
                        <div class="card-meta">
                            Posted by Admin on 15/12/2021 in 
                            <a href="#">Web Dev</a>
                        </div>
                        <p><?php echo "{$info['description']}" ?></p>
                        <a href="blogpost.php" class="btn-readmore">Read More</a>
                    </div>
                </div>
            <?php
                }
            ?>

        </section>



    </main>