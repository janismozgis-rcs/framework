<div class="container">
    <div class="row">
        <div class="col">
            <h2>Login page</h2>
        </div>
    </div>

    <?php
    if ($errors) {
        echo '<div class="row">';
        echo '  <div class="col">';
        echo '      <div class="alert alert-danger">';
        echo '          <ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '          </ul>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
    }
    ?>

    <form action="?page=login" method="POST">
        <div class="row">
            <div class="col-4">
                <label for="email-input">Email</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="email-input" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="password-input">Password</label>
            </div>
            <div class="col-8">
                <input type="password" class="form-control" id="password-input" name="password">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" value="Log in" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>