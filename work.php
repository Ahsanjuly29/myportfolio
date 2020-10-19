<style>
    .hover-content a{
        background:none;
        color:rgba(170,0,0,0.9);
    }
    .hover-content a:hover{
        background:none;
        color:navy;        
    }
    .item-hover {
        padding: 0px 30px;
        /* opacity:1; */
    }
    img{
        width:100%;
    }
    #string{
        text-align:justify;
    }
    #string a{
        display: contents;
    }
</style>  
<!--====== WORK AREA ======-->
        <div id="work" class="work-area section-padding" style="text-transform:Capitalize;" >
            <div class="container">
                <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-title wow zoomIn" data-wow-delay="0.2s">
                        <span class="title-bg">Works</span>
                       <h2>
                           <span class="first-part">My </span>
                           <span class="second-part">Projects</span>
                          </h2>
                       </div>
                   </div>
               </div> <!--/.row-->
                <div class="row">
                    <ul class="work-list text-center">
                        <li class="filter" data-filter="all">all</li>
                        <?php
                                $fetch_data = "SELECT pro_type FROM projects GROUP BY pro_type";
                                $execute_query = mysqli_query($db,$fetch_data);
                                foreach ($execute_query as $projects) {
                        ?>
                        <li class="filter" data-filter=".<?= $projects['pro_type']?>">
                            <?= $projects['pro_type']?>
                        </li>
                        <?php
                                }
                         ?>
                    </ul>
                </div> <!--/.row-->
                <div class="work-inner">
                <!-- <div class="work-inner"> -->
                    <div class="row">
                        <?php
                                $fetch_data = "SELECT * FROM projects ORDER BY pro_id DESC";
                                $execute_query = mysqli_query($db,$fetch_data);
                                foreach ($execute_query as $projects) {
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 mix <?= $projects['pro_type']?>"> <!-- Single Work -->
                            <div class="single-work" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
                                <img src="assets/img/work/<?= $projects['pro_img']?>"
                                    style=" width:360px !important; height:346px !important" />
                                <div class="item-hover">
                                    <div class="work-table">
                                        <div class="work-tablecell">
                                            <div class="hover-content">
                                                <h4><?= $projects['pro_title']?></h4>
                                                <?php
                                                    $string = $projects['pro_short'];
                                                    if (strlen($string) > 190) {
                                                        // truncate string
                                                        $stringCut = substr($string, 0, 190);
                                                        $endPoint = strrpos($stringCut, ' ');
                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                        $string .= ' ... <span></span>';
                                                    }
                                                ?>
                                                <div id="string"><?= $string; ?></div>
                                                <div class="text-center">
                                                    <a href="<?= $projects['pro_link']?>" style="background:RGBA(24,186,96,0.8); color:white; width: 45%; border-radius: 5%; float:left;" target="_blank">
                                                        <i class="fa fa-chain-broken">Live preview</i>
                                                    </a>
                                                    <a href="details.php?details=<?= $projects['pro_id']?>#details" style="background:RGBA(24,186,96,0.8); color:white; width: 45%; border-radius: 5%; float:right;" target="_blank">
                                                        <i class="fa fa-chain-broken">Read More</i>
                                                    </a>

                                                </div>
                                                <!-- <a href="assets/img/work/<?= $projects['pro_img']?>" class="work-popup"><i class="fa fa-search-plus"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                        ?>
                    </div> <!--/.row-->
                </div>
            </div><!--/.container-->
        </div>
        <!--====== END WORK AREA ======-->