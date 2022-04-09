<?php
	require_once('../../../../../db/dbh.php');
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container">
        <div class="main_area">
				<?php
					if(isset($_POST["query"])){
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$query = "SELECT * FROM `job_post` WHERE job_position LIKE '%" . $search . "%' OR tag LIKE '%" . $search . "%' OR title LIKE '%" . $search . "%' OR company_name LIKE '%" . $search . "%' OR state_region LIKE '%" . $search . "%' OR job_type LIKE '%" . $search . "%';";
						$result = mysqli_query($conn, $query); 
						$count = $result->num_rows;      
						if($count>0){
							while($rd = mysqli_fetch_assoc($result)){
								$title = $rd['title'];
								$company_name = $rd['company_name'];
								$state_region = $rd['state_region'];
								$job_type = $rd['job_type'];
								$tag = $rd['tag'];
								$job_position = $rd['job_position'];
                                $post_id = $rd['post_id'];

				?>
            <div class="job_area">
                <div class="job_title">
                    <h2><?php echo $title;?></h2>
                </div>
                <div class="company_name">
                    <h5><?php echo $company_name;?></h5>
                </div>
                <div class="location">
                    <div class="icon">

                    </div>
                    <p><?php echo $state_region;?></p>
                </div>
                <div class="job_type">
                    <p><?php echo $job_type;?></p>
                </div>
                <div class="tag">
                    <p><?php echo $tag;?></p>
                </div>
                <div class="job_position">
                    <p><?php echo $job_position;?></p>
                </div>
                <div class="view">
                    <a href="../../../jobs/index.php?post_id=<?php echo $post_id; ?>">
                        <button>view</button>
                    </a>
                </div>
            </div>
			<?php
						}
					}else{
						echo '<b>No Data Found</b>';
					}
					
				}else{
					$query1 = "SELECT * FROM `job_post`;";
					$result2 = mysqli_query($conn, $query1); 
					$count2 = $result2->num_rows;      
					if($count2>0){
						while($rd1 = mysqli_fetch_assoc($result2)){
							$title = $rd1['title'];
							$company_name = $rd1['company_name'];
							$state_region = $rd1['state_region'];
							$job_type = $rd1['job_type'];
							$tag = $rd1['tag'];
							$job_position = $rd1['job_position'];
                            $post_id = $rd1['post_id'];
			?>
            <div class="job_area">
				<div class="job_title">
                    <h2><?php echo $title;?></h2>
                </div>
                <div class="company_name">
                    <h5><?php echo $company_name;?></h5>
                </div>
                <div class="location">
                    <div class="icon">

                    </div>
                    <p><?php echo $state_region;?></p>
                </div>
                <div class="job_type">
                    <p><?php echo $job_type;?></p>
                </div>
                <div class="tag">
                    <p><?php echo $tag;?></p>
                </div>
                <div class="job_position">
                    <p><?php echo $job_position;?></p>
                </div>
                <div class="view">
                    <a href="../jobs/index.php?post_id=<?php echo $post_id; ?>">
                        <button>view</button>
                    </a>
                </div>
            </div>
			<?php
							
						}
					}
			
				}
			?>
        </div>
    </div>
</body>
</html>





