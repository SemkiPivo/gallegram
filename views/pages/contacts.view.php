<?php
use App\Application\Views\View;

View::component('header', ["title" => $title]);
?>

<div class="mx-5">
    <div class="my-5">
        <div class="row">
            <h1>
                <span class="badge rounded-pill text-bg-primary">
                    Contacts Page
                </span>
            </h1>
        </div>
    </div>

    <form action="/php-framework/contact" method="post" class="form">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="test@test.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="Message subject">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary px-5">Send</button>
    </form>
</div>


<?php
include __DIR__ . "/../components/footer.view.php";
?>