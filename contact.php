<?php
    session_start();
    $msg=isset($_SESSION['msg'])?$_SESSION['msg']:[];
    $errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
    $fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
    $token=isset($_SESSION['token'])?$_SESSION['token']:[];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form Cotnact</title>
  </head>
  <body>

    <div class="container">
    <div class="card">
        <div class="card-body">
            
            <?php if(!empty($msg)):?>
              <?php echo '<div class="alert alert-success">'. $msg .'</div>' ?>
            <?php endif; ?>

            <?php if(!empty($errors)):?>
            <div class="panel">
                <ul><li class="alert alert-danger"><?php echo implode('</li> <li class="alert alert-danger">', $errors)?></li></ul>
            </div>
        <?php endif; ?>

        <form action="mail.php" method="POST">
          <input id="token" name="token" type="hidden" value="<?php echo $token ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"
            <?php echo isset ($fields['name'])? 'value="'.($fields['name']).'"':''?>
            name="name" id="name" aria-describedby="name">
          </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" id="email"
            <?php echo isset ($fields['email'])? 'value="'.($fields['email']).'"':''?> aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone"
            <?php echo isset ($fields['phone'])? 'value="'.($fields['phone']).'"':''?> class="form-control" id="phone">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea rows="4" name="message" class="form-control" id="message">
          <?php echo isset ($fields['message'])? ($fields['message']) :''?>
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
        </div>
      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
unset($_SESSION['msg']);
unset($_SESSION['token']);
?>