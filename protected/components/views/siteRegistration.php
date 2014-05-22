<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Регистрация</h4>
        </div>
            <div class="form">
                <form class="cmxform" id="registrationForm" method="get" action="">
                    <fieldset>
                        <legend>Please provide your name, email address (won't be published) and a comment</legend>
                        <p>
                            <label for="cname">Name (required, at least 2 characters)</label>
                            <input id="cname" name="name" minlength="2" type="text" required/>
                        </p>
                        <p>
                            <label for="cemail">E-Mail (required)</label>
                            <input id="cemail" type="email" name="email" required/>
                        </p>
                        <p>
                            <label for="curl">URL (optional)</label>
                            <input id="curl" type="url" name="url"/>
                        </p>
                        <p>
                            <label for="ccomment">Your comment (required)</label>
                            <textarea id="ccomment" name="comment" required></textarea>
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" />
                        </p>
                        <p>
                            <label for="password_again">Again</label>
                            <input class="left" id="password_again" name="password_again" />
                        </p>
                        <p>
                            <input class="submit" type="submit" value="Submit"/>
                        </p>
                    </fieldset>
                </form>
            </div><!-- form -->
        </div>
    </div>
</div>
