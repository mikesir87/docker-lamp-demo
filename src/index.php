<?php

require("db.php");

$db = getDb();
$groceryResult = $db->query("SELECT * FROM grocery_list");


?><!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" />
  <title>Grocery List</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Grocery List</a>
      </div>
    </div>
  </nav>


  <div class="container">
    <?php if (isset($_GET['error']) || isset($_GET['success'])) : ?>
      <div class="row">
        <div class="col-sm-12">
          <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-danger">A description is required to add an item!</div>
          <?php endif; ?>
          <?php if (isset($_GET['success'])) : ?>
            <div class="alert alert-success">Your item has been added successfully!</div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="row">
      <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Your Grocery List</h2>
          </div>
          <div class="panel-body">
            <?php if ($groceryResult->num_rows == 0) : ?>
              <p>It looks like you don't have anything yet!</p>
            <?php else : ?>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Creation Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $groceryResult->fetch_object()) : ?>
                    <tr>
                      <td><?php echo $row->id; ?></td>
                      <td><?php echo $row->description; ?></td>
                      <td><?php echo $row->creation_time; ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Add an Item</h2>
          </div>
          <div class="panel-body">
            <form method="post" action="addItem.php">
              <div class="form-group">
                <label class="control-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-xs-12 text-center">
        <hr />
        Served to you by <?php echo gethostname(); ?>
      </div>
    </div>

  </div>
</body>
</html>
