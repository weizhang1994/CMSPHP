<?php include "includes/admin_header.php" ?>
    
<?php 
   
?>

    <div id="wrapper">

        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to admin
                <small>Author</small>

            </h1>
<?php
    if(isset($_GET['source'])){
        $source = $_GET['source'];
    } else {
        $source = '';
    }
    switch($source) {
            case 'add_post';
            include "includes/add_post.php";
            break;
            case '100';
            echo "NICE 100";
            break;
            case '200';
            echo "NICE 200";
            break;
            
        default:
            include "includes/view_all_posts.php";
            break;
    
    }
           
?>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Title</th>
                <th>Categories</th>
                <th>Status</th>
                <th>Images</th>
                <th>Tags</th>
                <th>Comments</th>
                <th>Date</th>
                
            </tr>
        </thead>
        <tbody>
           
<?php
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_categories_id= $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_images = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment'];
        $post_date = $row['post_date'];
        
        echo "<tr>";
        echo "<td>$post_id</td>";
        echo "<td>$post_author</td>";
        echo "<td>$post_title</td>";
        echo "<td>$post_categories_id</td>";
        echo "<td>$post_status</td>";
        echo "<td><img width=100 src='../images/$post_images' alt='image'> </td>";
        echo "<td>$post_tags</td>";
        echo "<td>$post_comment_count</td>";
        echo "<td>$post_date</td>";
        echo "</tr>";
    }
    
    
    
?>
            <tr>
                <td>10</td>
                <td>wei</td>
                <td>Bootstrap framework</td>
                <td>Bootstrap</td>
                <td>status</td>
                <td>images</td>
                <td>Comments</td>
                <td>Date</td>
                <td>tags</td>
            </tr>
        </tbody>
    </table>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
     
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>