
    <main>
        <h2 class="page-heading">Result Blogs</h2>
            
        <section>

            <?php
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res))
                    {
            ?>
                <div class="card" data-aos="flip-left"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                    <div class="card-image">
                        <a href="blogpost.php">
                            <img src="<?php echo "{$row['image']}" ?>" alt="">
                        </a>
                    </div>

                    <div class="card-description">
                        <a href="blogpost.php">
                            <h3><?php echo "{$row['name']}" ?></h3>
                        </a>
                        <div class="card-meta">
                            Posted by Admin on 15/12/2021 in 
                            <a href="#">Web Dev</a>
                        </div>
                        <p><?php echo "{$row['description']}" ?></p>
                        <a href="blogpost.php" class="btn-readmore">Read More</a>
                    </div>
                </div>
            <?php
                    }
                }
                else{
                    echo "<h1>No Result</h1>";
                }
            ?>

        </section>



    </main>