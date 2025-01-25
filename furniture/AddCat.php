<?php
include("header.php");

?>

   <!-- category Content -->
   <div class="container my-4">
                <h2 class="mb-4">Welcome, Admin</h2>

              <!-- Category Form -->
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Add Category</h5>
            </div>
            <div class="card-body">
                <form >
                    <!-- Category Name -->
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" required >
                    </div>

                    <!-- Category Description -->
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Category Description</label>
                        <textarea class="form-control" id="categoryDescription" rows="4" placeholder="Enter category description" required ></textarea>
                    </div>


                    <!-- Submit Button -->
                    <div class="text-end">
                        <input type="submit" class="btn btn-dark" value="Add Category" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


               
               
            </div>

            
        </div>


<?php
include("footer.php")
?>